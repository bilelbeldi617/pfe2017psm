<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'ListerGroupesParAnneesAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerGroupesParAnnees',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/ListerGroupesParAnnees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ListerElevesAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerEleves',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/ListerEleves',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'testREST' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::testREST',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/testREST',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterEleveAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterEleveREST',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/AjouterEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterEnseignantAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterEnseignantREST',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/AjouterEnseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ListerEnseignantAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerEnseignant',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/ListerEnseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creerGroupeAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::creerGroupeREST',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/creerGroupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affecter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/affecter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ListerGroupeAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerGroupe',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/ListerGroupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterPersonnelAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterPersonnelREST',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/AjouterPersonnel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ListerPersonnelAJAX' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerPersonnel',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RESTAPI/ListerPersonnel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sendmail' => array (  0 =>   array (    0 => 'email',  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\DefaultController::sendmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'text',      1 => '/sendmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterEleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::listerEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/ajouterEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listerEleves' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/listerEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterEnseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/ajouterEnseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listerEnseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::listerEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/listerEnseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creerGroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::creerGroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/creerGroupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listerGroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::listerGroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/listerGroupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affecterEleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::affecterEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/affecterEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genererBulletins' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::genererBulletinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/genererBulletins',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creerEmploi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::creerEmploiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/creerEmploi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genererBulletinGroupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::genererBulletinGroupeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/genererBulletinGroupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listerEmplois' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::listerEmploisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/listerEmplois',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annoncerJours' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::annoncerJoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/annoncerJours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterPersonnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterPersonnelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/ajouterPersonnel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listerPersonnels' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forAdminController::listerPersonnelsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/listerPersonnels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashEnseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forEnseignantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Enseignant/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creerExamen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forEnseignantController::creerExamenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Enseignant/creerExamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listerExamens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forEnseignantController::listerExamensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Enseignant/listerExamens',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contacterParent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forEnseignantController::contacterParentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Enseignant/contacterParent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashParent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'projetBundle\\Controller\\forParentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Parent/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
