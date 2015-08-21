<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('paintroom');
	}



public function store(){
		$input = Input::all();
		if (Auth::check()) {
			$painter = new Painter;
			$painter->name = $input['name'];
		$painter->bio = $input['bio'];
		$painter->save();
	} else {
			return Redirect::to('home');
		}
	}

	public function storep(){
		$input = Input::all();
		if (Auth::check()) {
			$painter = Painter::find($input['painter']);
		$painting = new Painting;
		$painting->title = $input['title'];
		$painting->body = $input['body'];
		$painting->painter_id = $painter->id;
		$painting->save();
	} else {
		return Redirect::to('home');
	}


	}


	public function showpainting()
	{
		$input = Input::all();
		if (Auth::check()) {


			$paintings=Painting::all();
			return View::make('paintroom')->with('paintings',$paintings);
		}

		else{

			return Redirect::to('home');
		}
	}



}



