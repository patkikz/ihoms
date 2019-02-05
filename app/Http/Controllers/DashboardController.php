<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Tenant;
use App\DueTransaction;
use Charts;
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

        
        // $data = collect([]); // Could also be an array

        // for ($days_backwards = 2; $days_backwards >= 0; $days_backwards--) {
        //     // Could also be an array_push if using an array rather than a collection.
        //     $data->push(Transaction::whereDate('created_at', today()->subDays($days_backwards))->count());
        // }

        $transactions = Transaction::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $transaction= Transaction::where(DB::raw("(DATE_FORMAT(created_at,'%m'))"),date('m'))->get();


        $chart = Charts::multiDatabase('line', 'highcharts')
            ->dataset('Daily Transactions',$transaction)->colors(['#1E90FF'])
            ->title('Transaction Summary')
            ->elementLabel("Total")
            ->dimensions(0, 500)
            ->responsive(false)
            ->groupByDay(date('m'),date('Y'), true);

        $pie = Charts::database(Transaction::all(), 'pie', 'highcharts')
            ->title('Payments')
            ->colors(['#FF4500', '#FFD700', '#32CD32', '#40E0D0'])
            ->dimensions(0,500)
            ->responsive(false)
            ->groupBy('transactionFor');
    
        return view('dashboard', ['posts' => $user->posts, 'chart' => $chart, 'pie' => $pie]);
    }
}
