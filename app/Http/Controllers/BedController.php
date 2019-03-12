<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use DB;
use http\Env\Request;
use App\Bed; 


/**
 * Created by PhpStorm.
 * User: Shabith
 * Date: 3/11/2019
 * Time: 2:16 PM
 */
class BedController extends Controller
{
    public function show(){
        $beds = DB::table('beds')->get();
        return view('beds')->with('beds', $bedss);
    }
    public function home(){
        $beds = null;
        return view('beds')->with('beds', $beds);
    }
    public function search(){

        $cbeds = DB::table('beds')->where('model',$_POST['search'])->get();
        return view('beds')->with('beds', $beds);
    }
    public function update(){

        $model = $_POST['model'];

        DB::table('beds')->where('model',$model)->update(['stock'=>$_POST['stock']]);




        $beds = DB::table('beds')->get();
        return view('bedss')->with('beds', $beds);
    }

}
