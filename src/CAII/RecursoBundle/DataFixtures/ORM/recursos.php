<?php
	namespace CAII\RecursoBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use CAII\RecursoBundle\Entity\Recurso;
	
	class recursos extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			$recursos = array(
				array(	'descripcion' => 'En este tutorial interactivo se describen las características mas importantes de la placa Arduino Uno, y se explican algunas ejemplos de su uso.',
						'description' => 'In this interactive tutorial, the main features of Arduino Uno are discussed, and some examples of its use are explained',
						'nombre'=>'Tutorial interactivo de Arduino Uno',
						'name'=>'Arduino Uno interactive tutorial',
						'idioma'=>'Español',
						'languaje'=>'Spanish',
						'path'=>'ManualdeArduino.zip'),
				array(	'descripcion' => 'En este tutorial se describen las características mas importantes de la placa Raspberry Pi, y se explican algunas ejemplos de su uso.',
						'description' => 'In this tutorial, the main features of Raspberry Pi are discussed, and some examples of its use are explained.',
						'nombre'=>'Tutorial de Raspberry Pi',
						'name'=>'Raspberry Pi tutorial',
						'idioma'=>'Español',
						'languaje'=>'Spanish',
						'path'=>'Manual_Raspberryv11.pdf'),
				
			);
			
			foreach ($recursos as $recurso) {
				$entidad = new Recurso();
				$entidad->setDescripcion($recurso['descripcion']);
				$entidad->setNombre($recurso['nombre']);
				$entidad->setIdioma($recurso['idioma']);
				$entidad->setPath($recurso['path']);
				$manager->persist($entidad);
				$manager->flush();
				

				// Traducir los contenidos al inglés
				$id = $entidad->getId();
				$description = $manager->find('RecursoBundle:Recurso', $id);
				$description->setDescripcion($recurso['description']);
				$description->setNombre($recurso['name']);
				$description->setIdioma($recurso['languaje']);
				$description->setTranslatableLocale('en');
				$manager->persist($description);
				$manager->flush();
				


			}
			
		}

		public function getOrder()
	    {
	        return 8; // the order in which fixtures will be loaded
	    }


	}
