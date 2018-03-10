<?php
/**
 * Created by PhpStorm.
 * User: saberyjs
 * Date: 18-3-5
 * Time: 下午9:09
 */

namespace saberyjs\exception;

class ClassNotFoundException extends \RuntimeException
{
    protected $class;
    protected  $format='class @target@ not found';

    /**
     * @param  $message string
     * @param $class string
     * @param $format string
     * **/
    public function __construct($message=null,$class,$format=null)
    {
        $this->class=$class;
        if(!is_null($format)){
            $this->format=$format;
        }
        if(is_null($message)){
            $this->message=str_replace('@target@',$this->class,$this->format);
        }else{
            $this->message=$message;
        }
    }

    public function getClass(){
        return $this->class;
    }

}