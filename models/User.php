<?php 
    include('Connection2.php');
    // permet de hasher un mdp pour l'ajouter dans la db
    // echo password_hash('azerty', PASSWORD_DEFAULT);

    class User extends Connection2 {
        // ============ CONNEXION =========
        // retourne l'utilisateur si il existe
        public function verify($mail, $mdp) {
            if (empty($mail) || empty($mdp)) {
                return false;
            }
            try {
                $req = "SELECT * FROM utilisateur WHERE mail = :mail";
                $params = array(
                    ":mail" => $mail
                );

                if($this->execute($req, $params)!= null){
                    $data = $this->execute($req, $params)[0];
                    // var_dump($data);
                   
                    if(password_verify($mdp, $data['mdp'])) {
                        // var_dump('Utilisateur is ok');
                        $arrayData = array(
                            "id" => $data["id"],
                            "mail" => $data["mail"],
                            "nom" => $data["nom"]
                        );
                        return $arrayData;
                    }
                    else {
                        // le mot de passe n'est pas valide
                        return false;
                    }

                }
                else {
                    // l'utilisateur n'existe pas
                    return false;
                }
            
            } catch (PDOException $e) {
                return false;
            }
        }

        // vérifier si email existe
        public function exist($mail){
            $requete ="SELECT mail FROM utilisateur WHERE mail = :mail";
            $params = array(
                ":mail" => $mail
            );

            $data = $this->execute($requete, $params);
            // si il existe
            if(isset($data[0]) && $data[0]!=null){
                return $data[0]["mail"];
            }
            // il n'existe pas
            return false;
        }

        // insérer un user
        public function insert($nom, $mail, $mdp){
            try{
                $requete = "INSERT INTO utilisateur (nom, mail, mdp, date_creation_compte) VALUES(:nom, :mail, :mdp, :date_creation_compte)";
                $params = array(
                    ":nom"=> $nom,
                    ":mail"=>$mail,
                    ":mdp"=>password_hash($mdp, PASSWORD_DEFAULT),
                    ":date_creation_compte" => date("Y-m-d H:i:s")
                );
                $id = $this->add($requete, $params);
                // var_dump($id);
                return $id;
            }
            catch(PDOException $e){
                //var_dump($e->getMessage());
                die;
            }
            
        }


    }
?>