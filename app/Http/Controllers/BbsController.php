<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;
use App\Models\User;

class BbsController extends Controller
{
    public function index(){
        $bbModel = new Bb;
        $context = ['bbs' => $bbModel::orderBy('price')->get()];
        return view('index', $context);
    }
    public function detail(Bb $bb){
        // $bb = Bb::find($bb);
        return view('detail', ['bb' => $bb]);
    }

    public function author(User $userid){
        return view('user', ['userid' => $userid]);
    //   echo $userid;
    }
    public function testPage(){
        echo 'Test Page';
    }
}
