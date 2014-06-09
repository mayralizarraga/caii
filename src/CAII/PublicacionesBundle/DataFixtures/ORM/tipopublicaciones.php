<?php
	namespace CAII\PublicacionesBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\PublicacionesBundle\Entity\TipoPublicacion;
	
	class tipopublicaciones extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			$tipos = array(
				array('nombre' => 'Artículo'),
				array('nombre' => 'Capítulo de libro'),
				array('nombre' => 'Conferencia'),
				array('nombre' => 'Libro'),
				array('nombre' => 'Reporte técnico'),
				array('nombre' => 'Tesis maestria'),
				array('nombre' => 'Tesis doctorado'),
				
			);
			
			foreach ($tipos as $tipo) {
				$entidad = new TipoPublicacion();
				$entidad->setNombre($tipo['nombre']);
				$manager->persist($entidad);
				$manager->flush();

				// Traducir los contenidos de la oferta al inglés
				$id = $entidad->getId();
				$description = $manager->find('PublicacionesBundle:TipoPublicacion', $id);
				$description->setNombre('ENGLISH '.$entidad->getNombre());
				$description->setTranslatableLocale('en');
				$manager->persist($description);
				$manager->flush();
				
			}
			
		}

		public function getOrder()
	    {
	        return 4 ; // the order in which fixtures will be loaded
	    }


	}
