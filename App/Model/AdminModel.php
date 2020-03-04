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
    protected $modifieAt;

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
    public function getname()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setname($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getsurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setsurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getmail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setmail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setpassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function gettoken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function settoken($token): void
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
    public function getcreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setcreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getmodifiedAt()
    {
        return $this->modifieAt;
    }

    /**
     * @param mixed $modifiedAt
     */
    public function setmodifiedAt($modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

}