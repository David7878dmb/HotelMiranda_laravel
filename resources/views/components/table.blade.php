<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body >
    
<table class="min-w-full border-collaps rounded-lg">
    <thead class="text-lg uppercase text-center font-bold text-gray-900 dark:text-gray-900" style="background-color:#D74747">
        <tr>
            @foreach(array_keys($data[0]) as $column)
                @if ($column !== 'created_at' && $column !== 'updated_at')
                    <th scope="col" class="px-6 py-3">
                        {{ ucfirst($column) }}
                    </th>
                @endif
            @endforeach
            
            <th scope="col" class="px-6 py-3 text-left dark:bg-colorfondo">
                Detalles
            </th>
        </tr>
    </thead>
    <tbody class="text-xs uppercase text-center text-gray-800 dark:text-gray-800 font-bold" style="background-color:#6FB8B8">
        @foreach($data as $row)
        <tr>
            @foreach($row as $key => $value)

                @if ($key === 'picture')
                    <td>
                        <img src="{{$value}}" />
                    </td>
                @elseif ($key !== 'created_at' && $key !== 'updated_at')
                    <td>
                        {{ $value }}
                    </td>
                @endif
            @endforeach

            <td>
                <a href="{{ route(request()->segment(1) . '.show', $row['id']) }}">
                    Info
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>