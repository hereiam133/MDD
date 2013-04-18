<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
	<?php if($facebook_user){
	echo $this->Facebook->logout();
	debug($Facebook_user);
	debug($user);
}
else{
echo $this->Facebook->login(); }
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
<?php echo $this->Html->link('Back', '/'); ?>
</div>

