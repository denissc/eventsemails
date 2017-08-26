<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\FeedbackReceived;
use Auth;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Receive user feedback
     * 
     * @param Request $request
     */
    public function feedback(Request $request)
    {
        $this->validate($request, [
            'feedback' => 'required'
        ]);
        
        event(new FeedbackReceived(Auth::user(), $request->get('feedback')));
        
        return redirect('home')
                ->with('success', trans('feedback.sent.success'));
    }
}
