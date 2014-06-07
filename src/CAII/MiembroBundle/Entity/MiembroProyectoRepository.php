<?php

namespace CAII\MiembroBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MiembroProyectoRepository extends EntityRepository
{
	public function findMiembroProyecto()
	{
		$em = $this->getEntityManager();

		$dql = $em->createQueryBuilder();
 
		$dql->select('MiembroProyecto.id', 
			         'Miembro.nombre nombreMiembro, Miembro.id idmiembro, Miembro.apellidoP, Miembro.apellidoM', 
			         'Proyecto.nombre, Proyecto.id idproyecto')
		    ->from('MiembroBundle:MiembroProyecto', 'MiembroProyecto')
		    ->Join('MiembroProyecto.idMiembro', 'Miembro')
		    ->Join('MiembroProyecto.idProyecto', 'Proyecto');

		return $dql->getQuery()->getResult();
	}	

	public function deleteMiembroProyecto($id)
	{
		$em = $this->getEntityManager();
		$dql = $em->createQueryBuilder();
		$dql->delete('MiembroBundle:MiembroProyecto', 'ip')
		    ->where('ip.id = :id_MiembroProyecto' );
 		$dql->setParameter('id_MiembroProyecto', $id);

		return $dql->getQuery()->getResult();
	}

	
}