<?php

namespace GelatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GelatoBundle\Entity\Gelateria;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GelatoBundle\Form\GelateriaType;


class GelateriaController extends Controller
{
    /**
         * @Route("/newgelateria", name="_creategelateria")
         */
        public function createAction(Request $request)
        {
            $gelateria = new Gelateria();
            if (!$gelateria) {
                throw new NotFoundHttpException();
            }
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
            return $this->render('GelatoBundle:Gelateria:create.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        /**
         * @Route("/gelateria/{id}/edit", name="_editgelateria")
         */
        public function editAction(Request $request)
        {
            $gelateria = $this->getDoctrine()->getRepository('FrontBundle:Gelateria')->find($request->get('id'));
            if (!$gelateria) {
                throw new NotFoundHttpException();
            }
            $form = $this->createForm(GelateriaFormType::class, $gelateria);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // Salvo cose.
                $gelateria = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($gelateria);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Gelateria modificata con successo'
                );
                return $this->redirectToRoute('_rotta');
            }
            return $this->render('GelatoBundle:Gelateria:editgel.html.twig', array(
                'form' => $form->createView(),
            ));
        }

    public function deleteAction()
    {
        return $this->render('GelatoBundle:Gelateria:delete.html.twig', array(
            // ...
        ));
    }


}
