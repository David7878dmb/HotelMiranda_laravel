<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-400 font-serif">
    
    <div class=" flex flex-col items-center">
            <div class="card-header bg-info text-white">
                <h1 class="text-4xl">Detalles del Booking</h1>
            </div>
                <div class="row mb-3 my-5 flex flex-row">
                    <div class="col-md-6">
                        <p><strong>ID de Reserva:</strong> {{ $booking->id }}</p>
                        <p><strong>Cliente:</strong> {{ $booking->guest }}</p>
                        <p><strong>Fecha de Reserva:</strong> {{ \Carbon\Carbon::parse($booking->order_date)->format('d/m/Y') }}</p>
                        <p><strong>Descuento:</strong> {{ number_format($booking->discount, 2) }}%</p>
                    </div>
                    <div class="col-md-6 pl-4">
                        <p><strong>Check-In:</strong> {{ \Carbon\Carbon::parse($booking->check_in)->format('d/m/Y') }}</p>
                        <p><strong>Check-Out:</strong> {{ \Carbon\Carbon::parse($booking->check_out)->format('d/m/Y') }}</p>
                        <p><strong>Estado:</strong>
                            <span class="badge {{ $booking->status === 'confirmed' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </p>
                        <p><strong>Habitación:</strong> {{ $booking->room->name ?? 'No asignada' }}</p> 
                    </div>
                </div>
                @if ($booking->picture)
                    <div class="mb-3 py-5">
                        <p><strong>Imagen de Cliente:</strong></p>
                        <img src="{{ $booking->picture }}" alt="Imagen del cliente" class="img-fluid rounded" style="max-width: 200px;">
                    </div>
                @endif
               
                <div class="mb-3 py-5" >
                    <h5>Detalles Adicionales</h5>
                    <p><strong>Comentarios:</strong></p>
                    <p>
                        @if(is_array($booking->notes) && count($booking->notes) > 0)
                            {!! implode('<br>', $booking->notes) !!}
                        @else
                            No hay comentarios adicionales
                        @endif
                    </p>
                </div>
                <div class="mb-3">
                    <p><strong>Archivado:</strong>
                        <span class="badge {{ $booking->archived ? 'bg-success' : 'bg-warning' }}">
                            {{ $booking->archived ? 'Sí' : 'No' }}
                        </span>
                    </p>
                </div>
                <form method="POST" action="{{route('booking.destroy', $booking->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Esta seguro de eliminar')">Borrar</button>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>