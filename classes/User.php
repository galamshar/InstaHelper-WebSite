<?php


class User implements JsonSerializable
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $role;
    private $sub_type;

    public function __construct($id, $username, $password, $email, $role, $sub_type)
    {
        $this->setId($id);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setEmail($email);
        $this->setRole($role);
        $this->setSubType($sub_type);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getSubType()
    {
        if ($this->sub_type == 0){
            return "None";
        } elseif ($this->sub_type == 1){
            return "Basic";
        } elseif ($this->sub_type ==2){
            return "Pro";
        }

    }

    /**
     * @param mixed $sub_type
     */
    public function setSubType($sub_type)
    {
        $this->sub_type = $sub_type;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'username' => $this->getUsername(),
            'email' => $this->getEmail(),
            'role' => $this->getRole(),
            'subtype' => $this->getSubType()
            ];
    }
}