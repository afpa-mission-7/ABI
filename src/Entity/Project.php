<?php


namespace App\Entity;

use App\Entity\Customer;
use App\Traits\JSONTrait;
use App\Repository\CollaboratorRepository;
use App\Repository\CustomerRepository;
use App\Repository\DocumentRepository;
use App\Repository\ProjectRepository;
use \DateTime;
use \PDO;


class Project
{
    use JSONTrait;

    protected int $id;
    protected string $name;
    protected ?string $type;
    protected $expected_date_start;
    protected $date_start;
    protected $expected_date_end;
    protected $date_end;
    protected array $customers;
    protected array $collaborators;
    protected array $documents;

    public function __construct($nb = 1)
    {
        $this->expected_date_start = new DateTime($this->expected_date_start);
        $this->date_start = new DateTime($this->date_start);
        $this->expected_date_end = new DateTime($this->expected_date_end);
        if ($this->date_end !== null) $this->date_end = new DateTime($this->date_end);
        if ($nb <= 1) {
            $customerRepository = new CustomerRepository();
            $this->customers = $customerRepository->findByProject($this, $nb + 1);
            $documentRepository = new DocumentRepository();
            $this->documents = $documentRepository->findByProject($this, $nb + 1);
        }
        if ($nb <= 2) {
            $collaboratorRepository = new CollaboratorRepository();
            $this->collaborators = $collaboratorRepository->findByProject($this, $nb + 1);
        }
    }

    public function format(DateTime $dateTime)
    {
        return $dateTime->format("d / m / Y");
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
     * @return Project
     */
    public function setId(int $id): Project
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return Project
     */
    public function setType(?string $type): Project
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpectedDateStart()
    {
        return $this->format($this->expected_date_start);
    }

    /**
     * @param mixed $expected_date_start
     * @return Project
     */
    public function setExpectedDateStart($expected_date_start)
    {
        $this->expected_date_start = $expected_date_start;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->format($this->date_start);
    }

    /**
     * @param mixed $date_start
     * @return Project
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpectedDateEnd()
    {
        return $this->format($this->expected_date_end);
    }

    /**
     * @param mixed $expected_date_end
     * @return Project
     */
    public function setExpectedDateEnd($expected_date_end)
    {
        $this->expected_date_end = $expected_date_end;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param mixed $date_end
     * @return Project
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
        return $this;
    }
}