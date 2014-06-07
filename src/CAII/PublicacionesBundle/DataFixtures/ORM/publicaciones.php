<?php
	namespace CAII\PublicacionesBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\PublicacionesBundle\Entity\Publicacion;
	use CAII\PublicacionesBundle\Entity\TipoPublicacion;
	
	class publicaciones extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			
			$tipo_1 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(1);
			$tipo_2 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(2);
			$tipo_3 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(3);
			$tipo_4 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(4);
			$tipo_5 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(5);
			$tipo_6 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(6);
			$tipo_7 = $manager->getRepository('PublicacionesBundle:TipoPublicacion')->find(7);
	        

	

			//-- Articulos --
			$publicaciones1 = array(
				array('journal' => '1','volumen' => '1','paginas' => '1','doi' => '1','enlace' => '1','titulo' => '1'),
				array('journal' => '2','volumen' => '2','paginas' => '2','doi' => '2','enlace' => '2','titulo' => '2'),
			);

			//--Capitulo libro--
			$publicaciones2 = array(
				array('titulo' => '','paginas' => '','tituloLibro' => '','isbn' => '','mostrar' => '','capitulo' => '','fecha' => ''),
				
			);

			//--Conferencia--
			$publicaciones3 = array(
				array('ciudad' => '','congreso' => '','issn' => '','titulo' => '','fecha' => ''),
				
			);

			//--Libro--
			$publicaciones4 = array(
				array('titulo' => '','paginas' => '','editorial' => '','volumen' => '','serie' => '','edicion' => '','doi' => ''),
				
			);

			//--ReporteTecnico--
			$publicaciones5 = array(
				array('doi' => '','enlace' => '','tipoReporte' => '','titulo' => '','fecha' => ''),
				
			);

			//--Tesis maestria--
			$publicaciones6 = array(
				array('doi' => '','paginas' => '','titulo' => '','fecha' => ''),
				
			);

			//--Tesis doctorado--
			$publicaciones7 = array(
				array('doi' => '','paginas' => '','titulo' => '','fecha' => ''),
				
			);


			foreach ($publicaciones1 as $publicacion) {
				$entidad = new Publicacion();
				$entidad->setJournal($publicacion['journal']);
				$entidad->setVolumen($publicacion['volumen']);
				$entidad->setPaginas($publicacion['paginas']);
				$entidad->setDoi($publicacion['doi']);
				$entidad->setEnlace($publicacion['enlace']);
				$entidad->setTitulo($publicacion['titulo']);
				//$entidad->setFecha($publicacion['fecha']);
				//$entidad->setTipoPublicacion($tipo_1);
				$manager->persist($entidad);
				
			}
			$manager->flush();
		}

		public function getOrder()
	    {
	        return 5; // the order in which fixtures will be loaded
	    }
	}