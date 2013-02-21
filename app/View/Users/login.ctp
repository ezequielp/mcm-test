<?php
echo $this->Session->flash('auth');
echo $this->Form->create(); 
?>
    <fieldset>
        <legend><?php echo __('User Login'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->submit('Login');
        echo $this->Form->end();
        echo $this->Html->link('Create account', '/Register');
    ?>
    </fieldset>
