<!-- File: /app/View/Posts/user.ctp -->
<h1>Crazy But True</h1>

<div>
<?php foreach ($posts as $post): ?>	
	
	 	<p><?php echo h($post['Post']['body']); ?></br>By: <?php echo h($post['Post']['username']); ?></br><?php echo $post['Post']['created']; ?></br>
	 	
	 	
	 	
	 	 <?php if((AuthComponent::user('id'))===($post['Post']['user_id']) ){ echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));}
            ?>
            <?php if((AuthComponent::user('id'))===($post['Post']['user_id']) ){echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));} ?></p>
	 	
 
<?php endforeach; ?>
</div>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?> 
<?php
echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'),array('onclick'=>'logout("/");')); ?></p>
     