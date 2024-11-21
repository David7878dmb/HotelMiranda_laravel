<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 ">
    
    <div class="max-w-3xl mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
            
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Detalle de Booking</h1>
            
            <article  class="bg-white p-6 rounded-lg shadow-md space-y-4">
                        <p class="text-sm text-gray-600"><strong>ID de Reserva:</strong> {{ $booking->id }}</p>
                        <p class="text-sm text-gray-600"><strong>Cliente:</strong> {{ $booking->guest }}</p>
                        <p class="text-sm text-gray-600"><strong>Fecha de Reserva:</strong> {{ \Carbon\Carbon::parse($booking->order_date)->format('d/m/Y') }}</p>
                        <p class="text-sm text-gray-600"><strong>Descuento:</strong> {{ number_format($booking->discount, 2) }}%</p>
                    
                        <p class="text-sm text-gray-600"><strong>Check-In:</strong> {{ \Carbon\Carbon::parse($booking->check_in)->format('d/m/Y') }}</p>
                        <p class="text-sm text-gray-600"><strong>Check-Out:</strong> {{ \Carbon\Carbon::parse($booking->check_out)->format('d/m/Y') }}</p>
                        <p class="text-sm text-gray-600" ><strong>Estado:</strong>
                            <span class="badge {{ $booking->status === 'confirmed' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </p>
                        <p class="text-sm text-gray-600"><strong>Habitación:</strong> {{ $booking->room->name ?? 'No asignada' }}</p> 
                    
                
                @if ($booking->picture)
                    <div class="mb-3 py-5">
                        <p class="text-sm text-gray-600"><strong>Imagen de Cliente:</strong></p>
                        <img src="{{ $booking->picture }}" alt="Imagen del cliente" class="img-fluid rounded" style="max-width: 200px;">
                    </div>
                @endif
               
            </article>

            <div class="flex justify-around  items-center" >
                <a href="{{route('booking.index')}}" class="my-6 bg-blue-600  hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-200">Index</a>
         
                <a href="{{route('booking.edit', $booking->id)}}" class="my-6 bg-yellow-600  hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-200" >Edit</a>

                <form method="POST" action="{{route('booking.destroy', $booking->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class=" bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-red-200"  type="submit" onclick="return confirm('¿Esta seguro de eliminar')">Borrar</button>
                </form>
            </div>  
            
        
    </div>
</body>
</html>