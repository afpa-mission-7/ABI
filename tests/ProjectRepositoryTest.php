<?php

use PHPUnit\Framework\TestCase;
use App\Config\DbConfig;
use App\Repository\ProjectRepository;
use App\Entity\Project;
use \PDO;

class ProjectRepositoryTest extends TestCase
{
    public function testFindOneByDocument()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $query = $pdo->query("SELECT project.* FROM project JOIN document ON project.id=document.project_id");
        $projects = $query->fetch()[0];
        $projectRepository = new ProjectRepository();
        $project = $projectRepository->find($projects);
        $this->assertEquals($projects, $project->getId());

    }

    public function testFindByCustomer()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $query = $pdo->query("SELECT project.* FROM project JOIN project_customer AS pc ON project.id = pc.project_id");
        $projects = $query->fetchAll(PDO::FETCH_CLASS,'App\Entity\Project');
        $projectRepository = new ProjectRepository();
        $this->assertEquals($projects, $projectRepository->findAll());
    }
}