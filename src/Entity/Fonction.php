<?php 

namespace App\Entity;

use App\Database;
use App\Config\DbConfig;
use App\Traits\JSONTrait;
use App\Entity\Collaborator;
use App\Repository\FonctionRepository;
use App\Repository\CollaboratorRepository;
use \PDO;

class fonction {

    private int $id;
    private int $collaborator_id;
    private string $label;
    private int $archive;



    public function __construct()
    {
        
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return int $id
     * @return fonction
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCollaborator_id(): int 
    {
        return $this->collaborator_id;
    }

    /**
     * @return int
     * @return Collaborator
     */
    public function setCollaborator_id( int $collaborator_id): self // équivalent de this sans etre instancié (la classe sans instanciation)
    {
        $this->collaborator_id = $collaborator_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     * @return Label
     */
    public function setLabel( string $label): Self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getArchive(): int
    {
        return $this->archive;
    }

    /**
     * @return int
     * @return Archive
     */
    public function setArchive( int $archive): Self
    {
        $this->archive = $archive;
        return $this;
    }
}