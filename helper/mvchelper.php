<?php

class MVCEngineHelper {

    public static function setName($type='model', $uristr='') {
        switch($type) {
            case 'model':
                $str = self::convert_uri_to_modelname($uristr);
                break;
            case 'controller':
                $str = self::convert_uri_to_controllername($uristr);
                break;
            case 'method':
                $str = self::convert_uri_to_resourcename($uristr);
                break;
            case 'file':
                $str = self::convert_uri_to_filename($uristr);
                break;
            default:
                $str = '';
        }
        return $str;
    }

    private static function convert_uri_to_modelname($model='') {
        $str = ucwords(str_replace('-', ' ', $model));
        return str_replace(' ', '', $str);
    }
    
    private static function convert_uri_to_controllername($model='') {
        $str = self::convert_uri_to_modelname($model);
        return "{$str}Controller";
    }
    
    private static function convert_uri_to_resourcename($str='') {
        return str_replace('-', '_', $str);
    }
    
    private static function convert_uri_to_filename($str='') {
        return str_replace('-', '', $str);
    }
    
    public static function getModel($obj=NULL) {
        $model = str_replace('Controller', '', get_class($obj));
        return new $model();
    }
    
    public static function getView($obj=NULL) {
        $view = str_replace('Controller', 'View', get_class($obj));
        return new $view();
    }
}
?>
