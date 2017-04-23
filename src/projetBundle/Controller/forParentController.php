<?php

namespace projetBundle\Controller;

use projetBundle\Entity\AllPayements;
use projetBundle\Entity\Contact;
use projetBundle\Entity\Eleve;
use projetBundle\Entity\Enseignant;
use projetBundle\Entity\Frais;
use projetBundle\Entity\Groupe;
use projetBundle\Entity\Historique;
use projetBundle\Entity\Paiement;
use projetBundle\Entity\ParentEleve;
use projetBundle\Entity\Resultat2;
use Proxies\__CG__\projetBundle\Entity\AnneeScolaire;
use Proxies\__CG__\projetBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use projetBundle\Entity\Resultat;

/**
 * @Route("/Parent", name="parentController")
 */
class forParentController extends Controller
{

    /**
     * @Route("/voirToutNotif", name="voirToutNotif")
     */
    public function voirToutNotifAction(Request $request)
    {
        $session = $request->getSession();
        $parent = new ParentEleve();
        $parent = $session->get("user");
        $notifs = $this->getDoctrine()->getRepository("projetBundle:Notification")->findBy(array("reciever" => $parent->getId(), "recieverType" => "parent"), array("dateNotification" => 'DESC'));
        $listNotifs = array();
        $em = $this->getDoctrine()->getManager();
        foreach ($notifs as $n) {
            $listNotifs[] = $n;

            if ($n->getVu() == 0) {
                $n->setVu(1);
                $em->merge($n);
                $em->flush();

            }
        }

        return $this->render("@projet/Default/Parent/voirToutNotif.html.twig", array("listNotifs" => $listNotifs));
    }

