<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../css/estiloiniciar_sesion.css">
</head>

<body bgcolor="white">
    <header>
        <img id=logo src="../css/imagenes/natt.png" alt="Tecnonatura" >
        <h1>Registrarse </h1>
        <nav id=menu>
            <a href="index.html"> Inicio</a>    
        </nav>
    </header> 


    <div>
        <form method="POST" action="formregistrarseP.php">
        <section class="form-register">

            <h4>Formulario Registro</h4>
            <input class="controls" type="text" name="codigo_cli" placeholder="Ingrese un codigo">
            <input class="controls" type="text" name="nombre_cli" placeholder="Ingrese su Nombre">
            <input class="controls" type="email" name="correo_cli" placeholder="Ingrese su Correo">
            <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            <input class="botons" type="submit" value="Registrar">
            <p><a href="tipoDeUsuario.html">¿Ya tienes una Cuenta?</a></p>

          </section>
        </form>
    </div>

    
    <div>
        <footer>
            <table>
                <tr>
                    <th id="derechos-autor">Universidad Tecnologica de Nezahualcoyolt<br> TIC's Desarrollo de Software Multiplataforma
                        <br> &#xa9; 2021 CUM | Politicas de Privacidad       
                    </th>
                </tr>
            </table>
        </footer>
    </div>
</body>
</html>