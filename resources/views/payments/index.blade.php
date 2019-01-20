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
                                    <h4>PAYMENT MANAGEMENT</h4>
                                </div>
                                <div class="card-body">

                                <main>
                                    <input class="tab-menu" id="tab1" type="radio" name="tabs" checked>
                                    <label class="tab-title" for="tab1">Monthly Dues</label>

                                    <input class="tab-menu" id="tab2" type="radio" name="tabs">
                                    <label class="tab-title" for="tab2">Car Stickers</label>

                                    <input class="tab-menu" id="tab3" type="radio" name="tabs">
                                    <label class="tab-title" for="tab3">Club House Reservation</label>

                                    <!-- Monthly Dues -->
                                    <section class="tab-content" id="content1">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>HO ID</label>
                                                        <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>TRANSACTION DATE <i class="fa fa-calendar"></i></label>
                                                        <input type="date" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="First Name" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Middle Name" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Last Name" name="_id" class="form-control input-label rounded-0" />
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
                                                        <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block" data-toggle="modal" data-target="#dues-modal">CASH</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        
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
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label>AMOUNT</label>
                                                                        <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label>TENDER</label>
                                                                        <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label>CHANGE</label>
                                                                        <input type="text" name="_id" class="form-control input-label rounded-0" />
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex w-100 justify-content-end mt-3">
                                                                    <div class="form-group pr-2 pl-2">
                                                                        <button type="submit" class="button primary-bg rounded-0">OK</button>
                                                                    </div>
                                                                    <div class="form-group pr-2 pl-2">
                                                                        <button type="submit" class="button primary-bg rounded-0">CASH</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Car Stickers -->
                                    <section class="tab-content" id="content2">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>HO ID</label>
                                                        <input type="text" name="_id" class="form-control input-label rounded-0" />
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
                                                        <input type="text" placeholder="First Name" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Middle Name" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Last Name" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Blk" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Lot" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Street" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block" data-toggle="modal" data-target="#add-sticker">ADD</button>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block">DELETE</button>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block">EXPORT TO PDF</button>
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
                                    </section>

                                    <!-- Club House Reservation -->
                                    <section class="tab-content" id="content3">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>HO ID</label>
                                                        <input type="text" name="_id" class="form-control input-label rounded-0" />
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
                                                        <label>DATE OF RESERVATION <i class="fa fa-calendar"></i></label>
                                                        <input type="date" name="_id" class="form-control input-label rounded-0" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Reservation Type</label>
                                                        <select class="form-control input-label rounded-0">
                                                            <option>Birthday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary primary-bg rounded-0 btn-block" data-toggle="modal" data-target="#add-reserve">ADD</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal fade" id="add-reserve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content rounded-0 border-0">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SCHEDULE</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </main>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection