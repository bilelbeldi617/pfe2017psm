<?php

namespace projetBundle\Controller;

use projetBundle\Entity\Enseignant;
use projetBundle\Entity\Groupe;
use projetBundle\Entity\MatiereGroupe;
use projetBundle\Entity\MatiereGroupeEnseignant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/Enseignant", name="enseignantController")
 */
class forEnseignantController extends Controller
{

    /**
     * @Route("/listerCahierEnseignant", name="listerCahierEnseignant")
     */
    public function listerCahierEnseignantAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            $session = $request->getSession();
            $user = $session->get("user");
            $annee = $session->get("anneeScolaireCourante");

            $pageCahier = $this->getDoctrine()->getRepository("projetBundle:PageCahier")->findBy(array("anneeScolaire" => $annee, "enseignant" => $user));


            return $this->render("@projet/Default/Enseignant/listerCahierEnseignant.html.twig", array("pagecahier" => $pageCahier));

        }

    }

    function SecurityManager()
    {
        $user = $this->getRequest()->getSession()->get('user');
        if ($user == null)
            return false; else return true;
    }

    /**
     * @Route("/saisirCahierTexte", name="saisirCahierTexte")
     */
    public function saisirCahierTexteAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $session = $request->getSession();
            $annee = $session->get("anneeScolaireCourante");
            $enseignant = $session->get("user");

            $listMatieres = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("anneeScolaire" => $annee, "enseignant" => $enseignant));
            $date = new \DateTime("now");
            $listMatiereEnseignant = array();
            foreach ($listMatieres as $matiere) {
                if ($matiere->getGroupe() != null) {
                    $matiereGroupeEnseignant = new MatiereGroupeEnseignant();
                    $matiereGroupeEnseignant->setGroupe($matiere->getGroupe());
                    $matiereGroupeEnseignant->setMatiere($matiere);
                    $listMatiereEnseignant[] = $matiereGroupeEnseignant;
                }


            }


        }

        return $this->render("@projet/Default/Enseignant/saisirCahierTexte.html.twig", array("listMatiere" => $listMatiereEnseignant, "date" => $date));

    }

    /**
     * @Route("/", name="dashEnseignant")
     */
    public function indexAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            return $this->render('projetBundle:Default/Enseignant:index.html.twig');
        }
    }


    /**
     * @Route("/creerExamen", name="creerExamen")
     */
    public function creerExamenAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            $session = $request->getSession();
            $enseignant = $session->get("user") ;
            $annee = $session->get("anneeScolaireCourante");

            $listSalle = $this->getDoctrine()->getRepository("projetBundle:Salle")->findAll();

            $listMatieres = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("anneeScolaire" => $annee, "enseignant" => $enseignant));
            $listMatiereEnseignant = array();
            foreach ($listMatieres as $matiere) {
                if ($matiere->getGroupe() != null) {
                    $matiereGroupeEnseignant = new MatiereGroupeEnseignant();
                    $matiereGroupeEnseignant->setGroupe($matiere->getGroupe());
                    $matiereGroupeEnseignant->setMatiere($matiere);
                    $listMatiereEnseignant[] = $matiereGroupeEnseignant;
                }
            }

            return $this->render("projetBundle:Default/Enseignant:creerExamen.html.twig", array("listMatiereGroupe"=>$listMatiereEnseignant, "listSalle"=>$listSalle));

        }
    }


    /**
     * @Route("/listerExamens", name="listerExamens")
     */
    public function listerExamensAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();

            return $this->render("@projet/Default/Enseignant/listerExamens.html.twig");

        }
    }

    /**
     * @Route("/contacterParent", name="contacterParent")
     */
    public function contacterParentAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();

            return $this->render("@projet/Default/Enseignant/contacterParent.html.twig");

        }
    }


    /**
     * @Route("/insererNotes", name="inserernotes")
     */
    public function insererNotesExamenAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $enseignantSession = new Enseignant();
            $enseignantSession = $this->get("session")->get('user');
            $listAnnee = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findAll();
            return $this->render("@projet/Default/Enseignant/insererNotesExamen.html.twig", array("listAnnees" => $listAnnee));

        }
    }


}
