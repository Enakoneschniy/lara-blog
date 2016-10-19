<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    protected $data = [];

    public function __construct(){
        $this->data['menu'] = Menu::orderBy('sort', 'asc')->get();
    }
}
