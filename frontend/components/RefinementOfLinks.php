<?php


namespace frontend\components;
use Yii;
use yii\helpers\Url;

class RefinementOfLinks
{
    public function addPrefixForLink($array){
        return Url::base(true) . '/' . $array['filepath'];
    }

    public function getLinkForFileInput($array){
        return array_map(array($this, 'addPrefixForLink'),$array);
    }

}