<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Room</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 ">
    <div class="max-w-3xl mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Detalle de Habitación</h1>
        <article  class="bg-white p-6 rounded-lg shadow-md space-y-4">
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->room_type}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->number}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->bed_type}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->room_floor}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->status}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->rate}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->discount}} </p>
            <p class="text-sm text-gray-600"><strong> Tipo: </strong> {{$room->facilities}} </p>
        </article>
        
            <div class="m-6 w-20" >
                <a href="{{route('room.index')}}" class="my-6 bg-blue-600  hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-200">Index</a>
            </div>  
            <div class="m-6 w-20" >
                <a href="{{route('room.edit', $room->id)}}" class="my-6 bg-yellow-600  hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-200" >Edit</a>
            </div>  
          
            <div class="m-6" >
                <form action="{{ route('room.destroy', $room->id)}}" method="POST">
                    @csrf   
                    @method('DELETE')
                    <button type="submit" class=" bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-200" onclick="return confirm('¿Esta seguro de eliminar')">Borrar</button>
                </form>
            </div>
</div>
</body>
</html>