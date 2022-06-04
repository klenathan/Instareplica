<?php

    function readData($sourceFile) {

        $dataFile = fopen($sourceFile, "r") or die("Unable to open data!");
        $data = fread($dataFile,filesize($sourceFile));
        fclose($dataFile);

        return $data;

    }

    function writeData($sourceFile, $data) {
        // Use encoded JSON as param

        $dataFile = fopen($sourceFile, "w") or die("Unable to open data!");
        fwrite($dataFile, $data);
        fclose($dataFile);
    } 
    
    
?>