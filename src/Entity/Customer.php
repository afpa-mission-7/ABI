<?php


namespace App\Entity;


class Customer
{
    private int $id;
    private string $company_name;
    private string $sector_activity;
    private string $address;
    private string $zip;
    private string $city;
    private string $revenue;
    private int $staff;
    private string $phone;
    private string $comment;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Customer
     */
    public function setId(int $id): Customer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->company_name;
    }

    /**
     * @param string $company_name
     * @return Customer
     */
    public function setCompanyName(string $company_name): Customer
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSectorActivity(): string
    {
        return $this->sector_activity;
    }

    /**
     * @param string $sector_activity
     * @return Customer
     */
    public function setSectorActivity(string $sector_activity): Customer
    {
        $this->sector_activity = $sector_activity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Customer
     */
    public function setAddress(string $address): Customer
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return Customer
     */
    public function setZip(string $zip): Customer
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Customer
     */
    public function setCity(string $city): Customer
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevenue(): string
    {
        return $this->revenue;
    }

    /**
     * @param string $revenue
     * @return Customer
     */
    public function setRevenue(string $revenue): Customer
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * @return int
     */
    public function getStaff(): int
    {
        return $this->staff;
    }

    /**
     * @param int $staff
     * @return Customer
     */
    public function setStaff(int $staff): Customer
    {
        $this->staff = $staff;
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
     * @return Customer
     */
    public function setPhone(string $phone): Customer
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Customer
     */
    public function setComment(string $comment): Customer
    {
        $this->comment = $comment;
        return $this;
    }
}