<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;


class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        //$request->image->store('images', 'public');
        if($request->hasFile('image')){
           User::uploadAvatar($request->image);
           return redirect()->back()->with('message','Image Uploaded.');//success message
        }
        return redirect()->back()->with('error','Image not Uploaded.');//error message
        //dd($request->hasfile('image'));
    }



    public  function index()
    {
        //insert data
        $data =[
            'name'=>'Elon',
            'email'=>'elon@gmail.com',
            'password'=>'password',
            'mobile'=>1555855,
        ];
       // dd($data);
        //User::create($data);

       // insert data
        //$user = new User();
       // $user->name ='kasuni';
        //$user->email ='kasuni@gmail.com';
        //$user->password=bcrypt('password');//laravel encrypt pw
        //$user->save();

        //fetch data(select)
       // $user=User::all();
        //return $user;

        //update data

       // User::where('id',3)->update(['name' => 'kaushalya']);
       // $user=User::all();
       // return $user;


        //delete data
        //User::where('id',2)->delete();

        // insert row query
       // DB::insert('insert into users(name,email,password)value(?,?,?)',['kasuni','kasuni@gmail.com','password']);
        //$users =DB::select('select*from users');
        //return $users;

        //DB::update('update users set name=? where id=1',['kaushalya']);

        //DB::delete('delete from users where id=1');


        //$users = DB::select('select * from users');
        //return $users;


    }
}
