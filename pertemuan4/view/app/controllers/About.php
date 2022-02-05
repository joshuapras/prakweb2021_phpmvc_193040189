<?php

class About {
    public function index($nama = 'Joshua', $pekerjaan = 'Kapiten', $umur = 24) 
    {
       this->view('about/index  ');
    }

    public function page() 
    {
    $this->view('about/page');
    }
}