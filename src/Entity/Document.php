<?php


namespace App\Entity;


use App\Repository\CollaboratorRepository;
use App\Repository\CustomerRepository;
use App\Repository\DocumentRepository;
use App\Repository\ProjectRepository;
use App\Traits\JSONTrait;

class Document
{
    use JSONTrait;

    private int $id;
    private string $title;
    private string $resume;
    private $date;
    private string $link;
    private Project $project;

    public function __construct($first = true)
    {
        if ($first) {
            $projectRepository = new ProjectRepository();
            $this->project = $projectRepository->findOneByDocument($this, false);
        }
        unset($this->project_id);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Document
     */
    public function setId(int $id): Document
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Document
     */
    public function setTitle(string $title): Document
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getResume(): string
    {
        return $this->resume;
    }

    /**
     * @param string $resume
     * @return Document
     */
    public function setResume(string $resume): Document
    {
        $this->resume = $resume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Document
     */
    public function setLink(string $link): Document
    {
        $this->link = $link;
        return $this;
    }
}