<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Tenant;
use App\DueTransaction;
use App\Charts\DailyChart;
use Carbon\Carbon;
use Alert;
use DB;


class DashboardController extends Controller
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        
    $data = collect([]); // Could also be an array
    $today = today(); 
    $dates = []; 

    for($i=1; $i <  $today->daysInMonth +1 ; $i++) {
        $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('F-d-Y');
        $data->push(Transaction::whereDate('created_at', $today->startOfMonth()->addDays($i))->count());
    }
        // for ($days_backwards = 2; $days_backwards >= 0; $days_backwards--) {
        //     // Could also be an array_push if using an array rather than a collection.
        //     $data->push(Transaction::whereDate('created_at', today()->subDays($days_backwards))->count());
        // }
    $m = Carbon::now()->format('F');
    $chart = new DailyChart;
    $chart->labels($dates);
    $chart->dataset('Transactions Per Day', 'column', $data)->options(['color' => '#f49e42', '#29e574']);
    $chart->title('For the Month of '.$m);
      

       

        // $data = Transaction::where(DB::raw("(DATE_FORMAT(created_at,'%m'))"),date('m'))
        //     ->get()
        //     ->groupBy(function($date){
        //         return Carbon::parse($date->created_at)->format('F d, Y');
        //     })
        //     ->map(function ($item) {
     
        //         return count($item);
        //     });

        // $m = Carbon::now()->format('F');
        // $chart = new DailyChart;
        // $chart->labels($data->keys());
        // $chart->title($m);
        // $chart->dataset('My dataset', 'areaspline', $data->values());
   
        $pie = new DailyChart;
        $pie->labels($data->keys());
        $pie->dataset('My dataset', 'bar', $data->values());
        return view('dashboard', ['posts' => $user->posts, 'chart' => $chart, 'pie' => $pie]);
    }
}
