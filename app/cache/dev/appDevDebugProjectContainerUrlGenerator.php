<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
                '_wdt' => array(0 => array(0 => 'token',), 1 => array('_controller' => 'web_profiler.controller.profiler:toolbarAction',), 2 => array(), 3 => array(0 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'token',), 1 => array(0 => 'text', 1 => '/_wdt',),), 4 => array(), 5 => array(),),
                '_profiler_home' => array(0 => array(), 1 => array('_controller' => 'web_profiler.controller.profiler:homeAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/_profiler/',),), 4 => array(), 5 => array(),),
                '_profiler_search' => array(0 => array(), 1 => array('_controller' => 'web_profiler.controller.profiler:searchAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/_profiler/search',),), 4 => array(), 5 => array(),),
                '_profiler_search_bar' => array(0 => array(), 1 => array('_controller' => 'web_profiler.controller.profiler:searchBarAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/_profiler/search_bar',),), 4 => array(), 5 => array(),),
                '_profiler_purge' => array(0 => array(), 1 => array('_controller' => 'web_profiler.controller.profiler:purgeAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/_profiler/purge',),), 4 => array(), 5 => array(),),
                '_profiler_info' => array(0 => array(0 => 'about',), 1 => array('_controller' => 'web_profiler.controller.profiler:infoAction',), 2 => array(), 3 => array(0 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'about',), 1 => array(0 => 'text', 1 => '/_profiler/info',),), 4 => array(), 5 => array(),),
                '_profiler_phpinfo' => array(0 => array(), 1 => array('_controller' => 'web_profiler.controller.profiler:phpinfoAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/_profiler/phpinfo',),), 4 => array(), 5 => array(),),
                '_profiler_search_results' => array(0 => array(0 => 'token',), 1 => array('_controller' => 'web_profiler.controller.profiler:searchResultsAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/search/results',), 1 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'token',), 2 => array(0 => 'text', 1 => '/_profiler',),), 4 => array(), 5 => array(),),
                '_profiler' => array(0 => array(0 => 'token',), 1 => array('_controller' => 'web_profiler.controller.profiler:panelAction',), 2 => array(), 3 => array(0 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'token',), 1 => array(0 => 'text', 1 => '/_profiler',),), 4 => array(), 5 => array(),),
                '_profiler_router' => array(0 => array(0 => 'token',), 1 => array('_controller' => 'web_profiler.controller.router:panelAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/router',), 1 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'token',), 2 => array(0 => 'text', 1 => '/_profiler',),), 4 => array(), 5 => array(),),
                '_profiler_exception' => array(0 => array(0 => 'token',), 1 => array('_controller' => 'web_profiler.controller.exception:showAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/exception',), 1 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'token',), 2 => array(0 => 'text', 1 => '/_profiler',),), 4 => array(), 5 => array(),),
                '_profiler_exception_css' => array(0 => array(0 => 'token',), 1 => array('_controller' => 'web_profiler.controller.exception:cssAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/exception.css',), 1 => array(0 => 'variable', 1 => '/', 2 => '[^/]++', 3 => 'token',), 2 => array(0 => 'text', 1 => '/_profiler',),), 4 => array(), 5 => array(),),
                '_twig_error_test' => array(0 => array(0 => 'code', 1 => '_format',), 1 => array('_controller' => 'twig.controller.preview_error:previewErrorPageAction', '_format' => 'html',), 2 => array('code' => '\\d+',), 3 => array(0 => array(0 => 'variable', 1 => '.', 2 => '[^/]++', 3 => '_format',), 1 => array(0 => 'variable', 1 => '/', 2 => '\\d+', 3 => 'code',), 2 => array(0 => 'text', 1 => '/_error',),), 4 => array(), 5 => array(),),
                'ajouterPaiementTot' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterPaiementTot',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ajouterPaiementTot',),), 4 => array(), 5 => array(),),
                'ajouterPaiement' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterPaiement',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ajouterPaiement',),), 4 => array(), 5 => array(),),
                'ajouterTranches' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterTranches',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ajouterTranches',),), 4 => array(), 5 => array(),),
                'getNotif' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::getNotif',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/getNotif',),), 4 => array(), 5 => array(),),
                'ajouterParent' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterParent',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ajouterParent',),), 4 => array(), 5 => array(),),
                'affecterUnEleve' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterUnEleve',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/affecterUnEleve',),), 4 => array(), 5 => array(),),
                'getNumeroGroupe' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::getNumeroGroupe',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/getNumeroGroupe',),), 4 => array(), 5 => array(),),
                'voirInfoAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::voirInfo',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/voirInfo',),), 4 => array(), 5 => array(),),
                'insererNotesAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::insererNotes',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/insererNotes',),), 4 => array(), 5 => array(),),
                'listerEleveParIDGroupeAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::listerEleveParIDGroupes',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/listerEleveParIDGroupe',),), 4 => array(), 5 => array(),),
                'chargerGroupesAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::chargerGroupes',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/chargerGroupes',),), 4 => array(), 5 => array(),),
                'ListerGroupesParAnneesAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerGroupesParAnnees',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ListerGroupesParAnnees',),), 4 => array(), 5 => array(),),
                'ListerElevesAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerEleves',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ListerEleves',),), 4 => array(), 5 => array(),),
                'testREST' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::testREST',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/testREST',),), 4 => array(), 5 => array(),),
                'ajouterEleveAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterEleveREST',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/AjouterEleve',),), 4 => array(), 5 => array(),),
                'ajouterEnseignantAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterEnseignantREST',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/AjouterEnseignant',),), 4 => array(), 5 => array(),),
                'ListerEnseignantAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerEnseignant',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ListerEnseignant',),), 4 => array(), 5 => array(),),
                'creerGroupeAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::creerGroupeREST',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/creerGroupe',),), 4 => array(), 5 => array(),),
                'affecter2' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/affecter',),), 4 => array(), 5 => array(),),
                'ListerGroupeAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerGroupe',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ListerGroupe',),), 4 => array(), 5 => array(),),
                'ajouterPersonnelAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterPersonnelREST',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/AjouterPersonnel',),), 4 => array(), 5 => array(),),
                'ListerPersonnelAJAX' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerPersonnel',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/RESTAPI/ListerPersonnel',),), 4 => array(), 5 => array(),),
                'sendmail' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\DefaultController::sendmailAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/sendmail',),), 4 => array(), 5 => array(),),
                'index' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\DefaultController::indexAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/',),), 4 => array(), 5 => array(),),
                'testEleve' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\DefaultController::testEleveAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/testEleve',),), 4 => array(), 5 => array(),),
                'testAnnee' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\DefaultController::testAnneeAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/testAnnee',),), 4 => array(), 5 => array(),),
                'login' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\DefaultController::loginAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/login',),), 4 => array(), 5 => array(),),
                'affecterManuellement' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::affecterManuellementAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/affecterManuellement',),), 4 => array(), 5 => array(),),
                'affecterAutomatiquement' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::affecterAutomatiquementAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/affecterAutomatiquement',),), 4 => array(), 5 => array(),),
                'payer' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::payerAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/payer',),), 4 => array(), 5 => array(),),
                'consulterPaiements' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::consulterPaiementsAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/consulterPaiements',),), 4 => array(), 5 => array(),),
                'listerParents' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::listerParentsAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/listerParents',),), 4 => array(), 5 => array(),),
                'affecter' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::affecterAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/affecter',),), 4 => array(), 5 => array(),),
                'dashAdmin' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::indexAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/',),), 4 => array(), 5 => array(),),
                'ajouterEleve' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::listerEleveAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/ajouterEleve',),), 4 => array(), 5 => array(),),
                'listerEleves' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::ajouterEleveAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/listerEleve',),), 4 => array(), 5 => array(),),
                'ajouterEnseignant' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::ajouterEnseignantAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/ajouterEnseignant',),), 4 => array(), 5 => array(),),
                'listerEnseignant' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::listerEnseignantAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/listerEnseignant',),), 4 => array(), 5 => array(),),
                'creerGroupe' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::creerGroupeAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/creerGroupe',),), 4 => array(), 5 => array(),),
                'listerGroupe' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::listerGroupeAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/listerGroupe',),), 4 => array(), 5 => array(),),
                'affecterEleve' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::affecterEleveAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/affecterEleve',),), 4 => array(), 5 => array(),),
                'genererBulletins' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::genererBulletinAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/genererBulletins',),), 4 => array(), 5 => array(),),
                'creerEmploi' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::creerEmploiAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/creerEmploi',),), 4 => array(), 5 => array(),),
                'genererBulletinGroupe' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::genererBulletinGroupeAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/genererBulletinGroupe',),), 4 => array(), 5 => array(),),
                'listerEmplois' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::listerEmploisAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/listerEmplois',),), 4 => array(), 5 => array(),),
                'annoncerJours' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::annoncerJoursAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/annoncerJours',),), 4 => array(), 5 => array(),),
                'ajouterPersonnel' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::ajouterPersonnelAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/ajouterPersonnel',),), 4 => array(), 5 => array(),),
                'listerPersonnels' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forAdminController::listerPersonnelsAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Admin/listerPersonnels',),), 4 => array(), 5 => array(),),
                'dashEnseignant' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forEnseignantController::indexAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Enseignant/',),), 4 => array(), 5 => array(),),
                'creerExamen' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forEnseignantController::creerExamenAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Enseignant/creerExamen',),), 4 => array(), 5 => array(),),
                'listerExamens' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forEnseignantController::listerExamensAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Enseignant/listerExamens',),), 4 => array(), 5 => array(),),
                'contacterParent' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forEnseignantController::contacterParentAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Enseignant/contacterParent',),), 4 => array(), 5 => array(),),
                'inserernotes' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forEnseignantController::insererNotesExamenAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Enseignant/insererNotes',),), 4 => array(), 5 => array(),),
                'voirToutNotif' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::voirToutNotifAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/voirToutNotif',),), 4 => array(), 5 => array(),),
                'dashParent' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::indexAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/',),), 4 => array(), 5 => array(),),
                'profile' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::profileAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/profile',),), 4 => array(), 5 => array(),),
                'contacterAdmin' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::contacterAdminAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/contacterAdmin',),), 4 => array(), 5 => array(),),
                'envoyerMail' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::envoyerMailAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/envoyerMail',),), 4 => array(), 5 => array(),),
                'contacterEnseignant' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::contacterEnseignantAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/contacterEnseignant',),), 4 => array(), 5 => array(),),
                'consulterPaiement' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::consulterPaiementAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/consulterPaiement',),), 4 => array(), 5 => array(),),
                'consulterHistorique' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::consulterHistoriqueAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/consulterHistorique',),), 4 => array(), 5 => array(),),
                'consulterNotes' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::consulterNotesAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/consulterNotes',),), 4 => array(), 5 => array(),),
                'mesEleves' => array(0 => array(), 1 => array('_controller' => 'projetBundle\\Controller\\forParentController::mesElevesAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/Parent/mesEleves',),), 4 => array(), 5 => array(),),
                'homepage' => array(0 => array(), 1 => array('_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',), 2 => array(), 3 => array(0 => array(0 => 'text', 1 => '/',),), 4 => array(), 5 => array(),),
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
