<!-- File: /app/View/Posts/index.ctp -->

<h1>Crazy But True</h1>

<div>
<?php foreach ($posts as $post): ?>	
	
	 	<p><?php echo h($post['Post']['body']); ?></br>By: <?php echo $post['Post']['username']; ?></br><?php echo $post['Post']['created']; ?></p>
 
<?php endforeach; ?>
</div>

       
    <p><?php echo $this->Html->link('Login', '/users/login'); ?></br>
    <?php echo $this->Html->link('Register', '/users/add'); ?>
</br>
</p>
     