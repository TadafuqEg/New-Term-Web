<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Car;
use App\Models\DriverLicense;
use Image;
use Str;
use File;

class UserController extends Controller
{//done
    public function index(Request $request)
    {
        $all_users = User::orderBy('id', 'desc');

        if ($request->has('search') && $request->search!=null ) {
            $all_users->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('username', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('phone', 'LIKE', '%' . $request->search . '%');
            });
        }
        
    
       
        if ($request->has('role') && $request->role != null) {
            $role = Role::where('name', $request->role)->first();
            
            if ($role) {
                $all_users->whereHas('roles', function ($query) use ($role) {
                    $query->where('roles.id', $role->id);
                });
            }
        }
        $all_users = $all_users->paginate(12);

        $all_users->getCollection()->transform(function ($user) {
            // Add the 'image' key based on some condition
            $user->image = getFirstMediaUrl($user,$user->avatarCollection);
            return $user;
        });
         
        return view('dashboard.users.index',compact('all_users'));

    }

    public function create(){
        $roles=Role::all();
        return view('dashboard.users.create',compact('roles'));
    }

    public function store(Request $request){

            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:191'],
                'username' => ['required','string', 'max:191', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'image' => ['nullable'] ,
                'phone_number' => ['nullable', 'unique:users,phone', 'numeric'],
                'role'=>['required',Rule::in(Role::pluck('id'))],
                'address'=> ['nullable']

            ]);

           
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }
            
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email'=> $request->email ,
                'phone'=>$request->phone_number,
                'password'=>  Hash::make($request->password),
                'theme'=>'theme1',
                'address'=>$request->address
                
            ]);
            $role = Role::where('id',$request->role)->first();
            
            $user->assignRole([$role->id]);
            if($request->file('image')){
                uploadMedia($request->file('image'),$user->avatarCollection,$user);
            }
          return redirect('/admin-dashboard/users');

    }
 

    public function edit($id){
        $user=User::where('id',$id)->first();
        $user->image = getFirstMediaUrl($user,$user->avatarCollection);
        $roles=Role::all();
        return view('dashboard.users.edit',compact('user','roles'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:191'],
            'username' => ['required', 'string', 'max:191', 'unique:users,username,' . $id],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email,' . $id],
            'password' => ['nullable', 'string', 'min:8'],
            'image' => ['nullable'] ,
            'phone_number' => ['nullable', 'unique:users,phone,' . $id, 'numeric'],
            'role'=>['required',Rule::in(Role::pluck('id'))],
            'address'=> ['nullable']
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        
        User::where('id',$id)->update([  'name' => $request->name,
                                            'username' => $request->username,
                                            'email'=> $request->email ,
                                            'phone'=>$request->phone_number,
                                            'address'=>$request->address]);
        $user=User::find($id);
        if($request->has('password') && $request->password != null){
            $user->password= Hash::make($request->password);
            $user->save();
        }
        $role = Role::findById($request->role);
        $user->syncRoles([$role->name]);
        if($request->file('image')){
            $image=getFirstMediaUrl($user,$user->avatarCollection);
            if($image!= null){
                deleteMedia($user,$user->avatarCollection);
                uploadMedia($request->image,$user->avatarCollection,$user);
            }else{
                uploadMedia($request->image,$user->avatarCollection,$user);
            }
        }
        return redirect('/admin-dashboard/users');

    }


   

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin-dashboard/users');
    }
}