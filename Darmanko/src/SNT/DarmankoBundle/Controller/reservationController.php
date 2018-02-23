<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SNT\DarmankoBundle\Entity\Bien;
use SNT\DarmankoBundle\Entity\Localite;
use SNT\DarmankoBundle\Entity\TypeBien;
use SNT\DarmankoBundle\Entity\Client;
use SNT\DarmankoBundle\Entity\Reservation;
use SNT\DarmankoBundle\Form\ClientType;

class reservationController extends Controller
{
    public function listAction(Request $req, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            if ($_POST['localite'] == '' && $_POST['type'] == '' && $_POST['max'] == '') {
                $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
            } else {
                $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->search($_POST['localite'], $_POST['type'], $_POST['max']);
            }
        } else {
            $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
        }
        $listType = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();
        $listLocalite = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();

        //Les biens qui feront l'objet de slide

        $bienSlide = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listbien,
            $req->query->getInt('page', 1),
            $req->query->getInt('limit', 3)
        );

        return $this->render('SNTDarmankoBundle:reservation:list.html.twig', array(
        'biens' => $result, 'types' => $listType, 'localites' => $listLocalite, 'bienSlide' => $bienSlide,
        ));
    }

    public function detailAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->find($id);
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        if ($request->isMethod('POST')) {
            if (isset($_POST['submit'])) {
                $client = $em->getRepository('SNTDarmankoBundle:Client')
                ->findBy(['email' => $_POST['login'], 'motdepasse' => $_POST['password']]);
                if ($client) {
                    $reserv = new Reservation();
                    $reserv->setDateReservation(new \DateTime());
                    $reserv->setEtat(0);
                    $reserv->setClient($client[0]);
                    $reserv->setBien($listbien);
                    $em->persist($reserv);
                    $em->flush();

                    return $this->render('SNTDarmankoBundle:reservation:confirm.html.twig');
                }
            } else {
                $form->HandleRequest($request);
                if ($form->isValid()) {
                    $em->persist($client);

                    $reserv = new Reservation();
                    $reserv->setDateReservation(new \DateTime());
                    $reserv->setEtat(0);
                    $reserv->setClient($client);
                    $reserv->setBien($listbien);
                    $em->persist($reserv);
                    $em->flush();
                }

                return $this->render('SNTDarmankoBundle:reservation:confirm.html.twig');
            }
        }

        return $this->render('SNTDarmankoBundle:reservation:detail.html.twig', array(
            'biens' => $listbien, 'form' => $form->createView(),
        ));
    }

    /*
    *@Route(/confirm)
    */

    public function confirmAction()
    {
        return $this->render('SNTDarmankoBundle:reservation:confirm.html.twig', array());
    }

    public function testAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('SNTDarmankoBundle:Bien');
        $biens = $bienRepo->findBiens(4, 20, 500000);
        // var_dump($biens);
        echo count($biens);
    }
}
