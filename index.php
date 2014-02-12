<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'./../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';
// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);
echo 'a';
require_once($yii);
Yii::createWebApplication($config)->run();

class MyException
{
    public function __construct
            (
            $message, $code = 0, Exception $previous = null){
        echo $message;
            
    }
}

class TestException
{
        public $var;
        function __constructor($avalue){
            switch($avalue){
                case 1:
                    throw new MyException('1 is an invalid parametr', 5);
                    break;
                default:
                    $this->var = $avalue;
                    break;
            
            }
        }
}

try{ 
    $o = new TestException(1);
} 
catch (Exception $e) {
    echo "Default Exception\n";
}
catch (MyException $e){
    echo "My exception\n";
}