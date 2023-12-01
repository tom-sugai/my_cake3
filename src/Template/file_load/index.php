<?php //echo "Contact end"; //debug($contact); ?>
<?= $this->Form->create($fileload, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('FileLoad Test') ?></legend>
        <?php
            echo $this->Form->control('addToDir');
            echo $this->Form->file('image');
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>