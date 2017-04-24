<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/RESTAPI')) {
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

            // affecter
            if ($pathinfo === '/RESTAPI/affecter') {
                return array (  '_controller' => 'projetBundle\\Controller\\AJAXAPIController::affecterAction',  '_route' => 'affecter',);
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
        if (0 === strpos($pathinfo, '/sendmail') && preg_match('#^/sendmail/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sendmail')), array (  '_controller' => 'projetBundle\\Controller\\DefaultController::sendmailAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'projetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/Admin')) {
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

        }

        // dashParent
        if (rtrim($pathinfo, '/') === '/Parent') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dashParent');
            }

            return array (  '_controller' => 'projetBundle\\Controller\\forParentController::indexAction',  '_route' => 'dashParent',);
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
