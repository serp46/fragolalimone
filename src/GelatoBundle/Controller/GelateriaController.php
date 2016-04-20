<?php

namespace GelatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GelateriaController extends Controller
{
    public function createAction()
    {
        return $this->render('GelatoBundle:Gelateria:create.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('GelatoBundle:Gelateria:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('GelatoBundle:Gelateria:delete.html.twig', array(
            // ...
        ));
    }

}
