<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    //掲示板閲覧ページ
    public function main()
    {
        $trips = DB::select('select * from trips');
    return view('auth.main', ['trips' => $trips]);
}

//新規投稿ページ
public function index()
{
    return view('auth.index');

}











}
