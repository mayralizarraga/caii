<?php
	// src/CAII/MiembroBundle/DataFixtures/ORM/ocupaciiones.php 
	namespace CAII\PortadaBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use CAII\PortadaBundle\Entity\Slide;
	
	class slider extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{

							

			$otros = array(
				//Sin asignacion
				array('Rutaimagen' => 'IMG_7.jpg'),
				array('Rutaimagen' => 'IMG_3.jpg'),
				array('Rutaimagen' => 'IMG_4.jpg'),
				array('Rutaimagen' => 'IMG_5.jpg'),
				array('Rutaimagen' => 'IMG_6.jpg'),


			);	
				
			
			
			foreach ($otros as $miembro) {
				$entidad = new Slide();
				$entidad->setRutaimagen($miembro['Rutaimagen']);
				$manager->persist($entidad);
				$manager->flush();
			}
			
		}

		public function getOrder()
	    {
	        return 7; // the order in which fixtures will be loaded
	    }

		

	}
