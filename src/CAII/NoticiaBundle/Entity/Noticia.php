<?php

namespace CAII\NoticiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Noticia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Noticia
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
     * @ORM\Column(name="titulo", type="string", length=255,nullable=true)
     */
    private $titulo;

    /**
     * @var text
     * @Gedmo\Translatable
     * @ORM\Column(name="descripcion", type="text",nullable=true)
     */
    private $descripcion;

    /**
     * @var text
     * @Gedmo\Translatable
     * @ORM\Column(name="contenido", type="text",nullable=true)
     */
    private $contenido;


    /**
     * @var string
     *
     * @ORM\Column(name="fotoURL",  type="string", length=255,nullable=true)
     */
    private $fotoURL;



    /**
     * @Assert\Image(maxSize = "500k")
     */
    protected $foto;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date",nullable=true),
     */
    private $fecha;


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
     * Set titulo
     *
     * @param string $titulo
     * @return Noticia
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
     * Set descripcion
     *
     * @param text $descripcion
     * @return Noticia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set contenido
     *
     * @param text $contenido
     * @return Noticia
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    
        return $this;
    }

    /**
     * Get contenido
     *
     * @return text 
     */
    public function getContenido()
    {
        return $this->contenido;
    }


    /**
     * Set fotoURL
     *
     * @param string $fotoURL
     * @return Noticia
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


    public function subirFoto($directorioDestino)
    {
        if (null === $this->getFoto()) {
            return;
        }
        
        $nombreArchivoFoto = uniqid('noticia-').'-1.'.$this->getFoto()->guessExtension();

        $this->getFoto()->move($directorioDestino, $nombreArchivoFoto);

        $this->setFotoURL($nombreArchivoFoto);
    }

    /**
     * Set foto.
     *
     * @param UploadedFile $foto
     */
    public function setFoto(UploadedFile $foto = null)
    {
        $this->foto = $foto;
    }

    /**
     * Get foto.
     *
     * @return UploadedFile
     */
    public function getFoto()
    {
        return $this->foto;
    }



     /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Noticia
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


    public function __toString()
    {
        return $this->getTitulo();
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
