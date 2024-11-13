<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Contact</title>
</head>
<body>
    <h1><strong>Index Contact</strong></h1>  

    <a href="{{ route('contact.create') }}">Create Contact</a>
    <hr>

    @foreach ($contacts as $contact)
    <p><strong>Nombre:</strong>{{$contact->name}}</p>
    <p><strong>Telefono:</strong>{{$contact->phone}}</p>
    <p><strong>Email:</strong>{{$contact->email}}</p>
    <p><strong>Asunto:</strong>{{$contact->subject}}</p>
    <p><strong>Mensaje:</strong>{{$contact->text}}</p>
    <a href="{{ route('contact.show', $contact->id) }}">Ver Contacto</a>
    <hr>
    @endforeach
</body>
</html>