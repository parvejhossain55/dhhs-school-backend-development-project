<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'notice_title', 'notice_file'
    ];

    public static function getSixNotice()
    {
        $data = DB::table('notices')->latest()->take(6)->get();
        return $data;
    }
}
