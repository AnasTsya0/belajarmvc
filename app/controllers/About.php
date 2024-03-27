<?php
class About
{
    public function index(){
        echo'Anda Masuk Class About dan Method Index';
    }
    public function page($name = 'Toji', $pekerjaan = 'Pengangguran'){
        echo "Halo, nama saya $name, saya adalah seorang $pekerjaan";
    }
}