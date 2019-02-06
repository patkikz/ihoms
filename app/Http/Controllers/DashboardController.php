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
            

            
        $dues = Transaction::where('transactionFor', '=', 'dues')->get()->count();
        $cars = Transaction::where('transactionFor', '=','car-stickers')->get()->count();
        $arrears = Transaction::where('transactionFor', '=', 'arrears')->get()->count();
        $reservations = Transaction::where('transactionFor', '=', 'clubhouse reservations')->get()->count();
       
        $pie = new DailyChart;
        $pie->labels(['Dues','Car Stickers','Clubhouse Reservations','Arrears']);
        $pie->dataset('My dataset', 'pie', [$dues,$cars,$reservations,$arrears])
            ->options(['color' => ['#4286f4', '#41f480','#f4e241','#f44e42']]);
        return view('dashboard', ['posts' => $user->posts, 'chart' => $chart, 'pie' => $pie]);
    }
}
