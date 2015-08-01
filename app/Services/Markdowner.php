<?php
namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{
    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->grantTransformText($text);
        return $text;
    }
    protected function preTransformText($text)
    {
        return $text;
    }
    protected function grantTransformText($text)
    {
        return $text;
    }
}