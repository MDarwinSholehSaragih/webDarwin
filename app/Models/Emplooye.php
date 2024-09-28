<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplooye extends Model
{
    use HasFactory;
    protected $fillable=['nama','email','alamat','tpt_lahir','tgl_lahir'];
}
