<?php
  // Déclaration d'une nouvelle classe
  class ConnexionDB {
    private $host    = 'localhost';  // nom de l'host  
    private $name    = 'monsite';    // nom de la base de donnée
    private $user    = 'root';   
    private $pass    = '';       // mot de passe (il faudra peut-être mettre '' sous Windows)
    //private $pass    = '';          // Ne rien mettre si on est sous windows
    private $connexion;
  
    
    function __construct(){
      try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
          $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
      }catch (PDOException $e){
        echo 'Erreur : Impossible de se connecter  à la BDD !';
        print_r($e);
        die();
      }
    }
    



    
    //L'utilité de la fonction query va vous permettre de gagner un gain de vitesse lorsque vous allez écrire une requête SQLafin d'interroger votre serveur.
    
    //La fonction query est à utiliser de préférence avec la requête SELECT.
    
    public function query($sql, $data = array()){
      $req = $this->connexion->prepare($sql);
      $req->execute($data);
      return $req;
    }
    // Ci-dessous je vous montre comment utiliser cette fonction de plusieurs façon.
    // Première méthode
    // $req = $DB->query("SELECT * FROM utilisateur");
    // $req = $req->fetch();
    // Deuxième méthode
    // $req = $DB->query("SELECT * FROM nom_table WHERE id = ?",
    // array(1));
    // $req = $req->fetch();
    // Troisième méthode
    // $req = $DB->query("SELECT * FROM nom_table WHERE id = :id",
    // array('id' => 1));
    // $req = $req->fetch();
    
    
    
    
    
    //La fonction insert est à utiliser de préférence avec les requêtes INSERT, UPDATE et DELETE.
    
    public function insert($sql, $data = array()){
      $req = $this->connexion->prepare($sql);
      $req->execute($data);
    }
    //Ci-dessous je vous montre comment utiliser cette fonction de plusieurs façon.
    
    //   <?php// Première méthode avec INSERT
    // $DB->insert("INSERT INTO utilisateur (prenom, nom, age) VALUES (?, ?, ?)",
    //array("jean", "dupont", 20));
    //   // Deuxième méthode avec UPDATE
    //   $DB->insert("UPDATE utilisateur SET prenom = ?, nom = ?, age = ? WHERE id = ?",
    //     array("michel", "durant", 22, 1));
    //   // Troisième méthode avec DELETE
    //   $DB->query("DELETE FROM utilisateur WHERE id = ?",
    //     array(1));
    // 
    
    // permet d'exécuter facilement une query
    //protected function execute($query, $params= array(), $fetchMode = null)
    //{
        // prépare la requete éviter injection SQL
    //	$stmt = self::$_connection->prepare($query);
        // exucute la requte
    //	$stmt->execute($params);

    //	if ($fetchMode !== null) {
            // retourne toutes les données sous forme de tableau
    //		return $stmt->fetchAll($fetchMode);
    //	} else {
    //		return $stmt->fetchAll();
    //	}
   // 	return $stmt; // Iterator (forearch)
   // }
    // Faire une connexion à votre fonction
 // }
  // $DB = new ConnexionDB();

  
 ?> 