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
				
				//Coordinadores
				array('nombre' => 'Arnoldo','apellidoP' => 'Díaz-Ramírez','apellidoM' => '','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'coordinador','referencia'=>'m1'),
				

				//Profesores participantes
				array('nombre' => 'Francisco','apellidoP' => 'Ibáñez','apellidoM' => 'Salas','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m2'),
				array('nombre' => 'Claudia','apellidoP' => 'Martínez','apellidoM' => 'Castillo','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m46'),
				array('nombre' => 'Verónica','apellidoP' => 'Quintero','apellidoM' => 'Rosas','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m99'),
				array('nombre' => 'Heber Samuel','apellidoP' => 'Hernández','apellidoM' => 'Tabares','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m3'),



				//Estudiantes de maestria
				array('nombre' => 'Francisco Javier','apellidoP' => 'Guayante','apellidoM' => 'Santacruz','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m4'),
				array('nombre' => 'Francisco Alan','apellidoP' => 'Bonino','apellidoM' => 'Deras','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m5'),
				array('nombre' => 'Leslye','apellidoP' => 'Ibarra','apellidoM' => 'Lares','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m6'),
				array('nombre' => 'Jazmin Alexandriny','apellidoP' => 'Jiménez','apellidoM' => 'Contreras','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m7'),
				array('nombre' => 'Jose Alberto','apellidoP' => 'Lopez','apellidoM' => 'Cazares','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m8'),
				array('nombre' => 'Edgar Alberto','apellidoP' => 'Dominguez','apellidoM' => 'Araiza','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m9'),
				array('nombre' => 'Omar','apellidoP' => 'Delgadillo','apellidoM' => 'Quezada','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m10'),
				array('nombre' => 'Alberto','apellidoP' => 'Urbina','apellidoM' => 'Espinoza','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m11'),
				array('nombre' => 'Fabián Natanael','apellidoP' => 'Murrieta','apellidoM' => 'Rico','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m12'),
				array('nombre' => 'Jorge Antonio','apellidoP' => 'Atempa','apellidoM' => 'Camacho','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m13'),
				array('nombre' => 'Steven','apellidoP' => 'Delgadillo','apellidoM' => 'Quezada','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m14'),
				array('nombre' => 'Oscar Rubén','apellidoP' => 'Batista','apellidoM' => 'Gaxiola','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m15'),
				array('nombre' => 'Oskardie','apellidoP' => 'Castro','apellidoM' => 'Chicatti','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m16'),
				array('nombre' => 'Félix Francisco','apellidoP' => 'Reyna','apellidoM' => 'Beltrán','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m17'),
				array('nombre' => 'Blanca A.','apellidoP' => 'Marrujo','apellidoM' => 'Verdugo','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'maestria','referencia'=>'m18'),
				array('nombre' => 'Fernando Emmanuel','apellidoP' => 'Michel','apellidoM' => 'Avila','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m19'),
				array('nombre' => 'Dulce Karina','apellidoP' => 'Orduño','apellidoM' => 'Valenzuela','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m34'),
				

				//Profesores
				array('nombre' => 'Vidblaín','apellidoP' => 'Amaro','apellidoM' => 'Ortega','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m20'),
				array('nombre' => 'Luis Aram','apellidoP' => 'Tafoya','apellidoM' => 'Díaz','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m21'),
				array('nombre' => 'Jesus','apellidoP' => 'Olvera','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'profesor','referencia'=>'m40'),
				
				
				
				
				//Estudiantes de licenciatura
				array('nombre' => 'Mayra Leticia','apellidoP' => 'Lizárraga','apellidoM' => 'Camberos','status' => '1','link_Pagina' => '',
					'fotoURL' => 'mayralizarraga.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m22'),
				array('nombre' => 'Andrés','apellidoP' => 'Buelna','apellidoM' => 'Benítez','status' => '1','link_Pagina' => '',
					'fotoURL' => 'andresbuelna.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m23'),
				array('nombre' => 'Sealtyel','apellidoP' => 'Castillo','apellidoM' => 'Medina','status' => '1','link_Pagina' => '',
					'fotoURL' => 'sealtyelcastillo.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m24'),
				array('nombre' => 'Ari Geovany','apellidoP' => 'Villavicencio','apellidoM' => 'Espinoza','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m25'),
				array('nombre' => 'David Ambroth','apellidoP' => 'López','apellidoM' => 'Nogales','status' => '1','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m26'),
				array('nombre' => 'Oscar Daniel','apellidoP' => 'Ozaine','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m33'),
				array('nombre' => 'Francisco','apellidoP' => 'Concha','apellidoM' => 'Ríos','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m45'),
				array('nombre' => 'Obed','apellidoP' => 'Mares','apellidoM' => 'Valenzuela','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m47'),


				
								

			
				
			);

			$otros = array(
				//Sin asignacion
				array('nombre' => 'Pedro','apellidoP' => 'Mejía-Alvarez','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m27'),
				array('nombre' => 'Luis','apellidoP' => 'Leyva-del-Froyo','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m28'),
				array('nombre' => 'Pietro','apellidoP' => 'Manzoni','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m29'),
				array('nombre' => 'Carlos T.','apellidoP' => 'Calafate','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m30'),
				array('nombre' => 'Juan Carlos','apellidoP' => 'Cano','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m31'),
				array('nombre' => 'Carlos','apellidoP' => 'Lino','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m32'),
				array('nombre' => 'Victor','apellidoP' => 'Díaz-Ramírez','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m35'),
				array('nombre' => 'Neftali','apellidoP' => 'Watkinson','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m36'),
				array('nombre' => 'Miguel','apellidoP' => 'Picinni','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m37'),
				array('nombre' => 'Lucía','apellidoP' => 'Beltrán','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m38'),
				array('nombre' => 'Sukey','apellidoP' => 'Nakasima','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m39'),
				array('nombre' => 'Vitaly','apellidoP' => 'Kober','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m41'),
				array('nombre' => 'Eva','apellidoP' => 'Hernández','apellidoM' => 'Ramírez','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m42'),
				array('nombre' => 'Alfons','apellidoP' => 'Crespo','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m43'),
				array('nombre' => 'Ismael','apellidoP' => 'Ripoll','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m44'),
				array('nombre' => 'Tomas','apellidoP' => 'Navarro','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m98'),


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
				$this->addReference($miembro['referencia'], $entidad);
				$manager->flush();
			}
			foreach ($otros as $miembro) {
				$entidad = new Miembro();
				$entidad->setNombre($miembro['nombre']);
				$entidad->setApellidoP($miembro['apellidoP']);
				$entidad->setApellidoM($miembro['apellidoM']);
				$entidad->setStatus($miembro['status']);
				$entidad->setLinkPagina($miembro['link_Pagina']);
				$entidad->setFotoURL($miembro['fotoURL']);
				$entidad->setAlumDescripcion($miembro['alum_Descripcion']);
				$manager->persist($entidad);
				$this->addReference($miembro['referencia'], $entidad);
				$manager->flush();
			}
			
		}

		public function getOrder()
	    {
	        return 2; // the order in which fixtures will be loaded
	    }

		

	}
