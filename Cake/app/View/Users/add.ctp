<!-- app/View/Users/add.ctp -->

<div class="users form">

	<?php if($facebook_user){

echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'),array('onclick'=>'logout("/");'));
}
else{
echo $this->Facebook->login(); }
 ?>
	<h2>OR</h2>



<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Create New User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->hidden('role', array('value' => 'author'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?></br>
<?php echo $this->Html->link('Back', '/'); ?>
</div>