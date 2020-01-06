<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $client = new Client();
      $res = $client->request('GET', 'http://www.boredapi.com/api/activity');

      if($res->getStatusCode() == 200){
      $resultJSON = $res->getBody();
      $resultJSON = json_decode($resultJSON, true);
      $resultJSON['accessibility'] = $resultJSON['accessibility']*5;
      $resultJSON['price'] = $resultJSON['price']*5;

      } else {
        echo "API error";
      }

      return view('home')->with('result', $resultJSON);;
    }
}
