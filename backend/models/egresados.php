<?php 
defined ('_JEXEC') or die;


class EgresadosModelEgresados extends JModelList{
	public function getListQuery(){
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,nombre,apellido');
		$query->from('#__egresados');
		return $query;
	}
}