<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bouquet;

class BouquetController extends Controller
{
    
    public function index()
    {
        return Bouquet::all();
    }
}
