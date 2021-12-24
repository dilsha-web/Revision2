<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;
class FormController extends Controller
{
    //

    public function addData(Request $req){
             $user = new Form; 
    
        $user->fname = $req->fname;
        $user->lname = $req->lname;
        $user->email = $req->email;
        $hashedPassword = Hash::make($req->pass);
        $user->pass = $hashedPassword;

        $user->save();
        return redirect('/form');
    
    
            }
    public function fetchData(){
        $data = Form::all();
        return view('form',['data' => $data]);
    }

    public function delete($id){
           $data = Form::find($id);
           $data->delete();
           return redirect('/form');  
    }

    public    function edit($id){
       $data = Form::find($id);
       return view('update',['data'=> $data]);  
    }

    public function update(Request $req){
        $data = Form::find($req->id);

        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->email = $req->email;
        
        $data->save();

        return redirect('/form');
    }

    public function register(){
        return ('/form');
    }

    

}
