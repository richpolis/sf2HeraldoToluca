<?php

namespace Richpolis\BackendBundle\Twig;

class StatusPublicacionExtension extends \Twig_Extension
{
    const STATUS_BORRADO = -1;
    const STATUS_INCOMPLETO = 1;
    const STATUS_REVISAR = 2;
    const STATUS_APROBADO = 3;
    const STATUS_PUBLICADO = 4;
    const STATUS_CADUCADO = 5; 
    
    public function getFilters()
    {
        return array(
            'status_publicacion' => new \Twig_Filter_Method($this, 'statusPublicacionFilter'),
        );
    }

    public function statusPublicacionFilter($status)
    {
        switch($status){
            case self::STATUS_BORRADO:      $resp = "<span class='label label-danger status-borrado'>No aprobado</span>"; break;
            case self::STATUS_INCOMPLETO:   $resp = "<span class='label label-info status-incompleto'>Incompleto</span>"; break;
            case self::STATUS_REVISAR:      $resp = "<span class='label label-warning status-revisar'>Revisar</span>"; break;
            case self::STATUS_APROBADO:     $resp = "<span class='label label-primary status-aprobado'>Aprobado</span>"; break;
            case self::STATUS_PUBLICADO:    $resp = "<span class='label label-success status-publicado'>Publicado</span>"; break;
            case self::STATUS_CADUCADO:     $resp = "<span class='label label-default status-caducado'>Caducado</span>"; break;
        }
        return $resp;
    }

    public function getName()
    {
        return 'status_publicacion_extension';
    }
}