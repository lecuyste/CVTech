<?php

namespace App\Model;

use App\Weblitzer\Model;
use App\App;

class GenerateCvModel extends Model
{

    protected static $table1 = 'cv';
    protected $id;
    protected $title;
    protected $telephone;
    protected $street;
    protected $codePostal;
    protected $city;
    protected $lien;
    protected $createdAt;
    protected $modifiedAt;
    protected static $table2 = 'keywordscv';
    protected $keywordId;
    protected $cvId;
    protected static $table3 = 'experiences';
    protected $idCv;
    protected $experienceName;
    protected $experienceDate;
    protected $experienceCity;
    protected static $table4 = 'formations';
    protected $formationName;
    protected $formationDate;
    protected $formationCity;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getLien()
    {
        return $this->lien;
    }

    public function setLien($lien)
    {
        $this->lien = $lien;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    }

    public function getKeywordId()
    {
        return $this->keywordId;
    }

    public function setKeywordId($keywordId)
    {
        $this->keywordId = $keywordId;
    }

    public function getCvId()
    {
        return $this->cvId;
    }

    public function setCvId($cvId)
    {
        $this->cvId = $cvId;
    }

    public function getIdCv()
    {
        return $this->idCv;
    }

    public function setIdCv($idCv)
    {
        $this->idCv = $idCv;
    }

    public function getExperienceName()
    {
        return $this->experienceName;
    }

    public function setExperienceName($experienceName)
    {
        $this->experienceName = $experienceName;
    }
    public function getExperienceDate()
    {
        return $this->experienceDate;
    }

    public function setExperienceDate($experienceDate)
    {
        $this->experienceDate = $experienceDate;
    }
    public function getExperienceCity()
    {
        return $this->experienceCity;
    }

    public function setExperienceCity($experienceCity)
    {
        $this->experienceCity = $experienceCity;
    }
    public function getFormationName()
    {
        return $this->formationName;
    }

    public function setFormationName($formationName)
    {
        $this->formationName = $formationName;
    }
    public function getFormationDate()
    {
        return $this->formationDate;
    }

    public function setFormationDate($formationDate)
    {
        $this->formationDate = $formationDate;
    }
    public function GetFormationCity()
    {
        return $this->formationCity;
    }

    public function setFormationCity($formationCity)
    {
        $this->formationCity = $formationCity;
    }

    public static function insert($title, $tel, $street, $codePostal, $city, $lien, $keywordId, $cvId, $idCv, $experienceName, $experienceDate, $experienceCity, $formationName, $formationDate, $formationCity)
    {
        $sql1 = "INSERT INTO cv VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW(), NULL)";
        return App::getDatabase()->prepareInsert($sql1,[$title, $tel, $street, $codePostal, $city, $lien]);
        $sql2 = "INSERT INTO keywordscv VALUES (NULL, ?, ?)";
        return App::getDatabase()->prepareInsert($sql2,[$keywordId, $cvId]);
        $sql3 = "INSERT INTO experiences VALUES (NULL, ?, ?, ?, ?)";
        return App::getDatabase()->prepareInsert($sql3,[$idCv, $experienceName, $experienceDate, $experienceCity]);
        $sql4 = "INSERT INTO experiences VALUES (NULL, ?, ?, ?, ?)";
        return App::getDatabase()->prepareInsert($sql4,[$idCv, $formationName, $formationDate, $formationCity]);
    }
}