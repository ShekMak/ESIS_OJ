<?php
    require_once('../models/dao/commentaire.dao.php');
    require_once('../models/dao/connexiondb.class.php');

    $commentaireDAO = new CommentaireDAO();
    $donnees = $commentaireDAO->getAllCommentaires($id);
    $nombreCommentaire = count($donnees);
    
?>