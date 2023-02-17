<?php 

namespace App\Models;

class DeclarationModel extends Model
{
    protected $id;
    protected $id_user;
    protected $destcription;

    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }



     /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }





    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }



    

    /**
     * Get the value of destcription
     */
    public function getDestcription()
    {
        return $this->destcription;
    }

    /**
     * Set the value of destcription
     */
    public function setDestcription($destcription): self
    {
        $this->destcription = $destcription;

        return $this;
    }
}