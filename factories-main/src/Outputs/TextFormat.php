<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;

class TextFormat implements ProfileFormatter
{
    private $response;

    public function setData($profile)
    {
        $output = "Full Name: " . $profile->getName() . PHP_EOL;

        // Add biography
        $output .= "Biography: " . $profile->getEarlyLife()['description'] . PHP_EOL;
        $output .= "Birth Date: " . $profile->getBirthDate() . PHP_EOL;

        // Add Education
        $output .= "Education: " . $profile->getEducation()['degree'] . " at " . $profile->getEducation()['institution'] . PHP_EOL;

        // Add Founding of Angeles Academy
        $output .= "Founding of Angeles Academy: " . $profile->getFoundingOfAngelesAcademy()['description'] . PHP_EOL;
        $output .= "Location: " . $profile->getFoundingOfAngelesAcademy()['location'] . PHP_EOL;

        // Add Challenges Faced
        $output .= "Challenges: " . $profile->getChallenges()['closure_of_academy']['reason'] . " in " . $profile->getChallenges()['closure_of_academy']['year'] . PHP_EOL;

        // Add Founding of Angeles Institute of Technology
        $output .= "Founding of Angeles Institute of Technology: " . $profile->getFoundingOfAngelesInstituteOfTechnology()['description'] . PHP_EOL;

        // Add Legacy
        $output .= "Legacy: " . $profile->getLegacy()['description'] . PHP_EOL;

        $this->response = $output;
    }

    public function render()
    {
        header('Content-Type: text/plain');
        return $this->response;
    }
}
