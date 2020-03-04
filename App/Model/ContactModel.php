<?php
namespace App\Model;
use App\Weblitzer\Model;
use App\App;


class ContactModel extends Model
{
    protected static $table = 'contact';
    protected $id;
    protected $mail;
    protected $object;
    protected $message;
    protected $created_At;

    public static function insert($post)
    {
        $sql = "INSERT INTO " .self::getTable() . " VALUES (NULL, ?,?,?, NOW())";
        return App::getDatabase()->prepareInsert($sql,[$post['mail'],$post['object'],$post['message']]);
    }

    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$table;
    }

    /**
     * @param string $table
     */
    public static function setTable($table)
    {
        self::$table = $table;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_At;
    }

    /**
     * @param mixed $created_At
     */
    public function setCreatedAt($created_At)
    {
        $this->created_At = $created_At;
    }


}