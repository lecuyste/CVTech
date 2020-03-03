<?php


namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class KeywordsModel extends Model
{
    protected static $table = 'keywordscv';

    protected $id;
    protected $keywordId;

    public static function getK()
    {
        $sql = " SELECT * FROM " . self::getTable();
        return App::getDatabase()->query($sql, get_class());
    }

    public function getId()
    {
        return $this->id;
    }

    public function getKeywords()
    {
        return $this->keywordId;
    }

    public function setKeywords($keywordId)
    {
        $this->title = $keywordId;
    }
}