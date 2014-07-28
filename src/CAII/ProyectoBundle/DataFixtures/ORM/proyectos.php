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
			//array('nombre' => 'OCERA','fecha_Inicio' => '2012-06-05 00:01:00','fecha_Final' => '2012-06-06 00:01:00','status' => '0','monto_Financiero'=>'0'),
			$proyectos = array(
				array('nombre' => 'Creación de la plataforma vDocument-paperless en la Nube amigable al medio ambiente para la administración de la información','fecha_Inicio' => '2013-01-01 00:00:00','fecha_Final' => '2013-01-01 00:01:00','status' => '0','monto_Financiero'=>'300000'),
				array('nombre' => 'Redes inalámbricas de sensores de tiempo-real','fecha_Inicio' => '2011-01-01 00:01:00','fecha_Final' => '2011-12-12 00:01:00','status' => '0','monto_Financiero'=>'173000'),
				array('nombre' => 'Análisis del desempeño de redes de sensores inalámbricas para la detección de incendios e intrusos','fecha_Inicio' => '2011-01-01 00:01:00','fecha_Final' => '2011-01-01 00:01:00','status' => '0','monto_Financiero'=>'196000'),
				array('nombre' => 'Métodos digitales adaptativos para el procesamiento de señales en sistemas inmersos en tiempo-real', 'fecha_Inicio'=> '2011-01-01 00:01:00','fecha_Final' => '2013-01-01 00:01:00','status' => '0','monto_Financiero'=>'325940'),
				
				array('nombre' => 'Optimización del consumo energético en redes inalámbircas ad hoc mediante mecanismos de descubrimiento de rutas eficientes','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				array('nombre' => 'Bluefriend: Aplicación para promover las relaciones humanas mediante la telefonía móvil','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				array('nombre' => 'Realtss: un simulador para la planificación de tareas de tiempo-real','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				array('nombre' => 'Optimizacion de la WEB del Instituto Tecnológico de Mexicali','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),
				array('nombre' => 'Profesionista Huésped','fecha_Inicio' => '2006-01-01 00:01:00','fecha_Final' => '2007-12-12 00:01:00','status' => '0','monto_Financiero'=>''),


				
				
			);
			
			foreach ($proyectos as $proyecto) {
				$entidad = new Proyecto();
				$entidad->setNombre($proyecto['nombre']);
				$entidad->setFechaInicio(new \DateTime($proyecto['fecha_Inicio']));
				$entidad->setFechaFinal(new \DateTime($proyecto['fecha_Final']));
				$entidad->setStatus($proyecto['status']);
				$entidad->setMontoFinanciero($proyecto['monto_Financiero']);
				$manager->persist($entidad);
			}
			$manager->flush();
		}

		public function getOrder()
	    {
	        return 3; // the order in which fixtures will be loaded
	    }

		

	}
