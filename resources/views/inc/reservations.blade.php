 
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
                                                                <button input="button" class="btn btn-primary primary-bg rounded-0 btn-block" id="btnshowmodal" onclick="popupReservation();return false;" runat="server">ADD</button>
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

                                        
<script>
        function popupReservation() {
        $('[id*="add-reserve"]').modal('show');
        }
    </script>