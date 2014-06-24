<?php

namespace CAII\PublicacionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;


/**
 * TipoPublicacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoPublicacion implements Translatable
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
     * @Gedmo\Translatable
     * @ORM\Column(name="nombre", type="string", length=45)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", length=11, nullable=true)
     * 
     * 
     */
    private $prioridad;


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
     * Set nombre
     *
     * @param string $nombre
     * @return TipoPublicacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }



    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return TipoPublicacion
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }


    public function __toString()
    {
        return $this->getNombre();
    }

    /**
    * @Gedmo\Locale
    */
    private $locale;
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }
}
