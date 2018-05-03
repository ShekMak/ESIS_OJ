<?php
    require_once('../models/structure/commentaire.class.php');
    require_once('../models/dao/commentaire.dao.php');
    require_once('../models/dao/etudiant.dao.php');

    if (isset($_POST['contenu']) && !empty($_POST['contenu'])){
        $contenu = $_POST['contenu'];

    }