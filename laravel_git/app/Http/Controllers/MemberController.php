<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function indexAction(){
      $insert = DB::select('SELECT * FROM user ORDER BY name');
      return view('member.index',['user' => $insert]);
    }

    public function insert(Request $requset){
      $name = trim($requset->name);
      if ($name != '') {
        $insert = DB::insert('INSERT INTO user VALUE (?)',[$name]);
      }
      if (isset($insert)) {
        echo "Value was insert <a href='member'>Back</a>";
      }
      else {
        echo "You have nothing ! <a href='member'>Back</a>";
      }
    }

    public function updateView(Request $requset){
      $name = $requset->name;
      return view('member.update',['name' => $name]);
    }
    public function update(Request $requset){
      $old_name = $requset->old_name;
      $new_name = trim($requset->new_name);
      if ($new_name != '') {
        DB::update('update user set name = ? where name = ?',[$new_name,$old_name]);
        return "Your item has been update ! <br><a href='/member'>Back</a>";
      }
      else {
        return "please input something ! <br><a href='/member'>Back</a>";
      }
    }

    public function delete(Request $requset){
      $name = $requset->name;
      DB::delete('delete from user where name = ?',[$name]);
      echo "This item was deleted ! <br> <a href='/member'>Back</a>";
    }
}
