<?php
	// src/CAII/MiembroBundle/DataFixtures/ORM/ocupaciiones.php 
	namespace CAII\MiembroBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\MiembroBundle\Entity\Miembro;
	
	class miembros extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{

			$ocupacion = $manager->getRepository('MiembroBundle:Ocupacion')->find(4);
			$miembros = array(
				array('nombre' => 'Mayra Leticia','apellidoP' => 'Lizarraga','apellidoM' => 'Camberos','status' => '1','link_Pagina' => 'paginapersonal.com',
					'fotoURL' => 'mayralizarraga.jpg','alum_Descripcion' => 'breve descripcion del miembro','idOcupacion'=>'1'),
				array('nombre' => 'Andres','apellidoP' => 'Buelna','apellidoM' => 'Benitez','status' => '0','link_Pagina' => 'paginapersonal.com',
					'fotoURL' => 'andresbuelna.jpg','alum_Descripcion' => 'breve descripcion del miembro','idOcupacion'=>'1'),
				array('nombre' => 'Sealtyel','apellidoP' => 'Castillo','apellidoM' => 'Medina','status' => '1','link_Pagina' => 'paginapersonal.com',
					'fotoURL' => 'sealtyelcastillo.jpg','alum_Descripcion' => 'breve descripcion del miembro','idOcupacion'=>'1'),
				
				
			);
			
			foreach ($miembros as $miembro) {
				$entidad = new Miembro();
				$entidad->setNombre($miembro['nombre']);
				$entidad->setApellidoP($miembro['apellidoP']);
				$entidad->setApellidoM($miembro['apellidoM']);
				$entidad->setStatus($miembro['status']);
				$entidad->setLinkPagina($miembro['link_Pagina']);
				$entidad->setFotoURL($miembro['fotoURL']);
				$entidad->setAlumDescripcion($miembro['alum_Descripcion']);
				//$entidad->setIdOcupacion($miembro['idOcupacion']);
				$manager->persist($entidad);
			}
			$manager->flush();
		}

		public function getOrder()
	    {
	        return 2; // the order in which fixtures will be loaded
	    }

		

	}
