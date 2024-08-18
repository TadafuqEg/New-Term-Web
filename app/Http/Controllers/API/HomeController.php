<?php
namespace App\Http\Controllers\API;

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
    public function contact_us(Request $request){
        ContactUs::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email,'message'=>$request->message,'phone'=>$request->phone]);
        return $this->sendResponse(null,'successfuly',200);
      }
      public function join_us(Request $request){
        JoinUs::create(['name'=>$request->name,'co_email'=>$request->co_email,'service'=>$request->service]);
        return $this->sendResponse(null,'successfuly',200);
      }
}