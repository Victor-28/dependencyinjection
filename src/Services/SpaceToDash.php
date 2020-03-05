<?php


namespace App\Services;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpaceToDashRepository")
 */
class SpaceToDash implements transform
{
    public function transform($string): string
    {
        // TODO: Implement transform() method.
        $dashedString = strtolower($string);
        $dashedString = str_replace(' ', '-', $dashedString);
        return $dashedString;
    }
}