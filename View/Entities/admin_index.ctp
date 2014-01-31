<div class="entities">
	<?php echo $this->Html->link('<i class="icon-plus-sign icon-white"></i>&nbsp;' . __d('configurations','New Entity'), array('action' => 'add', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>
	<div>
		<h2><?php echo __d('configurations','Entities'); ?></h2>
		<table class="table table-condensed table-bordered table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('alias'); ?></th>
					<th><?php echo $this->Paginator->sort('folder'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($entities as $entity): ?>
					<tr>
						<td><?php echo h($entity['Entity']['id']); ?>&nbsp;</td>
						<td><?php echo h($entity['Entity']['name']); ?>&nbsp;</td>
						<td><?php echo h($entity['Entity']['alias']); ?>&nbsp;</td>
						<td><?php echo h($entity['Entity']['folder']); ?>&nbsp;</td>
						<td class="actions">
							<div class="btn-group">
								<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $entity['Entity']['id']), array('escape' => FALSE, 'class' => 'btn')) ?>							
								<?php //echo $this->Html->link('<i class="icon-eye-open"></i>', array('action' => 'view', $entity['Entity']['id']), array('escape' => FALSE, 'class' => 'btn')) ?>							
								<?php
								echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $entity['Entity']['id']), array('class' => 'btn btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $entity['Entity']['name']));
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

