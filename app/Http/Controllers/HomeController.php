<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function contact(){
        return view('contact');
     }
     public function blogs(){
      $blogs = Blog::select( 'id','title','slug','category_image',)->orderBy('created_at','desc')->paginate(9);
      return view('blog',compact('blogs'));
   }
   public function index(){
      $blogs = Blog::select('id','title','slug','category_image',)->orderBy('created_at','desc')->limit(10)->get();
 return view('home',compact('blogs'));
   }
   public function blog_Details($name) {

      $slug = Str::slug($name);


      $blog = Blog::where('slug', $slug)->firstOrFail();


      return view('blog_details', compact('blog'));
  }
     public function pricing(){
        return view('pricing');
     }
     public function about(){
      return view('about');
   }
   public function terms(){
      return view('terms');
   }
   public function privacy_policy(){
      return view('privacy-policy');
   }
     
     public function portfolio(){
        return view('portfolio');
     }
      

     //about us //
     public function insight(){
      return view('about.insights');
   }
   public function client(){
      return view('about.clients');
   }
   public function management(){
      return view('about.management');
   }
   public function success_measurement (){
      return view('about.success-measurement');
   }
   public function project_documentation (){
      return view('about.project-management');
   }
   
   public function our_process(){
      return view('about.our-process');
   }
   //animated videos//
   public function animation_2d(){
      return view('animated-videos.2d-animation');
   }
   public function animation_3d(){
      return view('animated-videos.3d-animation');
   }
   public function explain_video(){
      return view('animated-videos.explainer-video');
   }
   public function motion_graphic(){
      return view('animated-videos.motion-graphic');
   }
   public function promotional_video(){
      return view('animated-videos.promotional-video');
   }
   public function stop_motion(){
      return view('animated-videos.stopmotion');
   }
   public function logo_animation(){
      return view('animated-videos.logo-animation');
   }

   public function whiteboard(){
      return view('animated-videos.whiteboard');
   }
   public function storyboard(){
      return view('animated-videos.storyboard');
   }
   public function frame_by_frame(){
      return view('animated-videos.frame-by-frame');
   }
   public function video_editing(){
      return view('animated-videos.video-editing');
   }
   public function character_animation(){
      return view('animated-videos.character-animation');
   }
   public function character_modeling(){
      return view('animated-videos.3d-character-modeling');
   }
   public function sculping(){
      return view('animated-videos.3d-sculping');
   }
   public function second_30(){
      return view('animated-videos.30-seconds');
   }
   public function second_60(){
      return view('animated-videos.60-seconds');
   }
   public function second_90(){
      return view('animated-videos.90-seconds');
   }
   public function info_graphic(){
      return view('animated-videos.info-graphics');
   }
   public function rotoscoping(){
      return view('animated-videos.rotoscoping');
   }
   public function concept_art(){
      return view('animated-videos.concept-art');
   }
   
    //Industry Animation//

    public function medical_health(){
      return view('Industry-Animation.medical-health');
   }
   public function scientific_animation(){
      return view('Industry-Animation.scientific-animation');
   }
   
   public function educational_animation(){
      return view('Industry-Animation.educational-animation');
   }
   public function animated_music_video(){
      return view('Industry-Animation.animated-music-video');
   }
   public function architectural_animation(){
      return view('Industry-Animation.3d-architectural-animation');
   }
   
   public function commercial_animation(){
      return view('Industry-Animation.commercial-animation');
   }
    
    //Industry Animation//
      
   public function game_animation(){
      return view('games-Animation.game-animation');
   }
   public function game_character_animation(){
      return view('games-Animation.game-character-animation');
   }
      //Projects//
   public function game_art(){
      return view('projects.game-art.game-art');
   }
   public function fashion(){
      return view('projects.game-art.fashion');
   }
   public function project_animation_3d(){
      return view('projects.3d-animation.3d-animation');
   }

   


}
