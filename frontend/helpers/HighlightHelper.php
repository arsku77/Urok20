<?php

namespace frontend\helpers;

/**
 * @author Victor
 */
class HighlightHelper
{

    public static function process($text, $content)
    {
        $text = preg_quote($text);//isimam spec simbolius, kad nekliutu preg_replace funkcijai
        $words = explode(' ', trim($text));//suskaidome i atskirus elementus

        return preg_replace('/' . implode('|', $words) . '/i', '<i style="color: darkblue"><b>$0</b></i>', $content);
    }

}
