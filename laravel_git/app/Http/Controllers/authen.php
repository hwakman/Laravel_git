<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class authen extends Controller
{
    public function loginView(){
      return view('authen.login');
    }

    public function registerView(){
      return view('authen.register');
    }

    public function regisCheck(Request $request){
      $check = [
        $request['username'],
        $request['password'],
        $request['conf_password']
      ];
      if (in_array(NULL,$check)) {
        return redirect('register');
      }
      else {
        if ($request['password'] == $request['conf_password']) {
          DB::insert("insert into authen value (?,?)",[$request['username'],$request['password']]);
          return "New user was created ! <a href='/'>Back</a>";
        }
        else {
          return "Your confirm password not match ! <a href='register'>Back</a>";
        }
      }
    }

    public function loginCheck(Request $request){
      $username = $request->username;
      $password = $request->password;
      if ($username != '' and $password != '') {
        $selectAuthen = DB::select('select * from authen where username = ? and password = ?',[$username,$password]);
        if ($selectAuthen != null) {
          return redirect('/member');
        }
        else {
          return view('authen.login');
        }
      }
      else {
        return view('authen.login');
      }
    }
}
