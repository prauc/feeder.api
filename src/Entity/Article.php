<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="articleId")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="keywordId", nullable=true)
     */
    private $keywordId;

    /**
     * @ORM\Column(type="integer", name="sportId")
     */
    private $sportId;

    /**
     * @ORM\Column(type="integer", name="leagueId")
     */
    private $leagueId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pagename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $highline;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $headline;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="integer", name="articleSourceId")
     */
    private $articleSourceId;

    /**
     * @ORM\Column(type="string", length=2083)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumbnail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $_timestamp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKeywordId(): ?int
    {
        return $this->keywordId;
    }

    public function setKeywordId(?int $keywordId): self
    {
        $this->keywordId = $keywordId;

        return $this;
    }

    public function getSportId(): ?int
    {
        return $this->sportId;
    }

    public function setSportId(int $sportId): self
    {
        $this->sportId = $sportId;

        return $this;
    }

    public function getLeagueId(): ?int
    {
        return $this->leagueId;
    }

    public function setLeagueId(int $leagueId): self
    {
        $this->leagueId = $leagueId;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getPagename(): ?string
    {
        return $this->pagename;
    }

    public function setPagename(string $pagename): self
    {
        $this->pagename = $pagename;

        return $this;
    }

    public function getHighline(): ?string
    {
        return $this->highline;
    }

    public function setHighline(string $highline): self
    {
        $this->highline = $highline;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): self
    {
        $this->headline = $headline;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getArticleSourceId(): ?int
    {
        return $this->articleSourceId;
    }

    public function setArticleSourceId(int $articleSourceId): self
    {
        $this->articleSourceId = $articleSourceId;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->_timestamp;
    }

    public function setTimestamp(\DateTimeInterface $_timestamp): self
    {
        $this->_timestamp = $_timestamp;

        return $this;
    }
}
