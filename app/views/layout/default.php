
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= empty($title) ? 'My Addressbook' :$title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <div class="flex h-screen">
        <aside class="w-64 bg-blue-900 text-white p-5 hidden md:block">
            <h2 class="text-2xl font-bold">Adress book</h2>
            <nav class="mt-5">
                <a href="/" class="block py-2 px-3 rounded hover:bg-blue-700">Home</a>
                <a href="/users" class="block py-2 px-3 rounded hover:bg-blue-700">User management</a>
                <a href="/logout" class="block py-2 px-3 rounded hover:bg-blue-700">Logout</a>
            </nav>
        </aside>

        <div class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-semibold"><?= empty($title) ? 'My Addressbook' :$title; ?></h1>
                <a href="/add" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add New</a>
            </header>

            <?= $content; ?>

        </div>
    </div>
</body>

</html>
