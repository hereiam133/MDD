<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->hidden('username', array('value' => AuthComponent::user('username')));
    echo $this->Form->input('body', array('rows' => '4'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');
    ?>