<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\modeles\ModeleGSB;
use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;
use App\Entity\Visiteur;

class VisiteurController extends AbstractController
{

    public function index(): Response
    {

        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Authentification(Request $request)
    {
        $login = $_POST[ "login" ] ;
	    $mdp = $_POST[ "mdp" ] ;
	
	    $Co = $this -> getDoctrine() 
                    -> getRepository('App\Entity\Visiteur') ;

        $visiteur = $Co -> findOneBy(array('login' => $login , 'mdp' => $mdp));
	
	    if( $visiteur !== null ){

            $session = $request->getSession();

		    $session->set('id' , $visiteur->getId()) ;
		    $session->set('nom' , $visiteur->getNom()) ; 
		    $session->set('prenom' , $visiteur->getPrenom()) ; 

            //$login = $session->get('login');
            //$mdp = $session->get('mdp');
            
		    return $this->redirectToRoute('app_espace_visiteur', array('visiteur' => $visiteur) );
	    }
	    else {
            $erreur = null;

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		        $erreur = 'EMail ou mot de passe incorrect.' ;

            }
            
            return $this->render('visiteur/index.html.twig', array('erreur' => $erreur));
	    }

    }

    public function Consulter(Request $request)
    {
        session_start();

        $idVisiteur = $this->get('session')->get('id');
        $Year = date('Y');
        $Month = date('m/Y');

        $Co = $this -> getDoctrine() 
					-> getRepository('App\Entity\FicheFrais') ;
        $mois = $Co -> Mois($idVisiteur , $Year);

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $choix = $_POST[ "Mois" ] ;

            $fiche = $Co -> findOneBy(array('id' => $choix , 'visiteur' => $idVisiteur));

            $Co2 = $this -> getDoctrine() 
					    -> getRepository('App\Entity\LigneFraisForfait') ;
            $frais = $Co2 -> findBy(array('Visiteur' => $idVisiteur, 'Fichefrais' => $choix ));

            return $this->render('visiteur/consulter.html.twig', [ 'mois' => $mois , 'fiche' => $fiche, 'frais' => $frais, 'Month' => $Month ]);
        }
        
