<?php

namespace projetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/DeleteAndUpdate", name="DeleteAndUpdate")
 */
class DeleteAndUpdateController extends Controller
{

    /**
     * @Route("/updateFormMatiere", name="updateFormMatiere")
     */
    public function updateFormMatiere(Request $request)
    {

        $session = $request->getSession() ;
        $annee = $session->get("anneeScolaireCourante") ;
        $nomMatiere=$request->get("nomMatiere");
        $matiere = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findOneBy(array("libelleMatiere"=>$nomMatiere, "anneeScolaire"=>$annee));

        $htmlForm = "
                        <table border='0'>
                         <tr><td ><span style='margin-right: 25px; font-size: 18px'>Libellé matiere :</span></td><td><input type='text' id='libMatiere' value='{$matiere->getLibelleMatiere()}'> </td></tr><br> 
                      </table>
                       " ;
        echo $htmlForm ;
        die ;



    }

    /**
     * @Route("/updateLibelleMatiere", name="updateLibelleMatiere")
     */
    public function updateLibelleMatiere(Request $request)
    {    $session = $request->getSession() ;
        $annee = $session->get("anneeScolaireCourante") ;
        $oldlibMatiere = $request->get("oldlibMatiere") ;
        $newlibMatiere = $request->get("newlibMatiere") ;
        $matieres = $this->getDoctrine()->getRepository("projetBundle:Matiere")->findBy(array("libelleMatiere"=>$oldlibMatiere, "anneeScolaire"=>$annee));
            $em = $this->getDoctrine()->getManager() ;
        foreach ($matieres as $m){
            $m->setLibelleMatiere($newlibMatiere);
             $em->merge($m) ;
             $em->flush() ;
        }

      echo "done" ;
       die ;
    }



}
