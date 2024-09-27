<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;
use Fpdf\Fpdf;

class PDFFormat implements ProfileFormatter
{
    private $pdf;

    public function setData($profile)
    {
        $this->pdf = new Fpdf();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial', 'B', 16);
        $this->pdf->Cell(0, 10, 'Profile of ' . $profile->getName(), 0, 1, 'C');

        $this->pdf->SetFont('Arial', '', 12);

        // Add Biography
        $this->pdf->Cell(0, 10, 'Biography', 0, 1);
        $this->pdf->MultiCell(0, 10, $profile->getEarlyLife()['description']);
        
        // Add Birth Date
        $this->pdf->Cell(0, 10, 'Birth Date: ' . $profile->getBirthDate(), 0, 1);

        // Add Education
        $this->pdf->Cell(0, 10, 'Education', 0, 1);
        $this->pdf->MultiCell(0, 10, $profile->getEducation()['degree'] . ' at ' . $profile->getEducation()['institution']);

        // Add Founding of Angeles Academy
        $this->pdf->Cell(0, 10, 'Founding of Angeles Academy', 0, 1);
        $this->pdf->MultiCell(0, 10, $profile->getFoundingOfAngelesAcademy()['description']);
        $this->pdf->Cell(0, 10, 'Location: ' . $profile->getFoundingOfAngelesAcademy()['location'], 0, 1);

        // Add Challenges Faced
        $this->pdf->Cell(0, 10, 'Challenges', 0, 1);
        $this->pdf->Cell(0, 10, 'Closure of Academy: ' . $profile->getChallenges()['closure_of_academy']['reason'] . ' in ' . $profile->getChallenges()['closure_of_academy']['year'], 0, 1);

        // Add Founding of Angeles Institute of Technology
        $this->pdf->Cell(0, 10, 'Founding of Angeles Institute of Technology', 0, 1);
        $this->pdf->MultiCell(0, 10, $profile->getFoundingOfAngelesInstituteOfTechnology()['description']);

        // Add Legacy
        $this->pdf->Cell(0, 10, 'Legacy', 0, 1);
        $this->pdf->MultiCell(0, 10, $profile->getLegacy()['description']);
    }

    public function render()
    {
        // Output PDF to the browser or save to file
        return $this->pdf->Output();
    }
}
