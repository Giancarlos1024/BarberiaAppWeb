<!-- templates/reserva.php -->
<section class="reserva-section" id="reserva">
    <div class="reserva-container">
        <div class="reserva-info">
            <h2>¡ RESERVA HOY ¡</h2>
            <p>🎟️ Reserva tu turno y transforma tu estilo 🎟️</p>
            <p>
                Agenda tu cita en solo unos clics y evita esperas innecesarias.
                Elige el servicio que necesitas, selecciona tu barbero de confianza y prepárate para una experiencia única.
            </p>
            <ul>
                <li>✅ DDDDDDDD</li>
                <li>✅ Sin filas ni demoras</li>
                <li>✅ Calidad garantizada</li>
            </ul>
            <p>🔗 Reserva ahora y luce impecable. ¡Te esperamos ¡</p>
        </div>

        <form class="reserva-form" id="formReserva">
            <input type="text" id="nombre" placeholder="SU NOMBRE" required>
            <input type="email" id="correo" placeholder="SU CORREO" >
            <input type="tel" id="telefono" placeholder="SU TELEFONO" required>

            <select id="servicio" required>
                <option value="">SELECCIONE UN SERVICIO</option>
                <option>Corte clásico</option>
                <option>Corte Degradado</option>
                <option>Afeitado</option>
                <option>Facial</option>
                <option>Paquete completo</option>
            </select>

            <input type="datetime-local" id="fechaHora" required>

            <textarea id="mensaje" placeholder="SU MENSAJE" rows="5"></textarea>
            <button type="submit">ENVIAR AHORA</button>
        </form>
    </div>
</section>

<script>
document.getElementById('formReserva').addEventListener('submit', function(e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const telefono = document.getElementById('telefono').value.trim();
    const servicio = document.getElementById('servicio').value.trim();
    const fechaHoraRaw = document.getElementById('fechaHora').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();

    // Formatear fecha y hora (ISO → formato legible)
    const fechaHora = new Date(fechaHoraRaw);
    const fecha = fechaHora.toLocaleDateString('es-PE');
    const hora = fechaHora.toLocaleTimeString('es-PE', { hour: '2-digit', minute: '2-digit' });

    const numeroWhatsApp = "51957786281"; // ← Reemplaza con tu número

    const texto = `Hola, soy ${nombre}%0A📧 Correo: ${correo}%0A📞 Teléfono: ${telefono}%0A🧾 Servicio: ${servicio}%0A📅 Fecha: ${fecha} a las ${hora}%0A📝 Mensaje: ${mensaje}`;

    const url = `https://wa.me/${numeroWhatsApp}?text=${texto}`;

    alert("Redirigiéndote a WhatsApp para finalizar tu reserva...");
    window.open(url, '_blank');
});
</script>

<script>
    const fechaHoraInput = document.getElementById('fechaHora');

    if (fechaHoraInput && fechaHoraInput.showPicker) {
        fechaHoraInput.addEventListener('click', () => {
            fechaHoraInput.showPicker();
        });
    }
</script>
