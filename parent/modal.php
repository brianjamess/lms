<div class="modal fade" id="view-parent-profile">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>User Profile</span>
            </div>
            <div class="modal-body">


                <div style="text-align: center"><img src="../assets/img/profile.png" alt="..." class="img-fluid rounded-circle"></div>

                <hr/>
                <div style="display: grid;float: left;">
                    <label class=" col-form-label">Name: <span class="p-name"></span></label>
                    <label class=" col-form-label">Surname: <span class="p-surname"></span></label>
                    <label class=" col-form-label">E-Mail Address: <span class="p-email"></span></label>
                    <label class=" col-form-label">Mobile: <span class="p-mobile"></span></label>
                    <label class=" col-form-label">ID Number: <span class="p-idNo"></span></label>
                    <label class=" col-form-label">Age: <span class="p-age"></span></label>

                </div>

            </div>
            <button id="<?php echo $_SESSION['id'] ?>" class="btn btn-warning edit-parent"><i class="fa fa-edit"></i> Edit</button>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="edit-parent">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Edit Parent</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data"  onsubmit="return sendForm('editParent')">
                    <input class="form-control" type="text" name="edit-parent" hidden>

                    <div class="form-group row">
                        <label for="edit-name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="edit-p-name" type="text" class="form-control is-invalid" name="edit-p-name" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="edit-name" class="col-md-4 col-form-label text-md-right">Surname</label>

                        <div class="col-md-6">
                            <input id="edit-p-surname" type="text" class="form-control is-invalid" name="edit-p-surname" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="edit-email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="edit-p-email" type="email" class="form-control is-invalid" name="edit-p-email" maxlength="30" onkeyup="validateEmail('editStudent')"  required autocomplete="">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="edit-verifyEmail"></strong>
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="edit-email" class="col-md-4 col-form-label text-md-right">Mobile</label>

                        <div class="col-md-6">
                            <input id="edit-p-mobile" type="text" class="form-control is-invalid" name="edit-p-mobile" maxlength="30" onkeyup="validateMobile()"  required autocomplete="">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyMobile"></strong>
                            </span>
                    </div>



                    <input id="edit-gender" type="text" class="form-control is-invalid" name="edit-gender" hidden>



                    <div class="form-group row" hidden>
                        <label for="edit-password" class="col-md-4 col-form-label text-md-right">Password&nbsp;</label>

                        <div  class="col-md-6">
                            <input id="edit-password" type="text" class="form-control" name="edit-password" placeholder="e.g 1234*Abcd" minlength="8" onkeyup="createPassword('editParent')"  autocomplete="off">
                        </div>

                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="edit-verifyPass"></strong>
                            </span>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>


<div class="modal fade" id="view-bus">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Transport Details</span>
            </div>
            <div class="modal-body">


                <div style="text-align: center"><img src="../assets/img/profile.png" alt="..." class="img-fluid rounded-circle bus-img"></div>

                <hr/>
                <div style="display: grid;float: left;">
                    <label class=" col-form-label">Bus Name: <span class="bus-name"></span></label>
                    <label class=" col-form-label">Driver Name: <span class="driver-name"></span></label>
                    <label class=" col-form-label">Driver Surname: <span class="driver-surname"></span></label>
                    <label class=" col-form-label">Driver Contact: <span class="driver-contact"></span></label>

                </div>

            </div>
        </div>
    </div>
</div>
</div></div>


