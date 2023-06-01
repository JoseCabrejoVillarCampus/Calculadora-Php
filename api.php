<?php
    header('Content-type:application/json');

    $nums=$_POST;
    class Calculadora{
        public function suma(){
            global $nums;
            if (in_array('+',$nums)) {
                if (($clave = array_search('+', $nums)) !== false) {
                    unset($nums[$clave]);}
                $result= array_sum($nums);
            }
        }
        public function resta(){
            global $nums;
            if (in_array('-',$nums)) {
                $result= 0;
            }
        }
        public function por(){
            global $nums;
            if (in_array('*',$nums)) {
                $result= 0;
            }
        }
        public function div(){
            global $nums;
            if (in_array('+',$nums)) {
                $result= 0;
            }
        }
    }
    


    

?>