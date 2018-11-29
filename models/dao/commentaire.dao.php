<?php

	class CommentaireDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function ajouterCommentaire($commentaire) {
            $str = "INSERT INTO commentaire VALUES(null, :idEtudiant, :idPublication, :contenu, now(), :nblike, :nbdislike)";
            $req = $this->db->prepare($str);
            $res = $req->execute(array(
                'idEtudiant' => $commentaire->getIdEtudiant(),
                'idPublication' => $commentaire->getIdPublication(),
                'contenu' => $commentaire->getContenu(),
                'nblike' => $commentaire->getNblike(),
                'nbdislike' => $commentaire->getNbdislike()
            ));

            if($res) {
                return True;
            } else {
                return False;
            }
		}
		
		public function getAllCommentaires($idPublication) {
            $resultat = [];
            $str = "SELECT * FROM commentaire WHERE idPublication = :idPublication  ORDER BY date DESC";
            $req = $this->db->prepare($str);
            $req->execute(array(
                'idPublication' => $idPublication
            ));
            $i = 0;         
            while ($d = $req->fetch()) {
                $resultat[$i] = $d;
                $i++;
            }
            return $resultat;
		}
		
		public function like($commentaire) {
            $str = "UPDATE commentaire SET nblike = nblike + 1 WHERE id = :idCommentaire";
            $req = $this->db->prepare($str);
            $res = $req->execute(array(
                'idCommentaire' => $commentaire->getId()
            ));

            if($res) {
                return True;
            } else {
                return False;
            }
		}
		
		public function dislike($commentaire) {
            $str = "UPDATE commentaire SET nbdislike = nbdislike + 1 WHERE id = :idCommentaire";
            $req = $this->db->prepare($str);
            $res = $req->execute(array(
                'idCommentaire' => $commentaire->getId()
            ));

            if($res) {
                return True;
            } else {
                return False;
            }
		}
	}
?>