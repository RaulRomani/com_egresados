<?php
defined('_JEXEC') or die;
?>


<div class="item-page egresado">
<?php
	if(empty($this->item)) {
?> <p> <?php  echo  JText::_('COM_EGRESADOS_NO_EGRESADO'); ?>
</p>
<?php }
	else { ?>
		<h3><?php echo $this->item->nombre ?></h3>
		<p><?php echo $this->item->apellido ?></p>
<?php	}
?>
</div>