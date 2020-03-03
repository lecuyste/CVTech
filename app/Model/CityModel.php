<?php

namespace App\Model;
use App\App;
use App\Weblitzer\Model;


class CityModel extends Model
{
    protected static $table = 'cv';

    protected $id;
    protected $city;

    public static function getC()
    {
        $sql = " SELECT * FROM " . self::getTable();
        return App::getDatabase()->query($sql, get_class());
    }

    public static function recupCity()
    {
        $terme = $_GET["search_select1"];
        if (isset($_GET["submitted"]) AND $_GET["submitted"] == "Rechercher") {
            $terme = strtolower($terme);
            $select_terme = $sql = "SELECT * FROM " . self::getTable(). "WHERE city LIKE ? OR contenu LIKE ?";
            $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->title = $city;
    }
}