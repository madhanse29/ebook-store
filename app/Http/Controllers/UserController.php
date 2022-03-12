<?php

namespace App\Http\Controllers;
use Mail;
use Image;
use Session;
use Reminder;
use Sentinel;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        
        // $role = User::where(['email'=>$req->email])->get('role');
        // dd($role);
  
      if($user->role == 1){
        if (!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is not matched";
        }else
               {
                session()->put('role',$user->role);
                session()->put('user',$user);
            
            return redirect('dashboard');
           
        }
    }else{
        if (!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is not matched";
        }else
               {
                session()->put('user',$user);
                session()->put('role',$user->role);

                $role = session()->get('role');
                return redirect('/');
        }
    }
    }
    function dashboard(){
 
return view('admin.dashboard');  }

function fetchbooks(){
    $books=Book::all();
    // return view('admin.dashboard',compact('books'));
return response()->json([
'books'=>$books,
]);
}
   function register(Request $request){
    //    return $req->input();
       $user = User::create([
        'name' => $request->name,
    'email' => $request->email,
    'password' =>Hash::make($request->password) ,
    ]);
    return redirect('/login');
   }

   function profile()
   {
    $data=Session::get('user');
    return view('profile',compact('data'));
   }
//    DB::table('product')->update([ 'key' => $request['key'], 'name' => $request['name']]);
   function editUser(Request $request){
       
       $user=Session::get('user')['id'];
    //    dd($user);
     $user=DB::table('users')->where('id',$user)->update ([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>Hash::make($request->password) ,
       ]);
       
       $data=Session::get('user');
        return view('profile',compact('data'));
   
   }

   function profilePic(Request $request){
       $input = $request->all();
       if($request->hasFile('avatar')){
           $destination_path='public/uploads/avatars';
           $image = $request->file('avatar');
           $image_name = $image->getClientOriginalName();
           $path = $request->file('avatar')->storeAs($destination_path,$image_name);
           $input['avatar']= $image_name;
           $data=Session::get('user');
           $data->avatar = $image_name;
           $data->save();
       }
     
       $data=Session::get('user');
 return view('profile',compact('data'));
   }


    function password(Request $request)
    {
     $user = User::whereEmail($request->email)->first();
     if($user == null){
         return redirect()->back()->with(['error'=>'Email does not exits']);
     }
     $user = Sentinel::findById($user->id);
     $reminder = Reminder::exists($user) ? : Reminder::create($user);
     $this->sendEmail($user,$reminder->code);

      return redirect()->back()->with(['sucess'=>'Reset  code sent to your email']);
            }

    function sendEmail($user,$code){
        Mail::send(
            'email.forgot',
            ['user'=>$user , 'code'=>$code],
            function($message) use($user){
                $message->to($user->email);
                $message->subject("$user->name,reset your passord");
            }
        );
    }
}

