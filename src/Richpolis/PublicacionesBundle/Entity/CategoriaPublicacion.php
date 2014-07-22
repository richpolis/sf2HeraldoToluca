<?php

namespace Richpolis\PublicacionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Richpolis\BackendBundle\Utils\Richsys as RpsStms;


/**
 * CategoriaPublicacion
 *
 * @ORM\Table(name="categorias_publicaciones")
 * @ORM\Entity(repositoryClass="Richpolis\PublicacionesBundle\Repository\CategoriaPublicacionRepository")
 * @ORM\HasLifecycleCallbacks()
 * 
 */
class CategoriaPublicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=150)
     * @Assert\NotBlank()
     */
    private $categoria;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=150)
     */
    private $slug;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer")
     */
    private $nivel;
    
    /**
     * @OneToMany(targetEntity="CategoriaPubliacion", mappedBy="parent")
     */
    private $children;

    /**
     * @ManyToOne(targetEntity="CategoriaPublicacion", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;
        
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Publicacion",mappedBy="categoria")
     * @ORM\OrderBy({"position" = "ASC"})
     */
    private $publicaciones;


    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->publicaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isActive = true;
        $this->nivel=0;
    }
    
    public function __toString(){
        return $this->getCategoria();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add publicaciones
     *
     * @param \Richpolis\PublicacionesBundle\Entity\Publicacion $publicaciones
     * @return Categoria
     */
    public function addPublicacione(\Richpolis\PublicacionesBundle\Entity\Publicacion $publicaciones)
    {
        $this->publicaciones[] = $publicaciones;

        return $this;
    }

    /**
     * Remove publicaciones
     *
     * @param \Richpolis\PublicacionesBundle\Entity\Publicacion $publicaciones
     */
    public function removePublicacione(\Richpolis\PublicacionesBundle\Entity\Publicacion $publicaciones)
    {
        $this->publicaciones->removeElement($publicaciones);
    }

    /**
     * Get publicaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPublicaciones()
    {
        return $this->publicaciones;
    }

    /*
     * Slugable
     */
    
    /**
    * @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function setSlugAtValue()
    {
        $this->slug = RpsStms::slugify($this->getCategoria());
    }

    
    

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return CategoriaPublicacion
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return CategoriaPublicacion
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return CategoriaPublicacion
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return CategoriaPublicacion
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @var integer
     */
    private $parent;

}
