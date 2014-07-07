<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/galerias')) {
                // galerias
                if (rtrim($pathinfo, '/') === '/backend/galerias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_galerias;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'galerias');
                    }

                    return array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::indexAction',  '_route' => 'galerias',);
                }
                not_galerias:

                // galerias_create
                if ($pathinfo === '/backend/galerias/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_galerias_create;
                    }

                    return array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::createAction',  '_route' => 'galerias_create',);
                }
                not_galerias_create:

                // galerias_new
                if ($pathinfo === '/backend/galerias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_galerias_new;
                    }

                    return array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::newAction',  '_route' => 'galerias_new',);
                }
                not_galerias_new:

                // galerias_show
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_galerias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_show')), array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::showAction',));
                }
                not_galerias_show:

                // galerias_edit
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_galerias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_edit')), array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::editAction',));
                }
                not_galerias_edit:

                // galerias_update
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_galerias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_update')), array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::updateAction',));
                }
                not_galerias_update:

                // galerias_actualizar
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_galerias_actualizar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_actualizar')), array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::actualizarGaleriaAction',));
                }
                not_galerias_actualizar:

                // galerias_delete
                if (preg_match('#^/backend/galerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_galerias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galerias_delete')), array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::deleteAction',));
                }
                not_galerias_delete:

                // galerias_ordenar
                if ($pathinfo === '/backend/galerias/ordenar') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_galerias_ordenar;
                    }

                    return array (  '_controller' => 'Richpolis\\GaleriasBundle\\Controller\\GaleriaController::ordenarRegistrosAction',  '_route' => 'galerias_ordenar',);
                }
                not_galerias_ordenar:

            }

            if (0 === strpos($pathinfo, '/backend/paginas')) {
                // paginas
                if (rtrim($pathinfo, '/') === '/backend/paginas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paginas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paginas');
                    }

                    return array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::indexAction',  '_route' => 'paginas',);
                }
                not_paginas:

                // paginas_create
                if ($pathinfo === '/backend/paginas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_paginas_create;
                    }

                    return array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::createAction',  '_route' => 'paginas_create',);
                }
                not_paginas_create:

                // paginas_new
                if ($pathinfo === '/backend/paginas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paginas_new;
                    }

                    return array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::newAction',  '_route' => 'paginas_new',);
                }
                not_paginas_new:

                // paginas_show
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paginas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_show')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::showAction',));
                }
                not_paginas_show:

                // paginas_edit
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paginas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_edit')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::editAction',));
                }
                not_paginas_edit:

                // paginas_update
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_paginas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_update')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::updateAction',));
                }
                not_paginas_update:

                // paginas_delete
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_paginas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_delete')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::deleteAction',));
                }
                not_paginas_delete:

                // paginas_galerias
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)/galerias$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paginas_galerias;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_galerias')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::galeriasAction',));
                }
                not_paginas_galerias:

                // paginas_galerias_upload
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)/galerias$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_paginas_galerias_upload;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_galerias_upload')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::galeriasUploadAction',));
                }
                not_paginas_galerias_upload:

                // paginas_galerias_link_video
                if (preg_match('#^/backend/paginas/(?P<id>\\d+)/galerias/link/video$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_paginas_galerias_link_video;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_galerias_link_video')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::galeriasLinkVideoAction',));
                }
                not_paginas_galerias_link_video:

                // paginas_galerias_delete
                if (preg_match('#^/backend/paginas/(?P<id>[^/]++)/galerias/(?P<idGaleria>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_paginas_galerias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paginas_galerias_delete')), array (  '_controller' => 'Richpolis\\PaginasBundle\\Controller\\PaginaController::deleteGaleriaAction',));
                }
                not_paginas_galerias_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // frontend_categoria
        if (preg_match('#^/(?P<categoria>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_categoria')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::categoriaAction',));
        }

        // frontend_publiaciones
        if (preg_match('#^/(?P<categoria>[^/]++)/(?P<publicacion>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_publiaciones')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::publicacionAction',));
        }

        // frontend_contacto
        if (preg_match('#^/(?P<_locale>[^/]++)/contacto$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_frontend_contacto;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_contacto')), array (  '_controller' => 'Richpolis\\FrontendBundle\\Controller\\DefaultController::contactoAction',));
        }
        not_frontend_contacto:

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/configuraciones')) {
                // configuraciones
                if (rtrim($pathinfo, '/') === '/backend/configuraciones') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'configuraciones');
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::indexAction',  '_route' => 'configuraciones',);
                }

                // configuraciones_select
                if ($pathinfo === '/backend/configuraciones/seleccionar') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::selectAction',  '_route' => 'configuraciones_select',);
                }

                // configuraciones_show
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_show')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::showAction',));
                }

                // configuraciones_new
                if ($pathinfo === '/backend/configuraciones/new') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::newAction',  '_route' => 'configuraciones_new',);
                }

                // configuraciones_create
                if ($pathinfo === '/backend/configuraciones/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuraciones_create;
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::createAction',  '_route' => 'configuraciones_create',);
                }
                not_configuraciones_create:

                // configuraciones_edit
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_edit')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::editAction',));
                }

                // configuraciones_update
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuraciones_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_update')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::updateAction',));
                }
                not_configuraciones_update:

                // configuraciones_delete
                if (preg_match('#^/backend/configuraciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuraciones_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuraciones_delete')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\ConfiguracionesController::deleteAction',));
                }
                not_configuraciones_delete:

            }

            // backend_homepage
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_homepage');
                }

                return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_homepage',);
            }

            if (0 === strpos($pathinfo, '/backend/log')) {
                if (0 === strpos($pathinfo, '/backend/login')) {
                    // backend_login
                    if ($pathinfo === '/backend/login') {
                        return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::loginAction',  '_route' => 'backend_login',);
                    }

                    // backend_check
                    if ($pathinfo === '/backend/login_check') {
                        return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::securityCheckAction',  '_route' => 'backend_check',);
                    }

                }

                // backend_logout
                if ($pathinfo === '/backend/logout') {
                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'backend_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/backend/usuarios')) {
                // users
                if (rtrim($pathinfo, '/') === '/backend/usuarios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_users;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'users');
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'users',);
                }
                not_users:

                // users_create
                if ($pathinfo === '/backend/usuarios/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_create;
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::createAction',  '_route' => 'users_create',);
                }
                not_users_create:

                // users_new
                if ($pathinfo === '/backend/usuarios/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_users_new;
                    }

                    return array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::newAction',  '_route' => 'users_new',);
                }
                not_users_new:

                // users_show
                if (preg_match('#^/backend/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_users_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::showAction',));
                }
                not_users_show:

                // users_edit
                if (preg_match('#^/backend/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_users_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::editAction',));
                }
                not_users_edit:

                // users_update
                if (preg_match('#^/backend/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_users_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_update')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::updateAction',));
                }
                not_users_update:

                // users_delete
                if (preg_match('#^/backend/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_users_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'Richpolis\\BackendBundle\\Controller\\UsuariosController::deleteAction',));
                }
                not_users_delete:

            }

            if (0 === strpos($pathinfo, '/backend/categorias/proyectos')) {
                // categorias_publicaciones
                if (rtrim($pathinfo, '/') === '/backend/categorias/proyectos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorias_publicaciones;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorias_publicaciones');
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::indexAction',  '_route' => 'categorias_publicaciones',);
                }
                not_categorias_publicaciones:

                // categorias_publicaciones_create
                if ($pathinfo === '/backend/categorias/proyectos/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorias_publicaciones_create;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::createAction',  '_route' => 'categorias_publicaciones_create',);
                }
                not_categorias_publicaciones_create:

                // categorias_publicaciones_new
                if ($pathinfo === '/backend/categorias/proyectos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorias_publicaciones_new;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::newAction',  '_route' => 'categorias_publicaciones_new',);
                }
                not_categorias_publicaciones_new:

                // categorias_publicaciones_show
                if (preg_match('#^/backend/categorias/proyectos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorias_publicaciones_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_publicaciones_show')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::showAction',));
                }
                not_categorias_publicaciones_show:

                // categorias_publicaciones_edit
                if (preg_match('#^/backend/categorias/proyectos/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorias_publicaciones_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_publicaciones_edit')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::editAction',));
                }
                not_categorias_publicaciones_edit:

                // categorias_publicaciones_update
                if (preg_match('#^/backend/categorias/proyectos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_categorias_publicaciones_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_publicaciones_update')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::updateAction',));
                }
                not_categorias_publicaciones_update:

                // categorias_publicaciones_delete
                if (preg_match('#^/backend/categorias/proyectos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categorias_publicaciones_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_publicaciones_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::deleteAction',));
                }
                not_categorias_publicaciones_delete:

                // categorias_publicaciones_ordenar
                if ($pathinfo === '/backend/categorias/proyectos/ordenar/registros') {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_categorias_publicaciones_ordenar;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\CategoriaPublicacionController::ordenarRegistrosAction',  '_route' => 'categorias_publicaciones_ordenar',);
                }
                not_categorias_publicaciones_ordenar:

            }

            if (0 === strpos($pathinfo, '/backend/publicaciones')) {
                // publicaciones
                if (rtrim($pathinfo, '/') === '/backend/publicaciones') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicaciones;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publicaciones');
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::indexAction',  '_route' => 'publicaciones',);
                }
                not_publicaciones:

                // publicaciones_categoria
                if (0 === strpos($pathinfo, '/backend/publicaciones/categoria') && preg_match('#^/backend/publicaciones/categoria/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicaciones_categoria;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_categoria')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::categoriaAction',));
                }
                not_publicaciones_categoria:

                // publicaciones_create
                if ($pathinfo === '/backend/publicaciones/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publicaciones_create;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::createAction',  '_route' => 'publicaciones_create',);
                }
                not_publicaciones_create:

                // publicaciones_new
                if ($pathinfo === '/backend/publicaciones/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicaciones_new;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::newAction',  '_route' => 'publicaciones_new',);
                }
                not_publicaciones_new:

                // publicaciones_show
                if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicaciones_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_show')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::showAction',));
                }
                not_publicaciones_show:

                // publicaciones_edit
                if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicaciones_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_edit')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::editAction',));
                }
                not_publicaciones_edit:

                // publicaciones_update
                if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_publicaciones_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_update')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::updateAction',));
                }
                not_publicaciones_update:

                // publicaciones_delete
                if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_publicaciones_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::deleteAction',));
                }
                not_publicaciones_delete:

                // publicaciones_up
                if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_publicaciones_up;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_up')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::upAction',));
                }
                not_publicaciones_up:

                // publicaciones_down
                if (preg_match('#^/backend/publicaciones/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_publicaciones_down;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_down')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::downAction',));
                }
                not_publicaciones_down:

                // publicaciones_ordenar
                if ($pathinfo === '/backend/publicaciones/ordenar/registros') {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_publicaciones_ordenar;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::ordenarRegistrosAction',  '_route' => 'publicaciones_ordenar',);
                }
                not_publicaciones_ordenar:

                // publicaciones_galerias
                if (preg_match('#^/backend/publicaciones/(?P<id>\\d+)/galerias$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicaciones_galerias;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_galerias')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::galeriasAction',));
                }
                not_publicaciones_galerias:

                // publicaciones_galerias_upload
                if (preg_match('#^/backend/publicaciones/(?P<id>\\d+)/galerias$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publicaciones_galerias_upload;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_galerias_upload')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::galeriasUploadAction',));
                }
                not_publicaciones_galerias_upload:

                // publicaciones_galerias_link_video
                if (preg_match('#^/backend/publicaciones/(?P<id>\\d+)/galerias/link/video$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_publicaciones_galerias_link_video;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_galerias_link_video')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::galeriasLinkVideoAction',));
                }
                not_publicaciones_galerias_link_video:

                // publicaciones_galerias_delete
                if (preg_match('#^/backend/publicaciones/(?P<id>\\d+)/galerias/(?P<idGaleria>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_publicaciones_galerias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones_galerias_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\PublicacionController::deleteGaleriaAction',));
                }
                not_publicaciones_galerias_delete:

            }

            if (0 === strpos($pathinfo, '/backend/servicios')) {
                // servicios
                if (rtrim($pathinfo, '/') === '/backend/servicios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'servicios');
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::indexAction',  '_route' => 'servicios',);
                }
                not_servicios:

                // servicios_create
                if ($pathinfo === '/backend/servicios/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_servicios_create;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::createAction',  '_route' => 'servicios_create',);
                }
                not_servicios_create:

                // servicios_new
                if ($pathinfo === '/backend/servicios/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_new;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::newAction',  '_route' => 'servicios_new',);
                }
                not_servicios_new:

                // servicios_show
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_show')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::showAction',));
                }
                not_servicios_show:

                // servicios_edit
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_edit')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::editAction',));
                }
                not_servicios_edit:

                // servicios_update
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_servicios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_update')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::updateAction',));
                }
                not_servicios_update:

                // servicios_delete
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_servicios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::deleteAction',));
                }
                not_servicios_delete:

                // servicios_galerias
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)/galerias$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_servicios_galerias;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_galerias')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::galeriasAction',));
                }
                not_servicios_galerias:

                // servicios_galerias_upload
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)/galerias$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_servicios_galerias_upload;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_galerias_upload')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::galeriasUploadAction',));
                }
                not_servicios_galerias_upload:

                // servicios_galerias_link_video
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)/galerias/link/video$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_servicios_galerias_link_video;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_galerias_link_video')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::galeriasLinkVideoAction',));
                }
                not_servicios_galerias_link_video:

                // servicios_galerias_delete
                if (preg_match('#^/backend/servicios/(?P<id>\\d+)/galerias/(?P<idGaleria>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_servicios_galerias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicios_galerias_delete')), array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::deleteGaleriaAction',));
                }
                not_servicios_galerias_delete:

                // servicios_ordenar
                if ($pathinfo === '/backend/servicios/ordenar/registros') {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_servicios_ordenar;
                    }

                    return array (  '_controller' => 'Richpolis\\PublicacionesBundle\\Controller\\ServiciosController::ordenarRegistrosAction',  '_route' => 'servicios_ordenar',);
                }
                not_servicios_ordenar:

            }

        }

        if (0 === strpos($pathinfo, '/media/cache')) {
            // _imagine_publicaciones_carrusel
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_publicaciones_carrusel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_publicaciones_carrusel')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'publicaciones_carrusel',));
            }
            not__imagine_publicaciones_carrusel:

            // _imagine_publicaciones
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_publicaciones;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_publicaciones')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'publicaciones',));
            }
            not__imagine_publicaciones:

            // _imagine_clientes
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_clientes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_clientes')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'clientes',));
            }
            not__imagine_clientes:

            // _imagine_quienes_somos_carrusel
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_quienes_somos_carrusel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_quienes_somos_carrusel')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'quienes_somos_carrusel',));
            }
            not__imagine_quienes_somos_carrusel:

            // _imagine_servicios_carrusel
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_servicios_carrusel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_servicios_carrusel')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'servicios_carrusel',));
            }
            not__imagine_servicios_carrusel:

            // _imagine_proyectos_carrusel
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_proyectos_carrusel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_proyectos_carrusel')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'proyectos_carrusel',));
            }
            not__imagine_proyectos_carrusel:

            // _imagine_proyectos_thumbnail
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_proyectos_thumbnail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_proyectos_thumbnail')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'proyectos_thumbnail',));
            }
            not__imagine_proyectos_thumbnail:

            // _imagine_galerias_productos
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_galerias_productos;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_galerias_productos')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'galerias_productos',));
            }
            not__imagine_galerias_productos:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
