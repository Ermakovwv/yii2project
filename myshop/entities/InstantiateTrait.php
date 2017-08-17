<?php

namespace myshop\entities;


/**
 * Если framework не поддерживает __construct в классах ActiveRecord
 *
 * Trait InstantiateTrait
 * @package myshop\entities
 */
trait InstantiateTrait
{
    public static $_prototype;

    /**
     * @param $row
     * @return mixed
     */
    public static function instantiate($row)
    {
        if (self::$_prototype === null)
        {
            $class = get_called_class();
            self::$_prototype = unserialize(sprintf('O:%d:"%s":0:{}', strlen($class), $class));
        }
        $entity = clone self::$_prototype;
        $entity->init();
        return $entity;
    }
}