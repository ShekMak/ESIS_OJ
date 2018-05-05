<?php
    require_once('../models/structure/publication.class.php');
    require_once('../models/dao/publication.dao.php');
    require_once ('../models/structure/commentaire.class.php');
    require_once ('../models/dao/commentaire.dao.php');
    require_once('../models/dao/connexiondb.class.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $publication = new Publication($id,0,'','',0,0);
    include_once('../controllers/add_dislike.php');
    if (res){
        header('Location: all.php');
    }else{
        header('Location: all.php?failed');
    }
}elseif(isset($_GET['_id'])){
    $id = $_GET['_id'];
    $publication = new Publication($id,0,'','',0,0);
    include_once('../controllers/add_dislike.php');
    if (res){
        header('Location: top10.php');
    }else{
        header('Location: top10.php?failed');
    }
}elseif (isset($_GET['id_'])){
    $id = $_GET['id_'];
    $publication = new Publication($id,0,'','',0,0);
    include_once('../controllers/add_dislike.php');
    if (res){
        header('Location: today.php');
    }else{
        header('Location: today.php?failed');
    }
}elseif (isset($_GET['_id_'],$_GET['i_d'])){
    $id = $_GET['_id_'];
    $val = $_GET['i_d'];
    $commentaire = new Commentaire($id,$val,0,'','',0,0);
    include_once('../controllers/add_dislike.php');
    if (res){
        header('Location: suite.php?id='.$val);
    }else{
        header('Location: suite.php?id='.$val.'failed');
    }
}  else{
    header('Location: all.php');
}
?>