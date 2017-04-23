<?php

namespace projetBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\Query\Exec\AbstractSqlExecutor;
use projetBundle\Entity\AnneeScolaire;
use projetBundle\Entity\Eleve;
use projetBundle\Entity\EleveGroupe;
use projetBundle\Entity\Enseignant;
use projetBundle\Entity\Frais;
use projetBundle\Entity\Grade;
use projetBundle\Entity\Groupe;
use projetBundle\Entity\Notification;
use projetBundle\Entity\Paiement;
use projetBundle\Entity\ParentEleve;
use projetBundle\Entity\Personnel;
use projetBundle\Entity\Poste;
use projetBundle\Entity\Matiere;
use projetBundle\Entity\MatiereGroupe;
use projetBundle\Controller\DefaultController;
use projetBundle\Entity\Tranche;
use projetBundle\Entity\TypePaiement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Validator\Constraints\Date;


/**
 * @Route("/RESTAPI", name="RESTAPI")
 */
class AJAXAPIController extends Controller
{

    /**
     * @Route("/ajouterPaiementTot", name="ajouterPaiementTot")
     */
    public function ajouterPaiementTot(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $typePaiement = $request->get("typePaiementTot");
        $idTranche = $request->get("idTranche");
        $dateAujourdhui = new \DateTime("now");
        $dateAujourdhui = $dateAujourdhui->format("Y-m-d");

        $tranche = $this->getDoctrine()->getRepository("projetBundle:Tranche")->findOneBy(array("id" => $idTranche));
        $em = $this->getDoctrine()->getManager();
        if ($typePaiement == "virement") {
            $paiement = new TypePaiement();
            $paiement->setNomBanque(null);
            $paiement->setNumeroCheque(null);
            $paiement->setDatePaiement(new \DateTime("now"));
            $paiement->setPreuve(1);
            $paiement->setTypePaiement("virement");
            $paiement->setTranche($tranche);

            $em->persist($paiement);
            $em->flush();

            $tranche->setEtatTranche("Payé le : " . $dateAujourdhui);
            $em->merge($tranche);
            $em->flush();

            $p = new Paiement();
            $p = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $tranche->getPaiement()));
            if ($p->getEtatPaiement() == "NP") {
                $etat = "Payé en totalité le" . $dateAujourdhui;
                $p->setEtatPaiement($etat);
            }

