<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class All_texts extends Model
{
    use HasFactory;
    protected $table = "all_texts";
    protected $fillable =["id","contents"];
    public static function deleteData($id)
    {
        DB::table('all_texts')->where('id', '=', $id)->delete();
    }
}