<?php

namespace Richpolis\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Richpolis\FrontendBundle\Entity\Contacto;
use Richpolis\FrontendBundle\Form\ContactoType;
use Richpolis\PublicacionesBundle\Entity\Publicacion;
use Richpolis\PublicacionesBundle\Entity\CategoriaPublicacion;

class DefaultController extends Controller {

    protected function getPublicacionesSession() {
        return $this->get('session')->get('publicaciones', array());
    }

    protected function setPublicacionesSession($publicaciones) {
        return $this->get('session')->set('publicaciones', $publicaciones);
    }

    /**
     * @Route("/", name="portada")
     * @Template()
     */
    public function portadaAction() {
		
        $em = $this->getDoctrine()->getManager();
        $portadas = $em->getRepository('PublicacionesBundle:Publicacion')
                ->findPortada();
        $llamados = $em->getRepository('PublicacionesBundle:Publicacion')
                ->getPublicacionesPorTipoCategoria(
                Publicacion::STATUS_PUBLICADO, CategoriaPublicacion::TIPO_CATEGORIA_LLAMADOS
        );

        return array(
            'publicaciones' => $portadas,
            'llamados' => $llamados
        );
    }

    /**
     * @Route("/inicio", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $carrusel = $em->getRepository('PublicacionesBundle:Publicacion')
                ->findCarrusel();

        $categorias = $em->getRepository('PublicacionesBundle:CategoriaPublicacion')
                ->getCategoriasConPublicaciones();

        $publicaciones = $em->getRepository('PublicacionesBundle:Publicacion')
                ->getUltimasPublicaciones(4);        

        return array(
            'carrusel' => $carrusel,
            'categorias' => $categorias,
            'ultimasPublicaciones' => $publicaciones 
        );
    }

    /**
     * @Route("/categoria/{slug}", name="frontend_categoria")
     * @Template()
     */
    public function categoriaAction($slug) {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('PublicacionesBundle:CategoriaPublicacion')
                ->findOneBy(array('slug' => $slug));

        return array(
            'categoria' => $categoria
        );
    }

    /**
     * @Route("/publicacion/{slug}", name="frontend_publicaciones")
     * @Template()
     */
    public function publicacionAction($slug) {
        $em = $this->getDoctrine()->getManager();
        $publicacion = $em->getRepository('PublicacionesBundle:Publicacion')
                ->findOneBy(array('slug' => $slug));

        $publicacionesSession = $this->getPublicacionesSession();
        if (!isset($publicacionesSession[$publicacion->getSlug()])) {
            $publicacion->setContVisitas($publicacion->getContVisitas() + 1);
            $em->flush();
            $publicacionesSession[$publicacion->getSlug()] = true;
            $this->setPublicacionesSession($publicacionesSession);
        }

        return array(
            'categoria' => $publicacion->getCategoria(),
            'publicacion' => $publicacion
        );
    }

    private function getProyectosPorFilas($categorias) {
        $arreglo = array();
        $largo = 0;
        $paginas = 0;
        $contPagina = 0;
        $cont = 0;
        foreach ($categorias as $categoria) {
            $arreglo[$categoria->getSlug()] = array();
            $largo = count($categoria->getPublicaciones());
            $paginas = ceil($largo / 3);
            $contPagina = 0;
            $arreglo[$categoria->getSlug()][$contPagina] = array();
            $cont = 0;
            foreach ($categoria->getPublicaciones() as $publicacion) {
                $arreglo[$categoria->getSlug()][$contPagina][$cont++] = $publicacion;
                if ($cont == 3) {
                    $cont = 0;
                    $contPagina++;
                }
            }
        }
        return $arreglo;
    }

    /**
     * @Route("/nosotros", name="frontend_nosotros")
     * @Template("FrontendBundle:Default:estatica.html.twig")
     */
    public function nosotrosAction() {
        $em = $this->getDoctrine()->getManager();
        $nosotros = $em->getRepository('PaginasBundle:Pagina')
                ->findOneBy(array('pagina' => 'nosotros'));
        return array(
            'pagina' => $nosotros
        );
    }

    /**
     * @Route("/historia", name="frontend_historia")
     * @Template("FrontendBundle:Default:estatica.html.twig")
     */
    public function historiaAction() {
        $em = $this->getDoctrine()->getManager();
        $historia = $em->getRepository('PaginasBundle:Pagina')
                ->findOneBy(array('pagina' => 'historia'));
        return array(
            'pagina' => $historia
        );
    }
    
