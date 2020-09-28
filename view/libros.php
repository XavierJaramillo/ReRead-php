<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS Website Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <div class="logo">
        Re-Read
    </div>

    <div class="header">
        <h1>Re-Read</h1>
        <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
    </div>

    <div class="row">
        <div class="column left">
            <div class="topnav">
                <a href="../index.php">Re-Read</a>
                <a href="libros.php">Libros</a>
                <a href="ebooks.php">eBook</a>
            </div>

            <div class="content">
                <h3>Todos los libros tienen el mismo precio</h3>
                <p>Libros casi nuevos a un precio casi imposible.</p>
                <div class="alineacionImg">
                    <img src="../img/1-libro-3€.gif" alt="Imagen 1">
                </div>
                <div class="alineacionImg">
                    <img src="../img/2-libros-5€.gif" alt="Imagen 2">
                </div>
                <div class="alineacionImg">
                    <img src="../img/5-libros-10€.gif" alt="Imagen 3">
                </div>
                <h3>¿Te cambias de piso? ¿Tienes que vaciar la casa? ¿O sencillamente necesitas algo más de espacio?</h3>
                <p>En Re-Read compramos tus libros para darles una segunda vida. Los compramos todos al mismo precio: 0,20 euros. Siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los
                    dos.
                </p>

            </div>
        </div>

        <?php
            //CONEXIÓN CON LA BASE DE DATOS
            include '../services/connection.php';

            //SELECCIÓN Y MUESTRA DE DATOS DE LA BASE DE DATOS
            $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top = 1");

            if(!empty($result) && mysqli_num_rows($result) > 0) {
                //DATOS DE LA SALIDA DE CADA FILA (fila=row)
                echo "<div class= 'column right'>";
                echo "<h2> Top ventas </h2>";
                while($row = mysqli_fetch_array($result)) {
                    //AÑADIMOS EL TÍTULO A LA PÁGINA CON LA ETIQUETA H2 DE HTML
                    echo "<p>". $row['Title'] ."</p>";                        
                }
                echo "</div>";
            } else {
                echo "0 resultados";
            }
        ?>
    </div>

    <footer class="footer" style="display: none;">
        <p>Copyright XaviDev ©</p>
    </footer>
</body>

</html>