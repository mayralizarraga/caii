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
				
				
				
				array('nombre' => 'Libro' ,'prioridad' => '1','name'=>'Book'),
				array('nombre' => 'Capítulo de libro','prioridad' => '2','name'=>'Book chapter'),
				array('nombre' => 'Revista' ,'prioridad' => '3','name'=>'Journal'),
				array('nombre' => 'Artículo', 'prioridad' => '4','name'=>'Article'),
				array('nombre' => 'Articulo de conferencia','prioridad' => '5','name'=>'Conference\'s article'),
				array('nombre' => 'Articulo de congreso','prioridad' => '6','name'=>'Congress\'s article'),
				array('nombre' => 'Reporte técnico','prioridad' => '7','name'=>'Technical Report'),
				array('nombre' => 'Tesis','prioridad' => '8','name'=>'Thesis'),
				
				
			);
			
			foreach ($tipos as $tipo) {
				$entidad = new TipoPublicacion();
				$entidad->setNombre($tipo['nombre']);
				$entidad->setPrioridad($tipo['prioridad']);
				$manager->persist($entidad);
				$manager->flush();
				$this->addReference(''.$entidad->getId(), $entidad);

				// Traducir los contenidos de la oferta al inglés
				$id = $entidad->getId();
				$description = $manager->find('PublicacionesBundle:TipoPublicacion', $id);
				$description->setNombre($tipo['name']);
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
