@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">

                    <header class="mb-2 row justify-center">
                        <div class="col-3 col-sm-2 col-md-6 col-lg-6 col-xl-6" >
                            <div class="float-left text-center text-md-left input-group">
                                <a href="#menu-toggle" class="btn btn-primary rounded-0 primary-bg" id="menu-toggle"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>

                        <div class="col-9 col-sm-10 col-md-6 col-lg-6 col-xl-6" >
                            <div class="float-left text-center text-md-left input-group">
                                <input id="search" type="text" class="form-control input-md rounded-0" placeholder="Search"  />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-md border-left-0 primary-bg rounded-0"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </header>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card rounded-0 border-0">
                                <div class="card-header pb-0">
                                    <h4>CAR STICKERS</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['action' => 'CarStickersController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'id' => 'getHere']) !!}
                                        {{Form::hidden('domain', '', ['id' => 'domain'])}}
                                        <div class="form-row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                    <label>Transaction Sequence No. : <b>{{$latest + 1}}</b></label>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>HO ID</label>
                                                    {!!Form::text('tenant_id' , '', ['placeholder' => 'Homeowner ID', 'class' => 'form-control input-label rounded-0', 'id' => 'tenantID', 'readonly' => 'true'])!!}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>DATE FROM <i class="fa fa-calendar"></i></label>
                                                    {!! Form::date('date_from',Carbon\Carbon::now(), ['class' => 'form-control input-label rounded-0']) !!}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>DATE TO <i class="fa fa-calendar"></i></label>
                                                    {!! Form::date('date_to', '', ['class' => 'form-control input-label rounded-0']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    {{Form::text('last_name', '', ['class' => ($errors->has('last_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Last Name', 'id' => 'lastName', 'readonly' => true])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    {{Form::text('first_name', '', ['class' => ($errors->has('first_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'First Name', 'id' => 'firstName', 'readonly' => true])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    {{Form::text('middle_name', '', ['class' => ($errors->has('middle_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Middle Name','id' => 'middleName', 'readonly' => true])}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                {{Form::text('block', '', ['class' => ($errors->has('block')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Block', 'id' => 'block', 'readonly' => true])}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                {{Form::text('lot', '', ['class' => ($errors->has('lot')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Lot', 'id' => 'lot', 'readonly' => true])}}     
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                {{Form::text('street', '', ['class' => ($errors->has('street')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Street', 'id' => 'street', 'readonly' => true])}}
                                            </div>
                                        </div>
    
                                        <div class="modal fade dues-modal" id="add-sticker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content rounded-0 border-0">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Monthly Dues</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body pb-0 ">
                                                          
                                                                <div class="form-row parent">
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="form-group">
                                                                            <label>TOTAL</label>
                                                                            {{Form::number('total_amount', '', ['class' => ($errors->has('amount')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0 total_amount', 'placeholder' => 'Amount'])}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="form-group">
                                                                            <label>TENDER</label>
                                                                            {{Form::number('tender', '', ['class' => ($errors->has('tender')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0 tender', 'placeholder' => 'Tender'])}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="form-group">
                                                                            <label>CHANGE</label>
                                                                            {{Form::number('change', '', ['class' => ($errors->has('change')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0 change', 'placeholder' => 'Change', 'readonly' => true])}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex w-100 justify-content-end mt-3">
                                                                        <div class="form-group pr-2 pl-2">
                                                                            {{Form::submit('Submit', ['class' => 'button primary-bg rounded-0'])}}
                                                                        </div>
                                                                        <div class="form-group pr-2 pl-2">
                                                                            <button type="button" class="button primary-bg rounded-0" data-dismiss="modal">CANCEL</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <table class="table table-striped table-sm" style="width:100%;" id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <td><b>TYPE OF VEHICLE</b></td>
                                                            <td><b>AMOUNT</b></td>
                                                            <td colspan="2"><b>PLATE NO.</b></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id = "addHere">
                                                        <tr>
                                                            <td>
                                                                {{Form::select('vehicle_type[]',$types,null, ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0', 'id' => 'getThis'])}}
                                                            </td>
                                                            <td>                                                                        
                                                                {{Form::number('amount[]','', ['class' => 'form-control input-label rounded-0', 'readonly' => true, 'id' => 'amount'])}}
                                                            </td>
                                                            <td>
                                                                {{Form::text('plate_no[]', '',['placeholder' => 'Plate Number', 'class' => 'form-control input-label rounded-0 amount'])}}
                                                            </td>
                                                            <td>
                                                                <button type="button" id="add" class="btn btn-primary rounded-0 primary-bg">+</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td></td>
                                                            <td>Total</td>
                                                            <td>
                                                                <b class="total"></b>
                                                            </td>
                                                            <td><button type="button" class="btn btn-primary primary-bg rounded-0 btn-block" id="btnshowmodal" onclick="popupCars();return false;" runat="server">CASH</button> </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>       
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function popupCars() {
        $('[id*="add-sticker"]').modal('show');
        }
    </script>
@endsection

@section('scripts')
<script type="text/javascript">
$('#search').autocomplete({
    source : "{{ url('car-stickers/autocomplete') }}",
    minLength:1,
    autoFocus: true,
    type:'GET',
    select:function(e, ui){
        console.log(ui);
        $('#tenantID').val(ui.item.id);
        $('#lastName').val(ui.item.last_name);
        $('#firstName').val(ui.item.first_name);
        $('#middleName').val(ui.item.middle_name);
        $('#block').val(ui.item.block);
        $('#lot').val(ui.item.lot);
        $('#street').val(ui.item.street);
        
        // getTenantTransactions(ui.item.id);
    }
});

$(document).ready(function(){
    var count = 1;
    $('#add').click(function(){
        count = count + 1;

        var html_code = "<tr id='row"+count+"'>";
        html_code += "<td>";
        html_code += '{{Form::select('type[]',$types,null, ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0'])}}'
        html_code +="</td>";
        html_code += "<td>";
        html_code += '{{Form::number('amount[]','', ['class' => 'form-control input-label rounded-0', 'readonly' => true])}}'
        html_code +="</td>";
        html_code += "<td>";
        html_code += '{{Form::text('plate[]', '',['placeholder' => 'Plate Number', 'class' => 'form-control input-label rounded-0 amount'])}}'
        html_code +="</td>";
        html_code += "<td>";
        html_code += '<button type="button" name="remove" data-row="row'+count+'" href="#" class="btn btn-danger rounded-0 remove">x</button>';
        html_code +="</td>";
        html_code += "</tr>";

        $('#addHere').append(html_code);
    });
    $(document).on('click', '.remove', function(){
            var delete_row = $(this).data('row');
            $('#' + delete_row).remove();
        });
});


$(document).ready(function(){
    $('#getThis').change(function(){
        var thisElem = $(this);
        var id = thisElem.val();
        var amount = $("#amount");

        $.ajax({
        url: '/car-stickers/get-type-details/'+id,
        type: "GET",
        cache: false,
        success: function (data, textStatus, jqXHR) {
        //Way para makita mo returned data
        console.log(data.type);
        amount.val(data.type.amount);
       
        // year.val(data.tenant.year);

        },
        error: function (jqXHR, textStatus, errorThrown) {
        //if fails
        }
        });


    });
});

$(document).ready(function(){
    $("div.parent").delegate('.total_amount, .tender', 'keyup', function(){
  var g = $(this).parent().parent().parent();
    var total_amount = g.find('.total_amount').val();
    var tender = g.find('.tender').val();
    change = (tender - total_amount);
    g.find('.change').val(change);
  });
});
</script>

@endsection