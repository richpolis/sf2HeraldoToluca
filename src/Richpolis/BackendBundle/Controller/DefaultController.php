<?php

namespace Richpolis\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

use Richpolis\PublicacionesBundle\Entity\Publicacion;
use Richpolis\PublicacionesBundle\Entity\Galeria;
use Richpolis\PublicacionesBundle\Entity\CategoriaPublicacion;

class DefaultController extends Controller
{
    
    private $tipos = null;

    protected function getFilters() {
        return $this->get('session')->get('filters', array());
    }

    protected function setFilters($filtros) {
        $this->get('session')->set('filters', $filtros);
    }

    protected function getTipoPublicidadDefault() {
        $filters = $this->getFilters();
        $tipoPublicidad = null;
        if (isset($filters['status'])) {
            $this->tipos = Publicacion::$sStatus;
            foreach ($this->tipos as $key => $value) {
                if ($key == $filters['status']) {
                    $tipo = $key;
                    break;
                }
            }
        } else {
            $this->tipos = Publicidad::getArrayTipoPublicidad();
            $keys = array_keys($this->tipos);
            $this->setFilters(array('tipoPublicidad' => $keys[0]));
            $tipoPublicidad = $keys[0];
        }
        return $tipoPublicidad;
    }
    
    /**
     * @Route("/", name="backend_homepage")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $publicaciones = $em->getRepository('PublicacionesBundle:Publicacion')
                            ->getPublicacionesPorTipoCategoria(array(
                                'status'    =>Publicacion::STATUS_APROBADO,
                                'conObjs'   =>true,
                                'todas'     =>true,
                                'tipoCategoria' =>  CategoriaPublicacion::TIPO_CATEGORIA_PUBLICACION
                                ), array('createdAt'=>'DESC'), 20);
                
        $publicidad = $em->getRepository('PublicidadBundle:Publicidad')
                            ->findBy(array('isActive'=>true), array('createdAt'=>'DESC'), 20);
                
        $llamados = $em->getRepository('PublicacionesBundle:Publicacion')
                            ->getPublicacionesPorTipoCategoria(array(
                                'status'    => Publicacion::STATUS_APROBADO,
                                'conObjs'   => true,
                                'todas'     => true,
                                'tipoCategoria' => CategoriaPublicacion::TIPO_CATEGORIA_LLAMADOS
                                ), array('createdAt'=>'DESC'), 20);
                
        $tuespacio = $em->getRepository('PublicacionesBundle:Publicacion')
                            ->getPublicacionesPorTipoCategoria(array(
                                'status'    => Publicacion::STATUS_APROBADO,
                                'conObjs'   => true,
                                'todas'     => true,
                                'tipoCategoria'=>  CategoriaPublicacion::TIPO_CATEGORIA_HERALDO_TV
                                ), array('createdAt'=>'DESC'), 20);
                
        $heraldotv = $em->getRepository('PublicacionesBundle:Publicacion')
                            ->getPublicacionesPorTipoCategoria(array(
                                'status'    => Publicacion::STATUS_APROBADO,
                                'conObjs'   => true,
                                'todas'     => true,
                                'tipoCategoria' =>  CategoriaPublicacion::TIPO_CATEGORIA_TU_ESPACIO
                                ), array('createdAt'=>'DESC'), 20);
        
        return array(
            'publicaciones'=>$publicaciones,
            'llamados'=>$llamados,
            'tuespacio'=>$tuespacio,
            'heraldotv'=>$heraldotv,
            'publicidad'=>$publicidad
        );
    }
    
    /**
     * @Route("/login", name="backend_login")
     * @Template()
     */
    
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // obtiene el error de inicio de sesión si lo hay
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'BackendBundle:Default:login.html.twig',
            array(
                // último nombre de usuario ingresado
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
    
    /**
     * @Route("/login_check", name="backend_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="backend_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }
    
    
}
