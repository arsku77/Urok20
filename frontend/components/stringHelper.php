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

    public function getShort($string, $limit = null)
    {
        if($limit === null) {
            $limit =  $this->limit;
        }
        return substr($string,0,$limit);
    }
}