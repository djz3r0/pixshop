<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Shooting'), ['action' => 'edit', $shooting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shooting'), ['action' => 'delete', $shooting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shooting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shootings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shooting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="shootings view large-10 medium-9 columns">
    <h2><?= h($shooting->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $shooting->has('customer') ? $this->Html->link($shooting->customer->name, ['controller' => 'Customers', 'action' => 'view', $shooting->customer->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($shooting->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($shooting->date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($shooting->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($shooting->modified) ?></p>
        </div>
    </div>
</div>
