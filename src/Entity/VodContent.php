<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VODContentRepository")
 */
class VodContent
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
    private $asset_id = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $source = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $series_title = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $summary_short = '';

    /**
     * @ORM\Column(type="text")
     */
    private $summary_long = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rating = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $year = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $actors = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $actors_display = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $directors = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre = '';

    /**
     * @ORM\Column(type="text")
     */
    private $series_description = '';

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
    private $episode_name = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $episode_number= '';

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
    private $show_type = '';

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $audience = '';

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAssetId()
    {
        return $this->asset_id;
    }

    /**
     * @param mixed $asset_id
     *
     * @return VodContent
     */
    public function setAssetId($asset_id)
    {
        $this->asset_id = $asset_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     *
     * @return VodContent
     */
    public function setSource($source)
    {
        $this->source = $source;

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

    public function getSeriesTitle(): ?string
    {
        return $this->series_title;
    }

    public function setSeriesTitle(string $series_title): self
    {
        $this->series_title = $series_title;

        return $this;
    }

    public function getSummaryShort(): ?string
    {
        return $this->summary_short;
    }

    public function setSummaryShort(string $summary_short): self
    {
        $this->summary_short = $summary_short;

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

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

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

    public function getActors(): ?string
    {
        return $this->actors;
    }

    public function setActors(string $actors): self
    {
        $this->actors = $actors;

        return $this;
    }

    public function getActorsDisplay(): ?string
    {
        return $this->actors_display;
    }

    public function setActorsDisplay(string $actors_display): self
    {
        $this->actors_display = $actors_display;

        return $this;
    }

    public function getDirectors(): ?string
    {
        return $this->directors;
    }

    public function setDirectors(string $directors): self
    {
        $this->directors = $directors;

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

    public function getSeriesDescription(): ?string
    {
        return $this->series_description;
    }

    public function setSeriesDescription(string $series_description): self
    {
        $this->series_description = $series_description;

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

    public function getShowType(): ?string
    {
        return $this->show_type;
    }

    public function setShowType(string $show_type): self
    {
        $this->show_type = $show_type;

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

    /**
     * @return mixed
     */
    public function getEpisodeNumber()
    {
        return $this->episode_number;
    }

    /**
     * @param mixed $episode_number
     *
     * @return VodContent
     */
    public function setEpisodeNumber($episode_number)
    {
        $this->episode_number = $episode_number;
        return $this;
    }


}
