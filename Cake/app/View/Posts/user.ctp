<!-- File: /app/View/Posts/user.ctp -->
<div class="center outline index_p">
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
<div class="center p_button">  
<p><?php echo $this->Html->link('Add Post', array('action' => 'add'), array('class' => 'button')); ?> 
</p>
<p>

<?php echo $this->Facebook->disconnect(array('label' => 'Logout', 'redirect' => '/users/logout')); ?>
</p>
</div>

