<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->hidden('username', array('value' => AuthComponent::user('username')));
echo $this->Form->input('body', array('rows' => '4'));
echo $this->Form->end('Save Post');
?>