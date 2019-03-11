<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use DB;
use http\Env\Request;
use App\Chair;


/**
 * Created by PhpStorm.
 * User: Shabith
 * Date: 3/11/2019
 * Time: 2:16 PM
 */
class ChairController extends Controller
{
    public function show(){
        $chairs = DB::table('chairs')->get();
        return view('chairs')->with('chairs', $chairs);
    }
    public function home(){
        $chairs = null;
        return view('chairs')->with('chairs', $chairs);
    }
    public function search(){

        $chairs = DB::table('chairs')->where('model',$_POST['search'])->get();
        return view('chairs')->with('chairs', $chairs);
    }
    public function update(){

        $model = $_POST['model'];

        DB::table('chairs')->where('model',$model)->update(['stock'=>$_POST['stock']]);




        $chairs = DB::table('chairs')->get();
        return view('chairs')->with('chairs', $chairs);
    }

}
