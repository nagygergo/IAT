<?php

/**
 * Created by PhpStorm.
 * User: Dusthands
 * Date: 2016. 03. 18.
 * Time: 14:27
 */
abstract class  FileWriter
{
    private $filename;

    public abstract function setFilename($filename);
    public abstract function writeToFile(array $input);

}