<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LiveContentRepository")
 */
class LiveContent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $call_sign = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_logo = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title = '';

    /**
     * @ORM\Column(type="text")
     */
    private $summary_long = '';

    /**
     * @ORM\Column(type="text")
     */
    private $actors = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $director = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $show_type = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rating = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $season_number = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $season_name = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $episode_number = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $episode_name = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keywords = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $audience = '';

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCallSign(): ?string
    {
        return $this->call_sign;
    }

    public function setCallSign(string $call_sign): self
    {
        $this->call_sign = $call_sign;

        return $this;
    }

    public function getImageLogo(): ?string
    {
        return $this->image_logo;
    }

    public function setImageLogo(string $image_logo): self
    {
        $this->image_logo = $image_logo;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSummaryLong(): ?string
    {
        return $this->summary_long;
    }

    public function setSummaryLong(string $summary_long): self
    {
        $this->summary_long = $summary_long;

        return $this;
    }

    public function getActors(): ?string
    {
        return $this->actors;
    }

    public function setActors(string $actors): self
    {
        $this->actors = $actors;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

        return $this;
    }

    public function getShowType(): ?string
    {
        return $this->show_type;
    }

    public function setShowType(string $show_type): self
    {
        $this->show_type = $show_type;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getSeasonNumber(): ?string
    {
        return $this->season_number;
    }

    public function setSeasonNumber(string $season_number): self
    {
        $this->season_number = $season_number;

        return $this;
    }

    public function getSeasonName(): ?string
    {
        return $this->season_name;
    }

    public function setSeasonName(string $season_name): self
    {
        $this->season_name = $season_name;

        return $this;
    }

    public function getEpisodeNumber(): ?string
    {
        return $this->episode_number;
    }

    public function setEpisodeNumber(string $episode_number): self
    {
        $this->episode_number = $episode_number;

        return $this;
    }

    public function getEpisodeName(): ?string
    {
        return $this->episode_name;
    }

    public function setEpisodeName(string $episode_name): self
    {
        $this->episode_name = $episode_name;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getAudience(): ?string
    {
        return $this->audience;
    }

    public function setAudience(string $audience): self
    {
        $this->audience = $audience;

        return $this;
    }
}
