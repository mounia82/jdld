 <?php
   class Test extends Dbh
   {

      public function getUtilisateurs()
      {
         $sql = "SELECT * FROM utilisateurs ";
         $stmt = $this->connect()->query($sql);
         while ($row = $stmt->fetch()) {
            echo $row['identifiant'] . '<br>';
         }
      }



      public function setUtilisateursStmt($identifiant,$date_naissance, $email,$mdp,$confirmermdp)
      {
         $sql = "INSERT INTO utilisateurs(identifiant,date_naissance,email,mdp,confirmermdp) VALUES (?,?,?,?,?)";
         $stmt = $this->connect()->prepare($sql);
         $stmt->execute([$identifiant,$date_naissance,$email,$mdp,$confirmermdp]);
         $names = $stmt->fetchAll();
         foreach ($names as $identifiant) {
            echo $identifiant['identifiant'] . '<br>';
         }
      }
   }
