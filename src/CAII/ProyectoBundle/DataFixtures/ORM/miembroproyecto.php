<?php
	namespace CAII\ProyectoBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\DataFixtures\ReferenceRepository;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\MiembroBundle\Entity\MiembroProyecto;
	
	class miembroproyectos extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			
			$proyectos = array(
				array('proyecto' => 'pro1','miembro'=>'m2'),
				array('proyecto' => 'pro1','miembro'=>'m20'),
				array('proyecto' => 'pro1','miembro'=>'m59'),
				array('proyecto' => 'pro1','miembro'=>'m46'),

				array('proyecto' => 'pro2','miembro'=>'m2'),
				array('proyecto' => 'pro2','miembro'=>'m46'),

				array('proyecto' => 'pro3','miembro'=>'m99'),
				array('proyecto' => 'pro3','miembro'=>'m46'),
				array('proyecto' => 'pro3','miembro'=>'m22'),
				array('proyecto' => 'pro3','miembro'=>'m23'),

				array('proyecto' => 'pro4','miembro'=>'m2'),
				array('proyecto' => 'pro4','miembro'=>'m99'),
				array('proyecto' => 'pro4','miembro'=>'m46'),
				array('proyecto' => 'pro4','miembro'=>'m22'),
				array('proyecto' => 'pro4','miembro'=>'m23'),

				array('proyecto' => 'pro5','miembro'=>'m2'),
				array('proyecto' => 'pro5','miembro'=>'m3'),
				array('proyecto' => 'pro5','miembro'=>'m13'),
				array('proyecto' => 'pro5','miembro'=>'m25'),
				array('proyecto' => 'pro5','miembro'=>'m47'),

				array('proyecto' => 'pro6','miembro'=>'m2'),
				array('proyecto' => 'pro6','miembro'=>'m3'),
				array('proyecto' => 'pro6','miembro'=>'m12'),
				array('proyecto' => 'pro6','miembro'=>'m13'),

				array('proyecto' => 'pro7','miembro'=>'m2'),
				array('proyecto' => 'pro7','miembro'=>'m3'),
				array('proyecto' => 'pro7','miembro'=>'m21'),
				array('proyecto' => 'pro7','miembro'=>'m13'),

				array('proyecto' => 'pro8','miembro'=>'m46'),
				array('proyecto' => 'pro8','miembro'=>'m99'),
				array('proyecto' => 'pro8','miembro'=>'m61'),
				array('proyecto' => 'pro8','miembro'=>'m60'),
				array('proyecto' => 'pro8','miembro'=>'m64'),
				array('proyecto' => 'pro8','miembro'=>'m66'),
				array('proyecto' => 'pro8','miembro'=>'m67'),


				array('proyecto' => 'pro9','miembro'=>'m46'),
				array('proyecto' => 'pro9','miembro'=>'m2'),
				array('proyecto' => 'pro9','miembro'=>'m22'),
				array('proyecto' => 'pro9','miembro'=>'m23'),
				array('proyecto' => 'pro9','miembro'=>'m62'),
				array('proyecto' => 'pro9','miembro'=>'m68'),
				array('proyecto' => 'pro9','miembro'=>'m69'),
				
				array('proyecto' => 'pro10','miembro'=>'m22'),
				array('proyecto' => 'pro10','miembro'=>'m23'),
				
				


				
				
			);
			
			foreach ($proyectos as $proyecto) {
				$entidad = new MiembroProyecto();
				$entidad->setIdMiembro($this->getReference(''.$proyecto['miembro']));
				$entidad->setIdProyecto($this->getReference(''.$proyecto['proyecto']));
				$manager->persist($entidad);
				$manager->flush();	
				
			}
			
		}

		public function getOrder()
	    {
	        return 10; // the order in which fixtures will be loaded
	    }

		

	}
