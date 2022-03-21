    <!-- Modal -->
    <form action="{{ url('insta') }}" method="post">
    @csrf <!-- {{ csrf_field() }} -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add INSTA User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="fullname" class="form-control" id="fullname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email_address">Email Address</label>
                                <input type="email" class="form-control" name="email_address" id="email_address" required>
                            </div>
                        <div class="form-group col-md-6">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" id="contact_number" required>
                        </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>