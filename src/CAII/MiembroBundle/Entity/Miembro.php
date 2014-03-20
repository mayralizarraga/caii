<?php

namespace CAII\MiembroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miembro
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Miembro
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
     * @ORM\Column(name="nombre", type="string", length=45)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoP", type="string", length=45)
     */
    private $apellidoP;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoM", type="string", length=45)
     */
    private $apellidoM;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", length=11)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="link_Pagina", type="string", length=80)
     */
    private $link_Pagina;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoURL", type="string", length=80)
     */
    private $fotoURL;

    /**
     * @var string
     *
     * @ORM\Column(name="alum_Descripcion", type="text")
     */
    private $alum_Descripcion;



    /**
     * @var integer
     *   
     * 
     * @ORM\ManyToOne(targetEntity="CAII\MiembroBundle\Entity\Ocupacion")
     * @ORM\JoinColumn(name="idOcupacion", referencedColumnName="id")
     * 
     */
    private $idOcupacion;


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
     * @return Miembro
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
     * Set apellidoP
     *
     * @param string $apellidoP
     * @return Miembro
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;
    
        return $this;
    }

    /**
     * Get apellidoP
     *
     * @return string 
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * Set apellidoM
     *
     * @param string $apellidoM
     * @return Miembro
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;
    
        return $this;
    }

    /**
     * Get apellidoM
     *
     * @return string 
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Miembro
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set link_Pagina
     *
     * @param string $linkPagina
     * @return Miembro
     */
    public function setLinkPagina($linkPagina)
    {
        $this->link_Pagina = $linkPagina;
    
        return $this;
    }

    /**
     * Get link_Pagina
     *
     * @return string 
     */
    public function getLinkPagina()
    {
        return $this->link_Pagina;
    }

    /**
     * Set fotoURL
     *
     * @param string $fotoURL
     * @return Miembro
     */
    public function setFotoURL($fotoURL)
    {
        $this->fotoURL = $fotoURL;
    
        return $this;
    }

    /**
     * Get fotoURL
     *
     * @return string 
     */
    public function getFotoURL()
    {
        return $this->fotoURL;
    }

    /**
     * Set alum_Descripcion
     *
     * @param string $alumDescripcion
     * @return Miembro
     */
    public function setAlumDescripcion($alumDescripcion)
    {
        $this->alum_Descripcion = $alumDescripcion;
    
        return $this;
    }

    /**
     * Get alum_Descripcion
     *
     * @return string 
     */
    public function getAlumDescripcion()
    {
        return $this->alum_Descripcion;
    }


    /**
     * Set idOcupacion
     *
     * @param CAII\MiembroBundle\Entity\Ocupacion
     * @return Miembro
     */
    public function setIdOcupacion(CAII\MiembroBundle\Entity\Ocupacion $idOcupacion)
    {
        $this->idOcupacion = $idOcupacion;
    
       
    }

    /**
     * Get idOcupacion
     *
     * @return CAII\MiembroBundle\Entity\Ocupacion
     */
    public function getIdOcupacion()
    {
        return $this->idOcupacion;
    }


    public function __toString()
    {
        return $this->getNombre();
    }
}
