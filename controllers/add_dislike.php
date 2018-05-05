<?php
    if (isset($val)){
        $commentaireDAO = new CommentaireDAO();
        $res = $commentaireDAO->dislike($commentaire);
    }else{
        $publicationDAO = new PublicationDAO();
        $res = $publicationDAO->dislike($publication);
    }
?>