<table class="min-w-full border-collapse border border-gray-200 bg-white shadow-md rounded-lg">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @foreach(array_keys($data[0]) as $column)
                <th scope="col" class="px-6 py-3 text-left font-medium border-b border-gray-200">
                    {{ ucfirst($column) }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr class="bg-white hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 border-b dark:border-gray-700 transition duration-200 ease-in-out">
            @foreach($row as $value)
                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300 border-b border-gray-200">
                    {{ $value }}
                </td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
