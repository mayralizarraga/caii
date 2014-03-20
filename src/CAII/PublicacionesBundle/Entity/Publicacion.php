<?php

namespace CAII\PublicacionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Publicacion
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
     * @ORM\ManyToOne(targetEntity="CAII\PublicacionesBundle\Entity\TipoPublicacion")
     * @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="doi", type="string", length=45)
     */
    private $doi;

    /**
     * @var integer
     *
     * @ORM\Column(name="paginas", type="integer", length=11)
     */
    private $paginas;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=80)
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="enlace", type="string", length=80)
     */
    private $enlace;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_Reporte", type="string", length=45)
     */
    private $tipo_Reporte;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=45)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="congreso", type="string", length=80)
     */
    private $congreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="issn", type="integer", length=11)
     */
    private $issn;

    /**
     * @var string
     *
     * @ORM\Column(name="capitulo", type="string", length=80)
     */
    private $capitulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="isbn", type="integer", length=11)
     */
    private $isbn;

    /**
     * @var integer
     *
     * @ORM\Column(name="mostrar", type="integer", length=11)
     */
    private $mostrar;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=80)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="volumen", type="integer", length=11)
     */
    private $volumen;

    /**
     * @var string
     *
     * @ORM\Column(name="editorial", type="string", length=80)
     */
    private $editorial;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=80)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="edicion", type="string", length=45)
     */
    private $edicion;


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
     * Set idTipo
     *
     * @param CAII\PublicacionesBundle\Entity\TipoPublicacion
     * @return Publicacion
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
     * Set doi
     *
     * @param string $doi
     * @return Publicacion
     */
    public function setDoi($doi)
    {
        $this->doi = $doi;
    
        return $this;
    }

    /**
     * Get doi
     *
     * @return string 
     */
    public function getDoi()
    {
        return $this->doi;
    }

    /**
     * Set paginas
     *
     * @param integer $paginas
     * @return Publicacion
     */
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    
        return $this;
    }

    /**
     * Get paginas
     *
     * @return integer 
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Publicacion
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Publicacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set enlace
     *
     * @param string $enlace
     * @return Publicacion
     */
    public function setEnlace($enlace)
    {
        $this->enlace = $enlace;
    
        return $this;
    }

    /**
     * Get enlace
     *
     * @return string 
     */
    public function getEnlace()
    {
        return $this->enlace;
    }

    /**
     * Set tipo_Reporte
     *
     * @param string $tipoReporte
     * @return Publicacion
     */
    public function setTipoReporte($tipoReporte)
    {
        $this->tipo_Reporte = $tipoReporte;
    
        return $this;
    }

    /**
     * Get tipo_Reporte
     *
     * @return string 
     */
    public function getTipoReporte()
    {
        return $this->tipo_Reporte;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Publicacion
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set congreso
     *
     * @param string $congreso
     * @return Publicacion
     */
    public function setCongreso($congreso)
    {
        $this->congreso = $congreso;
    
        return $this;
    }

    /**
     * Get congreso
     *
     * @return string 
     */
    public function getCongreso()
    {
        return $this->congreso;
    }

    /**
     * Set issn
     *
     * @param integer $issn
     * @return Publicacion
     */
    public function setIssn($issn)
    {
        $this->issn = $issn;
    
        return $this;
    }

    /**
     * Get issn
     *
     * @return integer 
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * Set capitulo
     *
     * @param string $capitulo
     * @return Publicacion
     */
    public function setCapitulo($capitulo)
    {
        $this->capitulo = $capitulo;
    
        return $this;
    }

    /**
     * Get capitulo
     *
     * @return string 
     */
    public function getCapitulo()
    {
        return $this->capitulo;
    }

    /**
     * Set isbn
     *
     * @param integer $isbn
     * @return Publicacion
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return integer 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set mostrar
     *
     * @param integer $mostrar
     * @return Publicacion
     */
    public function setMostrar($mostrar)
    {
        $this->mostrar = $mostrar;
    
        return $this;
    }

    /**
     * Get mostrar
     *
     * @return integer 
     */
    public function getMostrar()
    {
        return $this->mostrar;
    }

    /**
     * Set journal
     *
     * @param string $journal
     * @return Publicacion
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set volumen
     *
     * @param integer $volumen
     * @return Publicacion
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;
    
        return $this;
    }

    /**
     * Get volumen
     *
     * @return integer 
     */
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set editorial
     *
     * @param string $editorial
     * @return Publicacion
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    
        return $this;
    }

    /**
     * Get editorial
     *
     * @return string 
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Set serie
     *
     * @param \strin $serie
     * @return Publicacion
     */
    public function setSerie(\strin $serie)
    {
        $this->serie = $serie;
    
        return $this;
    }

    /**
     * Get serie
     *
     * @return \strin 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set edicion
     *
     * @param string $edicion
     * @return Publicacion
     */
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;
    
        return $this;
    }

    /**
     * Get edicion
     *
     * @return string 
     */
    public function getEdicion()
    {
        return $this->edicion;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
