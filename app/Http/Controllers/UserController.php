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

    public function update(){
        $update = DB::table('users')
        ->where('id',1)
        ->update([
          'name' => 'kamal',
          'email' => 'kamal@gmail.com',
        ]);
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

    public function insert(){
        $insert = DB::table('users')
        ->insert([
            'name' => 'mostofa',
            'email' => 'mostofa@gmail.com',
            'password' => Hash::make('asdf1234'),
        ]);
    }
}
