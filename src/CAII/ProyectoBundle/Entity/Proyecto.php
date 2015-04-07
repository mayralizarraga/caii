<?php

namespace CAII\ProyectoBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="Proyecto")
 * @ORM\Entity
 */
class Proyecto implements Translatable
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
     * @Gedmo\Translatable
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre;


    /**
     * @var string
     *
     * @ORM\Column(name="idEntidad", type="string", length=200, nullable=true)
    */
    private $idEntidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_Inicio", type="date", nullable=true)
     */
    private $fecha_Inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_Final", type="date",nullable=true)
     */
    private $fecha_Final;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", length=11, nullable=true)
     */
    private $status;

    /**
     * @var String
     *
     * @ORM\Column(name="numeroProyecto", type="string", length=20, nullable=true)
     */
    private $numeroProyecto;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_Financiero", type="float", nullable=true)
     */
    private $monto_Financiero;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="CAII\MiembroBundle\Entity\Miembro")
     * @ORM\JoinColumn(name="director", referencedColumnName="id")
     * 
     */
    private $director;


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
     * @return Proyecto
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
     * Set idEntidad
     *
     * @param String
     * @return idEntidad
     */
    public function setIdEntidad($idEntidad)
    {
        $this->idEntidad = $idEntidad;
    
        return $this;
    }

    /**
     * Get idEntidad
     *
     * @return Proyecto
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }

    /**
     * Set fecha_Inicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fecha_Inicio = $fechaInicio;
    
        return $this;
    }

    /**
     * Get fecha_Inicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fecha_Inicio;
    }

    /**
     * Set fecha_Final
     *
     * @param \DateTime $fechaFinal
     * @return Proyecto
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fecha_Final = $fechaFinal;
    
        return $this;
    }

    /**
     * Get fecha_Final
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fecha_Final;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Proyecto
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

     /**
     * Set numeroProyecto
     *
     * @param string $numeroProyecto
     * @return Proyecto
     */
    public function setNumeroProyecto($numeroProyecto)
    {
        $this->numeroProyecto = $numeroProyecto;
    
        return $this;
    }

    /**
     * Get numeroProyecto
     *
     * @return Proyecto 
     */
    public function getNumeroProyecto()
    {
        return $this->numeroProyecto;
    }

    /**
     * Set monto_Financiero
     *
     * @param float $montoFinanciero
     * @return Proyecto
     */
    public function setMontoFinanciero($montoFinanciero)
    {
        $this->monto_Financiero = $montoFinanciero;
    
        return $this;
    }

    /**
     * Get monto_Financiero
     *
     * @return float 
     */
    public function getMontoFinanciero()
    {
        return $this->monto_Financiero;
    }

     /**
     * Set director
     *
     * @param CAII\MiembroBundle\Entity\Miembro
     * @return director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    
        return $this;
    }

    /**
     * Get director
     *
     * @return CAII\MiembroBundle\Entity\Miembro
     */
    public function getDirector()
    {
        return $this->director;
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
