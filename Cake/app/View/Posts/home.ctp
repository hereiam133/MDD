<!-- File: /app/View/Posts/home.ctp -->
<div class="center outline index_p">
<?php foreach ($posts as $post): ?>

<p><?php echo h($post['Post']['body']); ?></br>By: <?php echo $post['Post']['username']; ?></br><?php echo $post['Post']['created']; ?></br> <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?></p>
   <?php endforeach; ?>

</div>

<div class="center p_button">  
<p><?php echo $this->Html->link('Add Post', array('action' => 'add'), array('class' => 'button')); ?> </p><p>
<?php echo $this->Html->link('Create New User', '/users/admin_add', array('class' => 'button')); ?>
</p><p><?php
echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'),array('onclick'=>'logout("/");')); ?></p></div>