<!-- REDIRECCION - HEAD/CABECERA - LATERAL -->
<!------------------------------------------------------------------------------------------->
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


<!-- CAJA PRINCIPAL -->
<!------------------------------------------------------------------------------------------->
<div id="principal">

    <h1>Todas las entradas</h1>

    <!-- BUCLE ENTRADAS -->
    <!--------------------------------------------------->
    <?php 
        $entradas = conseguirEntradas($db, false);
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>
        <article class="entrada">
            <a href="">
                <h2><?=$entrada['titulo']?></h2>
                <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                <p>
                    <?=substr($entrada['descripcion'], 0, 180)." ..."?>
                </p>
            </a>
        </article>
    <?php
        endwhile;
        endif;
    ?>

</div> <!-- Fin principal -->

<!-- PIE DE PÁGINA -->
<!------------------------------------------------------------------------------------------->
<?php require_once 'includes/pie.php';