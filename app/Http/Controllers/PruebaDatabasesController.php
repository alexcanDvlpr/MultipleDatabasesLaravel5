<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User1;
use \App\User2;

class PruebaDatabasesController extends Controller
{
    public function getAll1() {
        $users = User1::all();

        return response()->json($users, 200);
    }

    public function getAll2() {
        $users = User2::all();

        return response()->json($users, 200);
    }

    public function getAll() {
        $users1 = User1::all();
        $users2 = User2::all();

        $users = array(
            'db1' => $users1,
            'db2' => $users2
        );

        return response()->json($users, 200);
    }

    public function createUser1(Request $request) {
        return response()->json($request->all(), 200);
    }

    public function createUser2(Request $request) {
        return response()->json($request->all(), 200);
    }
}