        return $this->render('visiteur/consulter.html.twig', [ 'mois' => $mois, 'Month' => $Month  ]);
    }

    public function Renseigner()
    {
        session_start();

        $idVisiteur = $this->get('session')->get('id');
        $Month = date('m/Y');
        $MontantValider = 0;
        $DateModif = date('Y-m-d');

        $Co = $this -> getDoctrine() 
					-> getRepository('App\Entity\FicheFrais') ;
        $fiche = $Co -> findOneBy(array('id' => $Month , 'visiteur' => $idVisiteur));

        if($fiche == null){

            return $this->redirectToRoute('app_initialiser');
        }

        $idFichefrais = $fiche->getId();

        foreach($fiche->getLigneFraisHorsForfaits() as $valeur){
            
            $MontantValider = $MontantValider + $valeur->getMontant();
        }
        foreach($fiche->getLigneFraisForfaits() as $valeur){

            $MontantValider = $MontantValider + ( $valeur->getQuantite() * $valeur->getFraisforfait()->getMontant() );
        }

        ModeleGSB::UpdateFiche( $idVisiteur , $idFichefrais , $MontantValider , $DateModif );

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $idLigne = $_POST[ "Id" ] ;
            ModeleGSB::Delete( $idLigne ) ;

            return $this->render('visiteur/renseigner.html.twig', ['fiche' => $fiche]);
        }

        
        return $this->render('visiteur/renseigner.html.twig', ['fiche' => $fiche]);
    }

    public function Espace()
    {
        session_start();
        
        return $this->render('visiteur/espace.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Ajouter()
    {
        session_start();

        $erreur = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $Libelle = $_POST[ "Libelle" ] ;
            $Date = $_POST[ "date" ] ;
            $Montant = $_POST[ "montant" ] ;
            $idVisiteur = $this->get('session')->get('id');
            $idFichefrais = $Month = date('m/Y');
            
            $AnneePrecedente = date("Y",strtotime("-1 year"));
            $AnneeSuivante = date("Y",strtotime("+1 year"));

            if($Date == null){
                $erreur = "Date d'engagement non saisie !";
            }
            else{
                if($AnneePrecedente < $Date and $Date < $AnneeSuivante){
                    ModeleGSB::AjouterFraisHorsForfait( $idVisiteur , $idFichefrais , $Libelle , $Date , $Montant );

                    return $this->redirectToRoute('app_renseigner');
                }
                else{
                    $erreur = "La date saisie est anterieur ou ultérieur à l'année actuelle !";
                }
            }

            return $this->render('visiteur/new.html.twig', [ 'erreur' => $erreur ]);
        }
        
        return $this->render('visiteur/new.html.twig', [ 'erreur' => $erreur ]);
    }

    public function Editer($id)
    {
        session_start();

        $idVisiteur = $this->get('session')->get('id');
        $idFichefrais = $Month = date('m/Y');
        $idFraisforfait = $id;

        $erreur = null;
        
        $Co = $this -> getDoctrine() 
					    -> getRepository('App\Entity\LigneFraisForfait') ;
            $frais = $Co -> findOneBy(array('Visiteur' => $idVisiteur, 'Fichefrais' => $idFichefrais , 'Fraisforfait' => $id ));

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                $Quantite = $_POST[ "Quantite" ] ;

                if($Quantite == null){
                    $erreur = "Quantite non saisie !";
                }
                else{
                    ModeleGSB::Update( $idVisiteur , $idFichefrais , $idFraisforfait , $Quantite );

                    return $this->redirectToRoute('app_renseigner');
                }

                return $this->render('visiteur/editer.html.twig', [ 'frais' => $frais, 'erreur' => $erreur ]);
            }
        
        return $this->render('visiteur/editer.html.twig', [ 'frais' => $frais, 'erreur' => $erreur ]);
        
    }

    public function Initialiser()
    {
        session_start();

        $Co = $this -> getDoctrine() 
					-> getRepository('App\Entity\FraisForfait') ;

        $FF = $Co -> findAll();
        $Resultat = null;
        $fiche = null;
        $erreur = null;
        $Enregistrer = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $FraisForfait = $_POST['FraisForfait'];
            $Quantite = $_POST['Quantite'];
            $visiteur = $this->get('session')->get('id');
            $Month = date('m/Y');
            $date = date('Y-m-d');
            

            $Co = $this -> getDoctrine() 
					    -> getRepository('App\Entity\FicheFrais') ;
            $fiche = $Co -> findOneBy(array('id' => $Month , 'visiteur' => $visiteur));
            
            if($fiche == null){
                ModeleGSB::Initialiser( $visiteur , $Month ,    $date );
            }

            if($fiche != null){
            foreach($fiche->getLigneFraisForfaits() as $valeur){
                if($FraisForfait == $valeur->getFraisforfait()->getId() and $valeur->getVisiteur()->getId() == $visiteur){
                    
                $erreur = "Frais forfait deja existant !";

                return $this->render('visiteur/initialiser.html.twig', [ 'FF' => $FF, 'resultat' => $Resultat, 'fiche' => $fiche, 'erreur' => $erreur, 'enregistrer' => $Enregistrer ]);
                }
            }
            }
            

            ModeleGSB::AjouterFraisForfait($visiteur , $Month , $FraisForfait , $Quantite);

            $Enregistrer = "Votre saisi a bien ete enregistrer !";

            return $this->render('visiteur/initialiser.html.twig', [ 'FF' => $FF, 'resultat' => $Resultat, 'fiche' => $fiche, 'erreur' => $erreur, 'enregistrer' => $Enregistrer ]);

        }
        
        return $this->render('visiteur/initialiser.html.twig', [ 'FF' => $FF, 'fiche' => $fiche, 'erreur' => $erreur, 'enregistrer' => $Enregistrer ]);
    }

    public function Deconnecter()
    {
        session_start();
        session_destroy();
        
        return $this->redirectToRoute( 'app_visiteur' ) ;
        
    }
};
