<div>
<form action="/save/<?= $contact?->id; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block text-gray-700">Full Name</label>
        <input type="text" value="<?= $contact?->name ?? null; ?>" name="name"
            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </div>
    <div>
        <label class="block text-gray-700">Email</label>
        <input type="email" value="<?= $contact?->email ?? null; ?>" name="email"
            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </div>
    <div>
        <label class="block text-gray-700">Phone</label>
        <input type="tel" value="<?= $contact?->phone ?? null; ?>" name="phone"
            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </div>
    <div>
        <label class="block text-gray-700">Address</label>
        <textarea name="address" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300"
            required><?= $contact?->address ?? null; ?></textarea>
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save
            Contact</button>
    </div>
</form>

</div>
