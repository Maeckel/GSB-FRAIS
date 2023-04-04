<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\modeles\ModeleGSB;

class ComptableController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('comptable/index.html.twig', [
            'controller_name' => 'ComptableController',
        ]);
    }

    public function Authentification(Request $request)
    {
        $login = $_POST[ "login" ] ;
	    $mdp = $_POST[ "mdp" ] ;
	
	    $Co = $this -> getDoctrine()
                    -> getRepository('App\Entity\Comptable') ;

        $comptable = $Co -> findOneBy(array('login' => $login , 'mdp' => $mdp));
	
	    if( $comptable !== null ){

            $session = $request->getSession();

		    $session->set('id' , $comptable->getId()) ;
		    $session->set('nom' , $comptable->getNom()) ;
		    $session->set('prenom' , $comptable->getPrenom()) ;
		
		    return $this->render('comptable/espace.html.twig', array('comptable' => $comptable) );
	    }
	    else {
	        $erreur = null;

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		        $erreur = 'EMail ou mot de passe incorrect.' ;
		    }

		   return $this->render('comptable/index.html.twig', ['erreur' => $erreur]);
	    }

    }

    public function Valider()
    {
        session_start();
        
        $Co = $this -> getDoctrine()
                   -> getRepository('App\Entity\Visiteur') ;


       $visiteurs = $Co -> findAll();


       $date = date('Y');
       $i = 0;
       $erreur = null;
       $fiche = null;
       $Month = date('m/Y');
       $annees = array($date);


       while($i != 4){

           $i =$i + 1;
           $date = $date - 1 ;
           array_push($annees , $date );

       }


       if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['Refuser'])) {

                $Id = $_POST['Refuser'];

                $Co2 = $this -> getDoctrine()
                             -> getRepository('App\Entity\LigneFraisHorsForfait') ;
                $FHF = $Co2 -> findOneBy(array('id' => $Id));

                $Libelle = "REFUSE : " . $FHF->getLibelle();
                ModeleGSB::Refuser($Id , $Libelle );

                $erreur = "Modification prise en compte !";

                return $this->render('comptable/valider.html.twig', ['visiteurs' => $visiteurs, 'annees' => $annees, 'fiche' => $fiche, 'erreur' => $erreur]);
            }

           $Visiteur = $_POST[ "Visiteur" ] ;
           $Annee = $_POST[ "Annee" ] ;
           $Mois = $_POST[ "Mois" ] ;


           $choix = $Mois.'/'.$Annee ;


           $Co = $this -> getDoctrine()
                       -> getRepository('App\Entity\FicheFrais') ;
           $fiche = $Co -> findOneBy(array('id' => $choix , 'visiteur' => $Visiteur));


           if($fiche == null or $fiche->getId() == $Month){


               $fiche = null;
               $erreur = "Pas de fiche frais pour ce visiteur ce mois";
           }


           return $this->render('comptable/valider.html.twig', ['visiteurs' => $visiteurs, 'annees' => $annees, 'fiche' => $fiche, 'erreur' => $erreur]);

       }

       return $this->render('comptable/valider.html.twig', ['visiteurs' => $visiteurs, 'annees' => $annees, 'fiche' => $fiche, 'erreur' => $erreur]);
    }

    public function Actualiser($Visiteur , $FicheFrais , $FraisForfait)
    {
        session_start();

        $erreur = null;

        $Co = $this -> getDoctrine()
					    -> getRepository('App\Entity\LigneFraisForfait') ;
        $frais = $Co -> findOneBy(array('Visiteur' => $Visiteur, 'Fichefrais' => $FicheFrais , 'Fraisforfait' => $FraisForfait ));

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                $Quantite = $_POST[ "Quantite" ] ;

                if($Quantite == null){
                    $erreur = "Quantite non saisie !";
                }
                else{
                    ModeleGSB::Update( $Visiteur , $FicheFrais , $FraisForfait , $Quantite );

                    $erreur = "Modification prise en compte !";

                    return $this->render('comptable/actualiser.html.twig', [ 'frais' => $frais, 'erreur' => $erreur ]);
                }

                return $this->render('comptable/actualiser.html.twig', [ 'frais' => $frais, 'erreur' => $erreur ]);
            }

        return $this->render('comptable/actualiser.html.twig', ['frais' => $frais, 'erreur' => $erreur]);
    }

    public function Reporter($Visiteur , $FicheFrais , $FraisHorsForfait)
    {
        session_start();

        $Co = $this -> getDoctrine()
					-> getRepository('App\Entity\LigneFraisHorsForfait') ;
        $frais = $Co -> findOneBy(array('Visiteur' => $Visiteur, 'Fichefrais' => $FicheFrais , 'id' => $FraisHorsForfait ));

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $Libelle = $_POST[ "Libelle" ] ;
            $Date = $_POST[ "date" ] ;
            $Montant = $_POST[ "montant" ] ;
            $date = date('Y-m-d');
            $Month = str_pad(date('m')+ 1, 2, '0', STR_PAD_LEFT) . "/" . date('Y');

             $Co2 = $this -> getDoctrine()
					     -> getRepository('App\Entity\FicheFrais') ;
             $fiche = $Co2 -> findOneBy(array('visiteur' => $Visiteur, 'id' => $Month));

             if($fiche == null){
                ModeleGSB::Initialiser( $Visiteur , $Month , $date );
                $Co2 = $this -> getDoctrine()
					         -> getRepository('App\Entity\FicheFrais') ;
                $fiche = $Co2 -> findOneBy(array('visiteur' => $Visiteur, 'id' => $Month));
             }

             $idLigne = $FraisHorsForfait ;
             ModeleGSB::Delete( $idLigne ) ;

             $idVisiteur = $Visiteur ;
             $idFichefrais = $fiche->getId() ;
             ModeleGSB::AjouterFraisHorsForfait( $idVisiteur , $idFichefrais , $Libelle , $Date , $Montant ) ;

             return $this->redirectToRoute('app_valider');

        }

        return $this->render('comptable/reporter.html.twig', ['frais' => $frais ]);
    }

    public function Validée($Visiteur , $FicheFrais)
    {
        session_start();

        $erreur = null;
        $DateModif = date('Y-m-d');

        $Co = $this -> getDoctrine()
					-> getRepository('App\Entity\FicheFrais') ;
        $fiche = $Co -> findOneBy(array('visiteur' => $Visiteur, 'id' => $FicheFrais));

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $Etat = "VA";
            ModeleGSB::ModifierEtat($Visiteur , $FicheFrais , $DateModif , $Etat);

            $erreur = "Etat de la fiche de frais actualiser !";

        }

        return $this->render('comptable/validée.html.twig', ['fiche' => $fiche, 'erreur' => $erreur ]);
    }

    public function Suivre()
    {
        session_start();

        $Co = $this -> getDoctrine()
                   -> getRepository('App\Entity\Visiteur') ;


       $visiteurs = $Co -> findAll();


       $date = date('Y');
       $i = 0;
       $erreur = null;
       $fiche = null;
       $Month = date('m/Y');
       $annees = array($date);


       while($i != 4){

           $i =$i + 1;
           $date = $date - 1 ;
           array_push($annees , $date );

       }

       if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          if(isset($_POST['Suivre'])) {

             $Visiteur = $this->get('session')->get('visiteur');
             $FicheFrais = $this->get('session')->get('fiche');
             $DateModif = date('Y-m-d');
             $Etat = $_POST['Etat'];

             ModeleGSB::ModifierEtat( $Visiteur , $FicheFrais , $DateModif , $Etat );

             return $this->render('comptable/suivre.html.twig', ['visiteurs' => $visiteurs, 'annees' => $annees, 'fiche' => $fiche, 'erreur' => $erreur]);
          }

           $Visiteur = $_POST[ "Visiteur" ] ;
           $Annee = $_POST[ "Annee" ] ;
           $Mois = $_POST[ "Mois" ] ;

           $choix = $Mois.'/'.$Annee ;

           $Co = $this -> getDoctrine()
                       -> getRepository('App\Entity\FicheFrais') ;
           $fiche = $Co -> findOneBy(array('id' => $choix , 'visiteur' => $Visiteur));

           $this->get('session')->set('visiteur' , $fiche->getVisiteur()->getId()) ;
		   $this->get('session')->set('fiche' , $fiche->getId()) ;

           if($fiche == null or $fiche->getId() == $Month){


               $fiche = null;
               $erreur = "Pas de fiche frais pour ce visiteur ce mois";
           }
       }

        return $this->render('comptable/suivre.html.twig', ['visiteurs' => $visiteurs, 'annees' => $annees, 'fiche' => $fiche, 'erreur' => $erreur]);
    }

    public function Espace()
    {
        session_start();
        
        return $this->render('comptable/espace.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Deconnecter()
    {
        session_start();
        session_destroy();
        
        return $this->redirectToRoute( 'app_comptable' ) ;
        
    }
};
