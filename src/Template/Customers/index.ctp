<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shootings'), ['controller' => 'Shootings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shooting'), ['controller' => 'Shootings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('surname') ?></th>
            <th><?= $this->Paginator->sort('forename') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $this->Number->format($customer->id) ?></td>
            <td><?= h($customer->surname) ?></td>
            <td><?= h($customer->forename) ?></td>
            <td><?= h($customer->email) ?></td>
            <td><?= h($customer->created) ?></td>
            <td><?= h($customer->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
