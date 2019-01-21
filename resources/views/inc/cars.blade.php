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
                            <button input="button" class="btn btn-primary primary-bg rounded-0 btn-block" id="btnshowmodal" onclick="popupCars();return false;" runat="server">ADD</button>
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
    <script>
            function popupCars() {
            $('[id*="add-sticker"]').modal('show');
            }
        </script>