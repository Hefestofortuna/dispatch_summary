<?php


namespace backend\components;
use Yii;
use yii\helpers\Url;
use function GuzzleHttp\Psr7\str;

class DataSite
{
    public function getControllersNames(){
        $controllerlist = [];
        if ($handle = opendir('../controllers')) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {

                    $controllerlist[] = $file;
                }
            }
            closedir($handle);
        }
        asort($controllerlist);
        $fulllist = [];
        foreach ($controllerlist as $controller):
            $reg = str_replace("Controller.php","", $controller);
            $split = preg_split("/(?<=[a-z])(?![a-z])/", $reg, -1, PREG_SPLIT_NO_EMPTY);
            $preorder = null;
            foreach ($split as $item){
                $preorder .= strtolower($item) . "-";
            }
            $preorder = substr($preorder, 0, -1);
            array_push($fulllist, $preorder);
        endforeach;
        return $fulllist;
    }


    public function getAllControllers($controller){
        $controllerlist = [];
        if ($handle = opendir('../controllers')) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {

                    $controllerlist[] = $file;
                }
            }
            closedir($handle);
        }
        asort($controllerlist);
        $fulllist = [];
        foreach ($controllerlist as $controller):
            $handle = fopen('../controllers/' . $controller, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    if (preg_match('/public function action(.*?)\(/', $line, $display)):
                        if (strlen($display[1]) > 2):
                            $fulllist[substr($controller, 0, -4)][] = strtolower($display[1]);
                        endif;
                    endif;
                }
            }
            fclose($handle);
        endforeach;
        return $controllerlist;
    }

}