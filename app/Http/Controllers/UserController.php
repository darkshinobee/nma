<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
    return view('auth.edit_account')->withUser($user);
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
    ]);
    // dd($validatedData);


    //Retrieve changes from edit form and store in DB
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    //Save changes
    $user->save();

    //Set flash message
    Session::flash('success', 'Details Updated!');

    //Redirection
    return redirect()->route('my_account');
  }

}
