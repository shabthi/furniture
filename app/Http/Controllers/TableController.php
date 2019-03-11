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
class TableController extends Controller
{
    public function show(){
        $tables = DB::table('tables')->get();
        return view('table')->with('tables', $tables);
    }

}
