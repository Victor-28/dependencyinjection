<?php
namespace App\Services;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransformRepository")
 */
class Capitalise implements transform
{
    public function transform($string): string
    {
        // TODO: Implement transform() method.
        $lowerCaseString = strtolower($string);
        $lowerCaseString = preg_replace_callback('/\w.?/', function ($m) {
            return ucfirst($m[0]);
        }, $lowerCaseString);
        return $lowerCaseString;
    }
}