<!DOCTYPE HTML>
<head xmlns:autohide="http://www.w3.org/1999/xhtml">
    <meta charset="UTF-8">
    <meta name="keywords" content="notatki, algorytmy, matematyka, sql, java, bazy danych">
    <title>Strefa Studenta</title>
    <link rel="shortcut icon" href="../assets/pngegg.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class="background-site">

<header><div><!-- Sekcja odpowiedzialna za nagłówek, logo i tak dalej -->
    <nav class="navbar navbar-dark bg-custom-1">
        <div class="container-fluid">
            <div class="text-center" id="LOGOtext">
                <a class="navbar-brand text-white p1 insetshadow" style="font-family: Consolas"><h2>Strefa Studenta</h2></a>
            </div>
            <p style="font-style: italic; font-family: 'Book Antiqua'; padding-left: 600px; color: cornsilk; opacity: 0.2">Od
                studentów dla studentów...</p>
            <div><img src="../assets/pngegg.png" alt="capy" width="90" height="90"></div>
        </div>
    </nav>
    <!-- Tutaj mamy nasze zakładki, home i ostatnio dodane -->
    <div class="container-fluid" > <!--Sticky nie działa xD -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active btn-outline-light btn-lg" aria-current="page" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-outline-secondary btn-lg" aria-current="page" href="../pages/ostatnio_dodane.php"
                   role="button">Ostatnio dodane</a>
            </li>
        </ul>
    </div>
    </div>
    <script>window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }</script>
    <br>
    <!-- Sekcja z cardsami -->
    <div style="color: indianred" id="main">
        <div class="container-fluid overflow-hidden text-center">
            <div class="row gy-4">
                <div class="col-lg-3">
                    <div class="p-3 card">
                        <form action="../pages/asd.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light"
                                    style="color: indianred; font-size: xx-large">ASD
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card">
                        <form action="../pages/java.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light"
                                    style="color: indianred; font-size: xx-large">JAVA
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3" id="sql">
                    <div class="p-3 card">
                        <form action="../pages/sql_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light"
                                    style="color: indianred; font-size: xx-large">SQL
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card ">
                        <form action="../pages/databases_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light container-fluid"
                                    style="color: indianred; font-size-adjust: inherit">DATABASES
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card ">
                        <form action="../pages/php_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light container-fluid"
                                    style="color: indianred; font-size: xx-large">PHP
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card ">
                        <form action="../pages/cpp_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light container-fluid"
                                    style="color: indianred; font-size: xx-large">C++
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card ">
                        <form action="../pages/linux_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light container-fluid"
                                    style="color: indianred; font-size: xx-large">LINUX
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card ">
                        <form action="../pages/assembler_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light container-fluid"
                                    style="color: indianred; font-size-adjust: inherit">ASSEMBLY
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 card ">
                        <form action="../pages/assembler_page.php" method="post">
                            <button type="submit" class="btn btn-lg btn-outline-light container-fluid"
                                    style="color: indianred; font-size-adjust: inherit">ASSEMBLY
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
