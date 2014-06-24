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
				array('descripcion' => 'Profesores','description' => 'Faculty'),
				array('descripcion' => 'Alumnos Maestria','description' => 'Master Students'),
				array('descripcion' => 'Alumnos Doctorado','description' => 'PhD Students'),
				array('descripcion' => 'Alumnos Licenciatura','description' => 'Bachelor Students'),
				
			);
			
			foreach ($ocupaciones as $ocupacion) {
				$entidad = new Ocupacion();
				$entidad->setDescripcion($ocupacion['descripcion']);
				$manager->persist($entidad);
				$manager->flush();
				$this->addReference(''.$entidad->getId(), $entidad);

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
