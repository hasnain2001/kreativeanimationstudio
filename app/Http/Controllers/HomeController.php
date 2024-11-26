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
   public function animation_2d(){
      return view('2d-animation');
   }
   public function animation_3d(){
      return view('3d-animation');
   }
   public function explain_video(){
      return view('explainer-video');
   }
   public function motion_graphic(){
      return view('motion-graphic');
   }
   public function promotional_video(){
      return view('promotional-video');
   }
   public function stop_motion(){
      return view('stopmotion');
   }
   public function logo_animation(){
      return view('logo-animation');
   }

   public function whiteboard(){
      return view('whiteboard');
   }

}
