<?php

namespace projetBundle\Controller;

use projetBundle\Entity\Enseignant;
use projetBundle\Entity\Groupe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/Enseignant", name="enseignantController")
 */
class forEnseignantController extends Controller
{

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

    function SecurityManager()
    {
        $user = $this->getRequest()->getSession()->get('user');
        if ($user == null)
            return false; else return true;
    }

    /**
     * @Route("/creerExamen", name="creerExamen")
     */
    public function creerExamenAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            //$grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findAll();
            //$groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findAll();

            return $this->render("@projet/Default/Enseignant/creerExamen.html.twig");

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
