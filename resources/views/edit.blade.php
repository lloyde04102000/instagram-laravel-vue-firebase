<form action="{{ url('insta' . '/' . $item->id) }}" method="post">
{!! csrf_field() !!}
        @method("PATCH")
    <div class="modal fade" id="{{ 'update' . $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update INSTA User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="fullname" value="{{ $item->fullname }}" class="form-control" id="fullname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email_address">Email Address</label>
                                <input type="email" class="form-control" value="{{ $item->email_address }}" name="email_address" id="email_address" required>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" class="form-control" value="{{ $item->contact_number }}" name="contact_number" id="contact_number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" value="{{ $item->address }}" name="address" id="address" required>
                        </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>