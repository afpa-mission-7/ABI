<?php


namespace App\Entity;


class Collaborator
{
    private int $id;
    private string $username;
    private string $password;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Collaborator
     */
    public function setId(int $id): Collaborator
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Collaborator
     */
    public function setUsername(string $username): Collaborator
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Collaborator
     */
    public function setPassword(string $password): Collaborator
    {
        $this->password = $password;
        return $this;
    }


}