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
        <h1 class="text-3xl font-bold mb-4">JSON Client-Server example</h1>

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

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://localhost:8002/',
                type: 'GET',
                success: function(response) {
                    $('#data tbody').empty();

                    response.data.forEach(function(item, index) {
                        const rowClass = index % 2 === 0 ? 'bg-white hover:bg-gray-100' : 'bg-blue-50 hover:bg-blue-100'; // Even rows will have a white background, odd rows blue
                        $('#data tbody').append(`
                            <tr class="border-b ${rowClass}">
                                <td class="py-3 px-6">${item.name}</td>
                                <td class="py-3 px-6">${item.age}</td>
                                <td class="py-3 px-6">${item.email}</td>
                                <td class="py-3 px-6">${item.location}</td>
                            </tr>
                        `);
                    });

                },
                error: function(xhr, status, error) {
                    console.log("Error occurred: " + error);
                }
            });
        });
    </script>
</body>
</html>
