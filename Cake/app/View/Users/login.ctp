<div class="users form center outline index_p">
<?php echo $this->Session->flash('auth'); ?>
<?php 
echo $this->Facebook->login(); 
 ?>
	<h2>OR</h2>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password to login without Facebook'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?></br>

</div>
 <div class="center p_button"><p>  
<?php echo $this->Html->link('Back', '/', array('class' => 'button')); ?></p></div>