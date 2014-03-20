<?php

namespace CAII\MiembroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiembroPublicacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MiembroPublicacion
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CAII\MiembroBundle\Entity\Miembro")
     * @ORM\JoinColumn(name="idMiembro", referencedColumnName="id")
     */
    private $idMiembro;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CAII\PublicacionesBundle\Entity\Publicacion")
     * @ORM\JoinColumn(name="idPublicacion", referencedColumnName="id")
     */
    private $idPublicacion;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CAII\PublicacionesBundle\Entity\TipoPublicacion")
     * @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     */
    private $idTipo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="CAII\ProyectoBundle\Entity\Proyecto")
     * @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
     */
    private $idProyecto;


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
     * Set idMiembro
     *
     * @param CAII\MiembroBundle\Entity\Miembro
     * @return MiembroPublicacion
     */
    public function setIdMiembro(CAII\MiembroBundle\Entity\Miembro $idMiembro)
    {
        $this->idMiembro = $idMiembro;
    
        return $this;
    }

    /**
     * Get idMiembro
     *
     * @return CAII\MiembroBundle\Entity\Miembro 
     */
    public function getIdMiembro()
    {
        return $this->idMiembro;
    }

    /**
     * Set idPublicacion
     *
     * @param CAII\PublicacionesBundle\Entity\Publicacion
     * @return MiembroPublicacion
     */
    public function setIdPublicacion(CAII\PublicacionesBundle\Entity\Publicacion $idPublicacion)
    {
        $this->idPublicacion = $idPublicacion;
    
        return $this;
    }

    /**
     * Get idPublicacion
     *
     * @return CAII\PublicacionesBundle\Entity\Publicacion
     */
    public function getIdPublicacion()
    {
        return $this->idPublicacion;
    }

    /**
     * Set idTipo
     *
     * @param CAII\PublicacionesBundle\Entity\TipoPublicacion
     * @return MiembroPublicacion
     */
    public function setIdTipo(CAII\PublicacionesBundle\Entity\TipoPublicacion $idTipo)
    {
        $this->idTipo = $idTipo;
    
        return $this;
    }

    /**
     * Get idTipo
     *
     * @return CAII\PublicacionesBundle\Entity\TipoPublicacion
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set idProyecto
     *
     * @param CAII\ProyectoBundle\Entity\Proyecto
     * @return MiembroPublicacion
     */
    public function setIdProyecto(CAII\ProyectoBundle\Entity\Proyecto $idProyecto)
    {
        $this->idProyecto = $idProyecto;
    
        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return CAII\ProyectoBundle\Entity\Proyecto
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
