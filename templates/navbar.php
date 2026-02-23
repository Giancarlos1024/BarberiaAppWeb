<!-- navbar.php -->
<nav class="navbar">
    <div class="logo">
        <a href="index.php">
            <img src="img/logo/lg_barberia.png" alt="Logo Barbería" class="logo-icon">
        </a>
    </div>
   <!-- templates/navbar.php -->
  
    <ul class="nav-links">
        <li><a href="#hero">Inicio</a></li>
        <li><a href="#equipo">Nosotros</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#peinados">Peinados</a></li>
        <li><a href="#contacto">Contacto</a></li>
        <li><a href="#reserva" class="reserva-btn">Reserva</a></li>
    </ul>
    

    <div class="menu-toggle" id="mobile-menu">&#9776;</div>
</nav>

<script>
    
const menuToggle = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

</script>