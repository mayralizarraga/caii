<?php
	namespace CAII\ProyectoBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\ProyectoBundle\Entity\Proyecto;
	
	class proyectos extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			//array('nombre' => 'OCERA','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '0','monto_Financiero'=>'0'),
			$proyectos = array(
<<<<<<< HEAD
				array('nombre' => 'FORGE: Forging Online Education through FIRE','name'=>'FORGE: Forging Online Education through FIRE','fecha_Inicio' => '2013-01-01 00:01:00','fecha_Final' => '2016-01-01 00:01:00','status' => '0','monto_Financiero'=>'196000','director'=>'m1','entidad'=>'Comisión Europea','numero'=>'610889','referencia'=>'pro8'),
				array('nombre' => 'Planificación en sistemas de tiempo-real com múltiples procesadores','name' => 'Multiprocessor real-time system scheduling','fecha_Inicio' => '2014-01-01 00:01:00','fecha_Final' => '2015-12-12 00:01:00','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'Tecnológico Nacional de México','numero'=>'','referencia'=>'pro1'),
=======
				array('nombre' => 'SiGob Cloud: Plataforma Aplicativa Integral en la Nube, para la Innovación de los Servicios Ofrecidos al Ciudadano, en la Administración Pública Municipal','name' => 'SiGob Cloud: Plataforma Aplicativa Integral en la Nube, para la Innovación de los Servicios Ofrecidos al Ciudadano, en la Administración Pública Municipal','fecha_Inicio' => '2016-01-01 00:01:00','fecha_Final' => '','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'SigGob S.A. de C.V - Conacyt','numero'=>'232399','referencia'=>'pro8'),
				array('nombre' => 'Creación de una plataforma SaaS Tecnológica Denominada vOrigin para la Determinación de Origen de los Productos Terminados de la Industria IMMEX','name' => 'Creación de una plataforma SaaS Tecnológica Denominada vOrigin para la Determinación de Origen de los Productos Terminados de la Industria IMMEX','fecha_Inicio' => '2016-01-01 00:01:00','fecha_Final' => '','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'SeeDo, Servicios de Innovación Emprendedora, S. de R.L. de C.V.','numero'=>'232905','referencia'=>'pro9'),
				array('nombre' => 'Planificación en sistemas de tiempo-real com múltiples procesadores','name' => 'Multiprocessor real-time system scheduling','fecha_Inicio' => '2014-01-01 00:01:00','fecha_Final' => '2016-12-12 00:01:00','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'Tecnológico Nacional de México','numero'=>'5362.14-P','referencia'=>'pro1'),
>>>>>>> ad079b78fe2aace1e218318afb28e97f646186a8
				array('nombre' => 'Desarrollo y Prueba de un Modelo DATAMINNING para el control y manejo de Operaciones en la Industria Manufacturara','name' => 'Design and testing of a data-mining model for management and control of operations in the manufacturing industry','fecha_Inicio' => '2015-01-01 00:01:00','fecha_Final' => '','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'eSystems de México. S. de R.L. de C.V. – Conacyt','numero'=>'221839','referencia'=>'pro2'),
				array('nombre' => 'Continuación del vDocument-paperless para aplicaciones en Móviles','name' => 'Continuation of the project vDocument-paperless for mobile applications','fecha_Inicio' => '2015-01-01 00:01:00','fecha_Final' => '','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'eSystems de México. S. de R.L. de C.V. – Conacyt','numero'=>'220277','referencia'=>'pro3'),
				array('nombre' => 'Vdocument-paperless para aplicaciones en la nueva plataforma para dispositivos móviles','name' => 'Vdocument-paperless for applications on the new platform for mobile devices','fecha_Inicio' => '2014-01-01 00:01:00','fecha_Final' => '','status' => '1','monto_Financiero'=>'','director'=>'m1','entidad'=>'eSystems de México. S. de R.L. de C.V. – Conacyt','numero'=>'212690','referencia'=>'pro4'),
				array('nombre' => 'Creación de la plataforma vDocument-paperless en la Nube amigable al medio ambiente para la administración de la información','name'=> 'Developing the environment-friendly, cloud-computing based, Vdocument-paperless platform, for information management','fecha_Inicio' => '2013-01-01 00:00:00','fecha_Final' => '','status' => '0','monto_Financiero'=>'','director'=>'m1','entidad'=>'eSystems de México. S. de R.L. de C.V. – Conacyt','numero'=>'198503','referencia'=>'pro5'),
				array('nombre' => 'Redes inalámbricas de sensores de tiempo-real','name'=> 'Real-time wireless sensor networks','fecha_Inicio' => '2011-01-01 00:00:00','fecha_Final' => '2013-01-01 00:00:00','status' => '0','monto_Financiero'=>'','director'=>'m1','entidad'=>'Programa para el Mejoramiento del Profesorado (PROMEP)','numero'=>'9077','referencia'=>'pro6'),
				array('nombre' => 'Análisis del desempeño de redes de sensores inalámbricas para la detección de incendios e intrusos','name'=>'Analysis of the performance of wireless sensor networks for fire and intruders detection and tracking','fecha_Inicio' => '2011-01-01 00:01:00','fecha_Final' => '2012-01-01 00:01:00','status' => '0','monto_Financiero'=>'196000','director'=>'m1','entidad'=>'Dirección General de Educación Superior Tecnológica','numero'=>'4322.11-P','referencia'=>'pro7'),

				

				/*array('nombre' => 'Métodos digitales adaptativos para el procesamiento de señales en sistemas inmersos en tiempo-real', 'fecha_Inicio'=> '2011-01-01 00:01:00','fecha_Final' => '2013-01-01 00:01:00','status' => '0','monto_Financiero'=>'325940'),
				  array('nombre' => 'Optimización del consumo energético en redes inalámbricas ad hoc mediante mecanismos de descubrimiento de rutas eficientes','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				  array('nombre' => 'Bluefriend: Aplicación para promover las relaciones humanas mediante la telefonía móvil','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				  array('nombre' => 'Realtss: un simulador para la planificación de tareas de tiempo-real','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				  array('nombre' => 'Optimizacion de la WEB del Instituto Tecnológico de Mexicali','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				  array('nombre' => 'Profesionista Huésped','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				*/
				


				
				
			);
			
			foreach ($proyectos as $proyecto) {
				$entidad = new Proyecto();
				$entidad->setNombre($proyecto['nombre']);
				$entidad->setFechaInicio(new \DateTime($proyecto['fecha_Inicio']));
				if($proyecto['fecha_Final'])
					$entidad->setFechaFinal(new \DateTime($proyecto['fecha_Final']));
				$entidad->setStatus($proyecto['status']);
				$entidad->setNumeroProyecto($proyecto['numero']);
				$entidad->setIdEntidad($proyecto['entidad']);
				$entidad->setDirector($this->getReference(''.$proyecto['director']));
				$entidad->setMontoFinanciero($proyecto['monto_Financiero']);
				$manager->persist($entidad);
				$manager->flush();	
				$this->addReference($proyecto['referencia'], $entidad);

				$id = $entidad->getId();
				$description = $manager->find('ProyectoBundle:Proyecto', $id);
				$description->setNombre($proyecto['name']);
				$description->setTranslatableLocale('en');
				$manager->persist($description);
				$manager->flush();
			}
			
		}

		public function getOrder()
	    {
	        return 3; // the order in which fixtures will be loaded
	    }

		

	}
