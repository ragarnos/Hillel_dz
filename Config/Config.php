<?php

namespace Config;

class Config
{
    public static function get(string $name)
    {
        $configs = include __DIR__ . '/connect.php';
        $keys = explode('.', $name);
        return self::findByKeys($keys, $configs);
        dd($configs);
    }

    private static function findByKeys(array $keys, array $configs): mixed
    {
        $value = null;
        if (empty($keys)) {
            return $value;
        }
        $key = array_shift($keys);
        if (array_key_exists($key, $configs)) {
            $value = is_array($configs[$key]) ? self::findByKeys($keys, $configs[$key]) : $configs[$key];
        }
        return $value;
    }
}
