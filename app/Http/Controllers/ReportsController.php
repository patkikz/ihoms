<?php

namespace App\Http\Controllers;

use App\Tenant;
use App\Transaction;
use Illuminate\Http\Request;
use DB;
use PDF;
use PdfReport;


class ReportsController extends Controller
{
    public function memberDues()
    {
        $dues_data = $this->get_dues_data();

        $dues_sum = $this->get_dues_sum();

        $arrears_sum = $this->get_arrears_sum();


        return view('reports.member-dues', compact('dues_data','dues_sum','arrears_sum'));
    }   
    
    public function get_dues_data()
    {
        $dues_data = Tenant::selectRaw('CONCAT(tenants.first_name, " ", tenants.last_name) AS fullname,tenants.block,tenants.lot, SUM(transactions.amount) AS Amount, transactions.transactionFor')
                    ->join('transactions', 'transactions.tenant_id', 'tenants.id')
                    ->where('transactions.transactionFor','=','dues')
                    ->orWhere('transactions.transactionFor','=','arrears')
                    ->groupBy('fullname', 'tenants.block','tenants.lot', 'transactions.transactionFor')
                    ->orderBy('tenants.block', 'asc')
                    ->get();

        return $dues_data;
    }

    public function get_dues_sum()
    {
        $dues_sum = Transaction::selectRaw('SUM(amount) as Dues')
                    ->where('transactionFor', 'dues')
                    ->get();
        return $dues_sum;
    }

    public function get_arrears_sum()
    {
        $arrears_sum = Transaction::selectRaw('SUM(amount) as arrears')
                    ->where('transactionFor', 'arrears')
                    ->get();
        return $arrears_sum;
    }

    public function pdf()
    {
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($this->
        //     convert_dues_data_to_html());
        // return $pdf->stream();
        $title = 'User Payments Report'; // Report title
    
        $meta = [ // For displaying filters description on header
            // 'Registered on' => $fromDate . ' To ' . $toDate,
            // 'Sort By' => $sortBy
        ];
    
        $queryBuilder = Tenant::select(['tenants.last_name', 'tenants.first_name','tenants.middle_name','tenants.created_at', 'tenants.block', 'tenants.lot', 'transactions.transactionFor', 'transactions.amount'])
                        ->join('transactions','transactions.tenant_id','tenants.id')
                        ->where('transactions.transactionFor', '=', 'dues')
                        ->orWhere('transactions.transactionFor', '=', 'arrears');
                        // ->groupBy('transactions.transactionFor','tenants.last_name','tenants.first_name', 'tenants.middle_name', 'tenants.created_at','transactions.amount');
        

        $columns = [
            'Block' => 'block',
            'Lot' => 'lot',     
            'First Name' => 'first_name',
            'Last Name' => 'last_name',
            'Created At' => 'created_at',
            'Transaction For' => 'transactionFor',
            'Total Balance' => 'amount',
            
            
        ];
    
        // Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
        return PdfReport::of($title, $meta, $queryBuilder, $columns)
                        ->editColumn('Created At',  [ // Change column class or manipulate its data for displaying to report
                            'displayAs' => function($result) {
                                return $result->created_at->format('F d, Y');
                            },
                            'class' => 'left'
                        ])
                        ->editColumns(['Total Balance'], [ // Mass edit column
                            'class' => 'right bold'
                        ])
                        ->editColumns(['Transaction'], [ // Mass edit column
                            'class' => 'left'
                        ])
                        ->showTotal([ // Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
                            'Total Balance' => 'point',
                            'Total Balance' => 'P' // if you want to show dollar sign ($) then use 'Total Balance' => '$'
                        ])
                        ->showNumColumn(false)
                        ->limit(20) // Limit record to be showed
                        ->stream(); // other available method: download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instan
    }

    public function convert_dues_data_to_html()
    {
        $dues_data = $this->get_dues_data();

        $output = '<table class="table table-bordered">
        <tr>
          <th>Block</th>
          <th>Lot</th>
          <th>Full Name</th>
          <th>Amount</th>
        </tr>';

        foreach($dues_data as $d)
        {
            $output .=  '<tr>
            <td>'.$d->block.'</td>
            <td>'.$d->lot.'</td>
            <td>'.$d->fullname.'</td>
            <td>'.$d->Amount.'</td>
        </tr>';
        }

        $output .= '</table>';
        
        return $output;
    }
}
