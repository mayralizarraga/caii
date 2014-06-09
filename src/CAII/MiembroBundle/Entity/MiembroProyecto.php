<?php

namespace CAII\MiembroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

/**
 * MiembroProyecto
 *
 * @ORM\Table(name="MiembroProyecto")
 * @ORM\Entity (repositoryClass="CAII\MiembroBundle\Entity\MiembroProyectoRepository")
 */
class MiembroProyecto
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
     * 
     * @ORM\ManyToOne(targetEntity="CAII\MiembroBundle\Entity\Miembro")
     * @ORM\JoinColumn(name="idMiembro", referencedColumnName="id")
     * 
     */
    private $idMiembro;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="CAII\ProyectoBundle\Entity\Proyecto")
     * @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
     * 
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
     * @param CAII\ProyectoBundle\Entity\Miembro
     * @return MiembroProyecto
     */
    public function setIdMiembro(CAII\ProyectoBundle\Entity\Miembro $idMiembro)
    {
        $this->idMiembro = $idMiembro;
    
        return $this;
    }

    /**
     * Get idMiembro
     *
     * @return CAII\ProyectoBundle\Entity\Miembro
     */
    public function getIdMiembro()
    {
        return $this->idMiembro;
    }

    /**
     * Set idProyecto
     *
     * @param CAII\ProyectoBundle\Entity\Proyecto
     * @return MiembroProyecto
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
}
