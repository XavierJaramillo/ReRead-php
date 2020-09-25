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

                <div class="ebook">
                    <a href="https://www.amazon.es/Cell-BEST-SELLER-Stephen-King/dp/8483465213">
                        <img src="../img/cell.jpeg" alt="Ebook 1"></a>
                    <p>Cuentos raros para chicos con problemas.</p>
                </div>

                <div class="ebook">
                    <a href="https://www.amazon.es/ciclo-hombre-lobo-BEST-SELLER/dp/8499081282/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=X8E0IVMTIGFV&dchild=1&keywords=el+ciclo+del+hombre+lobo+stephen+king&qid=1600705923&sprefix=el+ciclo+del+h%2Cstripbooks%2C274&sr=8-1">
                        <img src="../img/elciclodelhombrelobo.jpeg" alt="Ebook 2"></a>
                    <p>Historia de un hombre lobo.</p>
                </div>

                <div class="ebook">
                    <a href="https://www.amazon.es/resplandor-BEST-SELLER-Stephen-King/dp/8490328722/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=24C9CLA6828AB&dchild=1&keywords=el+resplandor+stephen+king&qid=1600705944&sprefix=el+res%2Caps%2C230&sr=8-1">
                        <img src="../img/elresplandor.jpeg" alt="Ebook 3"></a>
                    <p>Gran tensión, número uno en taquillas.</p>
                </div>

                <div class="ebook">
                    <a href="https://www.amazon.es/Doctor-Sue%C3%B1o-BEST-SELLER-Stephen/dp/849062285X/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=EKF1ZK5GH47I&dchild=1&keywords=doctor+sue%C3%B1o+stephen+king&qid=1600705985&sprefix=doctor+sue%C3%B1o%2Caps%2C232&sr=8-1">
                        <img src="../img/doctorsleep.jpeg" alt="Ebook 4"></a>
                    <p>Para gente con problemas para dormir.</p>
                </div>

                <div class="ebook">
                    <a href="https://www.amazon.es/Mientras-escribo-BEST-SELLER-Stephen/dp/849759732X/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=63YZ4KZPD0IY&dchild=1&keywords=mientras+escribo+stephen+king&qid=1600706006&sprefix=mientras+esc%2Caps%2C294&sr=8-1">
                        <img src="../img/mientrasescribo.jpeg" alt="Ebook 5"></a>
                    <p>Libro para genios con gran intelecto.</p>
                </div>
            </div>


        </div>

        <div class="column right">
            <h2>Top ventas</h2>
            <p>Cien años de soledad.</p>
            <p>Crónica de una muerte anunciada.</p>
            <p>El otoño del patriarca.</p>
            <p>El general en su laberinto.</p>
        </div>
    </div>

    <footer class="footer" style="display: none;">
        <p>Copyright XaviDev ©</p>
    </footer>
</body>

</html>