<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'sname_bangla','sname_english','date_of_birth','religion','nationality','gender','fname_bangla','fname_english','father_mobile','father_year_income','father_absence_gurdian','mname_bangla','mname_english','which_class_admit','photo','signature','present_village','present_post_office','present_thana','present_zila','parmanent_village','parmanent_post_office','parmanent_thana','parmanent_zila','bkash_no','tranx_id'
    ];
}
