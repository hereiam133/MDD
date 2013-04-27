<!-- File: /app/View/Posts/index.ctp -->

<div id="monkey">
<?php echo $this->Html->image('monkey.jpg', array('alt' => 'Monkey Img', 'border' => '0')); ?> 
</div>

<div class="center outline index_p">
<?php foreach ($posts as $post): ?>	
	
	 	<p><?php echo h($post['Post']['body']); ?></br>By: <?php echo $post['Post']['username']; ?></br><?php echo $post['Post']['created']; ?></p>
 
<?php endforeach; ?>
</div>

     <div class="center p_button">  
    <p><?php echo $this->Html->link('Login', '/users/login', array('class' => 'button')); ?></p><p>
    <?php echo $this->Html->link('Register', '/users/add', array('class' => 'button')); ?>
</p>
</div>
     