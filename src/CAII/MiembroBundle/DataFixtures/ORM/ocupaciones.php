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
				array('descripcion' => 'Coordinadores','description' => 'Coordinators','referencia'=>'coordinador'),
				array('descripcion' => 'Profesores','description' => 'Faculty','referencia'=>'profesor'),
				array('descripcion' => 'Estudiantes de Doctorado','description' => 'PhD Students','referencia'=>'doctorado'),
				array('descripcion' => 'Estudiantes de Maestria','description' => 'Master Students','referencia'=>'maestria'),
				array('descripcion' => 'Estudiantes de Licenciatura','description' => 'Bachelor Students','referencia'=>'licenciatura'),
				
			);
			
			foreach ($ocupaciones as $ocupacion) {
				$entidad = new Ocupacion();
				$entidad->setDescripcion($ocupacion['descripcion']);
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
