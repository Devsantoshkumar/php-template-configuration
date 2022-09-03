<?php
  
//   main model

class Model extends Database
{
    protected $table = 'patients';

    function __construct(){

    }

    public function where($column, $value){
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query,[
            'value'=>$value
        ]);
    }
}

?>