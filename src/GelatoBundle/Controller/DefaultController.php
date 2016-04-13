<?php

namespace GelatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GelatoBundle:Default:index.html.twig');
    }

    public function profiloAction()
    {
        return $this->render('GelatoBundle:Default:profilo.html.twig');
    }

    public function utenteAction()
    {
        return $this->render('GelatoBundle:Default:utente.html.twig');
    }

    public function amministratoreAction()
    {
        return $this->render('GelatoBundle:Default:amministratore.html.twig');
    }

    public function contattiAction()
    {
        return $this->render('GelatoBundle:Default:contatti.html.twig');
    }

    public function risultatiAction()
    {
        return $this->render('GelatoBundle:Default:risultati.html.twig');
    }

    public function risultatirootAction()
    {
        return $this->render('GelatoBundle:Default:risultatiroot.html.twig');
    }
    public function registrazioneAction()
    {
        return $this->render('GelatoBundle:Default:registrazione.html.twig');
    }


}
