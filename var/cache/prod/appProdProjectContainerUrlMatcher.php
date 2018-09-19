<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/api')) {
            // phones_detail
            if (0 === strpos($pathinfo, '/api/phone') && preg_match('#^/api/phone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_phones_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phones_detail')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::phoneAction',));
            }
            not_phones_detail:

            if (0 === strpos($pathinfo, '/api/phones')) {
                // phones_list
                if ('/api/phones' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_phones_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listAction',  '_route' => 'phones_list',);
                }
                not_phones_list:

                // phone_list_manufacturer
                if (preg_match('#^/api/phones/(?P<manufacturer>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_phone_list_manufacturer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_list_manufacturer')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::phoneListAction',));
                }
                not_phone_list_manufacturer:

            }

            // manufacturer_detail
            if (0 === strpos($pathinfo, '/api/manufacturer') && preg_match('#^/api/manufacturer/(?P<manufacturer>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_manufacturer_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manufacturer_detail')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::manufacturerAction',));
            }
            not_manufacturer_detail:

            if (0 === strpos($pathinfo, '/api/user')) {
                // user_registration
                if ('/api/user' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_user_registration;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'user_registration',);
                }
                not_user_registration:

                // delete_user
                if (preg_match('#^/api/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_delete_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::delUserAction',));
                }
                not_delete_user:

                // user_detail
                if (preg_match('#^/api/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_detail')), array (  '_controller' => 'AppBundle\\Controller\\UserController::userAction',));
                }
                not_user_detail:

                // company_user_list
                if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_company_user_list;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_user_list')), array (  '_controller' => 'AppBundle\\Controller\\UserController::userListAction',));
                }
                not_company_user_list:

            }

            // admin_registration
            if ('/api/admin' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_admin_registration;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAdminAction',  '_route' => 'admin_registration',);
            }
            not_admin_registration:

            // current_user_detail
            if ('/api/current' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_current_user_detail;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::currentAction',  '_route' => 'current_user_detail',);
            }
            not_current_user_detail:

            if (0 === strpos($pathinfo, '/api/company')) {
                // my_company_detail
                if ('/api/company' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_my_company_detail;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::myCompanyAction',  '_route' => 'my_company_detail',);
                }
                not_my_company_detail:

                // my_users_list
                if ('/api/company/users' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_my_users_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::myUserListAction',  '_route' => 'my_users_list',);
                }
                not_my_users_list:

                // company_detail
                if (preg_match('#^/api/company/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_company_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_detail')), array (  '_controller' => 'AppBundle\\Controller\\UserController::companyAction',));
                }
                not_company_detail:

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        // fos_oauth_server_token
        if ('/oauth/v2/token' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_oauth_server_token;
            }

            return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
        }
        not_fos_oauth_server_token:

        // fos_oauth_server_authorize
        if ('/oauth/v2/auth' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_oauth_server_authorize;
            }

            return array (  '_controller' => 'fos_oauth_server.controller.authorize:authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
        }
        not_fos_oauth_server_authorize:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
