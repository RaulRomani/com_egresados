<?php
defined('_JEXEC') or die;
?>

<form action="<?php echo JRoute::_('index.php?option=com_egresados&layout=edit&id='.(int) $this->item->id) ?>" method="post" name="adminForm" id="egresados-form" class="form-validate">
	<div class="row-fluid">
		<div class="span10 form-horizontal">
			<fieldset>
				<ul class="nav nav-tabs">
				    <li class="active"><a href="#details" data-toggle="tab"><?php echo empty($this->item->id) ? JText::_('COM_EGRESADOS_NEW_EGRESADO') : JText::sprintf('COM_EGRESADOS_EDIT_EGRESADO', $this->item->id) ; ?></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab_pane active" id="details">
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('nombre'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('nombre'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('apellido'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('apellido'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('id'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('id'); ?>
							</div>
						</div>
					</div>
					<input type="hidden" name="task" value="" />
					<?php echo JHtml::_('form.token'); ?>
				</div>
			</fieldset>
		</div>
	</div>
</form>