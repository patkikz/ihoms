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
                                    <form>
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>HO ID</label>
                                                    <input id="tenantID" type="text" name="_id" class="form-control input-label rounded-0" readonly />
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>DATE FROM <i class="fa fa-calendar"></i></label>
                                                    <input type="date" name="_id" class="form-control input-label rounded-0" />
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>DATE TO <i class="fa fa-calendar"></i></label>
                                                    <input type="date" name="_id" class="form-control input-label rounded-0" />
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
                                        <div class="form-row">
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                <div class="form-group">
                                                        <button input="button" class="btn btn-primary primary-bg rounded-0 btn-block" id="btnshowmodal" onclick="popupCars();return false;" runat="server">ADD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal fade" id="add-sticker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content rounded-0 border-0">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div class="form-group">
                                                                    <label>DATE FROM <i class="fa fa-calendar"></i></label>
                                                                    <input type="date" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div class="form-group">
                                                                    <label>DATE TO <i class="fa fa-calendar"></i></label>
                                                                    <input type="date" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div class="form-group">
                                                                    <label>STICKER ID</label>
                                                                    <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div class="form-group">
                                                                    <label>TYPE OF VECHICLE</label>
                                                                    <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div class="form-group">
                                                                    <label>CONDUCTION</label>
                                                                    <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div class="form-group">
                                                                    <label>PLATE NO.</label>
                                                                    <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 offset-md-6">
                                                                <div class="form-group">
                                                                    <label>AMOUNT</label>
                                                                    <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row ">
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 offset-md-8">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block" data-toggle="modal" data-target="#add-sticker">SAVE</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block" data-dismiss="modal">CANCEL</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
</script>

@endsection