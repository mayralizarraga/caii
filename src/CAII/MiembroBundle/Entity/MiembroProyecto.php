<?php

namespace CAII\MiembroBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * MiembroProyecto
 *
 * @ORM\Table(name="MiembroProyecto", uniqueConstraints={
 *     @ORM\UniqueConstraint(columns={"idMiembro", "idProyecto"})
 * })
 * @ORM\Entity (repositoryClass="CAII\MiembroBundle\Entity\MiembroProyectoRepository")
 * @UniqueEntity(
 *     fields={"idMiembro", "idProyecto"},
 *     message="This port is already in use on that host."
 * )
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
     * @param Miembro
     * @return MiembroProyecto
     */
    public function setIdMiembro($idMiembro)
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
     * @param Proyecto
     * @return MiembroProyecto
     */
    public function setIdProyecto( $idProyecto)
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
