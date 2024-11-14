<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
</head>
<body>
    <form action="/submit-booking" method="post" enctype="multipart/form-data">

        <label for="guest">Nombre del Huésped:</label>
        <input type="text" id="guest" name="guest" required><br><br>

 
        <label for="picture">Foto del Huésped (opcional):</label>
        <input type="file" id="picture" name="picture" accept="image/*"><br><br>


        <label for="order_date">Fecha del Pedido:</label>
        <input type="date" id="order_date" name="order_date" required><br><br>


        <label for="check_in">Fecha de Check-in:</label>
        <input type="date" id="check_in" name="check_in" required><br><br>


        <label for="check_out">Fecha de Check-out:</label>
        <input type="date" id="check_out" name="check_out" required><br><br>


        <label for="discount">Descuento (%):</label>
        <input type="number" id="discount" name="discount" min="0" max="100" step="0.01" required><br><br>

        <label for="notes">Notas (opcional):</label>
        <textarea id="notes" name="notes" rows="4"></textarea><br><br>

        <label for="room_id">ID de Habitación:</label>
        <select id="room_id" name="room_id" required>
          
            <option value="1">Habitación 1</option>
            <option value="2">Habitación 2</option>
            <option value="3">Habitación 3</option>
       
        </select><br><br>

    
        <label for="status">Estado:</label>
        <select id="status" name="status" required>
            <option value="Booked">Booked</option>
            <option value="Pending">Pending</option>
            <option value="Refund">Refund</option>
            <option value="Cancelled">Cancelled</option>
        </select><br><br>

        <button type="submit">Enviar Reserva</button>
    </form>
</body>
</html>