<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    private function getData() {
            return Contact::all();
    }
    public function index () {
        return self::getData();
    }


    public function store(Request $request){}

    public function show($id)
    {
        $contacts = self::getData();
        $index = array_search($id,array_column([$contacts], 'id'));
        $contact = $contacts[$index];
        if ($id <= count($contacts) && $id > 0) {
            return $contact;
        }else {
            abort(404);
        }
    }
    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
