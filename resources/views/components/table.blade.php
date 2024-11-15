<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    
<table class="min-w-full border-collapse border border-gray-200 bg-white shadow-md rounded-lg border">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @foreach(array_keys($data[0]) as $column)
                 @if ($column !== 'created_at' && $column !== 'updated_at')
                    <th scope="col" class="px-6 py-3 text-left font-medium bg-red-500 text-white">
                        {{ ucfirst($column) }}
                    </th>
                @endif
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr class="bg-white hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700">
            @foreach($row as $key => $value)
                @if ($key !== 'created_at' && $key !== 'updated_at')
                        <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300 border-b border-gray-200">
                            {{ $value }}
                        </td>
                @endif
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
