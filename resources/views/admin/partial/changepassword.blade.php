<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert bg-danger text-light pb-0" id="changePassError" style="display: none">
          </div>
          <form action="" method="post" id="changePassword">
            <div class="form-group">
              <label for="">Old Password</label>
              <input type="password" name="oldpassword" id="oldpassword" class="form-control">
            </div>
            <div class="form-group">
              <label for="">New Password</label>
              <input type="password" name="newpassword" id="newpassword" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" name="newpassword_confirmation" id="newpassword_confirmation" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" form="changePassword">Change Password</button>
        </div>
      </div>
    </div>
  </div>