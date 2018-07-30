<?php
namespace Entity;

use \BLOGFram\Entity;

class News extends Entity
{
  protected $auteur,
            $titre,
            $soustitre,
            $contenu,
            $dateAjout,
            $dateModif;

  const AUTEUR_INVALIDE = 1;
  const TITRE_INVALIDE = 2;
  const SOUS_TITRE_INVALIDE = 3;
  const CONTENU_INVALIDE = 4;

  public function isValid()
  {
    return !(empty($this->auteur) || empty($this->titre) || empty($this->soustitre) ||empty($this->contenu));
  }


  // SETTERS //

  public function setAuteur($auteur)
  {
    if (!is_string($auteur) || empty($auteur))
    {
      $this->erreurs[] = self::AUTEUR_INVALIDE;
    }

    $this->auteur = $auteur;
  }

  public function setTitre($titre)
  {
    if (!is_string($titre) || empty($titre))
    {
      $this->erreurs[] = self::TITRE_INVALIDE;
    }

    $this->titre = $titre;
  }

  public function setSousTitre($soustitre)
  {
    if (!is_string($soustitre) || empty($soustitre))
    {
      $this->erreurs[] = self::SOUS_TITRE_INVALIDE;
    }

    $this->soustitre = $soustitre;
  }

  public function setContenu($contenu)
  {
    if (!is_string($contenu) || empty($contenu))
    {
      $this->erreurs[] = self::CONTENU_INVALIDE;
    }

    $this->contenu = $contenu;
  }

  public function setDateAjout(\DateTime $dateAjout)
  {
    $this->dateAjout = $dateAjout;
  }

  public function setDateModif(\DateTime $dateModif)
  {
    $this->dateModif = $dateModif;
  }

  // GETTERS //

  public function auteur()
  {
    return $this->auteur;
  }

  public function titre()
  {
    return $this->titre;
  }

  public function soustitre()
  {
    return $this->soustitre;
  }

  public function contenu()
  {
    return $this->contenu;
  }

  public function dateAjout()
  {
    return $this->dateAjout;
  }

  public function dateModif()
  {
    return $this->dateModif;
  }
}