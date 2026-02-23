<!-- templates/testimonios.php -->
<section class="testimonios-section" id="testimonios">
    <h2 class="testimonios-title">TESTIMONIOS DE CLIENTES</h2>

    <div class="testimonios-grid">
        <?php
        $testimonios = [
            [
                "texto" => "Nunca había tenido un corte que me quedara tan bien. El fade quedó perfecto y la barba impecable. Definitivamente volveré.",
                "nombre" => "Elliot Richbourg",
                "imagen" => "img/testimonios/cliente_1.png"
            ],
            [
                "texto" => "La mejor experiencia en una barbería. Me asesoraron sobre qué corte me favorecía más y quedé encantado con el resultado.",
                "nombre" => "Carlos Medina",
                "imagen" => "img/testimonios/cliente_2.png"
            ],
            [
                "texto" => "La atención fue increíble y el corte aún mejor. Me hicieron un Pompadour con un degradado bajo y me veo genial.",
                "nombre" => "Luis Romero",
                "imagen" => "img/testimonios/cliente_3.png"
            ],
            [
                "texto" => "Tenía miedo de cambiar de estilo, pero el barbero supo exactamente lo que quería. Ahora todos me preguntan dónde me corté el pelo.",
                "nombre" => "David Herrera",
                "imagen" => "img/testimonios/cliente_4.png"
            ],
            [
                "texto" => "Un buen corte de cabello cambia por completo tu imagen. No hay nada mejor que salir de la barbería sintiéndote renovado.",
                "nombre" => "Fernando López",
                "imagen" => "img/testimonios/cliente_5.png"
            ],
            [
                "texto" => "Excelente ambiente, profesionales de primera. Salí con un corte moderno y elegante.",
                "nombre" => "Andrés Torres",
                "imagen" => "img/testimonios/cliente_6.png"
            ],
            [
                "texto" => "Mi hijo también vino conmigo y ambos quedamos más que satisfechos. ¡Volveremos sin duda!",
                "nombre" => "Julio Reyes",
                "imagen" => "img/testimonios/cliente_7.png"
            ],
            [
                "texto" => "Me encantó el servicio. Me dieron justo el look que buscaba. Muy recomendado.",
                "nombre" => "Pedro Morales",
                "imagen" => "img/testimonios/cliente_8.png"
            ],
           
        ];

        foreach ($testimonios as $t) {
            echo '
            <div class="testimonio-item">
                <p>“' . $t["texto"] . '”</p>
                <div class="testimonio-autor">
                    <img src="' . $t["imagen"] . '" alt="' . $t["nombre"] . '">
                    <span>' . $t["nombre"] . '</span>
                </div>
            </div>';
        }
        ?>
    </div>
</section>
