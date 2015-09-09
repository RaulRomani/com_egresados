<?php
defined('_JEXEC') or die();

class EgresadosController extends JControllerLegacy{
	public function display($cachable = false, $urlparams = false){
		$document = JFactory:: getDocument();

		//in order to view a single view
		$id = $this->input->getInt('id');

		$vName = $this->input->get('view', 'egresados');
		$this->input->set('view', $vName);

		parent::display($cachable, $urlparams);

		return $this;


	}
}