<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Input;

use Illuminate\Support\Facades\Redirect;


class UsersController extends Controller
{

	protected $user;

	public function __construct(User $user)

	{
		$this->user = $user;
	}

    public function create()
    {
    	return view('users.create');
    }

    public function store()
    {
     	$input = Input::all();
		if (!$this->user->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		$this->user->save();

		return Redirect::route('thankyou');
    }

    public function thankyou()
    {
    	return 'Thank you';
    }
}
