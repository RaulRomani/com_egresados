<?php 
defined('_JEXEC') or die();


$controller = JControllerLegacy::getInstance('egresados');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();









/*
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('HelloWorld');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
*/