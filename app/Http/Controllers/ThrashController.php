<?php

namespace App\Http\Controllers;

use App\Models\Thrash;
use Illuminate\Http\Request;

class ThrashController extends Controller
{
    function thrash_show(): string
    {
        $thrashes = Thrash::paginate(10);
        dd($thrashes);
        //return 'thrash';
    }
}
