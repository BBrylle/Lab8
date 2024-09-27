<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;

class HTMLFormat implements ProfileFormatter
{
    private $response;

    public function setData($profile)
    {
        // Initialize output with the profile heading
        $output = "<h1>Profile of " . $profile->getName() . "</h1>";

        // Add biography
        $output .= "<h2>Biography</h2>";
        $output .= "<p>" . $profile->getEarlyLife()['description'] . "</p>";

        // Add birth date
        $output .= "<p>Birth Date: " . $profile->getBirthDate() . "</p>";

        // Add education
        $output .= "<h2>Education</h2>";
        $output .= "<p>" . $profile->getEducation()['degree'] . " at " . $profile->getEducation()['institution'] . "</p>";

        // Add founding of Angeles Academy
        $output .= "<h2>Founding of Angeles Academy</h2>";
        $output .= "<p>" . $profile->getFoundingOfAngelesAcademy()['description'] . "</p>";
        $output .= "<p>Location: " . $profile->getFoundingOfAngelesAcademy()['location'] . "</p>";

        // Add challenges faced
        $output .= "<h2>Challenges</h2>";
        $output .= "<p>Closure of Academy: " . $profile->getChallenges()['closure_of_academy']['reason'] . " in " . $profile->getChallenges()['closure_of_academy']['year'] . "</p>";

        // Add founding of Angeles Institute of Technology
        $output .= "<h2>Founding of Angeles Institute of Technology</h2>";
        $output .= "<p>" . $profile->getFoundingOfAngelesInstituteOfTechnology()['description'] . "</p>";

        // Add legacy
        $output .= "<h2>Legacy</h2>";
        $output .= "<p>" . $profile->getLegacy()['description'] . "</p>";

        // Set the response
        $this->response = $output;
    }

    public function render()
    {
        return $this->response;
    }
}
