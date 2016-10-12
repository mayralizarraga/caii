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
					'fotoURL' => 'Arnoldo.jpg','alum_Descripcion' => '','idOcupacion'=>'coordinador','referencia'=>'m1'),
				

				//Profesores participantes
				array('nombre' => 'Francisco','apellidoP' => 'Ibáñez','apellidoM' => 'Salas','status' => '1','link_Pagina' => '',
					'fotoURL' => 'pacois.png','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m2'),
				array('nombre' => 'Claudia','apellidoP' => 'Martínez','apellidoM' => 'Castillo','status' => '1','link_Pagina' => '',
					'fotoURL' => 'Claudia Martinez.jpg','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m46'),
				array('nombre' => 'Verónica','apellidoP' => 'Quintero','apellidoM' => 'Rosas','status' => '1','link_Pagina' => '',
					'fotoURL' => 'vero.jpg','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m99'),
				array('nombre' => 'Heber Samuel','apellidoP' => 'Hernández','apellidoM' => 'Tabares','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m3'),




				//Estudiantes de posgrado
				


				array('nombre' => 'Francisco Javier','apellidoP' => 'Guayante','apellidoM' => 'Santacruz','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m4'),
				array('nombre' => 'Francisco Alan','apellidoP' => 'Bonino','apellidoM' => 'Deras','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m5'),
				array('nombre' => 'Leslye','apellidoP' => 'Ibarra','apellidoM' => 'Lares','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m6'),
				array('nombre' => 'Jazmin Alexandriny','apellidoP' => 'Jiménez','apellidoM' => 'Contreras','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m7'),
				array('nombre' => 'Jose Alberto','apellidoP' => 'Lopez','apellidoM' => 'Cazares','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m8'),
				array('nombre' => 'Edgar Alberto','apellidoP' => 'Dominguez','apellidoM' => 'Araiza','status' => '1','link_Pagina' => '',
					'fotoURL' => 'edgar.jpg','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m9'),
				array('nombre' => 'Omar','apellidoP' => 'Delgadillo','apellidoM' => 'Quezada','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m10'),
				array('nombre' => 'Alberto','apellidoP' => 'Urbina','apellidoM' => 'Espinoza','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m11'),
				array('nombre' => 'Fabián Natanael','apellidoP' => 'Murrieta','apellidoM' => 'Rico','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m12'),
				array('nombre' => 'Jorge Antonio','apellidoP' => 'Atempa','apellidoM' => 'Camacho','status' => '1','link_Pagina' => '',
					'fotoURL' => 'Atempa.jpg','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m13'),
				array('nombre' => 'Steven','apellidoP' => 'Delgadillo','apellidoM' => 'Quezada','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m14'),
				array('nombre' => 'Oscar Rubén','apellidoP' => 'Batista','apellidoM' => 'Gaxiola','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m15'),
				array('nombre' => 'Oskardie','apellidoP' => 'Castro','apellidoM' => 'Chicatti','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m16'),
				array('nombre' => 'Félix Francisco','apellidoP' => 'Reyna','apellidoM' => 'Beltrán','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m17'),
				array('nombre' => 'Blanca A.','apellidoP' => 'Marrujo','apellidoM' => 'Verdugo','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m18'),
				array('nombre' => 'Fernando Emmanuel','apellidoP' => 'Michel','apellidoM' => 'Avila','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m19'),
				array('nombre' => 'Dulce Karina','apellidoP' => 'Orduño','apellidoM' => 'Valenzuela','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m34'),
				


				array('nombre' => 'Sealtyel','apellidoP' => 'Castillo','apellidoM' => 'Medina','status' => '0','link_Pagina' => '',
					'fotoURL' => 'Sealtyel.jpg','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m24'),
				array('nombre' => 'Mayra Leticia','apellidoP' => 'Lizárraga','apellidoM' => 'Camberos','status' => '1','link_Pagina' => '',
					'fotoURL' => 'mayralizarraga.jpg','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m22'),
				array('nombre' => 'Andrés','apellidoP' => 'Buelna','apellidoM' => 'Benítez','status' => '1','link_Pagina' => '',
					'fotoURL' => 'andres buelna.jpg','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m23'),
				array('nombre' => 'Hector Eduardo','apellidoP' => 'Villareal','apellidoM' => 'Rodriguez','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'posgrado','referencia'=>'m64'),



				//Profesores
				array('nombre' => 'Vidblaín','apellidoP' => 'Amaro','apellidoM' => 'Ortega','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m20'),
				array('nombre' => 'Luis Aram','apellidoP' => 'Tafoya','apellidoM' => 'Díaz','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m21'),
				array('nombre' => 'Jesus','apellidoP' => 'Olvera','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'investigador','referencia'=>'m40'),
				
				
				
				
				//Estudiantes de licenciatura
				
				

				array('nombre' => 'Ari Geovany','apellidoP' => 'Villavicencio','apellidoM' => 'Espinoza','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m25'),
				array('nombre' => 'David Ambroth','apellidoP' => 'López','apellidoM' => 'Nogales','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m26'),
				array('nombre' => 'Oscar Daniel','apellidoP' => 'Ozaine','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m33'),
				array('nombre' => 'Francisco','apellidoP' => 'Concha','apellidoM' => 'Ríos','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m45'),
				array('nombre' => 'Obed','apellidoP' => 'Mares','apellidoM' => 'Valenzuela','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m47'),
				array('nombre' => 'Alfonso','apellidoP' => 'Medina','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m50'),

				array('nombre' => 'Brenda Lilia','apellidoP' => 'Castro','apellidoM' => 'Coronado','status' => '1','link_Pagina' => '',
					'fotoURL' => 'Brenda.png','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m60'),
				array('nombre' => 'Esther','apellidoP' => 'Machado','apellidoM' => '','status' => '1','link_Pagina' => '',
					'fotoURL' => 'EstherMachado.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m61'),
				array('nombre' => 'Alejandra','apellidoP' => 'Flores','apellidoM' => 'Buruel','status' => '1','link_Pagina' => '',
					'fotoURL' => 'alejandra.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m62'),
				array('nombre' => 'Marco Alejandro','apellidoP' => 'Cornejo','apellidoM' => 'Bracamontes','status' => '1','link_Pagina' => '',
					'fotoURL' => 'marco.jpg','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m63'),
				array('nombre' => 'Edler Ulises','apellidoP' => 'Meza','apellidoM' => 'Lujan','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m66'),
				array('nombre' => 'Jesús','apellidoP' => 'Galarza','apellidoM' => 'Mejía','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m67'),
				array('nombre' => 'Diego Armando','apellidoP' => 'Saldaña','apellidoM' => 'Higadera','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m68'),
				array('nombre' => 'Ana Patricia','apellidoP' => 'Guzmán','apellidoM' => 'Valenzuela','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'licenciatura','referencia'=>'m69'),
				
				


				
								

			
				
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
				array('nombre' => 'Eva','apellidoP' => 'Herrera','apellidoM' => 'Ramírez','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m42'),
				array('nombre' => 'Alfons','apellidoP' => 'Crespo','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m43'),
				array('nombre' => 'Ismael','apellidoP' => 'Ripoll','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m44'),
				array('nombre' => 'Tomas','apellidoP' => 'Navarro','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m98'),
				array('nombre' => 'Carlos','apellidoP' => 'Estrada','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m48'),
				array('nombre' => 'Roberto','apellidoP' => 'Padilla','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m49'),
				array('nombre' => 'Arturo','apellidoP' => 'Rangel','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m51'),
				array('nombre' => 'Martin','apellidoP' => 'Lara','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m52'),
				array('nombre' => 'Leopoldo N.','apellidoP' => 'Gaxiola','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m53'),
				array('nombre' => 'Juan J.','apellidoP' => 'Tapia','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m54'),
				array('nombre' => 'Patricia','apellidoP' => 'Balbastre','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m55'),
				array('nombre' => 'Felix','apellidoP' => 'Díaz','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m56'),
				array('nombre' => 'Juan','apellidoP' => 'Rodríguez','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m57'),
				array('nombre' => 'Christian','apellidoP' => 'Maldonado','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m58'),
				array('nombre' => 'Rafael Iván','apellidoP' => 'Ayala','apellidoM' => 'Figueroa','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m59'),
				array('nombre' => 'Luis','apellidoP' => 'Martinez','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m65'),
				array('nombre' => 'Yuma','apellidoP' => 'Sandoval-Ibarra','apellidoM' => '','status' => '0','link_Pagina' => '',
					'fotoURL' => '','alum_Descripcion' => '','idOcupacion'=>'','referencia'=>'m70'),





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
