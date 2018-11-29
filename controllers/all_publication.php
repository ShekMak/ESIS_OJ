<?php
    require_once('../models/dao/publication.dao.php');
    require_once('../models/dao/connexiondb.class.php');

    $publicationDAO = new PublicationDAO();
    $data = $publicationDAO->getAllPublication();
?>