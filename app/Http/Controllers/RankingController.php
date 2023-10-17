<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RankingController extends BaseController
{
    public function index()
    {
        $ranking = DB::table('ranking')->latest('medals')->get();

        return response()->json(['data' => $ranking]);
    }
}
