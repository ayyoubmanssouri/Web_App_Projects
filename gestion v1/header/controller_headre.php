    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        <?php 
            include "users_header.css"
        ?>
    </style>
    <header class="header">
        <div class="avatar">
            <img src="../images/stats.png" alt="" srcset="">
            <span class="hello_user">Bienvenu Contrôleur</span>
        </div>
        <nav class="Header_nav">
            <span>Utilisateures</span>
            <ul>
                <li>
                <a href="index.php"><i class="fas fa-home"></i></a>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                <a href="controler_request.php"><i class="fas fa-file-medical"></i></a>
                    <a href="controler_request.php">Demande</a>
                </li>
                <li>
                <a href="../controler/stock_stst.php"><i class="far fa-chart-bar"></i></a>
                <a href="../controler/stock_stst.php">statistiques de stock</a>
                </li>
            </ul>
                <span>les parametres</span>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-sliders-h"></i>    
                    </a>
                    <a href="">paramertres</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cogs"></i>
                    </a>
                    <a href="">options</a>
                </li>
                <li>
                    <a href="#">
                       <i class="fas fa-sign-out-alt"></i> 
                    </a>
                    <form action="" method="post"><input type="submit" name="logout" value="logout"></form>
                </li>
            </ul>
        </nav>
    </header>