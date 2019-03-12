<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use DB;
use http\Env\Request;
use App\Sofa;


/**
 * Created by PhpStorm.
 * User: Shabith
 * Date: 3/11/2019
 * Time: 2:16 PM
 */
class SofaController extends Controller
{
    public function show(){
        $sofas = DB::table('sofas')->get();
        return view('sofas')->with('sofas', $sofas);
    }
    public function home(){
        $sofas = null;
        return view('sofas')->with('sofas', $sofas);
    }
    public function search(){

        $csofas = DB::table('sofas')->where('model',$_POST['search'])->get();
        return view('sofas')->with('sofas', $sofas);
    }
    public function update(){

        $model = $_POST['model'];

        DB::table('sofas')->where('model',$model)->update(['stock'=>$_POST['stock']]);




        $sofas = DB::table('sofas')->get();
        return view('sofas')->with('sofas', $sofas);
    }

}
