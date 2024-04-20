<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function showdata(){
        $users = DB::table('users')->get();
        return view('welcome',['data'=>$users]);
         
    }

    public function showuser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('oneuser',['data' => $user]);
    }



    public function update(int $id){

        $user = DB::table('users')
        ->where('id',$id)
        ->get();
        // $user = DB::table('users')->find($id);
        // return $user;
        return view('update',['data'=>$user]);
        // $update = DB::table('users')
        // ->where('id',1)
        // ->update([
        //   'name' => 'kamal',
        //   'email' => 'kamal@gmail.com',
        // ]);
    }
    
     public function updatedata(Request $req,string $id){
        // return $req;
        $user = DB::table('users')
        ->where('id',$id)
        ->update([
          'name' => $req->name,
          'email' => $req->email,
        ]);
        if($user){
            return redirect()->route('home');
        }
     }
    
    public function delete(string $id){
        $delete = DB::table('users')
        ->where('id',$id)
        ->delete();
        if($delete){
            return "delete successfull !";
        }else{
            return "delete unsuccessfull !";
        }
    }

    public function adduser(){
        return view('singup');
    }


    public function insert(Request $req){
        // return $req;
        $insert = DB::table('users')
        ->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'created_at' => now(),
        ]);
        if($insert){
            return redirect()->route('home');
        }
    }
}
