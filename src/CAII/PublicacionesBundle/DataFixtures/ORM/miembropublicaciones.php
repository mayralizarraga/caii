<?php
	namespace CAII\PublicacionesBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\PublicacionesBundle\Entity\Publicacion;
	use CAII\MiembroBundle\Entity\Miembro;
	use CAII\MiembroBundle\Entity\MiembroPublicacion;
	
	class miembropublicaciones extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			
			
			//-- Articulos congresos --
			$publicaciones1 = array(
				//CONGRESO INTERNACIONAL
				array('miembro' => 'm1','publicacion'=>'a1'),
				array('miembro' => 'm12','publicacion'=>'a1'),
				array('miembro' => 'm13','publicacion'=>'a1'),
				array('miembro' => 'm5','publicacion'=>'a1'),

				array('miembro' => 'm11','publicacion'=>'a2'),
				array('miembro' => 'm1','publicacion'=>'a2'),
				array('miembro' => 'm30','publicacion'=>'a2'),

				array('miembro' => 'm33','publicacion'=>'a3'),
				array('miembro' => 'm1','publicacion'=>'a3'),
				array('miembro' => 'm30','publicacion'=>'a3'),

				array('miembro' => 'm32','publicacion'=>'a4'),
				array('miembro' => 'm30','publicacion'=>'a4'),
				array('miembro' => 'm1','publicacion'=>'a4'),
				array('miembro' => 'm29','publicacion'=>'a4'),
				array('miembro' => 'm31','publicacion'=>'a4'),

				array('miembro' => 'm32','publicacion'=>'a5'),
				array('miembro' => 'm98','publicacion'=>'a4'),
				array('miembro' => 'm30','publicacion'=>'a5'),
				array('miembro' => 'm1','publicacion'=>'a5'),
				array('miembro' => 'm29','publicacion'=>'a5'),
				array('miembro' => 'm31','publicacion'=>'a5'),

				array('miembro' => 'm1','publicacion'=>'a6'),
				array('miembro' => 'm34','publicacion'=>'a6'),
				array('miembro' => 'm27','publicacion'=>'a6'),

				array('miembro' => 'm20','publicacion'=>'a7'),
				array('miembro' => 'm1','publicacion'=>'a7'),
				array('miembro' => 'm35','publicacion'=>'a7'),
				array('miembro' => 'm3','publicacion'=>'a7'),

				array('miembro' => 'm21','publicacion'=>'a8'),
				array('miembro' => 'm13','publicacion'=>'a8'),
				array('miembro' => 'm1','publicacion'=>'a8'),
				array('miembro' => 'm2','publicacion'=>'a8'),

				array('miembro' => 'm14','publicacion'=>'a9'),
				array('miembro' => 'm1','publicacion'=>'a9'),
				array('miembro' => 'm35','publicacion'=>'a9'),
				array('miembro' => 'm2','publicacion'=>'a9'),
				
				array('miembro' => 'm32','publicacion'=>'a10'),
				array('miembro' => 'm30','publicacion'=>'a10'),
				array('miembro' => 'm1','publicacion'=>'a10'),
				array('miembro' => 'm29','publicacion'=>'a10'),
				array('miembro' => 'm31','publicacion'=>'a10'),
				
				array('miembro' => 'm32','publicacion'=>'a11'),
				array('miembro' => 'm30','publicacion'=>'a11'),
				array('miembro' => 'm1','publicacion'=>'a11'),
				array('miembro' => 'm29','publicacion'=>'a11'),
				array('miembro' => 'm31','publicacion'=>'a11'),

				
				array('miembro' => 'm32','publicacion'=>'a13'),
				array('miembro' => 'm30','publicacion'=>'a13'),
				array('miembro' => 'm29','publicacion'=>'a13'),
				array('miembro' => 'm31','publicacion'=>'a13'),
				array('miembro' => 'm1','publicacion'=>'a13'),

				array('miembro' => 'm17','publicacion'=>'a14'),
				array('miembro' => 'm39','publicacion'=>'a14'),
				array('miembro' => 'm1','publicacion'=>'a14'),
				array('miembro' => 'm30','publicacion'=>'a14'),
				

				array('miembro' => 'm34','publicacion'=>'a15'),
				array('miembro' => 'm18','publicacion'=>'a15'),
				array('miembro' => 'm1','publicacion'=>'a15'),
				array('miembro' => 'm2','publicacion'=>'a15'),
				array('miembro' => 'm40','publicacion'=>'a15'),

				array('miembro' => 'm16','publicacion'=>'a16'),
				array('miembro' => 'm35','publicacion'=>'a16'),
				array('miembro' => 'm1','publicacion'=>'a16'),
				array('miembro' => 'm41','publicacion'=>'a16'),

				array('miembro' => 'm39','publicacion'=>'a17'),
				array('miembro' => 'm17','publicacion'=>'a17'),
				array('miembro' => 'm1','publicacion'=>'a17'),
				array('miembro' => 'm30','publicacion'=>'a17'),

				array('miembro' => 'm42','publicacion'=>'a18'),
				array('miembro' => 'm1','publicacion'=>'a18'),
				array('miembro' => 'm30','publicacion'=>'a18'),

				array('miembro' => 'm1','publicacion'=>'a19'),
				array('miembro' => 'm15','publicacion'=>'a19'),
				array('miembro' => 'm16','publicacion'=>'a19'),

				array('miembro' => 'm1','publicacion'=>'a20'),
				array('miembro' => 'm44','publicacion'=>'a20'),
				array('miembro' => 'm43','publicacion'=>'a20'),
				

				array('miembro' => 'm1','publicacion'=>'a21'),
				array('miembro' => 'm44','publicacion'=>'a21'),
				array('miembro' => 'm43','publicacion'=>'a21'),
				

				array('miembro' => 'm1','publicacion'=>'a22'),
				array('miembro' => 'm44','publicacion'=>'a22'),
				array('miembro' => 'm43','publicacion'=>'a22'),
				

				array('miembro' => 'm1','publicacion'=>'a23'),
				array('miembro' => 'm44','publicacion'=>'a23'),
				array('miembro' => 'm43','publicacion'=>'a23'),
				array('miembro' => 'm55','publicacion'=>'a23'),
				

				array('miembro' => 'm4','publicacion'=>'a32'),
				array('miembro' => 'm1','publicacion'=>'a32'),
				array('miembro' => 'm27','publicacion'=>'a32'),

				array('miembro' => 'm49','publicacion'=>'a33'),
				array('miembro' => 'm99','publicacion'=>'a33'),
				array('miembro' => 'm1','publicacion'=>'a33'),
				

				array('miembro' => 'm48','publicacion'=>'a34'),
				array('miembro' => 'm99','publicacion'=>'a34'),
				array('miembro' => 'm1','publicacion'=>'a34'),

				array('miembro' => 'm7','publicacion'=>'a42'),
				array('miembro' => 'm1','publicacion'=>'a42'),
				array('miembro' => 'm99','publicacion'=>'a42'),
				array('miembro' => 'm46','publicacion'=>'a42'),

				array('miembro' => 'm6','publicacion'=>'a43'),
				array('miembro' => 'm1','publicacion'=>'a43'),
				array('miembro' => 'm3','publicacion'=>'a43'),
				array('miembro' => 'm99','publicacion'=>'a43'),

				

				//SESION DE POSTER
				array('miembro' => 'm49','publicacion'=>'a35'),
				array('miembro' => 'm1','publicacion'=>'a35'),
				array('miembro' => 'm99','publicacion'=>'a35'),

				array('miembro' => 'm50','publicacion'=>'a36'),
				array('miembro' => 'm1','publicacion'=>'a36'),
				array('miembro' => 'm99','publicacion'=>'a36'),






				//CONGRESO NACIONAL
				array('miembro' => 'm23','publicacion'=>'a24'),
				array('miembro' => 'm45','publicacion'=>'a24'),
				array('miembro' => 'm1','publicacion'=>'a24'),
				array('miembro' => 'm40','publicacion'=>'a24'),

				array('miembro' => 'm22','publicacion'=>'a25'),
				array('miembro' => 'm24','publicacion'=>'a25'),
				array('miembro' => 'm1','publicacion'=>'a25'),
				array('miembro' => 'm3','publicacion'=>'a25'),
				array('miembro' => 'm46','publicacion'=>'a25'),

				array('miembro' => 'm47','publicacion'=>'a26'),
				array('miembro' => 'm25','publicacion'=>'a26'),
				array('miembro' => 'm10','publicacion'=>'a26'),
				array('miembro' => 'm2','publicacion'=>'a26'),
				array('miembro' => 'm1','publicacion'=>'a26'),
				

				array('miembro' => 'm13','publicacion'=>'a27'),
				array('miembro' => 'm21','publicacion'=>'a27'),
				array('miembro' => 'm1','publicacion'=>'a27'),
				array('miembro' => 'm2','publicacion'=>'a27'),
				array('miembro' => 'm46','publicacion'=>'a27'),

				array('miembro' => 'm7','publicacion'=>'a28'),
				array('miembro' => 'm5','publicacion'=>'a28'),
				array('miembro' => 'm1','publicacion'=>'a28'),
				array('miembro' => 'm3','publicacion'=>'a28'),
				array('miembro' => 'm56','publicacion'=>'a28'),

				array('miembro' => 'm19','publicacion'=>'a29'),
				array('miembro' => 'm1','publicacion'=>'a29'),
				array('miembro' => 'm30','publicacion'=>'a29'),

				array('miembro' => 'm17','publicacion'=>'a30'),
				array('miembro' => 'm1','publicacion'=>'a30'),
				array('miembro' => 'm30','publicacion'=>'a30'),

				array('miembro' => 'm16','publicacion'=>'a31'),
				array('miembro' => 'm15','publicacion'=>'a31'),
				array('miembro' => 'm2','publicacion'=>'a31'),
				array('miembro' => 'm1','publicacion'=>'a31'),

				array('miembro' => 'm48','publicacion'=>'a37'),
				array('miembro' => 'm1','publicacion'=>'a37'),
				array('miembro' => 'm99','publicacion'=>'a37'),

				array('miembro' => 'm52','publicacion'=>'a38'),
				array('miembro' => 'm23','publicacion'=>'a38'),
				array('miembro' => 'm99','publicacion'=>'a38'),
				array('miembro' => 'm1','publicacion'=>'a38'),
				

				array('miembro' => 'm57','publicacion'=>'a39'),
				array('miembro' => 'm50','publicacion'=>'a39'),
				array('miembro' => 'm58','publicacion'=>'a39'),
				array('miembro' => 'm99','publicacion'=>'a39'),
				array('miembro' => 'm1','publicacion'=>'a39'),


				array('miembro' => 'm51','publicacion'=>'a40'),
				array('miembro' => 'm1','publicacion'=>'a40'),

				array('miembro' => 'm36','publicacion'=>'a41'),
				array('miembro' => 'm37','publicacion'=>'a41'),
				array('miembro' => 'm38','publicacion'=>'a41'),
				array('miembro' => 'm1','publicacion'=>'a41'),
				



			);



			//--Capitulo libro--
			$publicaciones2 = array(
				
				array('miembro' => 'm1','publicacion'=>'cl1'),
				array('miembro' => 'm5','publicacion'=>'cl1'),
				array('miembro' => 'm27','publicacion'=>'cl1'),
				
				array('miembro' => 'm32','publicacion'=>'cl2'),
				array('miembro' => 'm30','publicacion'=>'cl2'),
				array('miembro' => 'm29','publicacion'=>'cl2'),
				array('miembro' => 'm31','publicacion'=>'cl2'),
				array('miembro' => 'm1','publicacion'=>'cl2'),
				

				
			);

			
			//--Tesis--
			$publicaciones6 = array(
				array('miembro' => 'm10','publicacion'=>'t1'),
				array('miembro' => 'm12','publicacion'=>'t2'),
				array('miembro' => 'm13','publicacion'=>'t3'),
				array('miembro' => 'm20','publicacion'=>'t4'),
				array('miembro' => 'm14','publicacion'=>'t5'),
				array('miembro' => 'm21','publicacion'=>'t6'),
				array('miembro' => 'm15','publicacion'=>'t7'),
				array('miembro' => 'm16','publicacion'=>'t8'),
				array('miembro' => 'm17','publicacion'=>'t9'),
				array('miembro' => 'm18','publicacion'=>'t10'),
				array('miembro' => 'm16','publicacion'=>'t11'),
				array('miembro' => 'm19','publicacion'=>'t12'),
				array('miembro' => 'm4','publicacion'=>'t13'),
				array('miembro' => 'm13','publicacion'=>'t14'),
				array('miembro' => 'm8','publicacion'=>'t15'),

				
				
			
			);

			//--Revistas--
			$publicaciones7 = array(
				array('miembro' => 'm1','publicacion'=>'r1'),
				array('miembro' => 'm27','publicacion'=>'r1'),
				array('miembro' => 'm28','publicacion'=>'r1'),
				
				array('miembro' => 'm30','publicacion'=>'r2'),
				array('miembro' => 'm32','publicacion'=>'r2'),
				array('miembro' => 'm1','publicacion'=>'r2'),
				array('miembro' => 'm31','publicacion'=>'r2'),
				array('miembro' => 'm29','publicacion'=>'r2'),
				
				array('miembro' => 'm33','publicacion'=>'r3'),
				array('miembro' => 'm11','publicacion'=>'r3'),
				array('miembro' => 'm1','publicacion'=>'r3'),
				array('miembro' => 'm3','publicacion'=>'r3'),
				array('miembro' => 'm2','publicacion'=>'r3'),
				
				array('miembro' => 'm12','publicacion'=>'r4'),
				array('miembro' => 'm13','publicacion'=>'r4'),
				array('miembro' => 'm1','publicacion'=>'r4'),
				array('miembro' => 'm2','publicacion'=>'r4'),
				array('miembro' => 'm3','publicacion'=>'r4'),
				
				array('miembro' => 'm1','publicacion'=>'r5'),
				array('miembro' => 'm21','publicacion'=>'r5'),
				array('miembro' => 'm13','publicacion'=>'r5'),
				array('miembro' => 'm27','publicacion'=>'r5'),
				
				array('miembro' => 'm39','publicacion'=>'r6'),
				array('miembro' => 'm17','publicacion'=>'r6'),
				array('miembro' => 'm1','publicacion'=>'r6'),
				array('miembro' => 'm30','publicacion'=>'r6'),

				array('miembro' => 'm53','publicacion'=>'r7'),
				array('miembro' => 'm35','publicacion'=>'r7'),
				array('miembro' => 'm54','publicacion'=>'r7'),
				array('miembro' => 'm1','publicacion'=>'r7'),
				array('miembro' => 'm41','publicacion'=>'r7'),
				


			);

			foreach ($publicaciones2 as $publicacion) {
				$entidad = new MiembroPublicacion();
				$entidad->setIdPublicacion($this->getReference(''.$publicacion['publicacion']));
				$entidad->setIdMiembro($this->getReference(''.$publicacion['miembro']));
				$manager->persist($entidad);
				$manager->flush();
				
			}

			foreach ($publicaciones7 as $publicacion) {
				$entidad = new MiembroPublicacion();
				$entidad->setIdPublicacion($this->getReference(''.$publicacion['publicacion']));
				$entidad->setIdMiembro($this->getReference(''.$publicacion['miembro']));
				$manager->persist($entidad);
				$manager->flush();
				
			}
			
			foreach ($publicaciones1 as $publicacion) {
				$entidad = new MiembroPublicacion();
				$entidad->setIdPublicacion($this->getReference(''.$publicacion['publicacion']));
				$entidad->setIdMiembro($this->getReference(''.$publicacion['miembro']));
				$manager->persist($entidad);
				$manager->flush();
				
			}



			foreach ($publicaciones6 as $publicacion) {
				$entidad = new MiembroPublicacion();
				$entidad->setIdPublicacion($this->getReference(''.$publicacion['publicacion']));
				$entidad->setIdMiembro($this->getReference(''.$publicacion['miembro']));
				$manager->persist($entidad);
				$manager->flush();
				
			}
			

			


			


		}


		public function getOrder()
	    {
	        return 6; // the order in which fixtures will be loaded
	    }
	}