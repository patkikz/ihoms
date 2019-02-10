@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    TOTAL AMOUNT
                                </div>
                                <div class="card-body">
                                    @foreach ($dues_sum as $dd)
                                        <p><b>Total Dues: </b>{{$dd->Dues}}</p>
                                    @endforeach
                                    @foreach ($arrears_sum as $a)
                                        <p><b>Total Arrears: </b>{{$a->arrears}}</p>
                                    @endforeach
                                    <p><b>Net Total: </b>{{$dd->Dues + $a->arrears}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    MEMBER PAYMENTS
                                </div>
                                <div class="card-body">           
                                    <table class="table table-striped">
                                        <th>Block</th>
                                        <th>Lot</th>
                                        <th>Full Name</th>
                                        <th>Payment For</th>
                                        <th>Total Amount</th>
                                            @if (count($dues_data) > 0)
                                                @foreach ($dues_data as $d)                               
                                            <tr>
                                                <td>{{$d->block}}</td>
                                                <td>{{$d->lot}}</td>
                                                <td>{{$d->fullname}}</td>
                                                <td>{{$d->transactionFor}}</td>
                                                <td>{{$d->Amount}}</td>
                                            </tr>
                                        
                                                @endforeach
                                            @else
                                                <em>No Due Transactions yet!</em>
                                            @endif
                                    </table>
                                    <a href="{{url('reports/member-dues/pdf')}}" class="btn btn-danger float-right"><i class="fas fa-file-pdf"></i> Export to PDF</a>          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div>

@endsection

{{-- @section('scripts')
    <script>
        $(document).ready(function(){
var result = [];
  $('table tr').each(function(){
  	$('td', this).each(function(index, val){
    	if(!result[index]) result[index] = 0;
      result[index] += parseInt($(val).text());
    });
  });
  
  $('table').append('<tr></tr>');
  $(result).each(function(){
  	$('table tr').last().append('<td>'+this+'</td>')
  });
});
    </script>
@endsection --}}