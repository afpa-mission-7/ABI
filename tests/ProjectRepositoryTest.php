<?php

namespace Tests;

use App\Entity\Project;
use App\Entity\Collaborator;
use App\Repository\CollaboratorRepository;
use App\Repository\projectRepository;
use PHPUnit\Framework\TestCase;
use App\Config\DbConfig;
use \PDO;

class ProjectRepositoryTest extends TestCase
{

    public function testFindOneByDocument()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $query = $pdo->query("SELECT project.id FROM project JOIN document ON project.id=document.project_id");
        $query->setFetchMode(PDO::FETCH_NUM);
        $id = $query->fetch()[0];
        $projectRepository = new ProjectRepository();
        $project = $projectRepository->find($id);
        $this->assertEquals($id, $project->getId());
        $this->assertInstanceOf(Project::class, $project);


    }
}
