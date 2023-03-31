<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoussefController extends Controller
{
    private function data() {
        return json_decode(file_get_contents('data/youssef.json'));
    }
    public function index () {
        return self::data();
    }
    // public function store(Request $request){}

    // public function show($property)
    // {
    //     $data = self::data();
    //     if (isset($data->$property)) {
    //         return [
    //             $property => $data -> $property,
    //         ];
    //     }else {
    //         abort(404);
    //     }
    // }
    // public function edit(Request $request, $property) {
    //     $data = self::data();
    //     $old_data = self::data();
    //     if (isset($data -> $property) && isset($request)) {
    //         $data -> $property = $request -> value;
    //         file_put_contents('data/youssef.json', json_encode($data));
    //         return [
    //             $property.'_old_value' => $old_data -> $property,
    //             $property.'_new_value' => $data -> $property,
    //         ];
    //     }else {
    //         abort(404);
    //     }
    // }
    // public function destroy($id) {}
}