            $em->merge($p);
            $em->flush($p);


        }

        if ($typePaiement == "cheque") {
            $nomBanque = $request->get("nomBanqueTot");
            $numCheque = $request->get("numChequeTot");

            $paiement = new TypePaiement();
            $paiement->setNomBanque($nomBanque);
            $paiement->setNumeroCheque($numCheque);
            $paiement->setDatePaiement(new \DateTime("now"));
            $paiement->setPreuve(null);
            $paiement->setTypePaiement("cheque");
            $paiement->setTranche($tranche);

            $em->persist($paiement);
            $em->flush();

            $tranche->setEtatTranche("Payé le : " . $dateAujourdhui);
            $em->merge($tranche);
            $em->flush();

            $p = new Paiement();
            $p = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $tranche->getPaiement()));
            if ($p->getEtatPaiement() == "NP") {
                $etat = "Payé en totalité le" . $dateAujourdhui;
                $p->setEtatPaiement($etat);
            }
            $em->merge($p);
            $em->flush($p);
        }

        if ($typePaiement == "espece") {
            //$nomBanque = $request->get("nomBanque");
            //$numCheque = $request->get("numCheque");

            $paiement = new TypePaiement();
            $paiement->setNomBanque(null);
            $paiement->setNumeroCheque(null);
            $paiement->setDatePaiement(new \DateTime("now"));
            $paiement->setPreuve(null);
            $paiement->setTypePaiement("espece");
            $paiement->setTranche($tranche);

            $em->persist($paiement);
            $em->flush();

            $tranche->setEtatTranche("Payé le : " . $dateAujourdhui);
            $em->merge($tranche);
            $em->flush();

            $p = new Paiement();
            $p = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $tranche->getPaiement()));
            if ($p->getEtatPaiement() == "NP") {
                $etat = "Payé en totalité le" . $dateAujourdhui;
                $p->setEtatPaiement($etat);
            }
            $em->merge($p);
            $em->flush($p);

        }
        return new Response($serializer->serialize(array("status" => "inserted"), "json"));

    }

    /**
     * @Route("/ajouterPaiement", name="ajouterPaiement")
     */
    public function ajouterPaiement(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $typePaiement = $request->get("typePaiement2");
        $idTranche = $request->get("idTranche");
        $dateAujourdhui = new \DateTime("now");
        $dateAujourdhui = $dateAujourdhui->format("Y-m-d");

        $tranche = $this->getDoctrine()->getRepository("projetBundle:Tranche")->findOneBy(array("id" => $idTranche));
        $em = $this->getDoctrine()->getManager();
        if ($typePaiement == "virement") {
            $paiement = new TypePaiement();
            $paiement->setNomBanque(null);
            $paiement->setNumeroCheque(null);
            $paiement->setDatePaiement(new \DateTime("now"));
            $paiement->setPreuve(1);
            $paiement->setTypePaiement("virement");
            $paiement->setTranche($tranche);

            $em->persist($paiement);
            $em->flush();

            $tranche->setEtatTranche("Payé le : " . $dateAujourdhui);
            $em->merge($tranche);
            $em->flush();

            $p = new Paiement();
            $p = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $tranche->getPaiement()));
            if ($p->getEtatPaiement() == "NP") {
                $etat = "Tranche " . $tranche->getNumeroTranche() . " payé le " . $dateAujourdhui;
                $p->setEtatPaiement($etat);
            } else {
                $p->setEtatPaiement("2 tranches payés");
            }

            $em->merge($p);
            $em->flush($p);


        }

        if ($typePaiement == "cheque") {
            $nomBanque = $request->get("nomBanque");
            $numCheque = $request->get("numCheque");

            $paiement = new TypePaiement();
            $paiement->setNomBanque($nomBanque);
            $paiement->setNumeroCheque($numCheque);
            $paiement->setDatePaiement(new \DateTime("now"));
            $paiement->setPreuve(null);
            $paiement->setTypePaiement("cheque");
            $paiement->setTranche($tranche);

            $em->persist($paiement);
            $em->flush();

            $tranche->setEtatTranche("Payé le : " . $dateAujourdhui);
            $em->merge($tranche);
            $em->flush();

            $p = new Paiement();
            $p = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $tranche->getPaiement()));
            if ($p->getEtatPaiement() == "NP") {
                $etat = "Tranche " . $tranche->getNumeroTranche() . " payé le " . $dateAujourdhui;
                $p->setEtatPaiement($etat);
            } else {
                $p->setEtatPaiement("2 tranches payés");
            }
            $em->merge($p);
            $em->flush($p);
        }

        if ($typePaiement == "espece") {
            //$nomBanque = $request->get("nomBanque");
            //$numCheque = $request->get("numCheque");

            $paiement = new TypePaiement();
            $paiement->setNomBanque(null);
            $paiement->setNumeroCheque(null);
            $paiement->setDatePaiement(new \DateTime("now"));
            $paiement->setPreuve(null);
            $paiement->setTypePaiement("espece");
            $paiement->setTranche($tranche);

            $em->persist($paiement);
            $em->flush();

            $tranche->setEtatTranche("Payé le : " . $dateAujourdhui);
            $em->merge($tranche);
            $em->flush();

            $p = new Paiement();
            $p = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $tranche->getPaiement()));
            if ($p->getEtatPaiement() == "NP") {
                $etat = "Tranche " . $tranche->getNumeroTranche() . " payé le " . $dateAujourdhui;
                $p->setEtatPaiement($etat);
            } else {
                $p->setEtatPaiement("2 tranches payés");
            }
            $em->merge($p);
            $em->flush($p);

        }
        return new Response($serializer->serialize(array("status" => "inserted"), "json"));

    }

    /**
     * @Route("/ajouterTranches", name="ajouterTranches")
     */
    public function ajouterTranches(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $id = $request->get("idPaiement");
        $typePaiement = $request->get("typePaiement");
        $paiement = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findOneBy(array("id" => $id));

        if ($typePaiement == "tranches") {


            $listTranches = array();
            $tranches = $this->getDoctrine()->getRepository("projetBundle:Tranche")->findBy(array("paiement" => $paiement));
            if ($tranches != null && count($tranches) == 2) {
                foreach ($tranches as $t) {
                    $tr = new Tranche();
                    $tr = $t;
                    $listTranches[] = $t;
                }
                return new Response($serializer->serialize(array("status" => "mawjoud", "listTranches" => $listTranches), "json"));
            } else {
                $tranche = new Tranche();
                $tranche->setPaiement($paiement);
                $tranche->setEtatTranche("non payé");
                $tranche->setMontantTranche($paiement->getTotalePaiement() / 2);
                $tranche->setNumeroTranche(count($tranches) + 1);
                $listTranches[] = $tranche;
                $em = $this->getDoctrine()->getManager();
                $em->persist($tranche);
                $em->flush();


                return new Response($serializer->serialize(array("status" => "inserted", "listTranches" => $listTranches), "json"));
            }
        } else {

            $tranche = $this->getDoctrine()->getRepository("projetBundle:Tranche")->findBy(array("paiement" => $paiement));
            if ($tranche != null) {

                return new Response($serializer->serialize(array("status" => "mawjoud", "tranche" => $tranche), "json"));
            } else {
                $tranche = new Tranche();
                $tranche->setPaiement($paiement);
                $tranche->setEtatTranche("non payé");
                $tranche->setMontantTranche($paiement->getTotalePaiement());
                $tranche->setNumeroTranche(1);
                $em = $this->getDoctrine()->getManager();
                $em->persist($tranche);
                $em->flush();


                return new Response($serializer->serialize(array("status" => "inserted", "tranches" => $tranche), "json"));
            }
        }
    }

    /**
     * @Route("/getNotif", name="getNotif")
     */
    public function getNotif(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $id = $request->get("parent");

        $parent = new ParentEleve();
        $parent = $this->getDoctrine()->getRepository("projetBundle:ParentEleve")->findOneBy(array("id" => $id));

        $notifs = $this->getDoctrine()->getRepository("projetBundle:Notification")->findBy(array("reciever" => $parent->getId(), "recieverType" => "parent", "vu" => 0));
        $nbrNvNotifs = 0;
        $listNotifs = array();
        foreach ($notifs as $n) {

            $nbrNvNotifs++;

            $listNotifs[] = $n;
        }

        return new Response($serializer->serialize(array("listNotifs" => $listNotifs, "nbrNvNotifs" => $nbrNvNotifs), "json"));
    }

    /**
     * @Route("/ajouterParent", name="ajouterParent")
     */
    public function ajouterParent(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $nomParent = $request->get("nomParent");
        $prenomParent = $request->get("prenomParent");
        $cinParent = $request->get("cinParent");
        $adresseParent = $request->get("adresseParent");
        $numTelParent = $request->get("numTelParent");
        $emailParent = $request->get("emailParent");
        $fonctionParent = $request->get("fonctionParent");

        $parent = new ParentEleve();
        $parent->setNomParent($nomParent);
        $parent->setPrenomParent($prenomParent);
        $parent->setCinParent($cinParent);
        $parent->setAdresseParent($adresseParent);
        $parent->setNumTelParent($numTelParent);
        $parent->setEmailParent($emailParent);
        $parent->setFonctionParent($fonctionParent);
        $parent->setLoginParent($emailParent);
        $parent->setPasswordParent($cinParent);


        $message = \Swift_Message::newInstance(null);
        $messageCorps = "Votre compte a ete cree avec succes \n votre Login : " . $emailParent . " \n votre MPD :" . $cinParent;
        $message->setFrom("primaschooltest@gmail.com");
        $message->setTo($emailParent);
        $message->setSubject("Votre compte chez primaSchoolManager");
        $message->setContentType("text/html");
        $message->setBody($messageCorps);
        $mailer = $this->get("mailer");
        $mailer->send($message);


        $em = $this->getDoctrine()->getManager();
        $em->persist($parent);
        $em->flush();

        return new Response($serializer->serialize(array("status" => "inserted", "idParent" => $parent->getId()), "json"));
    }

    /**
     * @Route("/affecterUnEleve", name="affecterUnEleve")
     */
    public function affecterUnEleve(Request $request)
    {


        $idEleve = $request->get("idEleve");
        $idGroupe = $request->get("idGroupe");

        $serializer = SerializerBuilder::create()->build();

        $eleve = new Eleve();
        $eleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("id" => $idEleve));

        //echo($eleve->getNomEleve());

        $groupe = new Groupe();
        $groupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $idGroupe));

        //echo($groupe->getNomGroupe());

        $session = $request->getSession();

        $annee = $session->get("anneeScolaireCourante");

        //echo ($annee->getPeriode());

        //die;

        $eleveGroupe = new EleveGroupe();
        $eleveGroupe->setAnneeScolaire($annee);
        $eleveGroupe->setGroupe($groupe);
        $eleveGroupe->setEleve($eleve);

        $parent = new ParentEleve();
        $parent = $this->getDoctrine()->getRepository("projetBundle:ParentEleve")->findOneBy(array("id" => $eleve->getParent()));

        $em = $this->getDoctrine()->getManager();
        $em->merge($eleveGroupe);
        $em->flush();

        $message = \Swift_Message::newInstance(null);
        $messageCorps = "Votre enfant : " . $eleve->getPrenomEleve() . " " . $eleve->getNomEleve() . " a ete affecte dans le groupe : " . $groupe->getNomGroupe() . " " . $groupe->getNumGroupe() . " pour l'annee scolaire : " . $annee->getPeriode();
        $message->setFrom("primaschooltest@gmail.com");
        $message->setTo($parent->getEmailParent());
        $message->setSubject("Votre enfant a ete affecte a un groupe");
        $message->setContentType("text/html");
        $message->setBody($messageCorps);
        $mailer = $this->get("mailer");
        $mailer->send($message);

        $notification = new Notification();
        $notification->setDateNotification(new \DateTime("now"));
        $notification->setReciever($parent->getId());
        $notification->setTexteNotification($messageCorps);
        $session = $request->getSession();
        $user = $session->get("user");
        $notification->setTitreNotification($session->get("userType") . " : Votre enfant a ete affecte a un groupe");
        $notification->setSender($user->getId());
        $notification->setRecieverType("parent");
        $notification->setVu(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($notification);
        $em->flush();


        return new Response($serializer->serialize(array("status" => "inserted"), "json"));
    }

    /**
     * @Route("/getNumeroGroupe", name="getNumeroGroupe")
     */
    public function getNumeroGroupe(Request $request)
    {
        $numGroupeSuivant = 0;
        $serializer = SerializerBuilder::create()->build();

        $niveau = $request->get("niveauGroupe");

        $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findBy(array("niveauGroupe" => $niveau));
        $numGroupeSuivant = (count($groupes)) + 1;

        return new Response($serializer->serialize(array("numGroupeSuivant" => $numGroupeSuivant), "json"));

    }


    /**
     * @Route("/voirInfo", name="voirInfoAJAX")
     */
    public function voirInfo(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $matricule = $request->get("mat");
        $eleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve" => $matricule));


        $session = $request->getSession();
        $annee = $session->get("anneeScolaireCourante");


        $g = $this->getDoctrine()->getRepository("projetBundle:EleveGroupe")->findOneBy(array("anneeScolaire" => $annee, "eleve" => $eleve));
        $g2 = new EleveGroupe();
        $g2 = $g;

        if ($g == null) {
            $groupe = null;
        } else {
            $idGroupe = $g->getGroupe()->getId();


            $groupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $idGroupe));

        }


        $matieres = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("groupe" => $groupe));
        $listEnseignant = array();
        $listMatiere = array();
        foreach ($matieres as $mat) {
            $listMatiere[] = $mat;
            $enseignant = $this->getDoctrine()->getRepository("projetBundle:Enseignant")->findOneBy(array("id" => $mat->getEnseignant()));
            $listEnseignant[] = $enseignant;
        }

        $paiement = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findBy(array("eleve" => $eleve, "anneeScolaire" => $annee));

        $listPaiement = array();
        foreach ($paiement as $p) {
            $listPaiement[] = $p;
        }

        $infos = array("eleve" => $eleve, "groupe" => $groupe, "listMatiere" => $listMatiere, "listPaiement" => $listPaiement);

        return new Response($serializer->serialize($infos, "json"));
    }


    /**
     * @Route("/insererNotes", name="insererNotesAJAX")
     */
    public function insererNotes(Request $request)
    {
        $trimestre = $request->get("trimestre");


        $serializer = SerializerBuilder::create()->build();
        $annneScolaire = $request->get("anneeScolaire");


        $idEnseignant = $request->get("idEnseignant");
        $MatiereEtGroupe = explode("|", $request->get('idMatiere'));
        $idGroupe = $MatiereEtGroupe[0];
        $idMatiere = $MatiereEtGroupe[1];
        $enseignant = $this->getDoctrine()->getRepository("projetBundle:Enseignant")->findOneBy(array("id" => $idEnseignant));
        $anneeObject = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findOneBy(array("id" => $annneScolaire));
        $matiere = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findOneBy(array("id" => $idMatiere, "anneeScolaire" => $annneScolaire, "enseignant" => $enseignant));
        $groupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $idGroupe, "anneeScolaire" => $annneScolaire));
        $listEleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("groupe" => $groupe));

        foreach ($listEleve as $eleve) {
            $idEleve = $eleve->getId();


            for ($i = 1; $i < 4; $i++) {
                $noteVariableName = "note" . $idEleve . $i;

                $note = $request->get($noteVariableName);


                if ($note == "") {
                } else {
                    $examen = new Examen();
                    $examen->setMatiere($matiere);
                    $examen->setNoteExamen($note);
                    $examen->setAnneeScolaire($anneeObject);
                    $examen->setEleve($eleve);
                    $examen->setTrimestreExamen($trimestre);
                    $examen->setGroupe($groupe);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($examen);
                    $em->flush();
                }


            }


        }

        return new Response($serializer->serialize(array("status" => "inserted"), "json"));

    }

    /**
     * @Route("/listerEleveParIDGroupe", name="listerEleveParIDGroupeAJAX")
     */
    public function listerEleveParIDGroupes(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $receivedVariable = explode("|", $request->get("selectGroupe"));
        $idGroupe = $receivedVariable[0];
        $listEleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("groupe" => $idGroupe));

        return new Response($serializer->serialize($listEleve, "json"));
    }


    /**
     * @Route("/chargerGroupes", name="chargerGroupesAJAX")
     */
    public function chargerGroupes(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $annee = $request->get("annee");
        $idEnseignant = $request->get("idEnseignant");
        $listMatieres = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("anneeScolaire" => $annee, "enseignant" => $idEnseignant));
        $listMatiereGroupe = array();
        foreach ($listMatieres as $mat) {
            $matiere = new Matiere();
            $matiere = $mat;
            $matiereGroupe = new MatiereGroupe();
            $matiereGroupe->setGroupe($matiere->getGroupe());
            $matiereGroupe->setMatiere($matiere);
            // echo "<br>".$matiere->getGroupe()->getNomGroupe()." ".$matiere->getLibelleMatiere() ;
            $listMatiereGroupe[] = $matiereGroupe;
        }
        return new Response($serializer->serialize($listMatiereGroupe, "json"));
    }


    /**
     * @Route("/ListerGroupesParAnnees", name="ListerGroupesParAnneesAJAX")
     */
    public function ListerGroupesParAnnees(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $idAnnee = $request->get("idAnnee");
        $annee = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findOneBy(array("id" => $idAnnee));
        $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findBy(array("anneeScolaire" => $annee));
        return new Response($serializer->serialize($groupes, "json"));

    }


    /**
     * @Route("/ListerEleves", name="ListerElevesAJAX")
     */
    public function ListerEleves(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $session = $request->getSession();
        $annee = $session->get("anneeScolaireCourante");

        $eleves = $this->getDoctrine()->getManager()->getRepository("projetBundle:Eleve")->findAll();
        $listEleves = array();
        foreach ($eleves as $e) {

            $g = $this->getDoctrine()->getRepository("projetBundle:EleveGroupe")->findOneBy(array("eleve" => $e, "anneeScolaire" => $annee));
            if ($g == null) {
                $groupe = null;
            } else {
                $idGroupe = $g->getGroupe()->getId();


                $groupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $idGroupe));

            }


            $eleve = new Eleve();
            $paiement = $this->getDoctrine()->getRepository("projetBundle:Paiement")->findBy(array("eleve" => $e->getId()));
            $eleve->setParent($e->getParent());
            $eleve->setPrenomEleve($e->getPrenomEleve());
            $eleve->setNomEleve($e->getNomEleve());
            $eleve->setMatriculeEleve($e->getMatriculeEleve());
            $eleve->setNiveauEleve($e->getNiveauEleve());
            $dateNaissance = new \DateTime("now");
            $dateNaissance = $e->getDateNaissanceEleve();

            $eleve->setDateNaissanceEleve($dateNaissance->format("d-m-Y"));
            $eleve->setPaiement($paiement);
            $eleve->setGroupe($groupe);
            $listEleves[] = $eleve;


        }


        return new Response($serializer->serialize(array("listEleve" => $listEleves), "json"));
    }


    /**
     * @Route("/testREST", name="testREST")
     */
    public function testREST()
    {
        $serializer = SerializerBuilder::create()->build();

        return new Response($serializer->serialize(array("status" => "inserted"), 'json'));
    }


    /**
     * @Route("/AjouterEleve", name="ajouterEleveAJAX")
     */
    public function AjouterEleveREST(Request $request)
    {
        $matricule = $request->get("matriculeEleve");
        $idParent = $request->get("idParent");
        $nom = $request->get("nomEleve");
        $prenom = $request->get("prenomEleve");
        $sexe = $request->get("sexeEleve");
        $idGroupe = $request->get("idGroupe");
        $niveau = $request->get("niveauEleve");
        $session = $request->getSession();
        $annee = $session->get("anneeScolaireCourante");

        $dateNaissance = $request->get("dateNaissanceEleve");
        $d = new \DateTime($dateNaissance);
        $frais = $request->get("fraisEleve");

        $parent = $this->getDoctrine()->getRepository("projetBundle:ParentEleve")->findOneBy(array("id" => $idParent));
        $groupe = new Groupe();
        $groupe = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findOneBy(array("id" => $idGroupe));
        $serializer = SerializerBuilder::create()->build();
        $eleve = new Eleve();
        $eleve->setMatriculeEleve($matricule);
        $eleve->setParent($parent);
        $eleve->setNomEleve($nom);
        $eleve->setPrenomEleve($prenom);
        $eleve->setDateNaissanceEleve($d);
        $eleve->setSexeEleve($sexe);
        $eleve->setNiveauEleve($niveau);

        $message = \Swift_Message::newInstance(null);
        $messageCorps = "Un eleve vous a ete affecte\n Eleve : " . $eleve->getPrenomEleve() . " " . $eleve->getNomEleve();
        $message->setFrom("primaschooltest@gmail.com");
        $message->setTo($parent->getEmailParent());
        $message->setSubject("Un eleve vous a ete affecte");
        $message->setContentType("text/html");
        $message->setBody($messageCorps);
        $mailer = $this->get("mailer");
        $mailer->send($message);

        $notification = new Notification();
        $notification->setDateNotification(new \DateTime("now"));
        $notification->setReciever($parent->getId());
        $notification->setTitreNotification("Un eleve vous a ete affecte");
        $notification->setTexteNotification($messageCorps);
        $session = $request->getSession();
        $user = $session->get("user");
        $notification->setTitreNotification($session->get("userType") . " : Un eleve vous a ete affecte");
        $notification->setSender($user->getId());
        $notification->setRecieverType("parent");
        $notification->setVu(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($notification);
        $em->flush();

        $em = $this->getDoctrine()->getManager();


        $em->persist($eleve);
        $em->flush();
        $fraisString = "";
        $tot = 0;
        foreach ($frais as $f) {
            $fr = new Frais();
            $fr = $this->getDoctrine()->getRepository("projetBundle:Frais")->findOneBy(array("id" => $f));
            $fraisString .= $fr->getTypeFrais();
            $tot += $fr->getMontantFrais();

        }

        $p = new Paiement();
        $p->setEtatPaiement("NP");
        $p->setAnneeScolaire($annee);
        $p->setEleve($eleve);
        $p->setFraisPaiement($fraisString);
        $p->setTotalePaiement($tot);
        $em = $this->getDoctrine()->getManager();
        $em->merge($p);
        $em->flush();
        return new Response($serializer->serialize(array("status" => "inserted"), 'json'));


    }


    /**
     * @Route("/AjouterEnseignant", name="ajouterEnseignantAJAX")
     */
    public function AjouterEnseignantREST(Request $request)
    {
        $matricule = $request->get("matriculeEnseignant");
        $nom = $request->get("nomEnseignant");
        $prenom = $request->get("prenomEnseignant");
        $adresse = $request->get("adresseEnseignant");
        $cin = $request->get("cinEnseignant");
        $email = $request->get("emailEnseignant");
        $numTel = $request->get("numTelEnseignant");
        $idGrade = $request->get("idGrade");
        $grade = new grade();
        $grade = $this->getDoctrine()->getRepository("projetBundle:Grade")->findOneBy(array("id" => $idGrade));
        $serializer = SerializerBuilder::create()->build();
        $enseignant = new Enseignant();
        $enseignant->setMatriculeEnseignant($matricule);
        $enseignant->setNomEnseignant($nom);
        $enseignant->setPrenomEnseignant($prenom);
        $enseignant->setAdresseEnseignant($adresse);
        $enseignant->setCinEnseignant($cin);
        $enseignant->setEmailEnseignant($email);
        $enseignant->setNumTelEnseignant($numTel);
        $enseignant->setGrade($grade);
        $enseignant->setLoginEnseignant("Bilel2");
        $enseignant->setPasswordEnseignant("beldi2");
        $em = $this->getDoctrine()->getManager();

        try {
            $em->persist($enseignant);
            $em->flush();
            return new Response($serializer->serialize(array("status" => "inserted"), 'json'));
        } catch (UniqueConstraintViolationException $e) {
            return new Response($serializer->serialize(array("status" => "error"), 'json'));
        }


    }


    /**
     * @Route("/ListerEnseignant", name="ListerEnseignantAJAX")
     */
    public function ListerEnseignant(Request $request)
    {
        $idGrade = $this->getRequest()->get("idGrade");
        $serializer = SerializerBuilder::create()->build();
        $enseignants = $this->getDoctrine()->getManager()->getRepository("projetBundle:Enseignant")->findBy(array("grade" => $idGrade));
        $listEnseignants = array();
        foreach ($enseignants as $e) {
            $enseignant = new Enseignant();
            $enseignant->setMatriculeEnseignant($e->getMatriculeEnseignant());
            $enseignant->setNomEnseignant($e->getNomEnseignant());
            $enseignant->setPrenomEnseignant($e->getPrenomEnseignant());
            $enseignant->setCinEnseignant($e->getCinEnseignant());
            $enseignant->setAdresseEnseignant($e->getAdresseEnseignant());
            $enseignant->setEmailEnseignant($e->getEmailEnseignant());
            $enseignant->setNumTelEnseignant($e->getNumTelEnseignant());
            $enseignant->setLoginEnseignant("bilel");
            $enseignant->setPasswordEnseignant("beldi");

            $listEnseignants[] = $enseignant;

        }


        return new Response($serializer->serialize(array("listEnseignant" => $listEnseignants), "json"));
        die;
    }

    /**
     * @Route("/creerGroupe", name="creerGroupeAJAX")
     */
    public function creerGroupeREST(Request $request)
    {
        $niveauGroupe = $request->get("listGroupe");
        $numGroupe = $request->get("numGroupe");
        $anneeScolaire = $request->get("annee");
        $annee = new AnneeScolaire();

        $annee = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findOneBy(array("id" => $anneeScolaire));
        $nomGroupe = "";
        switch ($niveauGroupe) {
            case 1:
                $nomGroupe = "Premiere Annee";
                break;
            case 2:
                $nomGroupe = "Deuxieme Annee";
                break;
            case 3:
                $nomGroupe = "Troisieme Annee";
                break;
            case 4:
                $nomGroupe = "Quatrieme Annee";
                break;
            case 5:
                $nomGroupe = "Cinquieme Annee";
                break;
            case 6:
                $nomGroupe = "Sixieme Annee";
                break;
            default:
                $niveau = 0;
                break;
        }


        $serializer = SerializerBuilder::create()->build();


        $groupe = new Groupe();
        $groupe->setNumGroupe($numGroupe);
        $groupe->setNomGroupe($nomGroupe);
        $groupe->setNiveauGroupe($niveauGroupe);

        $groupe->setEmploi(null);


        $em = $this->getDoctrine()->getManager();
        $em->persist($groupe);
        $em->flush();

        return new Response($serializer->serialize(array("status" => "inserted"), 'json'));

    }


    /**
     * @Route("/affecter", name="affecter2")
     */
    public function affecterAction(Request $request)
    {

        $niveau = $request->get("niveau");
        $eleves = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findBy(array("niveauEleve" => $niveau, "groupe" => null));
        $groupes = $this->getDoctrine()->getRepository("projetBundle:Groupe")->findBy(array("niveauGroupe" => $niveau));
        $nbGroupes = count($groupes);
        $compteur = 0;
        foreach ($eleves as $e) {

            $groupe = new Groupe();
            $groupe = $groupes[$compteur];
            $newEleve = new Eleve();
            $newEleve = $e;
            $newEleve->setGroupe($groupe);
            $em = $this->getDoctrine()->getManager();
            $em->persist($newEleve);
            $em->flush();
            $compteur++;
            if ($compteur == $nbGroupes) {
                $compteur = 0;
            }

        }

        return new JsonResponse(array("result" => "affected"));


    }

    /**
     * @Route("/ListerGroupe", name="ListerGroupeAJAX")
     */
    public function ListerGroupe(Request $request)
    {
        $nomGroupe = $this->getRequest()->get("listGroupe");
        $anneeScolaire = $this->getRequest()->get("annees");
        $annee = new AnneeScolaire();
        $annee = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findOneBy(array("id" => $anneeScolaire));

        $serializer = SerializerBuilder::create()->build();

        //$enseignants = $this->getDoctrine()->getManager()->getRepository("projetBundle:Enseignant")->findBy(array("grade"=>$idGrade));
        $groupes = $this->getDoctrine()->getManager()->getRepository("projetBundle:Groupe")->findBy(array("nomGroupe" => $nomGroupe, "anneeScolaire" => $annee));
        $listGroupes = array();
        foreach ($groupes as $g) {
            $groupe = new Groupe();
            $groupe->setNomGroupe($g->getNomGroupe());
            $groupe->setNumGroupe($g->getNumGroupe());
            $groupe->setAnneeScolaire($g->getAnneeScolaire());
            $g2 = $this->getDoctrine()->getManager()->getRepository("projetBundle:Groupe")->findOneBy(array("nomGroupe" => $g->getNomGroupe(), "numGroupe" => $g->getNumGroupe()));
            $idGroupe = $g2->getId();
            $elevs = $this->getDoctrine()->getManager()->getRepository("projetBundle:Eleve")->findBy(array("groupe" => $idGroupe));
            $nbrEleves = 0;
            foreach ($elevs as $e) {
                $nbrEleves++;
            }
            $groupe->setId($idGroupe);
            $groupe->setNbrEleves($nbrEleves);

            $listGroupes[] = $groupe;

        }
        return new Response($serializer->serialize(array("listGroupe" => $listGroupes), "json"));

    }


    /**
     * @Route("/AjouterPersonnel", name="ajouterPersonnelAJAX")
     */
    public function AjouterPersonnelREST(Request $request)
    {
        $matricule = $request->get("matriculePersonnel");
        $nom = $request->get("nomPersonnel");
        $prenom = $request->get("prenomPersonnel");
        $adresse = $request->get("adressePersonnel");
        $cin = $request->get("cinPersonnel");
        $email = $request->get("emailPersonnel");
        $numTel = $request->get("numTelPersonnel");
        $idPoste = $request->get("idPoste");
        $poste = new Poste();
        $poste = $this->getDoctrine()->getRepository("projetBundle:Poste")->findOneBy(array("id" => $idPoste));
        $serializer = SerializerBuilder::create()->build();
        $personnel = new Personnel();
        $personnel->setMatriculePersonnel($matricule);
        $personnel->setNomPersonnel($nom);
        $personnel->setPrenomPersonnel($prenom);
        $personnel->setAdressePersonnel($adresse);
        $personnel->setCinPersonnel($cin);
        $personnel->setEmailPersonnel($email);
        $personnel->setNumTelPersonnel($numTel);
        $personnel->setPoste($poste);
        $personnel->setLoginPersonnel("Bilel");
        $personnel->setPasswordPersonnel("Beldi");
        $em = $this->getDoctrine()->getManager();

        try {
            $em->persist($personnel);
            $em->flush();
            return new Response($serializer->serialize(array("status" => "inserted"), 'json'));
        } catch (UniqueConstraintViolationException $e) {
            return new Response($serializer->serialize(array("status" => "error"), 'json'));
        }


    }


    /**
     * @Route("/ListerPersonnel", name="ListerPersonnelAJAX")
     */
    public function ListerPersonnel(Request $request)
    {
        $idPoste = $this->getRequest()->get("idPoste");
        $serializer = SerializerBuilder::create()->build();
        $personnels = $this->getDoctrine()->getManager()->getRepository("projetBundle:Personnel")->findBy(array("poste" => $idPoste));
        $listPersonnel = array();
        foreach ($personnels as $p) {
            $personnel = new Personnel();
            $personnel->setMatriculePersonnel($p->getMatriculePersonnel());
            $personnel->setNomPersonnel($p->getNomPersonnel());
            $personnel->setPrenomPersonnel($p->getPrenomPersonnel());
            $personnel->setCinPersonnel($p->getCinPersonnel());
            $personnel->setAdressePersonnel($p->getAdressePersonnel());
            $personnel->setEmailPersonnel($p->getEmailPersonnel());
            $personnel->setNumTelPersonnel($p->getNumTelPersonnel());
            $personnel->setLoginPersonnel("bilel");
            $personnel->setPasswordPersonnel("beldi");

            $listPersonnel[] = $personnel;

        }


        return new Response($serializer->serialize(array("listPersonnels" => $listPersonnel), "json"));
        die;
    }


}
