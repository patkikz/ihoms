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
                                <input id="btn-input" type="text" class="form-control input-md rounded-0" placeholder="Search" />
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
                                    <h4>Monthly Dues</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['action' => 'DuesController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>HO ID</label>
                                                    {!!Form::select('tenant_id', $tenants, null , ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0', 'id' => 'getThis'])!!}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>TRANSACTION DATE <i class="fa fa-calendar"></i></label>
                                                    {{Form::date('transaction_date', Carbon\Carbon::now(), ['class' =>'form-control input-label rounded-0', 'placeholder' => 'Transaction Date'])}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    {{Form::text('last_name', '', ['class' => ($errors->has('last_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Last Name', 'id' => 'lastName'])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    {{Form::text('first_name', '', ['class' => ($errors->has('first_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'First Name', 'id' => 'firstName'])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    {{Form::text('middle_name', '', ['class' => ($errors->has('last_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Middle Name','id' => 'middleName'])}}
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <select class="form-control input-label rounded-0">
                                                        <option>2018</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button input="button" class="btn btn-primary primary-bg rounded-0 btn-block" id="btnshowmodal" onclick="popupDues();return false;" runat="server">CASH</button>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="dues-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content rounded-0 border-0">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Monthly Dues</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body pb-0">
                                                          
                                                                <div class="form-row">
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="form-group">
                                                                            <label>AMOUNT</label>
                                                                            {{Form::number('amount', '', ['class' => ($errors->has('amount')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Amount'])}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="form-group">
                                                                            {{Form::number('tender', '', ['class' => ($errors->has('tender')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Tender'])}}
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                        <div class="form-group">
                                                                            <label>CHANGE</label>
                                                                            {{Form::number('change', '', ['class' => ($errors->has('change')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Change'])}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex w-100 justify-content-end mt-3">
                                                                        <div class="form-group pr-2 pl-2">
                                                                            {{Form::submit('Submit', ['class' => 'button primary-bg rounded-0'])}}
                                                                        </div>
                                                                        <div class="form-group pr-2 pl-2">
                                                                            <button type="submit" class="button primary-bg rounded-0">CANCEL</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function popupDues() {
        $('[id*="dues-modal"]').modal('show');
        }

        var getClientDetails = function(){

var thisElem = $(this);
//Get the selected option value
var id = thisElem.val();

var lastName = $("#lastName");
var firstName = $("#firstName");
var middleName = $("#middleName");
// var year = $("#year");

//dont forget to change domain 
$.ajax({
url: domain + '/dues/get-tenant-details/'+id,
type: "GET",
cache: false,
success: function (data, textStatus, jqXHR) {
//Way para makita mo returned data
console.log(data.tenant);
lastName.val(data.tenant.last_name);
firstName.val(data.tenant.first_name);
middleName.val(data.tenant.middle_name);
year.val(data.tenant.year);

},
error: function (jqXHR, textStatus, errorThrown) {
//if fails
}
});

}

$(this).on("change", "#getThis", getClientDetails);
    </script>
    

@endsection

    