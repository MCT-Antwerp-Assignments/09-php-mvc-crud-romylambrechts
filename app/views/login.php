<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Address Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>

        <?php if (!empty(Core\Session::get('error'))): ?>
            <p class="text-center text-red-500"><?= Core\Session::get('error'); ?></p>
        <?php endif; ?>

        <form action="/authenticate" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Login</button>
        </form>
    </div>
</body>

</html>

