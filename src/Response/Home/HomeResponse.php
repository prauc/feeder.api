<?php


namespace App\Response\Home;


use App\DBAL\Types\Home\DisplayType;
use App\Entity\Article;
use App\Entity\Entity;
use App\Entity\Home;
use App\Entity\Video;
use App\Response\ResponseInterface;
use Doctrine\Persistence\ObjectManager;

class HomeResponse implements ResponseInterface
{
    /**
     * @var ObjectManager $objectManager
     */
    private $objectManager;

    public $id;

    public $date;

    public $keywords;

    public $category;

    public $highline;

    public $headline;

    public $text;

    public $thumb;

    public $leaguename;

    public $feederid;

    public $feederurl;

    public $display;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @param Home $entity
     */
    public function convert(Entity $entity)
    {
        $this->id = $entity->getId();

        if($entity->getDisplay() === DisplayType::ARTICLE) {
            /** @var Article $article */
            $article = $this->objectManager->find(Article::class, $entity->getInternal());
            $this->createArticle($article);
        } else if($entity->getDisplay() === DisplayType::VIDEO) {
            /** @var Video $video */
            $video = $this->objectManager->find(Video::class, $entity->getInternal());
            $this->createVideo($video);
        }

        return $this;
    }

    private function createArticle(Article $article)
    {
        $this->date         = date_format($article->getDate(), 'Y-m-d H:m:s');
        $this->category     = $article->getCategory();
        $this->highline     = $article->getHighline();
        $this->headline     = $article->getHeadline();
        $this->text         = $article->getHeadline();
        $this->thumb        = $article->getThumbnail();
        $this->feederid     = $article->getId();
        $this->feederurl    = "asdf";
        $this->display      = "news";
    }

    private function createVideo(Video $video)
    {
        $this->date         = "";
        $this->keywords     = "";
        $this->category     = "";
        $this->highline     = "";
        $this->headline     = $video->getName();
        $this->display      = "video";
        $this->thumb        = "";
        $this->feederid     = $video->getId();
    }
}