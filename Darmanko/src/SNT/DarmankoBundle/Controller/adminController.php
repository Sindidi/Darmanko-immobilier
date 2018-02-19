<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->findAll();

        return $this->render('SNTDarmankoBundle:admin:lister.html.twig', array(
            'reservations' => $reservation,
        ));
    }
}
