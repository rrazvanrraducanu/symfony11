<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nume;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $poza;
    public function getId()
    {
        return $this->id;
    }
    public function getNume()
    {
        return $this->nume;
    }
    public function getPoza()
    {
        return $this->poza;
    }
    /////////////////////////////////////////////
    public function setId($id)
    {
        return $this->id=$id;
    }
    public function setNume($nume)
    {
        return $this->nume=$nume;
    }
    public function setPoza($poza)
    {
        return $this->culoare=$poza;
    }
}
