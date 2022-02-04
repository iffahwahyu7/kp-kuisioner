<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    use HasFactory;

    protected $guarded = [];
    const CREATED_AT = 'tgl_survey';
    const UPDATED_AT = null;
    // public $timestamps = false;
    // protected $table = "kuisioner";
}
