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

use Richpolis\ComentariosBundle\Entity\Comentario;
use Richpolis\ComentariosBundle\Form\ComentarioConImagenType;
use Richpolis\ComentariosBundle\Form\ComentarioType;

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
     * @Method({"GET","POST"})
     */
    public function publicacionAction(Request $request, $slug) {
        $em = $this->getDoctrine()->getManager();
        
        $publicacion = $em->getRepository('PublicacionesBundle:Publicacion')
                ->findOneBy(array('slug' => $slug));
        
        $contar = $request->query->get('contar',true);
        
        if($publicacion->getCategoria()->getTipoCategoria() == CategoriaPublicacion::TIPO_CATEGORIA_HERALDO_TV){
            return $this->redirect($this->generateUrl('frontend_heraldo_tv', array('slug'=>$slug,'contar'=>$contar)));
        }elseif($publicacion->getCategoria()->getTipoCategoria() == CategoriaPublicacion::TIPO_CATEGORIA_TU_ESPACIO){
            return $this->redirect($this->generateUrl('frontend_tu_espacio', array('slug'=>$slug,'contar'=>$contar)));
        }
        
        $parent = $request->query->get('parent',0);
        $comentario = new Comentario();
        $comentario->setPublicacion($publicacion);
        
        if($parent>0){
            $comentarioParent = $em->getRepository('ComentariosBundle:Comentario')->find($parent);
            $comentario->setParent($comentarioParent);
        }
        
        $form = $this->createForm(new ComentarioType(), $comentario, array('em'=>$em));
        
        if($request->isMethod('GET')){
            if($contar){
                $publicacionesSession = $this->getPublicacionesSession();
                if (!isset($publicacionesSession[$publicacion->getSlug()])) {
                    $publicacion->setContVisitas($publicacion->getContVisitas() + 1);
                    $em->flush();
                    $publicacionesSession[$publicacion->getSlug()] = true;
                    $this->setPublicacionesSession($publicacionesSession);
                }
            }
        }elseif($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($comentario);
                $publicacion->setContComentarios($publicacion->getContComentarios()+1);
                $em->flush();
                $comentario = new Comentario();
                $comentario->setPublicacion($publicacion);
                $form = $this->createForm(new ComentarioType(), $comentario, array('em'=>$em));
            }
        }
        if($request->isXmlHttpRequest()){
            return $this->render('FrontendBundle:Default:form.html.twig',array('form'=>$form->createView()));
        }
        $comentarios = $em->getRepository('ComentariosBundle:Comentario')
                ->findBy(array('publicacion' => $publicacion),array('createdAt'=>'ASC'));

        return array(
            'categoria'     =>  $publicacion->getCategoria(),
            'publicacion'   =>  $publicacion,
            'comentarios'   =>  $comentarios,
            'form'          =>  $form->createView(),
        );
    }
    
    /**
     * @Route("/heraldo/tv/{slug}", name="frontend_heraldo_tv")
     * @Template("FrontendBundle:Default:heraldoTv.html.twig")
     */
    public function heraldoTvAction(Request $request, $slug) {
        $em = $this->getDoctrine()->getManager();
		if($slug != "ultimo"){
			$publicacion = $em->getRepository('PublicacionesBundle:Publicacion')
					->findOneBy(array('slug' => $slug));
		}else{
			$categoria = $em->getRepository('PublicacionesBundle:CategoriaPublicacion')
							->findOneBy(array('tipoCategoria'=>CategoriaPublicacion::TIPO_CATEGORIA_HERALDO_TV));
			$publicacion = $em->getRepository('PublicacionesBundle:Publicacion')
					->findOneBy(
				array('categoria'=>$categoria,'status'=>Publicacion::STATUS_PUBLICADO),
				array('createdAt'=>'DESC')
			);
		}
        $contar = $request->query->get('contar',true);
               
        if($contar){
            $publicacionesSession = $this->getPublicacionesSession();
            if (!isset($publicacionesSession[$publicacion->getSlug()])) {
                $publicacion->setContVisitas($publicacion->getContVisitas() + 1);
                $em->flush();
                $publicacionesSession[$publicacion->getSlug()] = true;
                $this->setPublicacionesSession($publicacionesSession);
            }
        }

        return array(
            'categoria' => $publicacion->getCategoria(),
            'publicacion' => $publicacion
        );
    }
    
    /**
     * @Route("/tu/espacio/{slug}", name="frontend_tu_espacio")
     * @Template("FrontendBundle:Default:tuEspacio.html.twig")
     * @Method({"GET","POST"})
     */
    public function tuEspacioAction(Request $request, $slug) {
        $em = $this->getDoctrine()->getManager();
		
        if($slug != "ultimo"){
			$publicacion = $em->getRepository('PublicacionesBundle:Publicacion')
					->findOneBy(array('slug' => $slug));
		}else{
			$categoria = $em->getRepository('PublicacionesBundle:CategoriaPublicacion')
							->findOneBy(array('tipoCategoria'=>CategoriaPublicacion::TIPO_CATEGORIA_TU_ESPACIO));
			$publicacion = $em->getRepository('PublicacionesBundle:Publicacion')
					->findOneBy(
				array('categoria'=>$categoria,'status'=>Publicacion::STATUS_PUBLICADO),
				array('createdAt'=>'DESC')
			);
		}
		
        $contar = $request->query->get('contar',true);
        $comentario = new Comentario();
        $comentario->setPublicacion($publicacion);
        $form = $this->createForm(new ComentarioConImagenType(), $comentario, array('em'=>$em));
        if($request->isMethod('GET')){
            if($contar){
                $publicacionesSession = $this->getPublicacionesSession();
                if (!isset($publicacionesSession[$publicacion->getSlug()])) {
                    $publicacion->setContVisitas($publicacion->getContVisitas() + 1);
                    $em->flush();
                    $publicacionesSession[$publicacion->getSlug()] = true;
                    $this->setPublicacionesSession($publicacionesSession);
                }
            }
        }elseif($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($comentario);
                $publicacion->setContComentarios($publicacion->getContComentarios()+1);
                $em->flush();
                $comentario = new Comentario();
                $comentario->setPublicacion($publicacion);
                $form = $this->createForm(new ComentarioConImagenType(), $comentario, array('em'=>$em));
            }
        }
        
        $comentarios = $em->getRepository('ComentariosBundle:Comentario')
                ->findBy(array('publicacion' => $publicacion),array('createdAt'=>'DESC'));
        
        return array(
            'categoria'     =>  $publicacion->getCategoria(),
            'publicacion'   =>  $publicacion,
            'comentarios'   =>  $comentarios,
            'form'          =>  $form->createView(),
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
