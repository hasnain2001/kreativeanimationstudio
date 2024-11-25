<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact(){
        return view('contact');
     }
     public function pricing(){
        return view('pricing');
     }
     
     public function portfolio(){
        return view('portfolio');
     }
     
     public function insight(){
      return view('insights');
   }
   public function client(){
      return view('clients');
   }
   public function management(){
      return view('management');
   }
   public function success (){
      return view('success');
   }
   public function project (){
      return view('project-management');
   }
   
   public function our_process(){
      return view('our-process');
   }
}
