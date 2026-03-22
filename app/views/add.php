<?php Core\Core::header(); ?>
<div class="bg-white shadow-md rounded-lg p-6">
    <form action="#" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700">Full Name</label>
            <input type="text" name="name"
                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email"
                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
        </div>
        <div>
            <label class="block text-gray-700">Phone</label>
            <input type="tel" name="phone"
                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
        </div>
        <div>
            <label class="block text-gray-700">Address</label>
            <textarea name="address" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300"
                required></textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save
                Contact</button>
        </div>
    </form>
</div>


<?php Core\Core::footer(); ?>
