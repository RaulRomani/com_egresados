
<?php

defined('_JEXEC') or die;

class EgresadosViewEgresado extends JViewLegacy{
	public function display($tpl = null){

		// get some date from the models
		$item = $this->get('Item');
		$this->item = &$item;

		$form = $this->get('Form');
		$this->form = &$form;

		parent::display($tpl);
	}
}