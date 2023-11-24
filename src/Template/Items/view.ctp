<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<!--<iframe src="https://www.janken.jp/gadgets/jan/JanSyohinKensaku.php" width="600" hight="300"></iframe>-->
<iframe src="https://www.janken.jp/goods/jk_catalog_syosai.php?jan=<?= $item->jancode ?>"  width="720" height="230"></iframe>    
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->name, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Category') ?></h4>
        <?= $this->Text->autoParagraph(h($item->category)); ?>
    </div>
    <div class="row">
        <h4><?= __('Jancode') ?></h4>
        <?= $this->Text->autoParagraph(h($item->jancode)); ?>
    </div>
    <div class="row">
        <h4><?= __('Pname') ?></h4>
        <?= $this->Text->autoParagraph(h($item->pname)); ?>
    </div>
    <div class="row">
        <h4><?= __('Brand') ?></h4>
        <?= $this->Text->autoParagraph(h($item->brand)); ?>
    </div>
    <div class="row">
        <h4><?= __('Store') ?></h4>
        <?= $this->Text->autoParagraph(h($item->store)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($item->image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Site') ?></h4>
        <?= $this->Text->autoParagraph(h($item->site)); ?>
    </div>
    <div class="row">
        <h4><?= __('Created') ?></h4>
        <?= $this->Text->autoParagraph(h($item->created)); ?>
    </div>
    <div class="row">
        <h4><?= __('Modified') ?></h4>
        <?= $this->Text->autoParagraph(h($item->modified)); ?>
    </div>
</div>
