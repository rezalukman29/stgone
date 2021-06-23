<?php

namespace App\Models\Datatable;

use Illuminate\Database\Eloquent\Model;

class Datatable extends Model
{
    protected $table = 'vw_absent';

    protected $guarded  = ['id'];
}
