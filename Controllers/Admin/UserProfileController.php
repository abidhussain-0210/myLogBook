<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use File;



class UserProfileController extends Controller
{
    public function profile()
	{
        $userProfile = UserProfile::where('id' , 6)->get();
   		return view('admin.home.pages-profile-user')
                ->with(compact('userProfile'));
	}

    public function profileSetting(){
        
        $images = UserProfile::where('id' , 6)->get();
        return view('admin.home.account_setting')->with(compact('images'));
    }

    public function userProfileStore(Request $request){

        $request->validate([

            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required',
            'state' => 'required',
            'country' => 'required',
            'language' => 'required',
            'image' => 'required'

        ]);

        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/' , $fileName);
            
            //$file->move(public_path('uploads'), $fileName);
        }

        UserProfile::create([

            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone_number' => $request->phoneNumber,
            'address' => $request->address,
            'state' => $request->state,
            'country' => $request->country,
            'language' => $request->language,
            'image' => $fileName

        ]);
        return redirect()->back()->with('status' , 'Data Submitted Successfully');

    }
    public function editProfile($id)
    {
        $userProfile = UserProfile::findOrFail($id);
			return view('admin.home.edit_profile')
				   ->with(compact('userProfile'));
    }
    public function userProfileUpdate(Request $request , $id){

        // $request->validate([

        //     'firstName' => 'required',
        //     'lastName' => 'required',
        //     'email' => 'required',
        //     'phoneNumber' => 'required',
        //     'address' => 'required',
        //     'state' => 'required',
        //     'country' => 'required',
        //     'language' => 'required',
        //     'image' => 'required'

        // ]);

        $Profile = UserProfile::findOrFail($id);
        $currentImage = $Profile->image;

        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/' , $fileName);
            // $file->move(public_path('uploads'), $fileName);
        }

        $Profile->update([

            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone_number' => $request->phoneNumber,
            'address' => $request->address,
            'state' => $request->state,
            'country' => $request->country,
            'language' => $request->language,
            'image' => ($fileName) ? $fileName : $currentImage

        ]);

        if ($fileName)
         File::delete('./upload/' . $currentImage);
        return redirect()->to('/admin/profile')->with('status' , 'Data Updated Successfully');

    }
}
