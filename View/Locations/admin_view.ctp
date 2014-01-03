<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="icon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<h2><?php echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($location['ParentLocation']['name'], array('controller' => 'locations', 'action' => 'view', $location['ParentLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($location['Location']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($location['Location']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($location['Location']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($location['Location']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Capital'); ?></dt>
		<dd>
			<?php echo h($location['Location']['is_capital']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Node'); ?></dt>
		<dd>
			<?php echo h($location['Location']['is_node']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


