<?php
    require_once('../models/structure/publication.class.php');
    require_once('../models/dao/publication.dao.php');
    require_once('../models/dao/connexiondb.class.php');

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $publication = new Publication($id,0,'','',0,0);
        include_once('../controllers/add_like.php');
    }else{
        header('Location: all.php');
    }
?>