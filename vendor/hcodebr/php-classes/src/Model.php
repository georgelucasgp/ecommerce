<?php
/**
 * Created by PhpStorm.
 * User: georgelucas
 * Date: 03/02/2018
 * Time: 02:10
 */

namespace Hcode;


class Model
{
    private $values = [];

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $method = substr($name, 0, 3);
        $fieldName = substr($name, 3, strlen($name));

        switch ($method) {

            case "get":
                return $this->values[$fieldName];
                break;

            case "set":
                $this->values[$fieldName] = $arguments[0];
                break;

        }

    }

    public function setData($data = array())
    {
        foreach ($data as $key => $value) {

            $this->{"set$key"}($value);

        }

    }

    public function getValues(){

        return $this->values;

    }

}