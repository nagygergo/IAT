<?php
require_once 'Classes/FileWriter.php';
require_once 'Classes/PHPExcel/IOFactory.php';
require_once 'Classes/PHPExcel.php';

class ExcelFileWriter extends FileWriter
{
    private $filename;

    public function setFileName($filename)
    {
        $this->filename = $filename;
    }

    public function writeToFile(array $input)
    {
        if (!isset($_SERVER["filesemafor"]) || $_SERVER["filesemafor"] == 1) {


            $_SERVER["filesemafor"] = 0;
            error_reporting(E_ALL);
            date_default_timezone_set('Europe/London');

            $excel = PHPExcel_IOFactory::createReader('Excel2007');
            $excel = $excel->load($this->filename);
            $excel->setActiveSheetIndex(0);
            $emptyrow = 1;
            while (true) {
                $cellvalue = $excel->getActiveSheet()->getCell($this->generateCellId(1, $emptyrow));
                if ($cellvalue->getValue() === NULL || $cellvalue->getValue() === '') {
                    break;
                } else {
                    $emptyrow++;
                }
            }
            if($emptyrow == 1) {
                $titles = $this->inputTitles($input);
                $i = 0;
                foreach ($titles as $data) {
                    $excel->getActiveSheet()->setCellValue($this->generateCellId($i, $emptyrow), (string)$data);
                    $i++;
                }
                $emptyrow++;
            }

            $inputflat = $this->inputFlatten($input);
            $i = 0;
            foreach ($inputflat as $data) {
                $excel->getActiveSheet()->setCellValue($this->generateCellId($i, $emptyrow), (string)$data);
                $i++;
            }

            $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $objWriter->save($this->filename);
            $_SERVER["filesemafor"] = 1;
        } else {
            sleep(1);
            WriteFile($input);
        }

    }

    private function generateCellId($column, $row)
    {
        $columnLetter = PHPExcel_Cell::stringFromColumnIndex($column);
        return $columnLetter . $row;
    }

    private function inputFlatten($input)
    {
        $return = array();
        foreach ($input as $item) {
            if (gettype($item) == 'array') {
                $callback = $this->inputFlatten($item);
                $return = array_merge($return, $callback);
            } else {
                array_push($return, $item);
            }
        }

        return $return;

    }

    private function inputTitles(array $input, array $prefix = array())
    {
        $return = array();
        foreach ($input as $key => $item) {
            if ((gettype($item) == 'array') || gettype($item) == 'object') {
                if(gettype($item) == 'object'){
                    $item = (array) $item;
                }
                $recprefix = $prefix;
                array_push($recprefix, $key);
                $callback = $this->inputTitles($item, $recprefix);
                $return = array_merge($return, $callback);
            } else {
                $name = "";
                foreach ($prefix as $pre) {
                    $name .= "_" . $pre;
                }
                $name .= "_" . $key;
                array_push($return, $name);
            }
        }
        return $return;

    }
}