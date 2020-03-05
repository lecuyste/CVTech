<?php


namespace App\Model;


use App\Weblitzer\Model;
use App\App;

class languageModel extends Model
{
    protected static $table = 'programationlanguages';
    protected $id;
    protected $name;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}