    /**
     * @Route("/", name="dashParent")
     */
    public function indexAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            return $this->render('projetBundle:Default/Parent:index.html.twig');
        }
    }

    function SecurityManager()
    {
        $user = $this->getRequest()->getSession()->get('user');
        if ($user == null)
            return false; else return true;
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $session = $request->getSession();
            $user = $session->get("user");
            $parent = new ParentEleve();
            $parent = $user;

            $eleves = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("parent" => $parent));
            $nbrEnfants = count($eleves);

            return $this->render('projetBundle:Default/Parent:profile.html.twig', array("user" => $parent, "nbrEnfant" => $nbrEnfants));
        }
    }


    /**
     * @Route("/contacterAdmin", name="contacterAdmin")
     */
    public function contacterAdminAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            return $this->render("@projet/Default/Parent/contacterAdmin.html.twig");
        }
    }

    /**
     * @Route("/envoyerMail", name="envoyerMail")
     */
    public function envoyerMailAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $email = $request->get("emailEnseignant");
            return $this->render("@projet/Default/Parent/envoyerMail.html.twig", array("email" => $email));
        }
    }

    /**
     * @Route("/contacterEnseignant", name="contacterEnseignant")
     */
    public function contacterEnseignantAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $session = $request->getSession();
            $user = $session->get("user");
            $parent = new ParentEleve();
            $parent = $user;

            $listEnseignant = array();

            $eleves = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("parent" => $parent));

            foreach ($eleves as $e) {

                $eleve = new Eleve();
                $eleve = $e;
                $groupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $eleve->getGroupe()));
                $matieres = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("groupe" => $groupe));

                foreach ($matieres as $mat) {
                    $contact = new Contact();
                    $en = $this->getDoctrine()->getRepository("projetBundle:Enseignant")->findOneBy(array("id" => $mat->getEnseignant()));
                    $enseignant = new Enseignant();
                    $enseignant = $en;

                    $matiere = new Matiere();
                    $matiere = $mat;

                    $contact->setEleve($eleve);
                    $contact->setEnseignant($enseignant);
                    $contact->setMatiere($matiere);

                    $listEnseignant[] = $contact;
                }
            }

            return $this->render("@projet/Default/Parent/contacterEnseignant.html.twig", array("listEnseignant" => $listEnseignant));
        }
    }

    /**
     * @Route("/consulterPaiement", name="consulterPaiement")
     */
    public function consulterPaiementAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            $matricule = $request->get("matEleve");
            $e = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve" => $matricule));
            $eleve = new Eleve();
            $eleve = $e;

            $paiements = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findBy(array("eleve" => $eleve));

            $listPaiements = array();
            $nbrFrais = 0;

            foreach ($paiements as $p) {
                $nbrFrais++;
                $paiement = new Paiement();
                $paiement = $p;
                $f = $this->getDoctrine()->getRepository("projetBundle:Frais")->findOneBy(array("id" => $paiement->getFrais()));

                $frais = new Frais();
                $frais = $f;

                $annee = new AnneeScolaire();
                $annee = $paiement->getAnneeScolaire();

                $pay = new AllPayements();
                $pay->setAnneeScolaire($annee);
                $pay->setTrimestre($paiement->getTrimestrePaiement());
                $pay->setFrais($frais);
                $pay->setEtat($paiement->getEtatPaiement());

                $listPaiements[] = $pay;

            }

            return $this->render('@projet/Default/Parent/consulterPaiement.html.twig', array("paiements" => $listPaiements, "eleve" => $eleve, "nbrfrais" => $nbrFrais));
        }

    }

    /**
     * @Route("/consulterHistorique", name="consulterHistorique")
     */
    public function consulterHistoriqueAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            $matricule = $request->get("matEleve");

            $e = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve" => $matricule));

            $eleve = new Eleve();
            $eleve = $e;


            $listHistorique = array();
            $annees = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findAll();
            foreach ($annees as $a) {


                $annee = new AnneeScolaire();
                $annee = $a;
                for ($i = 1; $i < 4; $i++) {
                    $moyenneGenerale = 0;
                    $nbrMatiere = 0;

                    $examens = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("eleve" => $eleve, "trimestreExamen" => $i, "anneeScolaire" => $annee));
                    if ($examens == null) {
                        $listHistorique[] = null;

                    } else {

                        $historique = new Historique();
                        $idGroupe = $eleve->getGroupe();
                        $matiere = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("groupe" => $idGroupe));
                        $listResult = array();
                        $note = array();

                        foreach ($matiere as $mat) {


                            $result = new Resultat();
                            $notes = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("matiere" => $mat, "eleve" => $eleve, "trimestreExamen" => $i, "anneeScolaire" => $annee));

                            if ($notes == null) {
                                $nbrMatiere++;
                                //$listHistorique[] = null;
                                $result->setNote(0);
                                $result->setMoyenne(0);
                                $result->setNomEnseignant($mat->getEnseignant());
                                $result->setMatiere($mat->getLibelleMatiere());
                                $listResult[] = $result;
                            } else {

                                $nbrMatiere++;

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

                        }


                        $historique->setAnneeScolaire($annee);
                        $historique->setEleve($eleve);
                        $historique->setResultat($listResult);
                        $historique->setTrimestres($i);

                        $moyenneGenerale = $moyenneGenerale / $nbrMatiere;
                        $historique->setMoyenneGenerale($moyenneGenerale);

                        $listHistorique[] = $historique;


                    }


                }


                $nomPrenomEleve = $eleve->getNomEleve() . " " . $eleve->getPrenomEleve();
            }


            return $this->render("@projet/Default/Parent/consulterHistorique.html.twig", array("nomPrenomEleve" => $nomPrenomEleve, "historique" => $listHistorique));
        }
    }

    /**
     * @Route("/consulterNotes", name="consulterNotes")
     */
    public function consulterNotesAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {

            $matricule = $request->get("matEleve");
            $eleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve" => $matricule));


            $examens = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("eleve" => $eleve));
            if ($examens == null) {
                return $this->render("@projet/Default/Parent/consulterNotes.html.twig", array("message" => "Cet élève n'a passé aucun examen !"));

            }
            $idGroupe = $eleve->getGroupe();
            $matiere = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("groupe" => $idGroupe));
            $listResult = array();
            for ($i = 1; $i < 4; $i++) {

                $note = array();
                //$moyenneGenerale = 0;
                foreach ($matiere as $mat) {
                    $result = new Resultat2();
                    $notes = $this->getDoctrine()->getRepository("projetBundle:Examen")->findBy(array("matiere" => $mat, "eleve" => $eleve, "anneeScolaire" => 1, "trimestreExamen" => $i));
                    // $somme = 0;

                    foreach ($notes as $n) {
                        $note[] = $n->getNoteExamen();
                        $result->setNote($note);
                        //$somme+=$n->getNoteExamen();
                    }
                    //$moyenne = $somme/count($notes);
                    //$moyenneGenerale+= $moyenne;
                    $result->setMoyenne(0);
                    $result->setNomEnseignant($mat->getEnseignant());
                    $result->setMatiere($mat->getLibelleMatiere());
                    $result->setTrimestre($i);
                    $listResult[] = $result;
                    $note = null;

                }
            }
            $nomPrenomEleve = $eleve->getNomEleve() . " " . $eleve->getPrenomEleve();

            return $this->render("@projet/Default/Parent/consulterNotes.html.twig", array("matriculeEleve" => $matricule, "nomPrenomEleve" => $nomPrenomEleve, "resultat" => $listResult));


        }
    }

    /**
     * @Route("/mesEleves", name="mesEleves")
     */
    public function mesElevesAction(Request $request)
    {
        if (!$this->SecurityManager()) {
            return $this->redirect($this->generateUrl("login"));

        } else {
            $session = $request->getSession();
            $user = $session->get("user");
            $parent = new ParentEleve();
            $parent = $user;
            $eleves = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("parent" => $parent));
            $listEleves = array();
            foreach ($eleves as $e) {
                $eleve = new Eleve();
                $groupe = new Groupe();
                $eleve = $e;
                $g = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $eleve->getGroupe()));

                $groupe = $g;

                $eleve->setGroupe($groupe);

                $listEleves[] = $eleve;
            }
            return $this->render('projetBundle:Default/Parent:mesEleves.html.twig', array("listEleves" => $listEleves));
        }
    }


}
