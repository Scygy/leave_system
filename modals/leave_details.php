<div class="modal fade" id="emp_details" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Employee Details</h4>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="leave_id" id="leave_id">
                           <div class="row">
                             <div class="col-md-2">
                               <label>Employee ID:</label><input type="text" name="leave_id_no" id="leave_id_no" readonly>
                             </div>
                             <div class="col-md-2">
                               <label>Name:</label><input type="text" name="leave_full_name" id="leave_full_name" readonly>
                             </div>
                              <div class="col-md-2">
                               <label>Department:</label><input type="text" name="leave_department" id="leave_department" readonly>
                             </div>
                              <div class="col-md-2">
                               <label>Date Hired:</label><input type="text" name="leave_date_hired" id="leave_date_hired" readonly>
                             </div>
                             <div class="col-md-2">
                               <label>Total Leave:</label><input type="text" name="leave_remaining_leaves" id="leave_remaining_leaves" readonly>
                             </div>
                           </div>

                           <br>

                           <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>