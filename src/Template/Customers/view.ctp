<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shootings'), ['controller' => 'Shootings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shooting'), ['controller' => 'Shootings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers view large-10 medium-9 columns">
    <h2><?= h($customer->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Surname') ?></h6>
            <p><?= h($customer->surname) ?></p>
            <h6 class="subheader"><?= __('Forename') ?></h6>
            <p><?= h($customer->forename) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($customer->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($customer->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($customer->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($customer->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Shootings') ?></h4>
    <?php if (!empty($customer->shootings)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->shootings as $shootings): ?>
        <tr>
            <td><?= h($shootings->id) ?></td>
            <td><?= h($shootings->customer_id) ?></td>
            <td><?= h($shootings->date) ?></td>
            <td><?= h($shootings->created) ?></td>
            <td><?= h($shootings->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Shootings', 'action' => 'view', $shootings->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Shootings', 'action' => 'edit', $shootings->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shootings', 'action' => 'delete', $shootings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shootings->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
