<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
