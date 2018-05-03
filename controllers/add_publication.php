<?php
    session_start();
    require_once('../models/structure/publication.class.php');
    require_once('../models/dao/publication.dao.php');
    require_once('../models/dao/connexiondb.class.php');

    if (isset($_SESSION['matricule'])){
        if (isset($_POST['contenu']) && !empty($_POST['contenu'])){
            $contenu = $_POST['contenu'];

            $publication = new Publication(0,$_SESSION['matricule']['id'],$contenu,"",0,0);
            $publicationDAO = new PublicationDAO();
            $res = $publicationDAO->nouvellePublication($publication);

            if ($res){
                header('Location:../views/new.php?insert');
            }else{
                header('Location:../views/new.php?update');
            }

        }else{
            echo "Erreur dans les donnees";
        }
    }else{
        header('Location:index.php');
    }