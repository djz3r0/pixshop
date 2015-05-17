<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shootings'), ['controller' => 'Shootings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shooting'), ['controller' => 'Shootings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers form large-10 medium-9 columns">
    <?= $this->Form->create($customer); ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
