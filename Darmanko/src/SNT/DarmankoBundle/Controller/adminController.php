<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SNT\DarmankoBundle\Form\PaiementType;
use SNT\DarmankoBundle\Entity\Paiement;
use SNT\DarmankoBundle\Entity\Contrat;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class adminController extends Controller
{
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->findBy(array('etat' => 0));

        return $this->render('SNTDarmankoBundle:admin:lister.html.twig', array(
            'reservations' => $reservation,
        ));
    }

    public function biensAction()
    {
        $em = $this->getDoctrine()->getManager();
        $biens = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();

        return $this->render('SNTDarmankoBundle:admin:biens.html.twig', array(
            'biens' => $biens,
        ));
    }

    public function adminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $biens = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();

        return $this->render('SNTDarmankoBundle:admin:admin.html.twig', array(
            'biens' => $biens,
        ));
    }

    public function detailClientAction($id)
    {
        $em = $this
        ->getDoctrine()
        ->getManager();

        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->find($id);

        return $this->render('SNTDarmankoBundle:admin:detailClient.html.twig', array(
            'reservations' => $reservation,
        ));
    }

    public function dcontratAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $paiement = new Paiement();
        $form = $this->createForm(PaiementType::class, $paiement);
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->find($id);

        $client = $reservation->getClient();
        $bien = $reservation->getBien();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            //Ajout du contrat
            $clientC = $reservation->getClient();
            $bienC = $reservation->getBien();
            $contrat = new Contrat();
            $contrat->setCaution($bien->getPrixLocation())
            ->setDateContrat(new \DateTime())
            ->setDuree('2 mois')
            ->setClient($clientC)
            ->setBien($bienC);
            $em->persist($contrat);

            $paiement->setDatePaiement(new \DateTime())
            ->setContrat($contrat);
            $em->persist($paiement);

            $bienC->setEtat(0);
            $reservation->setEtat(1);

            $em->flush();

            return $this->render('SNTDarmankoBundle:admin:AfficherContrat.html.twig', array(
                'reservation' => $reservation,
            ));
        }

        return $this->render('SNTDarmankoBundle:admin:dcontrat.html.twig', array(
            'reservations' => $reservation,
            'client' => $client,
            'bien' => $bien,
            'form' => $form->createView(),
        ));
    }

    public function contratAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->find($id);

        $snapy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('SNTDarmankoBundle:admin:contrat.html.twig', array(
            'reservation' => $reservation,
        ));

        return new Response(
            $snapy->getOutputFromHtml($html), 200, array(
                'content-Type' => 'application/pdf',
                'content-Disposition' => 'ineline; filename = contrat.pdf',
            )
        );
    }

    public function AfficherContratAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->find($id);

        return $this->render('SNTDarmankoBundle:admin:AfficherContrat.html.twig', array(
            'reservation' => $reservation,
        ));
    }
}
