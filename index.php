<?php

require_once 'provider.php';

$query = "SELECT * FROM Test";
$result = $mysqli->query($query);

if ($result) {
    // Vérifier s'il y a des données retournées
    if ($result->num_rows > 0) {
        // Parcourir chaque ligne de résultat
        while ($row = $result->fetch_assoc()) {
            // Utiliser les données récupérées
            echo "ID: " . $row["testId"] . "<br>";
        }
    } else {
        echo "Aucune donnée trouvée dans la table 'Test'.";
    }
    // Libérer le résultat
    $result->free();
} else {
    // En cas d'erreur dans l'exécution de la requête
    echo "Erreur lors de l'exécution de la requête : " . $mysqli->error;
}

// Fermer la connexion
$mysqli->close();
?>

<html>
    <head>
        <title>Fourre-Tout</title>
        <link rel="stylesheet" href="./static/index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body>
        <div class="page-content container note-has-grid">
            <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active" id="all-category">
                        <i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span>
                    </a>
                </li>
                </li>
                <li class="nav-item ml-auto">
                    <a href="javascript:void(0)" class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes"> <i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add Fourre-Tout</span></a>
                </li>
            </ul>
            
            
            <div class="tab-content bg-transparent">
                <div id="note-full-container" class="note-has-grid row">
                    <div class="col-md-4 single-note-item all-category" style="">
                        <div class="card card-body">
                            <span class="side-stick"></span>
                            <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Github de Cochard <i class="point fa fa-circle ml-1 font-10"></i></h5>
                            <p class="note-date font-12 text-muted">Leni Chabilan</p>
                            <div class="note-content">
                                <a href="https://geoffroycochard.github.io/iuto.but2.js/" ><p class="note-inner-content text-muted">https://geoffroycochard.github.io/iuto.but2.js/ </p></a>
</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
