<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author kwanc
 */
class Student {
   function _construct(){
       $this->surname = '';
       $this->first_name = '';
       $this->emails = array();
       $this->grades = array();
   }
   
   function add_email($which,$address){
       $this->email[$which] = $address;
   }
   
   function add_grade($grades){
       $this->grades[] = $grades;
   }
   
   function average(){
       $total = 0;
       foreach ($this->grades as $value)
        /* @var $value type */ {
            $total += $value;
        }
        return $total / count($this->grades);
   }
   
   function toString(){
       $result = $this->first_name . '' .
               $this->surname;
       $result .= '('.$this->average().")\n";
       foreach ($this->email as $which => $what) {
            $result .=$which . ': ' . $what . "\n";
        }
        $result .= "\n";
       return '<pre>'.$result.'</pre>';
   }
}
