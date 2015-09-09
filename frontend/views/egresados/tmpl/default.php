<?php
defined('_JEXEC') or die;
?>


<div class="item-page egresados">
<?php
	if(empty($this->items)) {
?> <p> <?php  echo  JText::_('COM_EGRESADOS_NO_EGRESADOS'); ?>
</p>
<?php }
	else {
		foreach ($this->items as $i => $item) { ?>
			
			<p><a href="<?php echo JRoute::_('index.php?option=com_egresados&view=egresado&id='.$item->id);  ?>"><?php echo $item->id; ?></a> | <?php echo $item->apellido; ?>, <?php echo $item->nombre; ?></p>
			<?php
		}
	}
?>
</div>