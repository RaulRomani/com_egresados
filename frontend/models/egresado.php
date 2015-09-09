<?php 
defined ('_JEXEC') or die;


class EgresadosModelEgresado extends JModelItem{
	public function getItem($pk = null){
		
		$app = JFactory::getApplication('frontend');
		$id = $app->input->getInt('id');

		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,nombre,apellido');
		$query->from('#__egresados');
		$query->where('id ='.$id);

		$db->setQuery($query);
		$data = $db->loadObject();
		
		return $data;
	}
}