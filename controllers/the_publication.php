<?php
    require_once('../models/structure/publication.class.php');
    require_once('../models/dao/publication.dao.php');
    require_once('../models/dao/connexiondb.class.php');

    $publication = new Publication($id,0,'','',0,0);
    $publicationDAO = new PublicationDAO();
    $data = $publicationDAO->getPublication($publication);
?>