<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function indexAction(){
      $insert = DB::select('SELECT * FROM user');
      return view('member.index',['user' => $insert]);
    }

    public function insert(Request $requset){
      $name = $requset->name;
      $insert = DB::insert('INSERT INTO user VALUE (?)',[$name]);
      if ($insert) {
        echo "Value was insert <a href='member'>Back</a>";
      }
      else {
        echo "You have nothing ! <a href='member'>Back</a>";
      }
    }

    public function delete(Request $requset){
      $name = $requset->name;
      DB::delete('delete from user where name = ?',[$name]);
      echo "This item was deleted ! <br> <a href='/member'>Back</a>";
    }
}
