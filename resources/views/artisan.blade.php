<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Artisan Command</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Run Artisan Command</h1>
    <form action="/run-artisan" method="POST" class="space-y-4">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Command Input -->
        <div>
            <label for="command" class="block text-sm font-medium text-gray-700 mb-1">Enter Artisan Command</label>
            <input
                type="text"
                name="command"
                id="command"
                placeholder="Example: cache:clear"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                required>
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 font-medium shadow-lg">
            Run Command
        </button>
    </form>
</div>

</body>
</html>
