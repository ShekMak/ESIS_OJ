<?php

	class CommentaireDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function ajouterCommentaire($commentaire) {
			
		}
		
		public function getAllCommentaires($idPublication) {
            $str = "SELECT * FROM commentaire WHERE idPublication = :idPublication  ORDER BY date DESC";
            $req = $this->db->prepare($str);
            $req->execute(array(
                'idPublication' => $idPublication
            ));
            return $req;
		}
		
		public function like($commentaire) {
			
		}
		
		public function dislike($commentaire) {
			
		}
	}
?>