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
     * @ORM\JoinColumn(name="TipoPublicacion", referencedColumnName="id")
     */
    private $TipoPublicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="doi", type="string", length=45, nullable=true)
     */
    private $doi;

    /**
     * @var string
     *
     * @ORM\Column(name="paginas", type="string", length=11, nullable=true)
     */
    private $paginas;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=250,nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="tituloLibro", type="string", length=250,nullable=true)
     */
    private $tituloLibro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="enlace", type="string", length=250,nullable=true)
     */
    private $enlace;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoReporte", type="string", length=250, nullable=true)
     */
    private $tipoReporte;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=45, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="congreso", type="string", length=250, nullable=true)
     */
    private $congreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="issn", type="integer", length=11, nullable=true)
     */
    private $issn;

    /**
     * @var string
     *
     * @ORM\Column(name="capitulo", type="string", length=80, nullable=true)
     */
    private $capitulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="isbn", type="integer", length=11, nullable=true)
     */
    private $isbn;

    /**
     * @var integer
     *
     * @ORM\Column(name="mostrar", type="string", length=250, nullable=true)
     */
    private $mostrar;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=250, nullable=true)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="volumen", type="integer", length=11, nullable=true)
     */
    private $volumen;

    /**
     * @var string
     *
     * @ORM\Column(name="editorial", type="string", length=250, nullable=true)
     */
    private $editorial;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=250, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="edicion", type="string", length=100, nullable=true)
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
     * Set TipoPublicacion
     *
     * @param TipoPublicacion
     * @return Publicacion
     */
    public function setTipoPublicacion(TipoPublicacion $TipoPublicacion)
    {
        $this->TipoPublicacion = $TipoPublicacion;
    
        return $this;
    }

    /**
     * Get TipoPublicacion
     *
     * @return CAII\PublicacionesBundle\Entity\TipoPublicacion 
     */
    public function getTipoPublicacion()
    {
        return $this->TipoPublicacion;
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
     * @param string $paginas
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
     * @return string 
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
     * Set tituloLibro
     *
     * @param string $tituloLibro
     * @return Publicacion
     */
    public function setTituloLibro($tituloLibro)
    {
        $this->tituloLibro = $tituloLibro;
    
        return $this;
    }

    /**
     * Get tituloLibro
     *
     * @return string 
     */
    public function getTituloLibro()
    {
        return $this->tituloLibro;
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
     * Set tipoReporte
     *
     * @param string $tipoReporte
     * @return Publicacion
     */
    public function setTipoReporte($tipoReporte)
    {
        $this->tipoReporte = $tipoReporte;
    
        return $this;
    }

    /**
     * Get tipoReporte
     *
     * @return string 
     */
    public function getTipoReporte()
    {
        return $this->tipoReporte;
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
     * @param string $mostrar
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
     * @return string 
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
        return $this->getTitulo();
    }
}
