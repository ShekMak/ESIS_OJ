<?php

	class PublicationDAO {
		private $db;
		
		public function __construct() {
			$this->db = ConnexionDB::getConnexion();
		}
		
		public function getPublication($publication) {
            $pub['id'] = "";
            $str = "SELECT * FROM publication WHERE id = :id";
            $req = $this->db->prepare($str);
            $req->execute(array(
                'id' => $publication->getId()
            ));

            while($res = $req->fetch()){
                $pub['id'] = $res['id'];
                $pub['idEtudiant'] = $res['idEtudiant'];
                $pub['contenu'] = $res['contenu'];
                $pub['date'] = $res['date'];
                $pub['nblike'] = $res['nblike'];
                $pub['nbdislike'] = $res['nbdislike'];
            }

            return $pub;

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
            $str = "SELECT * FROM publication ORDER BY date DESC";
            $req = $this->db->prepare($str);
            $req->execute();
            return $req;
		}
		
		public function like($publication) {
            $str = "UPDATE publication SET nblike = nblike + 1 WHERE id = :idpublication";
            $req = $this->db->prepare($str);
            $res = $req->execute(array(
                'idpublication' => $publication->getId()
            ));

            if($res) {
                return True;
            } else {
                return False;
            }
		}
		
		public function dislike($publication) {
            $str = "UPDATE publication SET nbdislike = nbdislike + 1 WHERE id = :idpublication";
            $req = $this->db->prepare($str);
            $res = $req->execute(array(
                'idpublication' => $publication->getId()
            ));

            if($res) {
                return True;
            } else {
                return False;
            }
		}
	}
?>