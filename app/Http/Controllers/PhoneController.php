<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use phpParser\Node\Stmt\Return_;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        return view("home",["data"=>Phone::all()]);

    }
    public function insert(Request $r){
      $r->validate([
          'name'=>'required',
          'contact'=>'required|min:10'
      ]);
      $p = new Phone();
      $p->name = $r->input('name');
      $p->contact = $r->input('contact');
      $p->save();
      return redirect()->back();

    }
    public function delete(Request $req, $id){
        $p = Phone::find($id);
        $p->delete()->back();
        
    }
    public function update(Request $req, $id){
        $data = ['data'=>Phoe::find($id)];
        if($req->method() == "POST"){
          
            $r->validate([
                'name'=>'required',
                'contact'=>'required|min:10'
            ]);
        $p = Phone::find($id);
        $p->name = $req->name;
        $p->contact = $req->contact;
        $p->save();

        return redirect()->route('home');

        }
        return view("update",$data);
    }
}
