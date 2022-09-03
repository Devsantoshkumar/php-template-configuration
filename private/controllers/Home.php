<?php

  // home controller

  class Home extends Controller
  {
    function index(){
       $db = new Database();
       $home = new Controller();
       $patient = $home->load_model('Patient');
      //  $data = $db->query("SELECT * FROM patients");
       $data = $patient->where('patient_fname','Santosh');
       $home->view('home',['rows'=>$data]);
    }
  }
  


?>