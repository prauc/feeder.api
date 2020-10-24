<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoRepository::class)
 */
class Video
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="videoId")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="videoCategoryId")
     */
    private $videoCategoryId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $headline;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumbnail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $youtube;

    /**
     * @ORM\Column(type="string", name="videoSourceId")
     */
    private $videoSourceId;

    /**
     * @ORM\Column(type="date")
     */
    private $invalidation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $_timestamp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideoCategoryId(): ?int
    {
        return $this->videoCategoryId;
    }

    public function setVideoCategoryId(int $videoCategoryId): self
    {
        $this->videoCategoryId = $videoCategoryId;

        return $this;
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

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): self
    {
        $this->headline = $headline;

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

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getVideoSourceId(): ?string
    {
        return $this->videoSourceId;
    }

    public function setVideoSourceId(string $videoSourceId): self
    {
        $this->videoSourceId = $videoSourceId;

        return $this;
    }

    public function getInvalidation(): ?\DateTimeInterface
    {
        return $this->invalidation;
    }

    public function setInvalidation(\DateTimeInterface $invalidation): self
    {
        $this->invalidation = $invalidation;

        return $this;
    }

    public function getTimestamp(): ?string
    {
        return $this->_timestamp;
    }

    public function setTimestamp(string $_timestamp): self
    {
        $this->_timestamp = $_timestamp;

        return $this;
    }
}
