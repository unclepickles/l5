<?php

namespace app\Services;
use Michelf\MarkdownExtra;
use Michelf\SmartyPants;
class Markdowner
{

    /**
     * @param $text
     * @return mixed
     */
    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    /**
     * @param $text
     * @return mixed
     */
    protected function preTransformText($text)
    {
        return $text;
    }

    /**
     * @param $text
     * @return mixed
     */
    protected function postTransformText($text)
    {
        return $text;
    }


}
