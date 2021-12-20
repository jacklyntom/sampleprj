<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class table extends Model
{
    use HasFactory;
    public function insertdata($table,$array)
    {
        DB::table($table)->insert($array);
    }
    public function selectData($table)
    {
       return  DB::table($table)->get();
    }
}
