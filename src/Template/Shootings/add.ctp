<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Shootings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="shootings form large-10 medium-9 columns">
    <?= $this->Form->create($shooting); ?>
    <fieldset>
        <legend><?= __('Add Shooting') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
