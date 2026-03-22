<?php Core\Core::header(); ?>

<div class="bg-white shadow-md rounded-lg p-6">
    <?php snippet('form', [
        'contact' => $contact,
    ]); ?>
</div>

<?php Core\Core::footer(); ?>
