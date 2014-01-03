<div class="settings">
	<?php echo $this->Html->link('<i class="icon-plus-sign icon-white"></i>&nbsp;' . __('New Setting'), array('action' => 'add', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>
	<div>
		<h2><?php echo __('Settings'); ?></h2>
		<table class="table table-condensed table-bordered table-striped">
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('value'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($settings as $setting): ?>
				<tr>
					<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
					<td><?php echo h($setting['Setting']['name']); ?>&nbsp;</td>
					<td><?php echo h($setting['Setting']['value']); ?>&nbsp;</td>
					<td class="actions">
						<div class="btn-group">
							<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $setting['Setting']['id']), array('class' => 'btn', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $setting['Setting']['id']), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?', $setting['Setting']['name'])); ?>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<div class="pagination pagination-centered">
			<ul>
				<?php echo $this->Paginator->prev('<', array('tag' => 'li',), NULL, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'disabled')); ?>
				<?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
				<?php echo $this->Paginator->next('>', array('tag' => 'li',), NULL, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'disabled')); ?>
			</ul>
		</div>
	</div>
</div>
