<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
</head>
<body>
    <h1><strong>Rooms Index</strong></h1>

    @foreach($rooms as $room)
    <hr></hr>
    <p><strong> Tipo: </strong> {{$room->room_type}} </p>
    <p><strong> Tipo: </strong> {{$room->number}} </p>
    <p><strong> Tipo: </strong> {{$room->bed_type}} </p>
    <p><strong> Tipo: </strong> {{$room->room_floor}} </p>
    <p><strong> Tipo: </strong> {{$room->status}} </p>
    <p><strong> Tipo: </strong> {{$room->rate}} </p>
    <p><strong> Tipo: </strong> {{$room->discount}} </p>
    <p><strong> Tipo: </strong> {{$room->facilities}} </p>
    

    @endforeach

</body>
</html>