<?php

namespace GelatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use GelatoBundle\Entity\Gelateria;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GelatoBundle\Form\GelateriaType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GelatoBundle:Default:index.html.twig');
    }

    public function utenteAction()
    {
        return $this->render('GelatoBundle:Default:utente.html.twig');
    }

    public function amministratoreAction(Request $request)
    {
        $gelateria = new Gelateria();

        $form = $this->createForm(GelateriaType::class, $gelateria);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $gelateria = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($gelateria);
            $em->flush();
            $this->addFlash(
                'notice',
                'Gelateria creata con successo'
            );
            //return $this->redirectToRoute('_create');
        }

        return $this->render('GelatoBundle:Default:amministratore.html.twig', array(
            'form' => $form->createView(),
        ));
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
