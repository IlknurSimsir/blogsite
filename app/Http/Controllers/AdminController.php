<?php

namespace App\Http\Controllers;
use stdClass;
use Illuminate\Http\Request;
use App\Models\All_texts;
use App\Models\Category;
use App\Models\Subtitle;

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
    
    public function createtext()
    {
        $veri = new stdClass;
        $veri -> subtitle = Subtitle::get(); 
        $veri -> category = Category::get(); 
        return view('create_text',compact('veri')); 
        
    }
    public function createtextpost(Request $request)
    {

        $text = new All_texts();
        $text->contents = $request->input('contents');
        $text->category_id = $request->input('category');
        $text->suptitle = $request->input('subtitle');
        $text->click = 0;
        $text->save();

        return redirect()->back()->with('success', 'Veri başarıyla kaydedildi!');
    }

}
