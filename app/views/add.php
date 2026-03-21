<?php Core\Core::header('Add Contact'); ?>

<div class="bg-white shadow-md rounded-lg p-6">
    <?php snippet('form', [
        'contact' => null,
    ]); ?>
</div>

<?php Core\Core::footer(); ?>
