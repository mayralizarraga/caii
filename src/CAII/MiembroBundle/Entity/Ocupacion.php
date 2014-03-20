<?php

namespace CAII\MiembroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ocupacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ocupacion
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
     * @ORM\Column(name="descripcion", type="string", length=80)
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ocupacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
       
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function __toString()
    {
        return $this->getDescripcion();
    }
}
