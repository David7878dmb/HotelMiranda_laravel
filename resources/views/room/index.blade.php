<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
</head>
<body>
    <h1><strong>Rooms Index</strong></h1>

    <a href="{{route('room.create')}}"><strong>Create Room</strong></a>

    @foreach($rooms as $room)
    <hr></hr>
    <p><strong> Tipo de habitación: </strong> {{$room->room_type}} </p>
    <p><strong> Numero de habitación: </strong> {{$room->number}} </p>
    <p><strong> Tipo de cama: </strong> {{$room->bed_type}} </p>
    <p><strong> Piso: </strong> {{$room->room_floor}} </p>
    <p><strong> Stado: </strong> {{$room->status}} </p>
    <p><strong> Precio: </strong> {{$room->rate}} </p>
    <p><strong> Descuento: </strong> {{$room->discount}} </p>
    <p><strong> Cosas: </strong> {{$room->facilities}} </p>
    
    <a href="{{route('room.show', $room->id)}}">Show Room</a>
    @endforeach

</body>
</html>