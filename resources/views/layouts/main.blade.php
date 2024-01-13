<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/menu.js"></script>

    <!--Script de adicionar icons-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--Script de adicionar bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="navbar">
        <div class="menu-btn" onclick="toggleMenu()">&#9776; Menu</div>
        <div class="search-bar">
            <input type="search" placeholder="Pesquisar">
            <button type="button">Pesquisar</button>
        </div>
    </div>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="toggleMenu()">×</a>
        <ul>
            <li><a href="/" data-tooltip="Home"><ion-icon name="home-outline"></ion-icon></a></li>
            <li><a href="/cadastro/cadastro/" data-tooltip="Cadastrar"><ion-icon name="reader-outline"></ion-icon></a>
            </li>
            <li><a href="#"><ion-icon name="journal-outline"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="cash-outline"></ion-icon></a></li>
        </ul>
    </div>

    <div class="content" id="main-content">
        @yield('content')
    </div>


</body>

</html>
