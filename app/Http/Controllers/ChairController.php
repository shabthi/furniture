<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use DB;
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

}
