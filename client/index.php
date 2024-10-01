<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Response Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">JSON Client-Server Example</h1>

        <button id="load-data-button" type="button" class="m-2 p-3 rounded bg-blue-100 hover:bg-blue-50">Load data</button>
        
        <div class="overflow-x-auto">
            <table id="data" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Age</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Location</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <!-- Data will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
