<?php
    session_start();
    require_once('../models/structure/commentaire.class.php');
    require_once('../models/dao/commentaire.dao.php');
    require_once('../models/dao/etudiant.dao.php');
    require_once ('../models/dao/connexiondb.class.php');

    if (isset($_POST['contenu'],$_POST['id']) && !empty($_POST['contenu'])){
        $contenu = $_POST['contenu'];
        $id = $_POST['id'];
        $commentaire = new Commentaire(0, $_SESSION['matricule']['id'], $id, $contenu, '', 0, 0);
        $commentaireDAO = new CommentaireDAO();

        $res = $commentaireDAO->ajouterCommentaire($commentaire);

        if ($res){
            header('Location:../views/suite.php?id='.$id.'&insert');
        }else{
            header('Location:../views/suite.php?id='.$id.'?&update');
        }

    }