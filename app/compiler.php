<?php
    $language = strtolower($_POST['language']);
    $code = $_POST['code'];

    $random = substr(md5(mt_rand()), 0, 7);
    $filePath = "temp/" . $random . "." . $language;
    $programFile = fopen($filePath, "w");
    fwrite($programFile, $code);
    fclose($programFile);
    
    if($language == "php") {
        $output = shell_exec("C:\Program Files\php\php.exe $filePath 2>&1");
        echo $output;
    }

    if($language == "php") {
        $output = shell_exec("C:\Program Files\php\php.exe $filePath 2>&1");
        echo $output;
    }

    if($language == "python") {
        $output = shell_exec("C:\Users\91787\AppData\Local\Programs\Python\Python310\python.exe $filePath 2>&1");
        echo $output;
    }

    if($language == "php") {
        rename($filePath, $filePath.".js");
        $output = shell_exec("node $filePath.js 2>&1");
        echo $output;
    }