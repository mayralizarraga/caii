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
				array('nombre' => 'Arnoldo','apellidoP' => 'Díaz','apellidoM' => 'Ramírez','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'coordinador'),
				array('nombre' => 'Francisco','apellidoP' => 'Ibáñez','apellidoM' => 'Suárez','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'coordinador'),
				array('nombre' => 'Heber Samuel','apellidoP' => 'Hernández','apellidoM' => 'Tabares','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'coordinador'),




				array('nombre' => 'Francisco Javier','apellidoP' => 'Guayante','apellidoM' => 'Santacruz','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Francisco Alan','apellidoP' => 'Bonino','apellidoM' => 'Deras','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Omar','apellidoP' => 'Delgadillo','apellidoM' => 'Quezada','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Alberto','apellidoP' => 'Urbina','apellidoM' => 'Espinoza','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Fabián Natanael','apellidoP' => 'Murrieta','apellidoM' => 'Rico','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Jorge Antonio','apellidoP' => 'Atempa','apellidoM' => 'Camacho','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Steven','apellidoP' => 'Delgadillo','apellidoM' => 'Quezada','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Oscar Rubén','apellidoP' => 'Batista','apellidoM' => 'Gaxiola','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Oskardie','apellidoP' => 'Castro','apellidoM' => 'Chicatti','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Félix Francisco','apellidoP' => 'Reyna','apellidoM' => 'Beltrán','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Blanca A.','apellidoP' => 'Marrujo','apellidoM' => 'Verdugo','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria'),
				array('nombre' => 'Fernando Emmanuel','apellidoP' => 'Michel','apellidoM' => 'Avila','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor'),
				

				array('nombre' => 'Vidblaín','apellidoP' => 'Amaro','apellidoM' => 'Ortega','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor'),
				array('nombre' => 'Luis Aram','apellidoP' => 'Tafoya','apellidoM' => 'Díaz','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor'),
				
				
				array('nombre' => 'Mayra Leticia','apellidoP' => 'Lizárraga','apellidoM' => 'Camberos','status' => '1','link_Pagina' => '',
					'fotoURL' => 'mayralizarraga.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura'),
				array('nombre' => 'Andrés','apellidoP' => 'Buelna','apellidoM' => 'Benítez','status' => '0','link_Pagina' => '',
					'fotoURL' => 'andresbuelna.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura'),
				array('nombre' => 'Sealtyel','apellidoP' => 'Castillo','apellidoM' => 'Medina','status' => '1','link_Pagina' => '',
					'fotoURL' => 'sealtyelcastillo.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura'),
				array('nombre' => 'Ari Geovany','apellidoP' => 'Villavicencio','apellidoM' => 'Espinoza','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura'),
				array('nombre' => 'David Ambroth','apellidoP' => 'López','apellidoM' => 'Nogales','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura'),
				
				
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
				$entidad->setIdOcupacion($this->getReference(''.$miembro['idOcupacion']));
				$manager->persist($entidad);
			}
			$manager->flush();
		}

		public function getOrder()
	    {
	        return 2; // the order in which fixtures will be loaded
	    }

		

	}
