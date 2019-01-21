 <!-- Monthly Dues -->
 <section class="tab-content" id="content1">
        {!! Form::open(['action' => 'PaymentsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
        <div class="form-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                    <label>HO ID</label>
                    {!!Form::select('tenant_id', $tenants, null , ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0'])!!}
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
                    {{Form::text('last_name', '', ['class' => ($errors->has('last_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Last Name'])}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                    {{Form::text('first_name', '', ['class' => ($errors->has('first_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'First Name'])}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="form-group">
                    {{Form::text('middle_name', '', ['class' => ($errors->has('last_name')) ? 'form-control input-label rounded-0 is-invalid' : 'form-control input-label rounded-0', 'placeholder' => 'Middle Name'])}}
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
                    {{Form::submit('Submit', ['class' => 'btn btn-primary primary-bg rounded-0 btn-block'])}}
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
                                            <button type="submit" class="button primary-bg rounded-0">CASH</button>
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
        </section>
    {!! Form::close() !!}

    <script>
            function popupDues() {
            $('[id*="dues-modal"]').modal('show');
            }
        </script>