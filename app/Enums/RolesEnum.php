<?php

namespace App\Enums;
use App\Models\Role;

enum RolesEnum: string
{

    case ADMIN = 'admin';
    case LANDLORD = 'landlord';
    case AGENT = 'agent';
    case TENANT = 'tenant';
    case USER = 'user';


    public static function getConstants(): array
    {
        $oClass = new \ReflectionClass(get_called_class());

        return $oClass->getConstants();
    }

    public static function getCommaSeperatedConstants(): string
    {
        $oClass = new \ReflectionClass(get_called_class());
        $array = array_values($oClass->getConstants());

        return implode(',', $array);
    }

    public static function getValue($key)
    {
        $oClass = new \ReflectionClass(get_called_class());

        $key = array_search($key, $oClass->getConstants());

        return $oClass->getConstant($key);
    }
}
