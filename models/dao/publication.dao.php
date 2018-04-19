<?php

	class PublicationDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function getPublication($publication) {
			
		}
		
		public function nouvellePublication($publication) {
            $str = "INSERT INTO publication VALUES(null, :idEtudiant, :contenu, now(), :nblike, :nbdislike)";
            $req = $this->db->prepare($str);
            $res = $req->execute(array(
                'idEtudiant' => $publication->getIdEtudiant(),
                'contenu' => $publication->getContenu(),
                'nblike' => $publication->getNblike(),
                'nbdislike' => $publication->getNbdislike()
            ));

            if($res) {
                return True;
            } else {
                return False;
            }
		}
		
		public function top10() {
			
		}
		
		public function getAllPublication() {
			
		}
		
		public function like($publication) {
			
		}
		
		public function dislike($publication) {
			
		}
	}
?>