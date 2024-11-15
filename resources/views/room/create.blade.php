<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Create</title>
</head>
<body>
    <h1>Room Create</h1>

    <form method="post" action="{{route('room.store')}}">
    @csrf
    @method('post') 

    <select name="room_type">
            <option value="Normal">Normal</option>
            <option value="Deluxe A">Deluxe A</option>
            <option value="Deluxe B">Deluxe B</option>
            <option value="Deluxe C">Deluxe C</option>
            <option value="Duplex">Duplex</option>
            <option value="Suite">Suite</option>
        </select>
    <br/>
    <br/>
    <input name="number" type="number" placeholder="Introduce un numero"/>
    <br/>
    <br/>
    <select name="bed_type">
        <option value="Single Bed">Single Bed</option>
        <option value="Double Bed">Double Bed</option>
        <option value="Double Superior">Double Superior</option>
        <option value="Suite">Suite</option>
    </select>
    <br/>
    <br/>
    <select name="room_floor">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3</option>
    </select>
    <br/>
    <br/>
    <select name="status">
        <option value="Available">Available</option>
        <option value="Booked">Booked</option>
    </select>
    <br/>
    <br/>
    <input name="rate" type="number" placeholder="Introduce un numero" min=100 max=500/>
    <br/>
    <br/>
    <input name="discount" type="number" placeholder="Introduce un numero" min=0 max=20/>
    <br/>
    <br/>
    <button type="submit">AAAAAAAAAAAAAAA</button>
    </form>
    <hr>
    <a href="{{route('room.index')}}"><strong>Volver</strong></a>
</body>
</html>