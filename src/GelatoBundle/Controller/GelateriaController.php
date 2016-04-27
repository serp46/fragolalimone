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
         * @Route("/amministratore/create", name="create")
         */
        public function createAction(Request $request)
        {
            $gelateria = new Gelateria();

            $form = $this->createForm(GelateriaType::class, $gelateria);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $gelateria = $form->getData();

                // Get Data
                $em = $this->getDoctrine()->getManager();

                $em->persist($gelateria);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Gelateria creata con successo'
                );
            }

            $gelaterie = $this->getDoctrine()->getRepository('GelatoBundle:Gelateria')->findAll();

            return $this->render('GelatoBundle:Default:amministratore.html.twig', array(
                'form' => $form->createView(),
                'elenco' => $gelaterie,
            ));
        }

        /**
         * @Route("/gelateria/{id}/edit", name="edit")
         */
        public function editAction(Request $request)
        {
            $gelateria = $this->getDoctrine()->getRepository('GelatoBundle:Gelateria')->find($request->get('id'));
            if (!$gelateria) {
                throw new NotFoundHttpException();
            }
            $form = $this->createForm(GelateriaFormType::class, $gelateria);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // Get Data
                $gelateria = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($gelateria);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Gelateria modificata con successo'
                );
                return $this->redirectToRoute('_editgelateria');
            }
            return $this->render('GelatoBundle:Gelateria:editgel.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        /**
         * @Route("/gelateria/{id}/edit", name="delete")
         */
        public function deleteAction()
        {
            return $this->render('GelatoBundle:Gelateria:delete.html.twig', array(
            // ...
        ));
        }

}
