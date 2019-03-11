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
class UpdateController extends Controller
{
    public function update(Request $request){

        $title = $request->get('model');
        $event = \App\Events::where('title',$title)->first();
        $attribute=['date','time','venue','description'];
        foreach ($attribute as $a){
            if($request->$a==''){}
            else{
                $event->$a = $request->$a;
            }

        }

        $chairs = DB::table('chairs')->get();
        return view('chairs')->with('chairs', $chairs);
    }

}
d