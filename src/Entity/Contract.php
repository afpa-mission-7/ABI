<?php
/**
 * @author Yann BOYER
 */

namespace App\Entity;



class Contract
{
    protected int $id;
    protected int $collaborator_id;
    protected $start_date;
    protected $end_date;
    protected string $label;
    protected string $type;
    protected int $salary;
    protected string $hiring_reason;

    /** obtenir l'ID du contrat */
    public function getId()
    {
        return $this->id;
    }

    /** obtenir l'ID du collaborateur sur le contrat */
    public function getCollaboratorId()
    {
        return $this->collaborator_id;
    }

    /** obtenir la date de début du contrat */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /** obtenir la date de fin du contrat */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /** obtenir le libellé du contrat*/
    public function getLabel()
    {
        return $this->label;
    }

    /** obtenir le type de contrat */
    public function gettype()
    {
        return $this->type;
    }

    /** obtenir le salaire en lien avec le contrat */
    public function getSalary()
    {
        return $this->salary;
    }

    /** obtenir le motif de l'embauche pour ce contrat */
    public function getHiringReason()
    {
        return $this->hiring_reason;
    }

    /** modifier l'ID du collaborateur sur le contrat
     * @return Contrat
     */
    public function setCollaboratorId($value) : Contract
    {
        $this->collaborator_id = $value;
        return $this;
    }

    /** modifier la date de début du contrat
     * @return Contrat
     */
    public function setStartDate($value) : Contract
    {
        $this->start_date = $value;
        return $this;
    }

    /** modifier la date de fin du contrat
     * @return Contrat
     */
    public function setEndDate($value) : Contract
    {
        $this->end_date = $value;
        return $this;
    }

    /** modifier le libellé du contrat
     * @return Contrat
     */
    public function setLabel($value) : Contract
    {
        $this->label = $value;
        return $this;
    }

    /** modifier le type du contrat
     * @return Contrat
     */
    public function setType($value) : Contract
    {
        $this->type = $value;
        return $this;
    }

    /** modifier le salaire du contrat
     * @return Contrat
     */

    public function setSalary($value) : Contract
    {
        $this->salary = $value;
        return $this;
    }

    /** modifier le motif de l'embauche pour ce contrat
     * @return Contrat
     */
    public function setHiringReason($value) : Contract
    {
        $this->hiring_reason = $value;
        return $this;
    }

}
