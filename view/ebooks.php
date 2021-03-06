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
                <h3>Toda la actualidad en eBook</h3>

                <!-- Nuevo desarrollo: formulario para filtrar autor -->
                <div class="form">
                    <form action="ebooks.php" method="POST">
                    <label for="fautor">Autor</label>
                        <input type="text" id="fautor" name="fautor" placeholder="Introduce el autor...">
                        <label for="ftitulo">Titulo</label>
                        <input type="text" id="ftitulo" name="ftitulo" placeholder="Introduce el titulo...">
                        <label for="country">País</label>
                        <select id="country" name="country">
                            <option value="%">Todos los paises</option>
                            <?php
                            include '../services/connection.php';
                            $query = "SELECT DISTINCT Authors.Country FROM Authors ORDER BY Country";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['Country'] . '">' . $row['Country'] . '</option>';
                            }
                            ?>
                        </select>

                        <!-- <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">   
                        -->
                    
                        <input type="submit" value="Buscar">
                    </form>
                </div>

                <?php
                    if(isset($_REQUEST['fautor'])) {
                        //Filtrará los ebooks que se mostraran en la pagina mediante la variable fautor
                        //SELECCIÓN Y MUESTRA DE DATOS DE LA BASE DE DATOS
                        $nombreAutor = $_REQUEST['fautor'];
                        $query = "SELECT Books.Description, Books.img, Books.Title FROM Books 
                        INNER JOIN BooksAuthors ON Books.Id=BooksAuthors.BookId
                        INNER JOIN Authors ON Authors.Id = BooksAuthors.AuthorId
                        WHERE Authors.Name LIKE '%{$_REQUEST['fautor']}%'
                        AND Authors.Country LIKE '{$_REQUEST['country']}'
                        AND Books.Title LIKE '%{$_REQUEST['ftitulo']}%'";
                        $result = mysqli_query($conn, $query);
                    } else {
                        //Mostrará todos los ebooks de la bd
                        //SELECCIÓN Y MUESTRA DE DATOS DE LA BASE DE DATOS
                        $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != 0");
                    }

                    if(!empty($result) && mysqli_num_rows($result) > 0) {
                        $i=0;
                        //DATOS DE LA SALIDA DE CADA FILA (fila=row)
                        while($row = mysqli_fetch_array($result)) {
                            $i++;

                            echo "<div class= 'ebook'>";
                            //AÑADIMOS LA IMAGEN A LA PÁGINA CON LA ETIQUETA IMG DE HTML
                            echo "<img src=../img/" . $row['img'] . " alt='" . $row['Title'] . "'>";
                            //AÑADIMOS EL TÍTULO A LA PÁGINA CON LA ETIQUETA H2 DE HTML
                            echo "<div class='desc'><p>".$row['Description']."</p></div>";
                            echo "</div>";
                            if ($i%3==0) {
                                echo "<div style='clear:both'></div>";
                            }
                        }
                    } else {
                        echo "0 resultados";
                    }
                ?>

                <!--<div class="ebook">
                    <a href="https://www.amazon.es/Cell-BEST-SELLER-Stephen-King/dp/8483465213">
                        <img src="../img/cell.jpeg" alt="Ebook 1"></a>
                    <p>Cuentos raros para chicos con problemas.</p>
                </div>-->

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