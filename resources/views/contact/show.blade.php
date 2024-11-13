<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Show</title>
</head>
<body>
    <h1><strong>Contact Show</strong></h1>
    
   
    <p><strong>Nombre:</strong>{{$contact->name}}</p>
    <p><strong>Telefono:</strong>{{$contact->phone}}</p>
    <p><strong>Email:</strong>{{$contact->email}}</p>
    <p><strong>Asunto:</strong>{{$contact->subject}}</p>
    <p><strong>Mensaje:</strong>{{$contact->text}}</p>

    <hr>
<a href="{{ route('contact.index') }}">Volver al Index</a>
</body>
</html>