    /**
     * @Route("/edicion/pdf", name="frontend_edicion_pdf")
     * @Template("FrontendBundle:Default:estatica.html.twig")
     */
    public function edicionPdfAction() {
        $em = $this->getDoctrine()->getManager();
        $edicionPdf = $em->getRepository('PaginasBundle:Pagina')
                ->findOneBy(array('pagina' => 'edicion-pdf'));
        return array(
            'pagina' => $edicionPdf
        );
    }

    /**
     * @Route("/contacto", name="frontend_contacto")
     * @Method({"GET", "POST"})
     */
    public function contactoAction(Request $request) {
        $contacto = new Contacto();
        $form = $this->createForm(new ContactoType(), $contacto);
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            if ($form->isValid()) {
                $datos = $form->getData();

                $configuracion = $em->getRepository('BackendBundle:Configuraciones')
                        ->findOneBy(array('slug' => 'email-contacto'));

                $message = \Swift_Message::newInstance()
                        ->setSubject('Contacto desde pagina')
                        ->setFrom($datos->getEmail())
                        ->setTo($configuracion->getTexto())
                        ->setBody($this->renderView('FrontendBundle:Default:contactoEmail.html.twig', array('datos' => $datos)), 'text/html');
                $this->get('mailer')->send($message);

                // Redirige - Esto es importante para prevenir que el usuario
                // reenvíe el formulario si actualiza la página
                $ok = true;
                $error = false;
                $mensaje = "Se ha enviado el mensaje";
                $contacto = new Contacto();
                $form = $this->createForm(new ContactoType(), $contacto);
            } else {
                $ok = false;
                $error = true;
                $mensaje = "El mensaje no se ha podido enviar";
            }
        } else {
            $ok = false;
            $error = false;
            $mensaje = "";
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('FrontendBundle:Default:formContacto.html.twig', array(
                        'form' => $form->createView(),
                        'ok' => $ok,
                        'error' => $error,
                        'mensaje' => $mensaje,
            ));
        }

        $pagina = $em->getRepository('PaginasBundle:Pagina')
                ->findOneBy(array('pagina' => 'contacto'));

        return $this->render('FrontendBundle:Default:contacto.html.twig', array(
                    'form' => $form->createView(),
                    'ok' => $ok,
                    'error' => $error,
                    'mensaje' => $mensaje,
                    'pagina' => $pagina,
        ));
    }

    private function decodeAutobuses($locale, $autobuses) {
        $arreglo = array();
        $cont = 0;
        $largo = count($autobuses);
        $avalancheService = $this->get('imagine.cache.path.resolver');
        foreach ($autobuses as $autobus) {
            $item = array(
                'id' => $autobus->getId(),
                'slug' => $autobus->getSlug(),
                'nombre' => $autobus->getNombre(),
                'descripcion' => $autobus->getDescripcion($locale),
                'detalles' => $autobus->getDetalles($locale),
                'imagen' => $autobus->getWebPath(),
                'galerias' => array(),
            );
            $contGaleria = 0;
            $galerias = array();
            foreach ($autobus->getGalerias() as $galeria) {
                $galerias[$contGaleria++] = array(
                    'titulo' => $galeria->getTitulo(),
                    'descripcion' => $galeria->getDescripcion(),
                    'archivo' => $galeria->getWebPath(),
                    'isImagen' => $galeria->getIsImagen(),
                    'thumbnail' => ($galeria->getIsImagen() ? $avalancheService->getBrowserPath($galeria->getWebPath(), 'publicaciones') : $galeria->getThumbnailWebPath()),
                    'logo' => ($galeria->getTitulo() == "logo" ? true : false),
                );
            }
            if (isset($autobuses[$cont + 1])) {
                $item['siguiente'] = $autobuses[$cont + 1]->getSlug();
                $item['siguienteNombre'] = $autobuses[$cont + 1]->getNombre();
            }
            if ($cont > 0) {
                $item['anterior'] = $autobuses[$cont - 1]->getSlug();
                $item['anteriorNombre'] = $autobuses[$cont - 1]->getNombre();
            }
            $item['galerias'] = $galerias;
            $arreglo[$cont++] = $item;
        }
        return $arreglo;
    }

}
