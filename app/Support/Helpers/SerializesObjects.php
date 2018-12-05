<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 15:24
 */

namespace App\Support\Helpers;


use ReflectionClass;
use ReflectionMethod;

trait SerializesObjects
{

    /**
     * @return array
     * @throws \ReflectionException
     */
    public function toArray() {

        $result = array();
        $class = new ReflectionClass(get_class($this));
        foreach ($class->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            $methodName = $method->name;
            if (strpos($methodName, "get") === 0 && strlen($methodName) > 3) {
                $propertyName = lcfirst(substr($methodName, 3));
                $value = $method->invoke($this);
                if (is_object($value)) {
                   $result[$propertyName] = $this->toArray();
                } else {
                    $result[$propertyName] = $value;
                }
            }
        }
        return $result;
    }

}