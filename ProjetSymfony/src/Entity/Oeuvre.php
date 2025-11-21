<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity]
#[Vich\Uploadable]
class Oeuvre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $prix = null;

    #[ORM\ManyToOne(targetEntity: Category::class)]
    private ?Category $category = null;

    #[Vich\UploadableField(mapping: 'oeuvre_images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    // Getters / Setters
    public function getId(): ?int { return $this->id; }

    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(?string $titre): void { $this->titre = $titre; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): void { $this->description = $description; }

    public function getPrix(): ?float { return $this->prix; }
    public function setPrix(?float $prix): void { $this->prix = $prix; }

    public function getCategory(): ?Category { return $this->category; }
    public function setCategory(?Category $category): void { $this->category = $category; }

    public function setImageFile(?File $imageFile = null): void {
        $this->imageFile = $imageFile;
        if ($imageFile !== null) { $this->updatedAt = new \DateTimeImmutable(); }
    }
    public function getImageFile(): ?File { return $this->imageFile; }

    public function setImageName(?string $imageName): void { $this->imageName = $imageName; }
    public function getImageName(): ?string { return $this->imageName; }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void { $this->updatedAt = $updatedAt; }
    public function getUpdatedAt(): ?\DateTimeInterface { return $this->updatedAt; }
}