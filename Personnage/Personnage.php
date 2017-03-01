<?php
  class Personnage
  {
    private $nom;
    private $force;
    private $degats;
    private $experience;
    const FORCE_PETITE =20;
    const FORCE_MOYENNE= 50;
    const FORCE_GRANDE= 75;

    public function __construct ($nom ,$force, $degats,$experience)
    {
      $this->setNom($nom);
      $this->setForce($force);
      $this->setDegats($degats);
      $this->setExperience($experience);
    }
    public function getNom()
    {
      return $this->_nom;
    }
    public function getForce()
    {
      return $this->_force;
    }
    public function getDegats()
    {
      return $this->_degats;
    }
    public function getExperience()
    {
      return $this->_experience;
    }

    public function setNom($nom)
    {
      $this->_nom= $nom;
    }
    public function setForce($force)
    {
      $this->_force= $force;
    }
    public function setDegats($degats)
    {
      $this->_degats= $degats;
    }
    public function setExperience($experience)
    {
      $this->_experience= $experience;
    }
    public function description()
    {
      echo "Le personanage a comme nom "
      .$this->getNom().", \t  sa force est de : "
      .$this->getForce().", \t  ses degats sont de  : "
      .$this->getDegats().
      ", \t et son experience est de : ".$this->getExperience();
      if($this->getDegats() >=70)
      {
        echo "</br></br>######## :-( ########## ";
        echo "</br>Ce personnage: ".$this->getNom()." est maintenat au fond d'un cercueil...</br>";
        echo "######## Fin ########## </br>";
      }
    }
    public function frapper(Personnage $p)
    {
      $exp= $this->getExperience();
      $force= $this->getForce();
      $exp = $exp + 5;
      $force = $force + 10;
      $this->setExperience($exp);
      $this->setForce($force);

      $pdegats = $p->getDegats();
      $pdegats = $pdegats + 50;
      $p->setDegats($pdegats);
    }
  }
?>
