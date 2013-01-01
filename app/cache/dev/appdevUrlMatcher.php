<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _assetic_bd5a100
        if ($pathinfo === '/css/extranet.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd5a100',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bd5a100',);
        }

        // _assetic_bd5a100_0
        if ($pathinfo === '/css/extranet_normalizar_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd5a100',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_bd5a100_0',);
        }

        // _assetic_bd5a100_1
        if ($pathinfo === '/css/extranet_comun_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd5a100',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_bd5a100_1',);
        }

        // _assetic_bd5a100_2
        if ($pathinfo === '/css/extranet_extranet_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd5a100',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_bd5a100_2',);
        }

        // _assetic_10c2536
        if ($pathinfo === '/js/lt_ie9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '10c2536',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_10c2536',);
        }

        // _assetic_10c2536_0
        if ($pathinfo === '/js/lt_ie9_part_1_html5_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '10c2536',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_10c2536_0',);
        }

        // _assetic_82edbec
        if ($pathinfo === '/css/frontend.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '82edbec',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_82edbec',);
        }

        // _assetic_82edbec_0
        if ($pathinfo === '/css/frontend_normalizar_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '82edbec',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_82edbec_0',);
        }

        // _assetic_82edbec_1
        if ($pathinfo === '/css/frontend_comun_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '82edbec',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_82edbec_1',);
        }

        // _assetic_82edbec_2
        if ($pathinfo === '/css/frontend_frontend_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '82edbec',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_82edbec_2',);
        }

        // _assetic_514f925
        if ($pathinfo === '/js/frontend.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '514f925',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_514f925',);
        }

        // _assetic_514f925_0
        if ($pathinfo === '/js/frontend_part_1_frontend_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '514f925',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_514f925_0',);
        }

        // _assetic_591c366
        if ($pathinfo === '/css/backend.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '591c366',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_591c366',);
        }

        // _assetic_591c366_0
        if ($pathinfo === '/css/backend_normalizar_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '591c366',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_591c366_0',);
        }

        // _assetic_591c366_1
        if ($pathinfo === '/css/backend_comun_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '591c366',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_591c366_1',);
        }

        // _assetic_591c366_2
        if ($pathinfo === '/css/backend_backend_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '591c366',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_591c366_2',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // ciudad_cambiar
        if (preg_match('#^/(?P<_locale>en|es)/ciudad/cambiar\\-a\\-(?P<ciudad>.+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::cambiarAction',  '_locale' => 'es',)), array('_route' => 'ciudad_cambiar'));
        }

        // ciudad_recientes
        if (preg_match('#^/(?P<_locale>en|es)/(?P<ciudad>[^/]+)/recientes$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::recientesAction',  '_locale' => 'es',)), array('_route' => 'ciudad_recientes'));
        }

        // oferta
        if (preg_match('#^/(?P<_locale>en|es)/(?P<ciudad>[^/]+)/ofertas/(?P<slug>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ofertaAction',  '_locale' => 'es',)), array('_route' => 'oferta'));
        }

        // comprar
        if (preg_match('#^/(?P<_locale>en|es)/(?P<ciudad>[^/]+)/ofertas/(?P<slug>[^/]+)/comprar$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::comprarAction',  '_locale' => 'es',)), array('_route' => 'comprar'));
        }

        // tienda_portada
        if (preg_match('#^/(?P<_locale>en|es)/(?P<ciudad>[^/]+)/tiendas/(?P<tienda>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::portadaAction',  '_locale' => 'es',)), array('_route' => 'tienda_portada'));
        }

        if (0 === strpos($pathinfo, '/extranet')) {
            // extranet_portada
            if (rtrim($pathinfo, '/') === '/extranet') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'extranet_portada');
                }

                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::portadaAction',  '_route' => 'extranet_portada',);
            }

            // extranet_oferta_nueva
            if ($pathinfo === '/extranet/oferta/nueva') {
                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaNuevaAction',  '_route' => 'extranet_oferta_nueva',);
            }

            // extranet_oferta_editar
            if (0 === strpos($pathinfo, '/extranet/oferta/editar') && preg_match('#^/extranet/oferta/editar/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaEditarAction',)), array('_route' => 'extranet_oferta_editar'));
            }

            // extranet_oferta_ventas
            if (0 === strpos($pathinfo, '/extranet/oferta/ventas') && preg_match('#^/extranet/oferta/ventas/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaVentasAction',)), array('_route' => 'extranet_oferta_ventas'));
            }

            // extranet_perfil
            if ($pathinfo === '/extranet/perfil') {
                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::perfilAction',  '_route' => 'extranet_perfil',);
            }

            // extranet_login
            if ($pathinfo === '/extranet/login') {
                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::loginAction',  '_route' => 'extranet_login',);
            }

            // extranet_login_check
            if ($pathinfo === '/extranet/login_check') {
                return array('_route' => 'extranet_login_check');
            }

            // extranet_logout
            if ($pathinfo === '/extranet/logout') {
                return array('_route' => 'extranet_logout');
            }

        }

        // usuario_registro
        if (preg_match('#^/(?P<_locale>en|es)/usuario/registro$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::registroAction',  '_locale' => 'es',)), array('_route' => 'usuario_registro'));
        }

        // usuario_perfil
        if (preg_match('#^/(?P<_locale>en|es)/usuario/perfil$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::perfilAction',  '_locale' => 'es',)), array('_route' => 'usuario_perfil'));
        }

        // usuario_compras
        if (preg_match('#^/(?P<_locale>en|es)/usuario/compras$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::comprasAction',  '_locale' => 'es',)), array('_route' => 'usuario_compras'));
        }

        // usuario_login
        if (preg_match('#^/(?P<_locale>en|es)/usuario/login$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_locale' => 'es',)), array('_route' => 'usuario_login'));
        }

        // usuario_login_check
        if (preg_match('#^/(?P<_locale>en|es)/usuario/login_check$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'es',)), array('_route' => 'usuario_login_check'));
        }

        // usuario_logout
        if (preg_match('#^/(?P<_locale>en|es)/usuario/logout$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_locale' => 'es',)), array('_route' => 'usuario_logout'));
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // backend_portada
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_portada');
                }

                return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::indexAction',  '_route' => 'backend_portada',);
            }

            // backend_ciudad_cambiar
            if (0 === strpos($pathinfo, '/backend/cambiar-a') && preg_match('#^/backend/cambiar\\-a\\-(?P<ciudad>.+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\DefaultController::ciudadCambiarAction',)), array('_route' => 'backend_ciudad_cambiar'));
            }

            if (0 === strpos($pathinfo, '/backend/ciudad')) {
                // backend_ciudad
                if (rtrim($pathinfo, '/') === '/backend/ciudad') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_ciudad');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::indexAction',  '_route' => 'backend_ciudad',);
                }

                // backend_ciudad_show
                if (preg_match('#^/backend/ciudad/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::showAction',)), array('_route' => 'backend_ciudad_show'));
                }

                // backend_ciudad_new
                if ($pathinfo === '/backend/ciudad/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::newAction',  '_route' => 'backend_ciudad_new',);
                }

                // backend_ciudad_create
                if ($pathinfo === '/backend/ciudad/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_ciudad_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::createAction',  '_route' => 'backend_ciudad_create',);
                }
                not_backend_ciudad_create:

                // backend_ciudad_edit
                if (preg_match('#^/backend/ciudad/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::editAction',)), array('_route' => 'backend_ciudad_edit'));
                }

                // backend_ciudad_update
                if (preg_match('#^/backend/ciudad/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_ciudad_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::updateAction',)), array('_route' => 'backend_ciudad_update'));
                }
                not_backend_ciudad_update:

                // backend_ciudad_delete
                if (preg_match('#^/backend/ciudad/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_ciudad_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::deleteAction',)), array('_route' => 'backend_ciudad_delete'));
                }
                not_backend_ciudad_delete:

            }

            if (0 === strpos($pathinfo, '/backend/oferta')) {
                // backend_oferta
                if (rtrim($pathinfo, '/') === '/backend/oferta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_oferta');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::indexAction',  '_route' => 'backend_oferta',);
                }

                // backend_oferta_show
                if (preg_match('#^/backend/oferta/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::showAction',)), array('_route' => 'backend_oferta_show'));
                }

                // backend_oferta_new
                if ($pathinfo === '/backend/oferta/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::newAction',  '_route' => 'backend_oferta_new',);
                }

                // backend_oferta_create
                if ($pathinfo === '/backend/oferta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_oferta_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::createAction',  '_route' => 'backend_oferta_create',);
                }
                not_backend_oferta_create:

                // backend_oferta_edit
                if (preg_match('#^/backend/oferta/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::editAction',)), array('_route' => 'backend_oferta_edit'));
                }

                // backend_oferta_update
                if (preg_match('#^/backend/oferta/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_oferta_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::updateAction',)), array('_route' => 'backend_oferta_update'));
                }
                not_backend_oferta_update:

                // backend_oferta_delete
                if (preg_match('#^/backend/oferta/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_oferta_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::deleteAction',)), array('_route' => 'backend_oferta_delete'));
                }
                not_backend_oferta_delete:

            }

            if (0 === strpos($pathinfo, '/backend/tienda')) {
                // backend_tienda
                if (rtrim($pathinfo, '/') === '/backend/tienda') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_tienda');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::indexAction',  '_route' => 'backend_tienda',);
                }

                // backend_tienda_show
                if (preg_match('#^/backend/tienda/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::showAction',)), array('_route' => 'backend_tienda_show'));
                }

                // backend_tienda_new
                if ($pathinfo === '/backend/tienda/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::newAction',  '_route' => 'backend_tienda_new',);
                }

                // backend_tienda_create
                if ($pathinfo === '/backend/tienda/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_tienda_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::createAction',  '_route' => 'backend_tienda_create',);
                }
                not_backend_tienda_create:

                // backend_tienda_edit
                if (preg_match('#^/backend/tienda/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::editAction',)), array('_route' => 'backend_tienda_edit'));
                }

                // backend_tienda_update
                if (preg_match('#^/backend/tienda/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_tienda_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::updateAction',)), array('_route' => 'backend_tienda_update'));
                }
                not_backend_tienda_update:

                // backend_tienda_delete
                if (preg_match('#^/backend/tienda/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_tienda_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::deleteAction',)), array('_route' => 'backend_tienda_delete'));
                }
                not_backend_tienda_delete:

            }

            if (0 === strpos($pathinfo, '/backend/usuario')) {
                // backend_usuario
                if (rtrim($pathinfo, '/') === '/backend/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_usuario');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'backend_usuario',);
                }

                // backend_usuario_show
                if (preg_match('#^/backend/usuario/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::showAction',)), array('_route' => 'backend_usuario_show'));
                }

                // backend_usuario_new
                if ($pathinfo === '/backend/usuario/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::newAction',  '_route' => 'backend_usuario_new',);
                }

                // backend_usuario_create
                if ($pathinfo === '/backend/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_usuario_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::createAction',  '_route' => 'backend_usuario_create',);
                }
                not_backend_usuario_create:

                // backend_usuario_edit
                if (preg_match('#^/backend/usuario/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::editAction',)), array('_route' => 'backend_usuario_edit'));
                }

                // backend_usuario_update
                if (preg_match('#^/backend/usuario/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_usuario_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::updateAction',)), array('_route' => 'backend_usuario_update'));
                }
                not_backend_usuario_update:

                // backend_usuario_delete
                if (preg_match('#^/backend/usuario/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_usuario_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::deleteAction',)), array('_route' => 'backend_usuario_delete'));
                }
                not_backend_usuario_delete:

            }

        }

        // contacto
        if (preg_match('#^/(?P<_locale>en|es)/contacto$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\SitioController::contactoAction',  '_locale' => 'es',)), array('_route' => 'contacto'));
        }

        // estatica
        if (preg_match('#^/(?P<_locale>en|es)/sitio/(?P<pagina>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\SitioController::estaticaAction',  '_locale' => 'es',)), array('_route' => 'estatica'));
        }

        // portada
        if (preg_match('#^/(?P<_locale>en|es)?(?:/(?P<ciudad>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::portadaAction',  'ciudad' => 'barcelona',  '_locale' => 'es',)), array('_route' => 'portada'));
        }

        // _portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_portada');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'portada',  'ciudad' => 'barcelona',  '_route' => '_portada',);
        }

        if (0 === strpos($pathinfo, '/_internal')) {
            // _internal
            if (0 === strpos($pathinfo, '/_internal/secure') && preg_match('#^/_internal/secure/(?P<controller>[^/]+)/(?P<path>.+)\\.(?P<_format>[^.]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',)), array('_route' => '_internal'));
            }

            // _internal_public
            if (preg_match('#^/_internal/(?P<controller>[^/]+)/(?P<path>.+)\\.(?P<_format>[^.]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\InternalController::indexAction',)), array('_route' => '_internal_public'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
