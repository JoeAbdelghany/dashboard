<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    private static function users() {
            $users = [];
            for ($i=0;$i<count(User::all());$i++) {
                $user = User::all()[$i];
                $users[$i] = [
                    'id' => $user['id'],
                    'data' => [
                        'name' => [
                            'fullName' => $user['name'],
                            'fisrtName' => $user['fname'],
                            'lastName' => $user['lname'],
                        ],
                        'auth' => [
                            'userName' => $user['user_name'],
                            'password' => $user['password'],
                        ],
                        'contact' => [
                            'phone' => $user['phone'],
                            'email' => $user['email'],
                        ],
                    ],
                ];;
            }
            return $users;
    }
    public function index () {
        return self::users();
    }


    // public function store(Request $request){}

    public function show($id)
    {
        $users = self::users();
        $index = array_search($id,array_column($users, 'id'));
        $user = $users[$index];
        if ($id <= count($users) && $id > 0) {
            return $user;
        }else {
            abort(404);
        }
    }
    // public function update(Request $request, $id) {}

    // public function destroy($id) {}
}
