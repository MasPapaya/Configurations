<div class="users">
	<?php echo $this->Html->link('<i class="icon-plus-sign icon-white"></i>&nbsp;' . __('New Location'), array('action' => 'add', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>
	<div>
		<h2><?php echo __('Locations'); ?></h2>
		<table class="table table-condensed table-bordered table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
					<th><?php echo $this->Paginator->sort('lft'); ?></th>
					<th><?php echo $this->Paginator->sort('rght'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('latitude'); ?></th>
					<th><?php echo $this->Paginator->sort('longitude'); ?></th>
					<th><?php echo $this->Paginator->sort('is_capital'); ?></th>
					<th><?php echo $this->Paginator->sort('is_node'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($locations as $location): ?>
					<tr>
						<td><?php echo h($location['Location']['id']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($location['ParentLocation']['name'], array('controller' => 'locations', 'action' => 'view', $location['ParentLocation']['id'])); ?>
						</td>
						<td><?php echo h($location['Location']['lft']); ?>&nbsp;</td>
						<td><?php echo h($location['Location']['rght']); ?>&nbsp;</td>
						<td><?php echo h($location['Location']['name']); ?>&nbsp;</td>
						<td><?php echo h($location['Location']['latitude']); ?>&nbsp;</td>
						<td><?php echo h($location['Location']['longitude']); ?>&nbsp;</td>
						<td><?php echo h($location['Location']['is_capital']); ?>&nbsp;</td>
						<td><?php echo h($location['Location']['is_node']); ?>&nbsp;</td>
						<td class="actions">
							<div class="btn-group">	

								<?php
								echo $this->Html->link('<i class="icon-eye-open"></i>', array('action' => 'view', $location['Location']['id']), array('escape' => FALSE, 'class' => 'btn'));
								echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $location['Location']['id']), array('escape' => FALSE, 'class' => 'btn'));
								?>														
								<?php
								echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $location['Location']['id']), array('class' => 'btn btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $location['Location']['id']));
								?>
							</div>	

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="pagination pagination-centered">
			<ul>
				<?php echo $this->Paginator->prev('<', array('tag' => 'li',), NULL, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'disabled')); ?>
				<?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
				<?php echo $this->Paginator->next('>', array('tag' => 'li',), NULL, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'disabled')); ?>
			</ul>
		</div>
	</div>

