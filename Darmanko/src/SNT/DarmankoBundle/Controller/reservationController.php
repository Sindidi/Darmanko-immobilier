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
    public function listAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();

        if ($req->isMethod('POST')) {
            if ($_POST['localite'] == '' && $_POST['type'] == '') {
                $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
            } else {
                $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->search($_POST['localite'], $_POST['type']);
            }
        } else {
            $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
        }
        $listType = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();
        $listLocalite = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();

        return $this->render('SNTDarmankoBundle:reservation:list.html.twig', array(
        'biens' => $listbien, 'types' => $listType, 'localites' => $listLocalite,
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
                $user = $em->getRepository('SNTDarmankoBundle:Client')
                ->findBy(['email' => $_POST['login'], 'motdepasse' => $_POST['password']]);
                if ($user) {
                    $reserv = new Reservation();
                    $reserv->setDateReservation(new \DateTime());
                    $reserv->setEtat(0);
                    $reserv->setClient($user);
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
}
