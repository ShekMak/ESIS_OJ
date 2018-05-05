<?php
    if (isset($val)){
        $commentaireDAO = new CommentaireDAO();
        $res = $commentaireDAO->like($commentaire);
    }else{
        $publicationDAO = new PublicationDAO();
        $res = $publicationDAO->like($publication);
    }
?>