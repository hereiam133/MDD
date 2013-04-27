<!-- File: /app/View/Posts/edit.ctp -->
<div class="center outline index_p">
<h2>Edit Post</h2>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->hidden('username', array('value' => AuthComponent::user('username')));
    echo $this->Form->input('body', array('rows' => '4'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');
    ?>

</div>