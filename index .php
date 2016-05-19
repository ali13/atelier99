<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet:: Atelier 99</title>

    <link type="text/css" rel="stylesheet" href="css/paginate.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--div#container>(div#name_$>a{name_$})*5-->

    <div id="wrapper">
        <header id="titre">
            <h1>le titre</h1>
        </header>

        <div id="paging_container4" class="container">
            <!-- le container de pagination -->
            <div class="page_navigation"></div>
            <div class="content">
                <?php 
                 // nom pourais etre remplacer par num               
                function ajouter_nom( $nom ){
                    echo '<div id="nom_'. $nom .'"><span class="numNames">'. $nom .'</span></div>';
                    $nom++;
                    if( $nom < 100)
                        ajouter_nom ($nom );
                    }
                    ajouter_nom( 1 );                
                ?>
            </div>
            <div class="page_navigation"></div>
        </div>
        <!-- fin de container paginate -->
        <footer>le pied de page</footer>
    </div>
    <!--Fin de wraper-->
    <!-- script -->
    <script src="JQR/jquery-1.12.3.min.js"></script>
    <!-- paginate -->
    <script type="text/javascript" src="JS/jquery.pajinate.js"></script>
    <script>
        $(document).ready(function() {
            $('#paging_container4').pajinate();
        });
    </script>
</body>

</html>