<?php

spl_autoload_register(function($class){
  $prefix = 'MyApp\\';
  if(strpos($class, $prefix) === 0 ){  //$classの先頭がMyapp\で始まるとき
    $className = substr($class, strlen($prefix)); //MyApp以降の文字を抜き取り
    $classFilePath = __DIR__ . '/../lib/' . str_replace('\\', '/', $className) . '.php'; //ファイルパスを生成する。
    if(file_exists($classFilePath)){
      require $classFilePath;
    }
  }
});