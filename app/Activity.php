<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exports\ActivityExport;
use Maatwebsite\Excel\Facades\Excel;

class Activity extends Model
{
    protected $guarded = [];
}
