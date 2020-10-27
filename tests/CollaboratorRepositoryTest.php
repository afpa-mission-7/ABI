<?php

namespace Tests;

use App\Entity\Collaborator;
use PHPUnit\Framework\TestCase;
use App\Repository\CollaboratorRepository;
use App\Config\DbConfig;
use \PDO;

class CollaboratorRepositoryTest extends TestCase
{
    public function testFind()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $query = $pdo->query("SELECT id FROM collaborator ORDER BY RAND() LIMIT 1");
        $id = $query->fetch()[0];
        $collaboratorRepository = new CollaboratorRepository();
        $collaborator = $collaboratorRepository->find($id);
        $this->assertEquals($id, $collaborator->getId());
        $this->assertInstanceOf('App\Entity\Collaborator', $collaborator);
    }

    public function testFindAll()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $query = $pdo->query("SELECT * FROM collaborator");
        $collaborators = $query->fetchAll(PDO::FETCH_CLASS,'App\Entity\Collaborator');
        $collaboratorRepository = new CollaboratorRepository();
        $this->assertContainsOnlyInstancesOf('App\Entity\User', $collaboratorRepository->findAll());
        $this->assertEquals($collaborators, $collaboratorRepository->findAll());
    }
/*
    public function testFindOneBy()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $collaboratorRepository = new CollaboratorRepository();
        $query = $pdo->query("SELECT * FROM collaborator ORDER BY RAND() LIMIT 1");
        $query->setFetchMode(PDO::FETCH_CLASS,'App\Entity\Collaborator');
        $collaborator = $query->fetch();
        $this->assertInstanceOf('App\Entity\Collaborator',$collaboratorRepository->findOneBy(["firstname"]));
        $this->assertEquals($collaborator,$collaborator);
    }
*/
}