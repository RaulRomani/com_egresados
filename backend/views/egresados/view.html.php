
<?php

defined('_JEXEC') or die;

class EgresadosViewEgresados extends JViewLegacy{
	public function display($tpl = null){

		// get some date from the models
		$items = $this->get('Items');
		$this->items = &$items;

		
		parent::display($tpl);
	}
}