<?php 
defined ('_JEXEC') or die;


class EgresadosModelEgresado extends JModelAdmin{
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

	public function getForm($data = array(), $loadData = true)
	{
		$app = JFactory::getApplication();

		// get the form
		$form = $this->loadForm('com_egresados.egresado', 'egresado', array('control' => 'jform', 'load_data' => $loadData));

		if(empty($form)){
			return false;
		}

		return $form;
	}

	protected function loadFormData(){
		// Check the session for previously entered from data
		$data = JFactory::getApplication()->getUserState('com_egresados.edit.egresado.data', array());
		if (empty($data)){
			$data = $this->getItem();
		}

		return $data;
	}





}