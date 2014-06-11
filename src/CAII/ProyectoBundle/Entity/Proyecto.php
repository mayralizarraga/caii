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
class Proyecto
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
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CAII\EntidadFinancieraBundle\Entity\EntidadFinanciadora")
     * @ORM\JoinColumn(name="id_Entidad", referencedColumnName="id")
     * 
     */
    private $id_Entidad;

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
     * @ORM\Column(name="status", type="integer", length=11)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_Financiero", type="float", nullable=true)
     */
    private $monto_Financiero;


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
     * Set id_Entidad
     *
     * @param EntidadFinanciadora
     * @return Proyecto
     */
    public function setIdEntidad(EntidadFinanciadora $idEntidad)
    {
        $this->id_Entidad = $idEntidad;
    
        return $this;
    }

    /**
     * Get id_Entidad
     *
     * @return CAII\EntidadFinancieraBundle\Entity\EntidadFinanciadora
     */
    public function getIdEntidad()
    {
        return $this->id_Entidad;
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


    public function __toString()
    {
        return $this->getNombre();
    }
}
