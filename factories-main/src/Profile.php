<?php

namespace App;

class Profile
{
    private $biography;

    public function __construct($data = null)
    {
        // Map the data to the class properties
        if (isset($data['biography'])) {
            $this->biography = $data['biography'];
        }
    }

    public function getName()
    {
        return $this->biography['name'];
    }

    public function getBirthDate()
    {
        return $this->biography['birth_date'];
    }

    public function getEarlyLife()
    {
        return $this->biography['early_life'];
    }

    public function getEducation()
    {
        return $this->biography['education'];
    }

    public function getFoundingOfAngelesAcademy()
    {
        return $this->biography['founding_of_angeles_academy'];
    }

    public function getChallenges()
    {
        return $this->biography['challenges'];
    }

    public function getFoundingOfAngelesInstituteOfTechnology()
    {
        return $this->biography['founding_of_angeles_institute_of_technology'];
    }

    public function getLegacy()
    {
        return $this->biography['legacy'];
    }
}
