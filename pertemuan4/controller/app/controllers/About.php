<?php

class About {
    public function index($nama = 'Joshua', $pekerjaan = 'Kapiten') 
    {
       echo "Halo, nama saya $nama, saya seorang $pekerjaan";
    }

    public function page() 
    {
    echo 'About/page';
    }
}