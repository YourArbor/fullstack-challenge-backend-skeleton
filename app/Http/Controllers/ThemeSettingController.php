<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThemeSetting;
use Illuminate\Support\Facades\Validator;
class ThemeSettingController extends Controller
{
    //
    /*

    Some helpful info for building APIs:
        Querying rows from db: https://laravel.com/docs/9.x/eloquent#building-queries
        Inserting rows into db: https://laravel.com/docs/9.x/eloquent#inserts
        Model name: ThemeSetting
        Two examples below (testGetApiFunction, testPostApiFunction)

    */



    // TODO: This is where you can implement your API functionality. Remember to register it in /routes/api.php








    /*

    Function: testGet ApiFunction
    Description: A very simple function to show how to build a GET API in Laravel
    Inputs:
    - name: String
    Outputs:
        Success: 'Hello <name>! Welcome to Arbor's fullstack challenge'
        Error: 'Please enter your name'

    */
    // GET: http://127.0.0.1:8000/api/test-get
    protected function testGetApiFunction(Request $request) {
        $validated = Validator::make($request->all(), array( // https://laravel.com/docs/9.x/validation
            'name' => 'required|max:255',
        ));

        if($validated->fails()) {
            return response()->json(array(
                'status' => 0,
                'error' => "Please enter your name"
            ), 400);
        }
        // How you can get data from request
        $name = $request->name;
        return "Hello ".$name."! Welcome to Arbor's fullstack challenge";

    }

    /*

    Function: testPostApiFunction
    Description: A very simple function to show how to get POST data in Laravel
    Inputs:
    - name: String
    Outputs:
        Success: {'message': 'Hello <name>! I've added you to our mailing list (Just kidding)'}
        Error: 'Please enter your name'

    */
    // POST: http://127.0.0.1:8000/api/test-post
    protected function testPostApiFunction(Request $request) {
        $validated = Validator::make($request->all(), array( // https://laravel.com/docs/9.x/validation
            'name' => 'required|max:255',
        ));

        if($validated->fails()) {
            return response()->json(array(
                'status' => 0,
                'error' => "Please enter your name"
            ), 400);
        }
        // How you can get data from request - surprise, surprise, it's the same as a GET
        $name = $request->name;
        return response()->json(array(
            'status' => 200,
            'message' => "Hello ".$name."! I've added you to our mailing list (Just kidding)"
        ), 200);
    }



}
