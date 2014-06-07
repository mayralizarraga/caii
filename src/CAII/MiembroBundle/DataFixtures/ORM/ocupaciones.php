<?php
	namespace CAII\MiembroBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\MiembroBundle\Entity\Ocupacion;
	
	class ocupaciones extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			$ocupaciones = array(
				array('descripcion' => 'Investigadores'),
				array('descripcion' => 'Alumnos Maestria'),
				array('descripcion' => 'Alumnos Doctorado'),
				array('descripcion' => 'Alumnos Licenciatura'),
				
			);
			
			foreach ($ocupaciones as $ocupacion) {
				$entidad = new Ocupacion();
				$entidad->setDescripcion($ocupacion['descripcion']);
				$manager->persist($entidad);
				
			}
			$manager->flush();
		}

		public function getOrder()
	    {
	        return 1; // the order in which fixtures will be loaded
	    }


	}
