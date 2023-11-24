<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<!--<iframe src="https://www.janken.jp/gadgets/jan/JanSyohinKensaku.php" width="600" hight="300"></iframe>-->
<iframe src="https://www.janken.jp/goods/jk_catalog_syosai.php?jan=<?= $item->jancode ?>"  width="800" hight="300"></iframe>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $item->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><a href="<?= 'https://www.google.com/search?q=' . $item->jancode ?>"  target="_blank">GatImage</a></li>
        <li><?= $this->Html->link(__('New Items'), ['action' => 'new-index']) ?></li>
    </ul>
</nav>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Edit Item') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('category');
            echo $this->Form->control('jancode');
            echo $this->Form->control('pname');
            echo $this->Form->control('brand');
            echo $this->Form->control('store');
            echo $this->Form->control('image');
            echo $this->Form->control('site');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
