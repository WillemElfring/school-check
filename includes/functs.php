<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 28-9-2016
 * Time: 15:06
 */
 function convertResultsToArray($DBResult){
     $resultArray = array();
     while($row = $DBResult->fetch_assoc()){
         $resultArray[] = $row;
     }

     return $resultArray;
 }
?>