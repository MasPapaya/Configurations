<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<?php echo $this->Html->script(array($this->plugin . '.maps', $this->plugin . 'main_2')); ?>
<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="icon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<div class="row-fluid">
		<div class="span5">
			<?php echo $this->Form->create('Location'); ?>
			<fieldset>
				<legend><?php echo __d('configurations','Edit Location'); ?></legend>
				<?php
				echo $this->Form->input('id');
				echo $this->Form->input('parent_id', array('empty' => true, 'options' => $locations));
				echo $this->Form->input('name');
				echo '<span>De clic sobre el marcador en el mapa para editar la latitud y longitud.</span>';
				echo '<span>' . $this->Html->image('http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png', array('alt' => 'Marcador Rojo')) . '</span>';
				echo $this->Form->input('latitude', array('type' => 'text', 'class' => 'latitude', 'readonly' => 'readonly'));
				echo $this->Form->input('longitude', array('type' => 'text', 'class' => 'longitude', 'readonly' => 'readonly'));
				echo $this->Form->input('is_capital');
				echo $this->Form->input('is_node');
				?>
			</fieldset>
			<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
		</div>
		<div class="span6">
			<div id="map_canvas" style="width:100%; height:475px" ><script type="text/javascript">initialize();</script></div>
		</div>
	</div>
</div>
