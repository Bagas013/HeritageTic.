<?php

namespace App\Controllers;

use App\Models\MuseumModel;

class Home extends BaseController
{
    protected $museum;
    public function __construct()
    {
        $this->museum = new MuseumModel();
    }
    public function index()
    {
        $data['museum']= $this->museum->limit(3)->findAll();
        return view('home', $data);
    }
}

