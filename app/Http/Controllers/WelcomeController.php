<?php namespace App\Http\Controllers;
use App\Screenshot;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

           $this->middleware('auth', ['only' => ['interview']]);
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	public function work()
	{
		$screenshots = Screenshot::all();
		return view('work',compact('screenshots'));
	}
	public function resume()
	{
		return view('resume');
	}
	public function interview()
	{
		return view('interview');
	}
}
