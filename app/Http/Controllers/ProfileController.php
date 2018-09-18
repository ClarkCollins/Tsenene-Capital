<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('client_dashboard.user_profile');
    }
    public function update_user_profile(Request $request) {
         $id = Auth::user()->id;
         $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'unique:users,email,' . $id,
        ]);
         
         if($request->hasFile('photo')){
			$filenameWithExt = $request->file('photo')->getClientOriginalName();
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			$extension = $request->file('photo')->getClientOriginalExtension();
                        $fileNameToStore = $filename.'_'.time().'.'.$extension;
			$path = $request->file('photo')->storeAs('public/document_uploads/profile_photos', $fileNameToStore);
						   
		}else{
			$fileNameToStore = $request->get('photo1');
		
			}
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->photo_path = $fileNameToStore;
        $user->save();
        return redirect('/profile')->with('success', 'Profile Updated');
    }
    public function delete_user_photo() {
        $id = Auth::user()->id;
        $user = User::find($id);
        $name = "default.png";
        $user->photo_path = $name;
        $user->save();
        return redirect('/profile');
    }
    public function update_user_password(Request $request) {
         $id = Auth::user()->id;
         $this->validate($request, [
            'password' => 'required|string|min:6|confirmed',
        ]);
        $password = $request->get('password');
        $user = User::find($id);
        $user->password = bcrypt($password);
        $user->save();
        return redirect('/profile')->with('success', 'Password Updated');
    }

}
