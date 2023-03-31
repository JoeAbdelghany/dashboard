<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Massage;

class MassagesController extends Controller
{
    private static function massages() {
            $massages = [];
            for ($i=0;$i<count(Massage::all());$i++) {
                $massage = Massage::all()[$i];
                $massages[$i] = [
                    'id' => $massage['id'],
                    'userId' => $massage['user_id'],
                    'content' => $massage['content'],
                ];;
            }
            return $massages;
    }
    public function index () {
        return self::massages();
    }


    public function store(Request $request){}

    public function show($id)
    {
        $massages = self::massages();
        $index = array_search($id,array_column($massages, 'id'));
        $massage = $massages[$index];
        if ($id <= count($massages) && $id > 0) {
            return $massage;
        }else {
            abort(404);
        }
    }
    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
