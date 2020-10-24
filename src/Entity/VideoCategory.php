<?php

namespace App\Entity;

use App\Repository\VideoCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="videocategory")
 * @ORM\Entity(repositoryClass=VideoCategoryRepository::class)
 */
class VideoCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="videoCategoryId")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="leagueId")
     */
    private $leagueId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $backendname;

    /**
     * @ORM\Column(type="float")
     */
    private $sort;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="videoCategory")
     */
    private $videos;

    public function __construct()
    {
        $this->videos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getBackendname(): ?string
    {
        return $this->backendname;
    }

    public function setBackendname(string $backendname): self
    {
        $this->backendname = $backendname;

        return $this;
    }

    public function getSort(): ?float
    {
        return $this->sort;
    }

    public function setSort(float $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setVideoCategory($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getVideoCategory() === $this) {
                $video->setVideoCategory(null);
            }
        }

        return $this;
    }
}
