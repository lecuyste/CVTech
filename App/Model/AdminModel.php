<?php

namespace App\Model;

use App\Weblitzer\Model;

class AdminModel extends Model
{
    protected static $table = 'users';
    protected $id;
    protected $name;
    protected $surname;
    protected $mail;
    protected $password;
    protected $token;
    protected $role;
    protected $createdAt;
    protected $modifiedAt;

    public static function insert($title, $content)
    {
        $sql = "INSERT INTO ".self::getTable() . " VALUES (NULL,?,?,NOW(),NULL)";
        return App::getDatabase()->prepareInsert($sql,[$title,$content]);
    }
    public static function count(){
        $sql = "SELECT COUNT(id) FROM ". self::getTable();
        return App::getDatabase()->aggregation($sql);
    }
    public static function edit($id,$title,$content){
        $sql = "UPDATE " . self::getTable() . " SET title = ?, content = ?, token = NOW() WHERE id = ?";
        return App::getDatabase()->prepareInsert($sql,[$title,$content,$id]);
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getsSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setsSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
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
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
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
    public function setRole($role): void
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param mixed $modifieddAt
     */
    public function setModifieddAt($modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

}