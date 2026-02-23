<!-- templates/footer.php -->
<footer class="footer">
    <div class="footer-social">
        <a href="#"><img src="img/equipo/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="img/equipo/whatsapp.png" alt="WhatsApp"></a>
        <a href="#"><img src="img/equipo/twitter.png"alt="Twitter"></a>
        <!-- <a href="#"><img src="img/icon-instagram.svg" alt="Instagram"></a> -->
    </div>

    <div class="footer-logo">
        <img src="img/logo/lg_barberia.png" alt="Blackut Logo">
    </div>

    <p class="footer-copy">© Copyright Bla Cut, Todos los derechos reservados.</p>

    <img src="img/logo/arrow.png" alt="" class="scroll-top">
   
</footer>

<script>
document.querySelector('.scroll-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

