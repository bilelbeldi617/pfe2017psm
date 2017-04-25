<?php

namespace projetBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use projetBundle\Entity\Enseignant;
use projetBundle\Entity\ParentEleve;
use projetBundle\Entity\PersonnelAdministratif;
use projetBundle\Entity\AnneeScolaire;

use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class DefaultController extends Controller
{




    /**
     * @Route("/testTemplate", name="testTemplate")
     */
    public function EleveAffecterParentAction()
    {

        return $this->render("AffecterEleveGroupeEmailModel.html.twig", array("nomPrenomEleve"=>"chaouki", "nomnumGroupe"=>"Troisieme 1", "anneeScolaire"=>"2017/2018"));


    }




    /**
     * @Route("/sendmail", name="sendmail")
     */
    public function sendmailAction(Request $request){

        $dest = $request->get("destination");
        $login = $request->get("login");
        $password = $request->get("pass");
        $messageCorps = "Login : ".$login." pass : ".$password;
        $serializer = SerializerBuilder::create()->build() ;

        try {
            $message = \Swift_Message::newInstance(null);
            $fromadress = "primaschooltest@gmail.com" ;
            $message->setFrom($fromadress);
            $message->setTo($dest);
            $message->setSubject("Un parent");
            $message->setContentType("text/html") ;
            $message->setBody($messageCorps);
            $mailer = $this->get("mailer");
            $mailer->send($message);

            return new Response($serializer->serialize(array("status"=>"inserted"), 'json')) ;
        } catch (Exception $e) {
            echo $e->getMessage() ;
            return new Response($serializer->serialize(array("status"=>"error"), 'json')) ;
        }






    }



    /**
     * @Route("/", name="index")
     */
    public function indexAction(){

        return $this->redirect($this->generateUrl("login"));

    }

    /**
     * @Route("/testEleve", name="testEleve")
     */
    public function testEleveAction(){

        $eleve = $this->getDoctrine()->getRepository("projetBundle:Eleve")->findOneBy(array("matriculeEleve"=>"97585455"));
        echo var_dump($eleve);
        die;
    }

    /**
     * @Route("/testAnnee", name="testAnnee")
     */
    public function testAnneeAction(){

        $dateAujourdhui = new \DateTime("now");
        $year = $dateAujourdhui->format("Y");
        $m = $dateAujourdhui->format("m");
        $anneeScolaireCourant = "";
        if(($m>6) && ($m<=9)) {

            $anneeScolaireCourant = $year."/".($year + 1);
        }else{
            $anneeScolaireCourant = ($year-1)."/".$year;
        }
            $a = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findOneBy(array("courante"=>1));

            if($a->getPeriode() == $anneeScolaireCourant){
                //echo ("le");

            }else{
                //echo("oui");
                $a->setCourante(0);
                $em = $this->getDoctrine()->getManager();
                $em->persist($a);
                $em->flush();
                $anneeScolaire = new AnneeScolaire();
                $anneeScolaire->setPeriode($anneeScolaireCourant);
                $anneeScolaire->setCourante(1);
                $em = $this->getDoctrine()->getManager();
                $em->persist($anneeScolaire);
                $em->flush();

            }





    }



    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        if($request->getMethod() == "POST"){



            $login = mysql_real_escape_string($request->get("login")) ;
            $password = mysql_real_escape_string($request->get("password")) ;

            $em=$this->getDoctrine()->getRepository("projetBundle:PersonnelAdministratif") ;
            $pa = new PersonnelAdministratif() ;
            $pa = $em->findOneBy(array("loginPa"=>$login, "passwordPa"=>$password)) ;


            $dateAujourdhui = new \DateTime("now");
            $year = $dateAujourdhui->format("Y");
            $m = $dateAujourdhui->format("m");
            $anneeScolaireCourant = "";
            if(($m>6) && ($m<=9)) {

                $anneeScolaireCourant = $year."/".($year + 1);
            }else{
                $anneeScolaireCourant = ($year-1)."/".$year;
            }

            $a = $this->getDoctrine()->getRepository("projetBundle:AnneeScolaire")->findOneBy(array("courante"=>1));


            if($a->getPeriode() == $anneeScolaireCourant){


            }else{
                //echo("oui");
                $a->setCourante(0);
                $em = $this->getDoctrine()->getManager();
                $em->persist($a);
                $em->flush();
                $anneeScolaire = new AnneeScolaire();
                $anneeScolaire->setPeriode($anneeScolaireCourant);
                $anneeScolaire->setCourante(1);
                $em = $this->getDoctrine()->getManager();
                $em->persist($anneeScolaire);
                $em->flush();
                $a = $anneeScolaire;

            }

            if ($pa != null){

                $session = $request->getSession() ;
                $session->start() ;
                $session->set("user", $pa) ;
                $session->set("anneeScolaireCourante", $a);
                $session->set("userType", "admin") ;
                return $this->redirect($this->generateUrl("dashAdmin"));


            }else {

                $em = $this->getDoctrine()->getRepository("projetBundle:Enseignant");
                $enseignant = new Enseignant();
                $enseignant = $em->findOneBy(array("loginEnseignant"=>$login, "passwordEnseignant"=>$password));
                if ($enseignant != null){
                    $session = $request->getSession() ;
                    $session->start() ;
                    $session->set("anneeScoalireCourante", $a);
                    $session->set("user", $enseignant) ;
                    $session->set("userType", "enseignant") ;
                    return $this->redirect($this->generateUrl("dashEnseignant"));

                //return $this->render('projetBundle:Default:login.html.twig',array("message"=>"Login et mot de passe introuvable !") );

            }else{
                    //return $this->render('projetBundle:Default:login.html.twig',array("message"=>"Login et mot de passe introuvable !") );
                    $em = $this->getDoctrine()->getRepository("projetBundle:ParentEleve");
                    $parent = new ParentEleve();
                    $parent = $em->findOneBy(array("loginParent"=>$login, "passwordParent"=>$password));
                    if ($parent != null){
                        $session = $request->getSession() ;
                        $session->start() ;
                        $session->set("anneeScoalireCourante", $a);
                        $session->set("user", $parent) ;
                        $session->set("userType", "parent") ;
                        return $this->redirect($this->generateUrl("dashParent"));
                }else{
                        return $this->render('projetBundle:Default:login.html.twig',array("message"=>"Login et mot de passe introuvable !") );
                    }
                }
            }




        }else {
               return $this->render("@projet/Default/login.html.twig") ;
        }
    }


}
