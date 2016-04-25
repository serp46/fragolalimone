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
         * @Route("/amministratore/list", name="elenco_gelaterie")
         */
        public function listAction()
        {
            $elenco = $this->getDoctrine()
                ->getRepository('GelatoBundle:Gelateria')
                ->findAll();

            return $this->render('GelatoBundle:Gelateria:list.html.twig', array(
                'elenco' => $elenco
            ));
            //return $this->redirectToRoute('elenco_gelaterie');
        }
        

        /**
         * @Route("/amministratore/create", name="_creategelateria")
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
                // Get Data
                $gelateria = $form['name']->getData();
                $gelateria = $form['city']->getData();
                $gelateria = $form['address']->getData();
                $gelateria = $form['phone']->getData();
                $gelateria = $form['monday']->getData();
                $gelateria = $form['tuesday']->getData();
                $gelateria = $form['wednesday']->getData();
                $gelateria = $form['thursday']->getData();
                $gelateria = $form['friday']->getData();
                $gelateria = $form['saturday']->getData();
                $gelateria = $form['sunday']->getData();
                $gelateria = $form['gusti']->getData();

                $gelateria->setName($name);
                $gelateria->setCity($city);
                $gelateria->setAddress($address);
                $gelateria->setPhone($phone);
                $gelateria->setMonday($monday);
                $gelateria->setTuesday($tuesday);
                $gelateria->setWednesday($wednesday);
                $gelateria->setThursday($thursday);
                $gelateria->setFriday($friday);
                $gelateria->setSaturday($saturday);
                $gelateria->setSunday($sunday);
                $gelateria->setGusti($gusti);

                $em = $this->getDoctrine()->getManager();

                $em->persist($gelateria);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Gelateria creata con successo'
                );
                return $this->redirectToRoute('elenco_gelaterie');
            }
            return $this->render('GelatoBundle:Gelateria:create.html.twig', array(
                'form' => $form->createView()
            ));
        }

        /**
         * @Route("/gelateria/{id}/edit", name="_editgelateria")
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

        public function deleteAction()
        {
            return $this->render('GelatoBundle:Gelateria:delete.html.twig', array(
            // ...
        ));
        }

}
