<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Shooting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="shootings index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($shootings as $shooting): ?>
        <tr>
            <td><?= $this->Number->format($shooting->id) ?></td>
            <td>
                <?= $shooting->has('customer') ? $this->Html->link($shooting->customer->name, ['controller' => 'Customers', 'action' => 'view', $shooting->customer->id]) : '' ?>
            </td>
            <td><?= h($shooting->date) ?></td>
            <td><?= h($shooting->created) ?></td>
            <td><?= h($shooting->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $shooting->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shooting->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shooting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shooting->id)]) ?>
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
