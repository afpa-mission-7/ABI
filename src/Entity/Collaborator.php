<?php


namespace App\Entity;


class Collaborator
{
    private int $id;
    private string $username;
    private string $password;
    private string $firstname;
    private string $lastname;
    private string $function;
    private string $phone;
    private string $email;
    private string $contract;
    private ?string $qualification;
    private int $salary;

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

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Collaborator
     */
    public function setFirstname(string $firstname): Collaborator
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Collaborator
     */
    public function setLastname(string $lastname): Collaborator
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }

    /**
     * @param string $function
     * @return Collaborator
     */
    public function setFunction(string $function): Collaborator
    {
        $this->function = $function;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Collaborator
     */
    public function setPhone(string $phone): Collaborator
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Collaborator
     */
    public function setEmail(string $email): Collaborator
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getContract(): string
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     * @return Collaborator
     */
    public function setContract(string $contract): Collaborator
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * @return string
     */
    public function getQualification(): ?string
    {
        return $this->qualification;
    }

    /**
     * @param string $qualification
     * @return Collaborator
     */
    public function setQualification(?string $qualification): Collaborator
    {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     * @return Collaborator
     */
    public function setSalary(int $salary): Collaborator
    {
        $this->salary = $salary;
        return $this;
    }


}