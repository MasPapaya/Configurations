<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('Language'); ?>
	<fieldset>
		<legend><?php echo __d('configurations', 'Edit Language'); ?></legend>
		<div class="col-md-3">
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('code');
			echo $this->Form->input('code2');
			echo $this->Form->input('website');
			?>
		</div>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
</div>
