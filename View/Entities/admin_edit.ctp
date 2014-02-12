<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="icon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('Entity'); ?>
	<fieldset>
		<legend><?php echo __d('configurations', 'Edit Entity'); ?></legend>
		<div class="col-md-3">	
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('alias');
			echo $this->Form->input('folder');
			?>
		</div>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
</div>
