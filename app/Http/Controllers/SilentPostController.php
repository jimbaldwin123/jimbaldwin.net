<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SilentPostController extends Controller {

    public function processSgsp(Request $request)
    {
        $postdata = $request->input();
        foreach($postdata as $post){
            \Log::debug('SGSP POST', ['DATA'=>$post]);
        }

    }

}
