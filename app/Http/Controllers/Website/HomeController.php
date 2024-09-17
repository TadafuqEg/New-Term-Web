<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\ApiController;
use App\Models\User;
use App\Models\ContactUs;
use App\Models\JoinUs;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;
use Illuminate\Support\Facades\Validator;

class HomeController extends ApiController
{
      public function home(){
        return view('website.home');
      }
      public function about_us(){
        return view('website.about_us');
      }
      public function success_stories(){
        return view('website.success_stories');
      }
      public function contact(){
        return view('website.contact');
      }

      ////////////////////////////////////////////listening_services//////////////////////////////////////////
      public function reputation(){
        return view('website.listening_services.reputation');
      }
      public function competitive(){
        return view('website.listening_services.competitive');
      }
      public function marketing(){
        return view('website.listening_services.marketing');
      }
      public function risk(){
        return view('website.listening_services.risk');
      }
      public function influencer(){
        return view('website.listening_services.influencer');
      }
      public function authenticity(){
        return view('website.listening_services.authenticity');
      }

      public function hoo_talk(){
        return view('website.hoo_talk');
      }
      public function mass(){
        return view('website.mass');
      }
      
      ////////////////////////////////////////////responsive_solutions//////////////////////////////////
      public function amplification(){
        return view('website.responsive_solutions.amplification');
      }
      public function reputation_mange(){
        return view('website.responsive_solutions.reputation_mange');
      }
      public function tactical(){
        return view('website.responsive_solutions.tactical');
      }
      public function influnce_marketing(){
        return view('website.responsive_solutions.influnce_marketing');
      }
      public function large_scale(){
        return view('website.responsive_solutions.large_scale');
      }
      public function contact_us(Request $request){
        ContactUs::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email,'message'=>$request->message,'phone'=>$request->phone]);
        return $this->sendResponse(null,'successfuly');
      }
      public function join_us(Request $request){
        JoinUs::create(['name'=>$request->name,'co_email'=>$request->co_email,'service'=>$request->service]);
        return $this->sendResponse(null,'successfuly');
      }
      public function markets_cryptocurrency(){
        return view('website.markets.markets_cryptocurrency');
      }
      public function markets_banking_insurance(){
        return view('website.markets.markets_banking_insurance');
      }
      public function markets_education(){
        return view('website.markets.markets_education');
      }
      public function markets_airlines(){
        return view('website.markets.markets_airlines');
      }
      public function markets_mass_retail(){
        return view('website.markets.markets_mass_retail');
      }
      public function markets_telco(){
        return view('website.markets.markets_telco');
      }
      public function markets_oil_gas(){
        return view('website.markets.markets_oil_gas');
      }
      public function markets_theme_amusement_parks(){
        return view('website.markets.markets_theme_amusement_parks');
      }
      public function markets_FMCG(){
        return view('website.markets.markets_FMCG');
      }
      public function markets_luxury(){
        return view('website.markets.markets_luxury');
      }
      public function industries_ministries_departments(){
        return view('website.Industries.industries_ministries_departments');
      }
      public function industries_fashion(){
        return view('website.Industries.industries_fashion');
      }
      
      

}