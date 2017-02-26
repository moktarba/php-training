<?php
  class Personnage
  {
    public $nom;
    public $force;
    public $degats;
    public $experience;
    const FORCE_PETITE;
    const FORCE_MOYENNE;
    const FORCE_GRANDE;

    public function __construct ($nom, $force, $degats,$experience)
    {
      $this->setNom($nom);
      $this->setForce($force);
      $this->setForce($degats);
      $this->setForce($experience);
    }
    public function getNom()
    {
      return $this->_nom;
    }
    public function getForce()
    {
      return $this->_force;
    }
    public function getNom()
    {
      return $this->_nom;
    }
    public function getDegats()
    {
      return $this->_degats;
    }

    public function setNom($nom)
    {
      $thi->_nom= $nom;
    }
    public function setForce($force)
    {
      $thi->_force= $force;
    }
    public function setDegats($degats)
    {
      $thi->_degats= $degats;
    }
    public function setExperience($experience)
    {
      $thi->_experience= $experience;
    }
  }
?>
