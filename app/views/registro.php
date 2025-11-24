<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro  SkillZone</title>
    <link rel="stylesheet" href="../public/Assets/css/registro.css">

</head>
<body>
    <header>
        <h1>Registro</h1>
    </header>
    <main>
        <section>
            <div>
                <button id="btn-usuarios">Usuario</button>
                <button id="btn-proveedores">Proveedor</button>
            </div>
        <form action="" id="formUsuario" class="formUsuario">
            <h4>Registro Usuarios</h4>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <label for="confirmar_password">Confirmar Password</label>
            <input type="password" id="confirmar_password" name="confirmar_password">
            <button type="submit">Registrarse</button>
        </form>
        <form action="" id="formProveedor" class="formProveedor">
            <h4>Informacion Personal Proveedor</h4>
            <label for="nombreProveedor">Nombre</label>
            <input type="text" id="nombreProveedor" name="nombreProveedor">
            <label for="descripcion">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria">
                <option value="">Seleccionar Categoria</option>
                <?php 
                foreach($categorias as $categoria){
                    echo "<option value=\"".$categoria['id_categoria']."\">".$categoria['nombre_categoria']."</option>";
                }
                ?>
            </select>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <label for="confirmar_password">Confirmar Password</label>
            <input type="password" id="confirmar_password" name="confirmar_password">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen">
            <label >Zona</label>
            <select name="zona" id="zona">
                <option value="">Seleccionar Zona</option>
                <?php 
                foreach($zonas as $zona){
                    echo "<option value=\"".$zona['id_zona']."\">".$zona['zona']."</option>";
                }
                ?>
            </select>
            <button type="submit">Registrarse</button>
        </form>
        </section>
    </main>
    <footer>
        
    </footer>
    <script src="../public/Assets/js/registro.js"></script>
</body>
</html>