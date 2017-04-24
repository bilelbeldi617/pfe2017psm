<?php

namespace projetBundle\Controller;

use Doctrine\DBAL\Types\IntegerType;
use projetBundle\Entity\Eleve;
use projetBundle\Entity\Groupe;
use projetBundle\Entity\Paiement;
use projetBundle\Entity\ParentEleve;
use projetBundle\Entity\Resultat;
use projetBundle\Entity\ResultatGroupe;
use projetBundle\Entity\Tranche;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/Admin", name="adminController")
 */


class forAdminController extends Controller
{

    function SecurityManager(){
        $user = $this->getRequest()->getSession()->get('user') ;
        if ($user==null)
            return false ; else return true ;
    }



    /**
     * @Route("/listerEleveParGroupe", name="listerEleveParGroupe")
     */
    public function listerEleveParGroupeAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $listEleve = array();
            $session = $request->getSession();
            $annee = $session->get("anneeScolaireCourante");
            $idGroupe = $request->get("idGroupe");
            $listEleveGroupe = $this->getDoctrine()->getRepository("projetBundle:EleveGroupe")->findBy(array("anneeScolaire" => $annee, "groupe" => $idGroupe));


            foreach ($listEleveGroupe as $lEg) {
                $listEleve[] = $lEg->getEleve();
            }
            return $this->render("@projet/Default/Admin/listerEleveParGroupe.html.twig", array("listEleve" => $listEleve));
        }
    }





    /**
     * @Route("/ajouterMatiere", name="ajouterMatiere")
     */
    public function ajouterMatiereAction(Request $request)
    {
        $session = $request->getSession();
        $annee = $session->get("anneeScolaireCourante");
        $query = $this->getDoctrine()->getManager()->createQuery('SELECT DISTINCT m.libelleMatiere FROM projetBundle\Entity\Matiere m WHERE m.anneeScolaire=:anneeScolaire')
            ->setParameter("anneeScolaire", $annee->getId());
        $listMatiere = $query->getResult();


        return $this->render("@projet/Default/Admin/ajouterMatiere.html.twig", array("listMatiere" => $listMatiere));


    }


    /**
     * @Route("/listerMatieres", name="listerMatieres")
     */
    public function listerMatieresAction(Request $request)
    {
        $session = $request->getSession();
        $annee = $session->get("anneeScolaireCourante");
        $query = $this->getDoctrine()->getManager()->createQuery('SELECT DISTINCT m.libelleMatiere FROM projetBundle\Entity\Matiere m WHERE m.anneeScolaire=:anneeScolaire')
            ->setParameter("anneeScolaire", $annee->getId());
        $listMatiere = $query->getResult();
        return $this->render("@projet/Default/Admin/listerMatieres.html.twig", array("listeMatieres" => $listMatiere));


    }




    /**
     * @Route("/affecterManuellement", name="affecterManuellement")
     */
    public function affecterManuellementAction(Request $request){
        $session = $request->getSession();
        $annee = $session->get("anneeScolaireCourante");

        $eleves = $this->getDoctrine()->getManager()->getRepository("projetBundle:Eleve")->findAll();
        $listEleves =  array() ;
        foreach ($eleves as $e){
            $mawjoud = $this->getDoctrine()->getRepository("projetBundle:EleveGroupe")->findOneBy(array("eleve"=>$e, "anneeScolaire"=>$annee));
            if($mawjoud == null){



            $eleve = new Eleve() ;
            $eleve->setParent($e->getParent()) ;
            $eleve->setPrenomEleve($e->getPrenomEleve()) ;
            $eleve->setNomEleve($e->getNomEleve()) ;
            $eleve->setMatriculeEleve($e->getMatriculeEleve()) ;
            $eleve->setNiveauEleve($e->getNiveauEleve());
            $dateNaissance = new \DateTime("now");
            $dateNaissance = $e->getDateNaissanceEleve();
                $eleve->setSexeEleve($e->getSexeEleve());

            $eleve->setDateNaissanceEleve($dateNaissance->format("d-m-Y")) ;

            $listEleves[]=$eleve ;

            }
        }





        return $this->render("@projet/Default/Admin/affecterManuellement.html.twig", array("listEleves"=>$listEleves));
    }

    /**
     * @Route("/affecterAutomatiquement", name="affecterAutomatiquement")
     */
    public function affecterAutomatiquementAction(Request $request){
        return $this->render("@projet/Default/Admin/AffecterAutomatiquement.html.twig");
    }


    /**
     * @Route("/payer", name="payer")
     */
    public function payerAction(Request $request){

        $id = $request->get("idPaiement");
        $paiement = new Paiement();
        $paiement = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id"=>$id));
        $tranche = new Tranche();
        $tranche = $this->getDoctrine()->getRepository("projetBundle:Tranche")->findOneBy(array("paiement"=>$paiement));
        if($tranche != null){
            if($tranche->getMontantTranche() == $paiement->getTotalePaiement() /2){

                return $this->render("@projet/Default/Admin/payer.html.twig", array("paiement"=>$paiement, "typePaiement"=>"tranches"));
            }
        }else{
            return $this->render("@projet/Default/Admin/payer.html.twig", array("paiement"=>$paiement));
        }


        return $this->render("@projet/Default/Admin/payer.html.twig", array("paiement"=>$paiement));
    }

    /**
     * @Route("/consulterPaiements", name="consulterPaiements")
     */
    public function consulterPaiementsAction(Request $request){

        $id = $request->get("idParent");
        $parent = new ParentEleve();
        $parent = $this->getDoctrine()->getRepository("projetBundle:ParentEleve")->findOneBy(array("id"=>$id));
        $eleves = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("parent"=>$parent));
        $listPaiements = array();
        foreach($eleves as $e){
            $paiement = new Paiement();
            $paiement = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findBy(array("eleve"=>$e));
            foreach($paiement as $p){
                $listPaiements[] = $p;
            }
        }

        return $this->render("@projet/Default/Admin/consulterPaiements.html.twig", array("listPaiements"=>$listPaiements));
    }

    /**
     * @Route("/listerParents", name="listerParents")
     */
    public function listerParentsAction(){
        $parents = $this->getDoctrine()->getRepository("projetBundle:ParentEleve")->findAll();
        $listParent = array();
        foreach($parents as $p){
            $listParent[] = $p;
        }

        return $this->render("@projet/Default/Admin/listerParents.html.twig", array("listParent"=>$listParent));
    }

    /**
     * @Route("/affecter", name="affecter")
     */
    public function affecterAction(Request $request){
        $matricule = $request->get("matEleve");
        $eleve = new Eleve();
        $eleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve"=>$matricule));
        $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findBy(array("niveauGroupe"=>$eleve->getNiveauEleve()));

        $listGroupes = array();

        foreach($groupes as $g){
            $gr = $this->getDoctrine()->getRepository("projetBundle:EleveGroupe")->findBy(array("groupe"=>$g->getId()));
            $nbrEleves = count($gr);
            $g->setNombreEleve($nbrEleves);
            $listGroupes[] = $g;
        }

        return $this->render("@projet/Default/Admin/affecter.html.twig", array("eleve"=>$eleve, "listGroupes"=>$listGroupes));
    }


    /**
     * @Route("/", name="dashAdmin")
     */
    public function indexAction(Request $request)
    {
      if(!$this->SecurityManager()){
          return $this->redirect($this->generateUrl("login"));

      }else{
            
            return $this->render('projetBundle:Default/Admin:index.html.twig');
      }
    }



    /**
     * @Route("/ajouterEleve", name="ajouterEleve")
     */
    public function listerEleveAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
               $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll() ;
               $parents = $this->getDoctrine()->getRepository("projetBundle:ParentEleve")->findAll() ;
            $frais = $this->getDoctrine()->getRepository("projetBundle:Frais")->findAll();
            return $this->render("@projet/Default/Admin/ajouterEleve.html.twig", array("groupes"=>$groupes, "parents"=>$parents, "frais"=>$frais)) ;

        }
    }


    /**
     * @Route("/listerEleve", name="listerEleves")
     */
    public function ajouterEleveAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            $annees = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findAll() ;
            $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll() ;
             return $this->render("@projet/Default/Admin/listerEleve.html.twig", array("groupes"=>$groupes, "annees"=>$annees)) ;

        }
    }

    /**
     * @Route("/ajouterEnseignant", name="ajouterEnseignant")
     */
    public function ajouterEnseignantAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll() ;
            $grades = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            return $this->render("@projet/Default/Admin/ajouterEnseignant.html.twig", array("grades"=>$grades)) ;

        }
    }


    /**
     * @Route("/listerEnseignant", name="listerEnseignant")
     */
    public function listerEnseignantAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            $grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();

            return $this->render("@projet/Default/Admin/listerEnseignant.html.twig", array("grades"=>$grade)) ;

        }
    }


    /**
     * @Route("/creerGroupe", name="creerGroupe")
     */
    public function creerGroupeAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{

            $annees = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findAll();

            return $this->render("@projet/Default/Admin/creerGroupe.html.twig", array("annees"=>$annees)) ;

        }
    }





    /**
     * @Route("/listerGroupe", name="listerGroupe")
     */
    public function listerGroupeAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $session = $request->getSession();
            $annee = $session->get("anneeScolaireCourante");
            $listGroupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findBy(array("anneeScolaire" => $annee));
            return $this->render("projetBundle:Default/Admin:listerGroupe.html.twig", array("listGroupe" => $listGroupe));
        }
    }



    /**
     * @Route("/affecterEleve", name="affecterEleve")
     */
    public function affecterEleveAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();
            $nbrElevesList = array();
            for($i=0;$i<6;$i++){
                $eleves = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("niveauEleve"=>$i+1, "groupe"=>null));
                $nbr = count($eleves);
                $nbrElevesList[] = $nbr;
            }
            $nbrGroupeList = array();
            for($j=0;$j<6;$j++){
                //echo $nbrElevesList[$j];
                //die;
                $nbrGroupe = 0;
                $nbrGroupe = $nbrElevesList[$j] /30;
                if($nbrElevesList[$j] % 30 > $nbrGroupe*5){
                    $nbrGroupe++;
                }

                $nbrGroupeList[] = intval($nbrGroupe);
            }

            $nbrGroupeCreeList = array();
            for($i=1;$i<7;$i++){
                $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findBy(array("niveauGroupe"=>$i));
                $nbrGroupeCree = count($groupes);
                $nbrGroupeCreeList[] = $nbrGroupeCree;
            }

            $niveaux = array(1, 2, 3, 4, 5, 6);



            return $this->render("@projet/Default/Admin/affecterEleve.html.twig", array("niveaux"=>$niveaux,"nbrEleves"=>$nbrElevesList, "nbrGroupes"=>$nbrGroupeList, "nbrGroupeCree"=>$nbrGroupeCreeList)) ;

        }
    }


    /**
     * @Route("/genererBulletins", name="genererBulletins")
     */
    public function genererBulletinAction(Request $request){
        $matricule = $request->get("matEleve");
        //echo $matricule;

        $e = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve"=>$matricule));
        //echo $e->getNomEleve();
        $examens = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("eleve"=>$e));
        if ($examens==null){
            return $this->render("@projet/Default/Admin/afficherBulletin.html.twig", array("message"=>"Cet élève n'a passé aucun examen !"));

        }
        $idGroupe = $e->getGroupe();
        $matiere = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("groupe"=>$idGroupe));
        $listResult = array();
        $note = array();
        $moyenneGenerale = 0;
        foreach($matiere as $mat){
            $result = new Resultat();
            $notes = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("matiere"=>$mat, "eleve"=>$e));
            $somme = 0;

            foreach($notes as $n){
                $note[] = $n->getNoteExamen();
                $result->setNote($note);
                $somme+=$n->getNoteExamen();
            }
            $moyenne = $somme/count($notes);
            $moyenneGenerale+= $moyenne;
            $result->setMoyenne($moyenne);
            $result->setNomEnseignant($mat->getEnseignant());
            $result->setMatiere($mat->getLibelleMatiere());
            $listResult[] = $result;
            $note = null;

        }
               $nomPrenomEleve = $e->getNomEleve()." ".$e->getPrenomEleve() ;

        return $this->render("@projet/Default/Admin/afficherBulletin.html.twig", array("matriculeEleve"=> $matricule,"nomPrenomEleve"=>$nomPrenomEleve,"resultat"=>$listResult, "moyenneGenerale"=>$moyenneGenerale/count($matiere)));

    }

    /**
     * @Route("/creerEmploi", name="creerEmploi")
     */
    public function creerEmploiAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();

            return $this->render("@projet/Default/Admin/creerEmploi.html.twig") ;

        }
    }


    /**
     * @Route("/genererBulletinGroupe", name="genererBulletinGroupe")
     */
    public function genererBulletinGroupeAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            $idGroupe = $request->get("idGroupe");
            $listEleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("groupe"=>$idGroupe));
            $listResultGroupe = array() ;
            foreach($listEleve as $e) {

                //echo $e->getNomEleve();
                $examens = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("eleve" => $e));
                if ($examens == null) {

                    $listResultGroupe[]=null ;

                } else {
                    $idGroupe = $e->getGroupe();
                    $matiere = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("groupe" => $idGroupe));
                    $listResult = array();
                    $note = array();
                    $moyenneGenerale = 0;
                    foreach ($matiere as $mat) {
                        $result = new Resultat();
                        $notes = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("matiere" => $mat, "eleve" => $e));
                        $somme = 0;

                        foreach ($notes as $n) {
                            $note[] = $n->getNoteExamen();
                            $result->setNote($note);
                            $somme += $n->getNoteExamen();
                        }
                        $moyenne = $somme / count($notes);
                        $moyenneGenerale += $moyenne;
                        $result->setMoyenne($moyenne);
                        $result->setNomEnseignant($mat->getEnseignant());
                        $result->setMatiere($mat->getLibelleMatiere());
                        $listResult[] = $result;
                        $note = null;


                    }

                    $resultGroupe = new ResultatGroupe();
                    $resultGroupe->setEleve($e);
                    $resultGroupe->setListResultat($listResult);
                    $resultGroupe->setMoyenneGeneral($moyenneGenerale/count($notes)) ;
                    $listResultGroupe[] = $resultGroupe;

                }
            }
        return $this->render("@projet/Default/Admin/afficherBulletinGroupe.html.twig", array("listResultat"=>$listResultGroupe));


        }
    }



    /**
     * @Route("/listerEmplois", name="listerEmplois")
     */
    public function listerEmploisAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();

            return $this->render("@projet/Default/Admin/listerEmploi.html.twig") ;

        }
    }






    /**
     * @Route("/annoncerJours", name="annoncerJours")
     */
    public function annoncerJoursAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();

            return $this->render("@projet/Default/Admin/annoncerJours.html.twig") ;

        }
    }


    /**
     * @Route("/ajouterPersonnel", name="ajouterPersonnel")
     */
    public function ajouterPersonnelAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();
            $postes = $this->getDoctrine()->getRepository("projetBundle:Poste")->findAll();

            return $this->render("@projet/Default/Admin/ajouterPersonnel.html.twig", array("postes"=>$postes)) ;

        }
    }




    /**
     * @Route("/listerPersonnels", name="listerPersonnels")
     */
    public function listerPersonnelsAction(Request $request)
    {
        if(!$this->SecurityManager()){
            return $this->redirect($this->generateUrl("login"));

        }else{
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();
            $postes = $this->getDoctrine()->getRepository("projetBundle:Poste")->findAll();

            return $this->render("@projet/Default/Admin/listerPersonnels.html.twig", array("postes"=>$postes)) ;

        }
    }






}
