<!-- templates/peinados.php -->
<section class="peinados-section" id="peinados">
    <h2 class="peinados-title">PEINADOS</h2>

    <div class="peinados-categorias">
        <span class="categoria activa" onclick="mostrarPeinados('hombres')">HOMBRES</span>
        <span class="categoria" onclick="mostrarPeinados('mujeres')">MUJERES</span>
    </div>

    <div class="peinados-grid" id="galeria-peinados">
        <!-- PEINADOS DE HOMBRES (default) -->
        <img src="img/peinados/peinado_1.png" alt="Peinado Hombre 1">
        <img src="img/peinados/peinado_2.png" alt="Peinado Hombre 2">
        <img src="img/peinados/peinado_3.png" alt="Peinado Hombre 3">
        <img src="img/peinados/peinado_4.png" alt="Peinado Hombre 4">
        <img src="img/peinados/peinado_5.png" alt="Peinado Hombre 5">
        <img src="img/peinados/peinado_6.png" alt="Peinado Hombre 6">
        <img src="img/peinados/peinado_7.png" alt="Peinado Hombre 7">
        <img src="img/peinados/peinado_8.png" alt="Peinado Hombre 8">
        <img src="img/peinados/peinado_9.png" alt="Peinado Hombre 9">
        <img src="img/peinados/peinado_10.png" alt="Peinado Hombre 10">
        <img src="img/peinados/peinado_11.png" alt="Peinado Hombre 11">
        <img src="img/peinados/peinado_12.png" alt="Peinado Hombre 12">
        <img src="img/peinados/peinado_13.png" alt="Peinado Hombre 13">
        <img src="img/peinados/peinado_14.png" alt="Peinado Hombre 14">
        <img src="img/peinados/peinado_15.png" alt="Peinado Hombre 15">
        <img src="img/peinados/peinado_16.png" alt="Peinado Hombre 16">
        <img src="img/peinados/peinado_17.png" alt="Peinado Hombre 17">
        <img src="img/peinados/peinado_18.png" alt="Peinado Hombre 18">
       
    </div>
</section>

<script>
const peinadosHombres = [
    "img/peinados/peinado_1.png", "img/peinados/peinado_2.png", "img/peinados/peinado_3.png",
    "img/peinados/peinado_4.png", "img/peinados/peinado_5.png", "img/peinados/peinado_6.png",
    "img/peinados/peinado_7.png", "img/peinados/peinado_8.png", "img/peinados/peinado_9.png",
    "img/peinados/peinado_10.png","img/peinados/peinado_11.png", "img/peinados/peinado_12.png",
    "img/peinados/peinado_13.png","img/peinados/peinado_14.png", "img/peinados/peinado_15.png",
    "img/peinados/peinado_16.png", "img/peinados/peinado_17.png", "img/peinados/peinado_18.png"
];

const peinadosMujeres = [
    "img/peinados/peinado_m1.png", "img/peinados/peinado_m2.png", "img/peinados/peinado_m3.png",
    "img/peinados/peinado_m4.png", "img/peinados/peinado_m5.png", "img/peinados/peinado_m6.png",
    "img/peinados/peinado_m7.png", "img/peinados/peinado_m8.png", "img/peinados/peinado_m9.png",
    "img/peinados/peinado_m10.png", "img/peinados/peinado_m11.png", "img/peinados/peinado_m12.png",
    "img/peinados/peinado_m13.png", "img/peinados/peinado_m14.png", "img/peinados/peinado_m15.png",
    "img/peinados/peinado_m16.png", "img/peinados/peinado_m17.png", "img/peinados/peinado_m18.png"
];

function mostrarPeinados(categoria) {
    const contenedor = document.getElementById('galeria-peinados');
    contenedor.innerHTML = "";

    const peinados = categoria === 'hombres' ? peinadosHombres : peinadosMujeres;

    peinados.forEach(src => {
        const img = document.createElement('img');
        img.src = src;
        img.alt = "Peinado " + categoria;
        contenedor.appendChild(img);
    });

    document.querySelectorAll('.categoria').forEach(el => el.classList.remove('activa'));
    document.querySelector('.categoria[onclick*="' + categoria + '"]').classList.add('activa');
}
</script>
