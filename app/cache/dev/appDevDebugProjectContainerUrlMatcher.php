<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/RESTAPI')) {
            if (0 === strpos($pathinfo, '/RESTAPI/voir')) {
                // voirPageCahierAJAX
                if ($pathinfo === '/RESTAPI/voirPageCahier') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::voirPageCahierAJAX',  '_route' => 'voirPageCahierAJAX',);
                }

                // voirInfoMatiereAJAX
                if ($pathinfo === '/RESTAPI/voirInfoMatiere') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::voirInfoMatiere',  '_route' => 'voirInfoMatiereAJAX',);
                }

            }

            if (0 === strpos($pathinfo, '/RESTAPI/a')) {
                // ajouterMatiereAjax
                if ($pathinfo === '/RESTAPI/ajouterMatiere') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterMatiere',  '_route' => 'ajouterMatiereAjax',);
                }

                // affecterEnseignantGroupeAjax
                if ($pathinfo === '/RESTAPI/affecterEnseignantGroupe') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterEnseignantGroupe',  '_route' => 'affecterEnseignantGroupeAjax',);
                }

            }

            if (0 === strpos($pathinfo, '/RESTAPI/in')) {
                // infoEnseignantAjax
                if ($pathinfo === '/RESTAPI/infoEnseignant') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::infoEnseignant',  '_route' => 'infoEnseignantAjax',);
                }

                // insererNotesEnseignantAJAX
                if ($pathinfo === '/RESTAPI/insererNotesEnseignant') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::insererNotesAJAX',  '_route' => 'insererNotesEnseignantAJAX',);
                }

            }

            if (0 === strpos($pathinfo, '/RESTAPI/ajouter')) {
                if (0 === strpos($pathinfo, '/RESTAPI/ajouterPaiement')) {
                    // ajouterPaiementTot
                    if ($pathinfo === '/RESTAPI/ajouterPaiementTot') {
                        return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterPaiementTot',  '_route' => 'ajouterPaiementTot',);
                    }

                    // ajouterPaiement
                    if ($pathinfo === '/RESTAPI/ajouterPaiement') {
                        return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterPaiement',  '_route' => 'ajouterPaiement',);
                    }

                }

                // ajouterTranches
                if ($pathinfo === '/RESTAPI/ajouterTranches') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterTranches',  '_route' => 'ajouterTranches',);
                }

            }

            // getNotif
            if ($pathinfo === '/RESTAPI/getNotif') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::getNotif',  '_route' => 'getNotif',);
            }

            if (0 === strpos($pathinfo, '/RESTAPI/a')) {
                // ajouterParent
                if ($pathinfo === '/RESTAPI/ajouterParent') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ajouterParent',  '_route' => 'ajouterParent',);
                }

                // affecterUnEleve
                if ($pathinfo === '/RESTAPI/affecterUnEleve') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterUnEleve',  '_route' => 'affecterUnEleve',);
                }

            }

            // getNumeroGroupe
            if ($pathinfo === '/RESTAPI/getNumeroGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::getNumeroGroupe',  '_route' => 'getNumeroGroupe',);
            }

            // voirInfoAJAX
            if ($pathinfo === '/RESTAPI/voirInfo') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::voirInfo',  '_route' => 'voirInfoAJAX',);
            }

            // insererNotesAJAX
            if ($pathinfo === '/RESTAPI/insererNotes') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::insererNotes',  '_route' => 'insererNotesAJAX',);
            }

            // listerEleveParIDGroupeAJAX
            if ($pathinfo === '/RESTAPI/listerEleveParIDGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::listerEleveParIDGroupes',  '_route' => 'listerEleveParIDGroupeAJAX',);
            }

            // chargerGroupesAJAX
            if ($pathinfo === '/RESTAPI/chargerGroupes') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::chargerGroupes',  '_route' => 'chargerGroupesAJAX',);
            }

            if (0 === strpos($pathinfo, '/RESTAPI/Lister')) {
                // ListerGroupesParAnneesAJAX
                if ($pathinfo === '/RESTAPI/ListerGroupesParAnnees') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerGroupesParAnnees',  '_route' => 'ListerGroupesParAnneesAJAX',);
                }

                // ListerElevesAJAX
                if ($pathinfo === '/RESTAPI/ListerEleves') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerEleves',  '_route' => 'ListerElevesAJAX',);
                }

            }

            // testREST
            if ($pathinfo === '/RESTAPI/testREST') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::testREST',  '_route' => 'testREST',);
            }

            if (0 === strpos($pathinfo, '/RESTAPI/AjouterE')) {
                // ajouterEleveAJAX
                if ($pathinfo === '/RESTAPI/AjouterEleve') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterEleveREST',  '_route' => 'ajouterEleveAJAX',);
                }

                // ajouterEnseignantAJAX
                if ($pathinfo === '/RESTAPI/AjouterEnseignant') {
                    return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterEnseignantREST',  '_route' => 'ajouterEnseignantAJAX',);
                }

            }

            // ListerEnseignantAJAX
            if ($pathinfo === '/RESTAPI/ListerEnseignant') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerEnseignant',  '_route' => 'ListerEnseignantAJAX',);
            }

            // creerGroupeAJAX
            if ($pathinfo === '/RESTAPI/creerGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::creerGroupeREST',  '_route' => 'creerGroupeAJAX',);
            }

            // affecter2
            if ($pathinfo === '/RESTAPI/affecter') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterAction',  '_route' => 'affecter2',);
            }

            // ListerGroupeAJAX
            if ($pathinfo === '/RESTAPI/ListerGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerGroupe',  '_route' => 'ListerGroupeAJAX',);
            }

            // ajouterPersonnelAJAX
            if ($pathinfo === '/RESTAPI/AjouterPersonnel') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::AjouterPersonnelREST',  '_route' => 'ajouterPersonnelAJAX',);
            }

            // ListerPersonnelAJAX
            if ($pathinfo === '/RESTAPI/ListerPersonnel') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::ListerPersonnel',  '_route' => 'ListerPersonnelAJAX',);
            }

        }

        // sendmail
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::sendmailAction',  '_route' => 'sendmail',);
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/test')) {
            // testEleve
            if ($pathinfo === '/testEleve') {
                return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::testEleveAction',  '_route' => 'testEleve',);
            }

            // testAnnee
            if ($pathinfo === '/testAnnee') {
                return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::testAnneeAction',  '_route' => 'testAnnee',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/Admin')) {
            // listerEleveParGroupe
            if ($pathinfo === '/Admin/listerEleveParGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerEleveParGroupeAction',  '_route' => 'listerEleveParGroupe',);
            }

            // ajouterMatiere
            if ($pathinfo === '/Admin/ajouterMatiere') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterMatiereAction',  '_route' => 'ajouterMatiere',);
            }

            // listerMatieres
            if ($pathinfo === '/Admin/listerMatieres') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerMatieresAction',  '_route' => 'listerMatieres',);
            }

            if (0 === strpos($pathinfo, '/Admin/affecter')) {
                // affecterManuellement
                if ($pathinfo === '/Admin/affecterManuellement') {
                    return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::affecterManuellementAction',  '_route' => 'affecterManuellement',);
                }

                // affecterAutomatiquement
                if ($pathinfo === '/Admin/affecterAutomatiquement') {
                    return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::affecterAutomatiquementAction',  '_route' => 'affecterAutomatiquement',);
                }

            }

            // payer
            if ($pathinfo === '/Admin/payer') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::payerAction',  '_route' => 'payer',);
            }

            // consulterPaiements
            if ($pathinfo === '/Admin/consulterPaiements') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::consulterPaiementsAction',  '_route' => 'consulterPaiements',);
            }

            // listerParents
            if ($pathinfo === '/Admin/listerParents') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerParentsAction',  '_route' => 'listerParents',);
            }

            // affecter
            if ($pathinfo === '/Admin/affecter') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::affecterAction',  '_route' => 'affecter',);
            }

            // dashAdmin
            if (rtrim($pathinfo, '/') === '/Admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dashAdmin');
                }

                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::indexAction',  '_route' => 'dashAdmin',);
            }

            // ajouterEleve
            if ($pathinfo === '/Admin/ajouterEleve') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerEleveAction',  '_route' => 'ajouterEleve',);
            }

            // listerEleves
            if ($pathinfo === '/Admin/listerEleve') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterEleveAction',  '_route' => 'listerEleves',);
            }

            // ajouterEnseignant
            if ($pathinfo === '/Admin/ajouterEnseignant') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterEnseignantAction',  '_route' => 'ajouterEnseignant',);
            }

            // listerEnseignant
            if ($pathinfo === '/Admin/listerEnseignant') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerEnseignantAction',  '_route' => 'listerEnseignant',);
            }

            // creerGroupe
            if ($pathinfo === '/Admin/creerGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::creerGroupeAction',  '_route' => 'creerGroupe',);
            }

            // listerGroupe
            if ($pathinfo === '/Admin/listerGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerGroupeAction',  '_route' => 'listerGroupe',);
            }

            // affecterEleve
            if ($pathinfo === '/Admin/affecterEleve') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::affecterEleveAction',  '_route' => 'affecterEleve',);
            }

            // genererBulletins
            if ($pathinfo === '/Admin/genererBulletins') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::genererBulletinAction',  '_route' => 'genererBulletins',);
            }

            // creerEmploi
            if ($pathinfo === '/Admin/creerEmploi') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::creerEmploiAction',  '_route' => 'creerEmploi',);
            }

            // genererBulletinGroupe
            if ($pathinfo === '/Admin/genererBulletinGroupe') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::genererBulletinGroupeAction',  '_route' => 'genererBulletinGroupe',);
            }

            // listerEmplois
            if ($pathinfo === '/Admin/listerEmplois') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerEmploisAction',  '_route' => 'listerEmplois',);
            }

            if (0 === strpos($pathinfo, '/Admin/a')) {
                // annoncerJours
                if ($pathinfo === '/Admin/annoncerJours') {
                    return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::annoncerJoursAction',  '_route' => 'annoncerJours',);
                }

                // ajouterPersonnel
                if ($pathinfo === '/Admin/ajouterPersonnel') {
                    return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::ajouterPersonnelAction',  '_route' => 'ajouterPersonnel',);
                }

            }

            // listerPersonnels
            if ($pathinfo === '/Admin/listerPersonnels') {
                return array (  '_controller' => 'projetBundle\\Controller\\forAdminController::listerPersonnelsAction',  '_route' => 'listerPersonnels',);
            }

        }

        if (0 === strpos($pathinfo, '/Enseignant')) {
            // listerCahierEnseignant
            if ($pathinfo === '/Enseignant/listerCahierEnseignant') {
                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::listerCahierEnseignantAction',  '_route' => 'listerCahierEnseignant',);
            }

            // saisirCahierTexte
            if ($pathinfo === '/Enseignant/saisirCahierTexte') {
                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::saisirCahierTexteAction',  '_route' => 'saisirCahierTexte',);
            }

            // dashEnseignant
            if (rtrim($pathinfo, '/') === '/Enseignant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dashEnseignant');
                }

                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::indexAction',  '_route' => 'dashEnseignant',);
            }

            // creerExamen
            if ($pathinfo === '/Enseignant/creerExamen') {
                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::creerExamenAction',  '_route' => 'creerExamen',);
            }

            // listerExamens
            if ($pathinfo === '/Enseignant/listerExamens') {
                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::listerExamensAction',  '_route' => 'listerExamens',);
            }

            // contacterParent
            if ($pathinfo === '/Enseignant/contacterParent') {
                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::contacterParentAction',  '_route' => 'contacterParent',);
            }

            // inserernotes
            if ($pathinfo === '/Enseignant/insererNotes') {
                return array (  '_controller' => 'projetBundle\\Controller\\forEnseignantController::insererNotesExamenAction',  '_route' => 'inserernotes',);
            }

        }

        if (0 === strpos($pathinfo, '/Parent')) {
            // voirToutNotif
            if ($pathinfo === '/Parent/voirToutNotif') {
                return array (  '_controller' => 'projetBundle\\Controller\\forParentController::voirToutNotifAction',  '_route' => 'voirToutNotif',);
            }

            // dashParent
            if (rtrim($pathinfo, '/') === '/Parent') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dashParent');
                }

                return array (  '_controller' => 'projetBundle\\Controller\\forParentController::indexAction',  '_route' => 'dashParent',);
            }

            // profile
            if ($pathinfo === '/Parent/profile') {
                return array (  '_controller' => 'projetBundle\\Controller\\forParentController::profileAction',  '_route' => 'profile',);
            }

            // contacterAdmin
            if ($pathinfo === '/Parent/contacterAdmin') {
                return array (  '_controller' => 'projetBundle\\Controller\\forParentController::contacterAdminAction',  '_route' => 'contacterAdmin',);
            }

            // envoyerMail
            if ($pathinfo === '/Parent/envoyerMail') {
                return array (  '_controller' => 'projetBundle\\Controller\\forParentController::envoyerMailAction',  '_route' => 'envoyerMail',);
            }

            if (0 === strpos($pathinfo, '/Parent/con')) {
                // contacterEnseignant
                if ($pathinfo === '/Parent/contacterEnseignant') {
                    return array (  '_controller' => 'projetBundle\\Controller\\forParentController::contacterEnseignantAction',  '_route' => 'contacterEnseignant',);
                }

                if (0 === strpos($pathinfo, '/Parent/consulter')) {
                    // consulterPaiement
                    if ($pathinfo === '/Parent/consulterPaiement') {
                        return array (  '_controller' => 'projetBundle\\Controller\\forParentController::consulterPaiementAction',  '_route' => 'consulterPaiement',);
                    }

                    // consulterHistorique
                    if ($pathinfo === '/Parent/consulterHistorique') {
                        return array (  '_controller' => 'projetBundle\\Controller\\forParentController::consulterHistoriqueAction',  '_route' => 'consulterHistorique',);
                    }

                    // consulterNotes
                    if ($pathinfo === '/Parent/consulterNotes') {
                        return array (  '_controller' => 'projetBundle\\Controller\\forParentController::consulterNotesAction',  '_route' => 'consulterNotes',);
                    }

                }

            }

            // mesEleves
            if ($pathinfo === '/Parent/mesEleves') {
                return array (  '_controller' => 'projetBundle\\Controller\\forParentController::mesElevesAction',  '_route' => 'mesEleves',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
