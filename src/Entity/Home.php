<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeRepository::class)
 */
class Home implements Entity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", name="homeId")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $headline;

    /**
     * @ORM\Column(type="string", name="teaserText", length=255)
     */
    private $teaserText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumbnail;

    /**
     * @ORM\Column(type="string", name="sourceThumbnail", length=255)
     */
    private $sourceThumbnail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $playbutton;

    /**
     * @ORM\Column(type="HomeDisplayType")
     */
    private $display;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $etag;

    /**
     * @ORM\Column(type="HomeTypeType")
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $_timestamp;

    /**
     * @ORM\Column(type="integer")
     */
    private $internal;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getTeaserText(): ?string
    {
        return $this->teaserText;
    }

    public function setTeaserText(string $teaserText): self
    {
        $this->teaserText = $teaserText;

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

    public function getSourceThumbnail(): ?string
    {
        return $this->sourceThumbnail;
    }

    public function setSourceThumbnail(string $sourceThumbnail): self
    {
        $this->sourceThumbnail = $sourceThumbnail;

        return $this;
    }

    public function getPlaybutton(): ?bool
    {
        return $this->playbutton;
    }

    public function setPlaybutton(bool $playbutton): self
    {
        $this->playbutton = $playbutton;

        return $this;
    }

    public function getDisplay()
    {
        return $this->display;
    }

    public function setDisplay($display): self
    {
        $this->display = $display;

        return $this;
    }

    public function getEtag(): ?string
    {
        return $this->etag;
    }

    public function setEtag(string $etag): self
    {
        $this->etag = $etag;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->type = $type;

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

    public function getInternal(): ?int
    {
        return $this->internal;
    }

    public function setInternal(int $internal): self
    {
        $this->internal = $internal;

        return $this;
    }
}
