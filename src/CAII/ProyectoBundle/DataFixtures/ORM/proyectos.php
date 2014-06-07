<?php
	namespace CAII\MiembroBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\ProyectoBundle\Entity\Proyecto;
	
	class proyectos extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{

			$proyectos = array(
				array('nombre' => 'AmIDJ: Sistema de Inteligencia Ambiental para la Selección de Música','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '0'),
				array('nombre' => 'AmIDJ2: Sistema de Inteligencia Ambiental para la Selección de Música','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '1'),
				array('nombre' => 'AmIDJ3: Sistema de Inteligencia Ambiental para la Selección de Música','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '0'),
				array('nombre' => 'AmIDJ4: Sistema de Inteligencia Ambiental para la Selección de Música','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '1'),
				array('nombre' => 'AmIDJ5: Sistema de Inteligencia Ambiental para la Selección de Música','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '0'),
				
				
			);
			
			foreach ($proyectos as $proyecto) {
				$entidad = new Proyecto();
				$entidad->setNombre($proyecto['nombre']);
				$entidad->setFechaInicio(new \DateTime());
				$entidad->setFechaFinal(new \DateTime());
				$entidad->setStatus($proyecto['status']);
				$manager->persist($entidad);
			}
			$manager->flush();
		}

		public function getOrder()
	    {
	        return 3; // the order in which fixtures will be loaded
	    }

		

	}
