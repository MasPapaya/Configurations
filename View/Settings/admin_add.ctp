<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('Setting'); ?>	
	<fieldset>		
		<legend><?php echo __('New Setting'); ?></legend>
		<div class="col-md-3">
			<?php
			echo $this->Form->input('name');
			echo $this->Form->input('value');
			echo $this->Form->input('is_debug');
			?>
		</div>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>

</div>

