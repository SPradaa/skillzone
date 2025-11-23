<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillZone</title>
    <link rel="stylesheet" href="Assets/css/index.css">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <span class="logs">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32">
                    <path fill="#ffffff" d="M20.959 2.339C13.438-.401 5.083 3.5 2.36 11c-2.761 7.599 1.14 15.943 8.661 18.683c7.541 2.739 15.943-1.161 18.676-8.683C32.442 13.437 28.541 5.083 21 2.339zM16 32C7.197 32 0 24.803 0 16S7.197 0 16 0s16 7.197 16 16s-7.197 16-16 16M11.901 7.74v16.52L26.24 16zm1.402 2.359L23.5 16l-10.197 5.901zm-4.704-.558v12.917l11.204-6.459zM10 11.937L17.083 16L10 20.083v-8.165z" />
                </svg>
                <p class="title">SkillZone</p>
            </span>
            <span class="btns">
                <a href=""><Button class="btn_defeat">Explorar Provedores</Button></a>
                <a href=""><Button class="btn_defeat">Iniciar Sessión</Button></a>
                <a href=""><Button class="Registro">Registrarse</Button></a>
            </span>
        </nav>
    </header>

    <main class="main">

        <!-- SECCIÓN CONSULTAS -->
        <section class="consultas">
            <p class="consultas-element-one">Encuentra el profesional ideal en tu zona, rápido y sin complicaciones.</p>
            <div class="consultas-element-two">Plomeros, electricistas, diseñadores y mucho más en un solo lugar.</div>

            <div class="selectores">
                <form action="" method="POST" class="form">
                    <div class="contend-inputs">
                        <label for="servicio" class="tikets">
                            Que Necesitas ? <br> <br>

                            <select name="servicio" id="servicio" class="options">
                                <option value="">Seleccione un Servicio</option>

                                <?php foreach ($categorias as $categoria): ?>
                                    <option value="<?= $categoria['id_categoria'] ?>">
                                        <?= $categoria['categoria'] ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </label>

                        <label for="zonas" class="tikets">
                            ¿En qué Zona? <br><br>

                            <select name="zonas" id="zonas" class="options">
                                <option value="">Seleccione una zona</option>

                                <?php foreach ($zonas as $zona): ?>
                                    <option value="<?= $zona['id_zona'] ?>">
                                        <?= $zona['zona'] . ' - ' . $zona['ciudad'] ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="submit" value="Buscar">
                </form>
            </div>
        </section>

        <!-- SECCIÓN PROVEEDORES DESTACADOS -->
        <section class="provedoresDestacados">
            <p class="titleProvedores">Provedores Destacados</p>

            <div class="carrusel">

                <?php foreach ($provedor as $p): ?>

                    <?php 
                    // categoría usando el modelo
                    $class = $provedorModel->ObtenerCategoriaProveedores($p['id_categoria']); 
                    ?>

                    <div class="provedores">
                        <img src="<?= $p['foto'] ?>" alt="fotografia de <?= $p['nombre'] ?>" class="img-provedor">

                        <p class="nombre-provedor"><?= $p['nombre'] ?></p>

                        <p class="calificacion-provedor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#eab308" d="m12 17.275l-4.15 2.5q-.275.175-.575.15t-.525-.2t-.35-.437t-.05-.588l1.1-4.725L3.775 10.8q-.25-.225-.312-.513t.037-.562t.3-.45t.55-.225l4.85-.425l1.875-4.45q.125-.3.388-.45t.537-.15t.537.15t.388.45l1.875 4.45l4.85.425q.35.05.55.225t.3.45t.038.563t-.313.512l-3.675 3.175l1.1 4.725q.075.325-.05.588t-.35.437t-.525.2t-.575-.15z"/>
                            </svg>
                            <?= $p['calificacion'] ?> / 5
                        </p>

                        <p class="categoria-provedor"><?= $class['categoria'] ?></p>

                        <p class="precio-provedor"><?= $p['precio'] ?> / Hora</p>
                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <!-- SECCIÓN ZONAS -->
        <section class="zonas">
            <p class="titleProvedores">Zonas</p>

            <div class="contenedorZonas">

                <?php foreach ($zonas as $z): ?>

                    <?php 
                    // contar proveedores con el modelo
                    $count = $zonaModel->ContarProvedores($z['Id_zona']); 
                    ?>

                    <div class="area">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g fill="#0e5bfd">
                                <path d="M6 10c0-3.414 2.676-6 6-6s6 2.586 6 6c0 2.982-1.567 5.5-3.238 7.33A18.488 18.488 0 0 1 12 19.79a18.49 18.49 0 0 1-2.762-2.46C7.567 15.5 6 12.981 6 10zm5.474 11.85L12 21l-.525.85a1 1 0 0 0 1.05 0L12 21l.526.85h.001l.002-.001l.006-.004l.02-.013a7.993 7.993 0 0 0 .311-.206c.206-.141.496-.348.841-.616a20.487 20.487 0 0 0 2.531-2.332C18.067 16.677 20 13.695 20 10c0-4.539-3.592-8-8-8c-4.408 0-8 3.461-8 8c0 3.695 1.933 6.677 3.762 8.678a20.485 20.485 0 0 0 2.53 2.332a17.706 17.706 0 0 0 1.085.778c.029.02.052.034.068.044l.02.013l.006.004h.002v.001zM10 10a2 2 0 1 1 4 0a2 2 0 0 1-4 0zm2-4a4 4 0 1 0 0 8a4 4 0 0 0 0-8z"/>
                            </g>
                        </svg>

                        <p><?= $z['zona'] ?> Ciudad <?= $z['ciudad'] ?></p>
                        <p class="count"><?= $count ?> Proveedores en esta Área</p>
                    </div>

                <?php endforeach; ?>

            </div>

        </section>

    </main>

    <footer></footer>

</body>
</html>
