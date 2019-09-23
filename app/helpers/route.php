<?php

/**
 * @param string $moduleName
 * @param string $type
 * @return string
 */

function buildPrefix(string  $moduleName,string $type){

    return config($moduleName.'.prefix.'.$type,config('module.prefix.'.$type)).'/'.config($moduleName.'.module-name');
}