<?php

namespace GelatoBundle\Controller;

use GelatoBundle\Entity\Gusto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GustiController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
    	$gusti = $this->getDoctrine()
    	    ->getRepository('GelatoBundle:Gusto')
    	    ->findAll();

        return $this->render('GelatoBundle:Gusti:list.html.twig', array(
            'gusti' => $gusti
        ));
    }

}
