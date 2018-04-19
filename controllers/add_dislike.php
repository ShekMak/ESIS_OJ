<?php
    $publicationDAO = new PublicationDAO();
    $res = $publicationDAO->dislike($publication);

    if (res){
        header('Location: all.php');
    }else{
        header('Location: all.php?failed');
    }
?>