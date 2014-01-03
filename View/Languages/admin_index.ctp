<div class="users">
	<?php echo $this->Html->link('<i class="icon-plus-sign icon-white"></i>&nbsp;' . __('New Language'), array('action' => 'add', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>
	<div>
		<h2><?php echo __('Languages'); ?></h2>
		<table class="table table-condensed table-bordered table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('code'); ?></th>
					<th><?php echo $this->Paginator->sort('code2'); ?></th>
					<th><?php echo $this->Paginator->sort('website'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($languages as $language): ?>
					<tr>
						<td><?php echo h($language['Language']['id']); ?>&nbsp;</td>
						<td><?php echo h($language['Language']['name']); ?>&nbsp;</td>
						<td><?php echo h($language['Language']['code']); ?>&nbsp;</td>
						<td><?php echo h($language['Language']['code2']); ?>&nbsp;</td>
						<td><?php echo ($language['Language']['website'] ) ? __('Yes') : __('Not'); ?>&nbsp;
						</td>
						<td class="actions">
							<div class="btn-group">	
								<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $language['Language']['id']), array('escape' => FALSE, 'class' => 'btn')) ?>														
								<?php
								echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $language['Language']['id']), array('class' => 'btn btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $language['Language']['name']));
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
</div>

