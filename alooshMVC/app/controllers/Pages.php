<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => 'AlooshMVC'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'about'
      ];
      $this->view('pages/about', $data);
    }
  }
