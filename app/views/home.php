<?php Core\Core::header(); ?>

<?php if (!empty(Core\Session::get('msg'))): ?>
    <div class="bg-gray-100 pt-5 pb-5 text-green-700">
        <?= Core\Session::getAndForget('msg'); ?>
    </div>
<?php endif; ?>

<?php if (!empty(Core\Session::get('error'))): ?>
    <div class="bg-gray-100 pt-5 pb-5 text-red-700">
        <?= Core\Session::getAndForget('msg'); ?>
    </div>
<?php endif; ?>

<?php if (!empty($items)): ?>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <?php if ($dataType == 'contacts'): ?>
                        <th class="px-4 py-2 text-left">Name</th>
                    <?php endif; ?>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item): ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?= $key + 1; ?></td>
                        <?php if ($dataType == 'contacts'): ?>
                            <td class="px-4 py-2"><?= $item->name; ?></td>
                        <?php endif; ?>
                        <td class="px-4 py-2"><?= $item->email; ?></td>
                        <td class="px-4 py-2">
                            <a href="/{$dataType}/update/<?= $item->id; ?>" class="text-blue-600 hover:underline mr-2">Edit</a>
                            <a href="/{$dataType}/delete/<?= $item->id; ?>" class="text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div class="bg-gray-100 pt-5 pb-5 text-red-700">
        No items found.
    </div>
<?php endif; ?>

<?php Core\Core::footer(); ?>