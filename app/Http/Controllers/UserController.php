<?php

namespace App\Http\Controllers;

use App\User;
use App\Photo;
use Session;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Image;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function my_account()
  {
    $user = Auth::user();
    return view('auth.my_account')->withUser($user);
  }

  public function edit_account()
  {
    $user = Auth::user();
    $photo = User::find($user->id)->photo;
    return view('auth.edit_account', compact('user', 'photo'));
  }

  public function update_account(Request $request, $id)
  {
    //Get edit id and store in a variable
    $user = User::find($id);

    //Validation
    $validatedData = $request->validate([
      'first_name' => 'required|string|max:255',
      'last_name' => 'required|string|max:255',
      'email' => ['required', 'string', 'max:255', 'email', Rule::unique('users')->ignore($user->id)],
      'phone' => ['required', 'string', 'size:11', Rule::unique('users')->ignore($user->id)],
      'hoto' => 'nullable|mimes:jpeg,jpg,png|max:200',
    ]);
    // dd($validatedData);


    //Retrieve changes from edit form and store in DB
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    //Save User Changes
    $user->save();

    // Image Update
    $photo = User::find($user->id)->photo;
    if ($photo) {
      if ($request->hasFile('hoto')) {

        $photo = Photo::find($photo->id);

        $image = $request->file('hoto');
        $photo_name = $user->email. '.' .$image->getClientOriginalExtension();
        $photo->name = $photo_name;
        $location = public_path('images/photos/'.$photo_name);
        $photo->path = '/images/photos/'.$photo_name;
        Image::make($image)->resize(165, 165)->save($location);
        $photo->save();
      }
    }else {
      if ($request->hasFile('hoto')) {
        $image = $request->file('hoto');
        $photo_name = $user->email. '.' .$image->getClientOriginalExtension();

        $photo_obj = new Photo;
        $photo_obj->name = $photo_name;
        $location = public_path('images/photos/'.$photo_name);
        $photo_obj->path = '/images/photos/'.$photo_name;
        Image::make($image)->resize(165, 165)->save($location);
        $photo_obj->user_id = $user->id;
        $photo_obj->save();
      }
    }

    //Set flash message
    Session::flash('success', 'Details Updated!');

    //Redirection
    return redirect()->route('my_account');
  }

}
