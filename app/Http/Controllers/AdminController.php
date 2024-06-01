<?php

namespace App\Http\Controllers;
use stdClass;
use Illuminate\Http\Request;
use App\Models\All_texts;

class AdminController extends Controller
{
    public function table()
    {
        $veri = new stdClass;
        $veri -> all_texts = All_texts::get(); 
        return view('all_texts', compact('veri')); 

    }
    public function delete($id)
    {
        All_texts::deleteData($id);
        return back(); 
    }
    public function dene()
    {
        $veri = new stdClass;
        $veri -> all_texts = All_texts::get(); 
        return view('dene', compact('veri')); 
    

    }

}
