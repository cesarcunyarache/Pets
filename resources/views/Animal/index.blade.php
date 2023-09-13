<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <link rel="icon" href="pets.png">


    @vite('resources/css/tailwind.css')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

   <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>


    <link href="/css/style.css" rel="stylesheet">

    <!--   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" /> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


</head>

<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>
    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="paw-outline"></ion-icon>
                <span>Pets Joy</span>
            </div>
            <div class="linea"></div>

        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="main" href="/main">
                        <ion-icon name="newspaper-outline"></ion-icon>
                        <span>Inbox</span>
                    </a>
                </li>
                <li>
                    <a id="login" href="/login">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>Inbox</span>
                    </a>
                </li>
                <li>
                    <a id="form" href="/form">
                        <ion-icon name="star-outline"></ion-icon>
                        <span>Starred</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                        <span>Sent</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Drafts</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="bookmark-outline"></ion-icon>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <span>Spam</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="trash-outline"></ion-icon>
                        <span>Trash</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <main id="content">
        @yield('content')
    </main>





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <script src="/js/sidebar.js"></script>

    <script>

    </script>



</body>

</html>