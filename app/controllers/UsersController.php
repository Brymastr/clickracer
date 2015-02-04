<?php

class UsersController extends \BaseController {

    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $date = new \DateTime;

        $this->user->username = Input::get('username');

        if(!empty($_POST['firstname'])) {
            $this->user->firstname = Input::get('firstname');
        }

        $this->user->password = Hash::make(Input::get('password'));

        $this->user->created_at = $date;

        $this->user->updated_at = $date;

        $this->user->save();

        // Log in after creating an account
        if(Auth::attempt(array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ))) {
            Auth::user();
        }

        $user = Auth::user();
        // Create an initial score of 0
        $score = new Score;
        $score->score = 0;
        $score->user_id = $user->id;
        $score->created_at = $date;
        $score->updated_at = $date;
        $score->save();

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
