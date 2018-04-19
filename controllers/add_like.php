<?php
    $publicationDAO = new PublicationDAO();
    $res = $publicationDAO->like($publication);

    if (res){
        header('Location: all.php');
    }else{
        header('Location: all.php?failed');
    }
?>