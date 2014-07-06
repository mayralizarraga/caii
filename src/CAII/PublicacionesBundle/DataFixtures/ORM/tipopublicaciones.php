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
				array('nombre' => 'Libros' ,'prioridad' => '1','name'=>'Books','referencia'=>'libro'),
				array('nombre' => 'Capítulos de libros','prioridad' => '2','name'=>'Book chapter','referencia'=>'capLibro'),
				array('nombre' => 'Revistas' ,'prioridad' => '3','name'=>'Journals','referencia'=>'revista'),
				array('nombre' => 'Artículos', 'prioridad' => '4','name'=>'Articles','referencia'=>'articulo'),
				array('nombre' => 'Articulos de conferencias','prioridad' => '5','name'=>'Conference\'s article','referencia'=>'articuloCF'),
				array('nombre' => 'Articulos de congresos','prioridad' => '6','name'=>'Congress\'s article','referencia'=>'articuloCG'),
				array('nombre' => 'Reportes técnicos','prioridad' => '7','name'=>'Technical Report','referencia'=>'reporte'),
				array('nombre' => 'Tesis','prioridad' => '8','name'=>'Thesis','referencia'=>'tesis'),
				
			);
			
			foreach ($tipos as $tipo) {
				$entidad = new TipoPublicacion();
				$entidad->setNombre($tipo['nombre']);
				$entidad->setPrioridad($tipo['prioridad']);
				$manager->persist($entidad);
				$manager->flush();
				$this->addReference($tipo['referencia'], $entidad);

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
