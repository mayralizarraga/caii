<?php
	namespace CAII\MiembroBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use CAII\MiembroBundle\Entity\Ocupacion;
	
	class ocupaciones extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			$ocupaciones = array(
				array('descripcion' => 'Coordinador','description' => 'Coordinator','referencia'=>'coordinador','prioridad' => '1'),
				array('descripcion' => 'Investigadores','description' => 'Researchers','referencia'=>'investigador','prioridad' => '2'),
				//array('descripcion' => 'Estudiantes de Doctorado','description' => 'PhD Students','referencia'=>'doctorado','prioridad' => '3'),
				array('descripcion' => 'Estudiantes de Posgrado','description' => 'Graduate Students','referencia'=>'posgrado','prioridad' => '4'),
				array('descripcion' => 'Estudiantes de Licenciatura','description' => 'Undergraduate Students','referencia'=>'licenciatura','prioridad' => '5'),
				
			);
			
			foreach ($ocupaciones as $ocupacion) {
				$entidad = new Ocupacion();
				$entidad->setDescripcion($ocupacion['descripcion']);
				$entidad->setPrioridad($ocupacion['prioridad']);
				$manager->persist($entidad);
				$manager->flush();
				$this->addReference($ocupacion['referencia'], $entidad);

				// Traducir los contenidos al inglés
				$id = $entidad->getId();
				$description = $manager->find('MiembroBundle:Ocupacion', $id);
				$description->setDescripcion($ocupacion['description']);
				$description->setTranslatableLocale('en');
				$manager->persist($description);
				$manager->flush();
				


			}
			
		}

		public function getOrder()
	    {
	        return 1; // the order in which fixtures will be loaded
	    }


	}
