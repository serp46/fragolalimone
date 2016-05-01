<?php

namespace GelatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GelatoBundle\Form\GelateriaType;
use GelatoBundle\Entity\Gelateria;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $gusti=$this->getDoctrine()->getRepository('GelatoBundle:Gusto')->findAll();
        return $this->render('GelatoBundle:Default:index.html.twig', [
          'gusti'=>$gusti
        ]);

        return $this->render('GelatoBundle:Default:index.html.twig');
    }

    public function filtroProvincieAction(Request $request)
    {
        $provincie=$this->getDoctrine()->getRepository('GelatoBundle:Provincia')->findAll();
        return $this->render('GelatoBundle:Default:index_provincie.html.twig', array(
              'provincie'=>$provincie
        ));
    }
    
    public function filtroCittaAction(Request $request)
    {
        $citta=$this->getDoctrine()->getRepository('GelatoBundle:Citta')->findByIdProvincia($request->get('id'));
        return $this->render('GelatoBundle:Default:index_citta.html.twig', array(
              'citta'=>$citta
        ));
    }

    public function searchAction(Request $request)
    {
      $gusti=$this->getDoctrine()->getRepository('GelatoBundle:Gusto')->findAll($request->get('id'));
      //raccogliamo i dati della ricerca provenienti dalla home per registrarla
      $em=$this->getDoctrine()->getManager();
      //controlliamo il primo campo gusto
        for($i=1;$i<=3;$i++)
        {
          if($request->request->get("gusto$i")!=0){
            //raccogliamo i dati della prima ricerca
            $data=new \DateTime();
            $cittaRicerca=$this->getDoctrine()->getRepository('GelatoBundle:Citta')->find($request->get('city'));
            $gustoRicerca=$this->getDoctrine()->getRepository('GelatoBundle:Gusto')->find($request->get("gusto$i"));
            $utenteRicerca=null;
            //se c'è un utente loggato lo inseriamo
            if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
              $utenteRicerca = $this->container->get('security.token_storage')->getToken()->getUser();
            }
            //inseriamo i dati della prima ricerca
            $ricerca=new Ricerca();
            $ricerca->setIdCitta($cittaRicerca);
            $ricerca->setIdUtente($utenteRicerca);
            $ricerca->setIdGusto($gustoRicerca);
            $em->persist($ricerca);
            $em->flush();
          }}
          //RICERCA VERA E PROPRIA
          //raccolgo tutti i dati provenienti dal form
          $cittaCercata=$request->request->get('city');
          $gusto1=$request->request->get('gusto1');
          $gusto2=$request->request->get('gusto2');
          $gusto3=$request->request->get('gusto3');
          /*
          APPUNTO JOIN SQL
          $sql="SELECT ge
          FROM FrontEndBundle:Gelateria ge
          INNER JOIN gelateria_gusti gg ON ge.id = gg.gelateria_id
          INNER JOIN gusto gu ON gu.id = gg.gusto_id
          WHERE ge.id_citta = $cittaCercata ";
          QUI ANDREBBERO TUTTE LE COSE OPZIONALI
          */
          //costruiamo la query DQL in maniera dinamica
          $dql="SELECT Gelateria.name
          FROM GelatoBundle\Entity\Gelateria
          JOIN Gusto.name
          WHERE Gelateria.idCitta = $cittaCercata ";
          //se sono indicati i gusti controlliamo
          if($gusto1 !== 0) $dql.= " AND Gelateria.id=$gusto1 ";
          if($gusto2 !== 0) $dql.= " AND Gelateria.id=$gusto2 ";
          if($gusto3 !== 0) $dql.= " AND Gelateria.id=$gusto3 ";
          //ordiniamo i risultati in ordine alfabetico sul nome delle gelaterie
          $dql.="ORDER BY Gelateria.name DESC";
          $query=$em->createQuery($dql);
          $gelaterieTrovate=$query->getResult();
          var_dump($dql);
          var_dump($gelaterieTrovate);
      return $this->render('GelatoBundle:Default:search.html.twig', array(
        'gusti'=>$gusti, //per la tendina
        'gelaterieTrovate'=>$gelaterieTrovate
      ));
    }

    public function filtroCercaProvincieAction(Request $request)
    {
        $provincie=$this->getDoctrine()->getRepository('GelatoBundle:Provincia')->findAll($request->get('id'));
        return $this->render('GelatoBundle:Default:cerca_provincie.html.twig', array(
              'provincie'=>$provincie
        ));
    }
    public function filtroCercaCittaAction(Request $request)
    {
        $citta=$this->getDoctrine()->getRepository('GelatoBundle:Citta')->findByIdProvincia($request->get('id'));
        return $this->render('GelatoBundle:Default:cerca_citta.html.twig', array(
              'cities'=>$citta
        ));
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
