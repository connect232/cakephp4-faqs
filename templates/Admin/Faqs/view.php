<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faq'), ['action' => 'edit', $faq->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faq'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faqs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faq'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faqs view content">
            <h3><?= h($faq->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category Dataset') ?></th>
                    <td><?= $faq->has('category_dataset') ? $this->Html->link($faq->category_dataset->h1, ['controller' => 'CategoryDatasets', 'action' => 'view', $faq->category_dataset->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= h($faq->question) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($faq->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Answer') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($faq->answer)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
