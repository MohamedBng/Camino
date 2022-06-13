<?php
require_once('autoload.php');

class Item{

  public $bdd;
  public $title;
  public $sql;
  public $res;
  public $exec;
  public $req;
  public $requete;
  public $nbrItem;
  public $id;
  public $ch;
  public $tab;
  public function __construct(){
    $this->bdd = new Bdd;

  }

  public function afficher(){
    $this->ch=[];
    if (isset($_POST['save'])) {
      if (!empty($_POST['ch'])) {
       $this->ch=$_POST['ch'];
     }

   }
   $this->sql = "INSERT INTO checkbox (items) VALUES (?)";
   $this->res = $this->bdd->getPdo()->prepare($this->sql);
   $this->exec = $this->res->execute(array(implode("|",$this->ch)));



   $this->requete = $this->bdd->getPdo()->query("SELECT items FROM checkbox ORDER BY date desc limit 1");
   $this->requete->setFetchMode(PDO::FETCH_ASSOC);
   $this->tab=$this->requete->fetchAll();




   $this->ch=explode("|",$this->tab[0]["items"]);

   $this->nbrItem=1;
   $this->req = $this->bdd->getPdo()->query('SELECT * FROM items');
   while ($this->donnees = $this->req->fetch())

   {

    $this->nbrItem+1;

    ?>
    <div class="item">
      <?php 
      $this->id=$this->donnees['id'];
      ?>

      <p class="title">Item <?php echo htmlspecialchars($this->nbrItem++); ?></br><span>Boîte de gestion</span></p>
      <p><?php echo htmlspecialchars($this->donnees['titre']); ?></p>
      <div class="display" >
        <p>Afficher l’élément 1</p>
        <input type="checkbox" name="ch[]" class="demo<?php echo htmlspecialchars($this->donnees['id']); ?>" value="<?php echo htmlspecialchars($this->id); ?>" id="demo5" <?php if (in_array($this->id,$this->ch )) {
         echo "checked";
       } ?>>
       <label for="demo<?php echo htmlspecialchars($this->donnees['id']); ?>"></label>
     </div>
     <a class="btnUpdate" target="_blank" href="updateForm.php?id='<?php echo htmlspecialchars($this->donnees['id']);?>'">Update</a>
   </div>
   <?php

	} // Fin de la boucle des billets

	$this->req->closeCursor();

	

}



public function afficherItem(){
 $this->requete = $this->bdd->getPdo()->query("SELECT items FROM checkbox ORDER BY date desc limit 1");
 $this->requete->setFetchMode(PDO::FETCH_ASSOC);
 $this->tab=$this->requete->fetchAll();




 $this->ch=explode("|",$this->tab[0]["items"]);

 if (in_array("1",$this->ch )) {
  echo "<h1 id='titre1'>Titre 1</h1>";
} 
if (in_array("2",$this->ch )) {
  echo "<div id='titre2'><h1 >Titre 2</h1></div>";
} 
if (in_array("3",$this->ch )) {
  echo "<div id='titre3'><h1 >Titre 3</h1></div>";
} 

}



public function update(){

  $this->title = $_POST['titre'];
  $this->id = $_POST['id'];
  // Requête mysql pour modifier des données
  $sql = "UPDATE items SET titre = :titre WHERE id= :id ";
  $this->res = $this->bdd->getPdo()->prepare($sql);
  $this->exec = $this->res->execute(array(
    'id' => $this->id,
    'titre' => $this->title, ));

  
  // vérifier si la requête  a réussi
  if($this->exec){
    header('Location: ../dashboard.php');
    
  }
  else{
    echo "Échec de l'opération d'insertion";
  }

}
}




if(isset($_POST['update'])){
  $actualites = new Item;
  $actualites->update();
  echo "hhhhhh";
}


?>