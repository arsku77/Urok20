<?php

namespace frontend\components;
use Yii;
/**
 * Created by PhpStorm.
 * User: arsku
 * Date: 2017.05.16
 * Time: 12:44
 */
class stringHelper
{

    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

    /**
     * @param string $string
     * @param integer $limit
     * @return string
     */
    public function getShort($string, $limit = null)
    {
        if($limit === null) {
            $limit =  $this->limit;
        }

        $string = strip_tags($string);
        $stringLen = strlen($string);
        if ($stringLen > $limit) {
            // get first string
            $stringCutLimitFront = substr($string, 0, $limit);//front cut for limit 
            $intLastSpaceForLimit = strrpos($stringCutLimitFront, ' ');//position last space in front cut

            // get last string
            $stringCutLimitEnd = substr($string, $limit, $stringLen - $limit);// last cut for limit
            $intFirstSpaceForLimit = stripos($stringCutLimitEnd, ' ');//position first space in last cut 
            
            // forming string
            $string = substr($string, 0, $limit + $intFirstSpaceForLimit).'...'; //add quantity for one word
        }
        return $string;    

}
}