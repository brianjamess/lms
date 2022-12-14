<?php $img = empty(isset($_SESSION['image']))? '../assets/img/profile.png' : '../assets/img/profile/'.isset($_SESSION['image']); ?>



<div class="modal fade" id="add-user">
    <div class="modal-dialog" style="width: 150%">
        <div class="modal-content" style="width: inherit">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Add New Account</span>
            </div>
            <div class="modal-body">
                <form id="regForm" method="POST" action="sql.php" onsubmit="return SendForm()">
                    <input name="add-user" value="register" hidden>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Account Type</label>

                        <div class="col-md-6">
                            <select type="text" class="form-control" name="accountType" required>
                                <option value="">Select account type</option>
                                <option value="admin">Admin Account</option>
                                <option value="student">Student Account</option>
                                <option value="teacher">Teacher Account</option>
                                <option value="parent">Parent Account</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control is-invalid" name="name" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Surname</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control is-invalid" name="surname" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control is-invalid" name="email" maxlength="30" onkeyup="ValidateEmail()"  required autocomplete="off">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyEmail"></strong>
                            </span>
                    </div>


                    <div class="form-group row userID" >
                        <label class="col-md-4 col-form-label text-md-right">ID Number</label>

                        <div class="col-md-6">
                            <input id="idNo" type="text" class="form-control is-invalid idNumber" name="idNumber" minlength="13" maxlength="13" onkeyup="ValidateID('idNo')" onkeypress="return /[0-9]/i.test(event.key)" autocomplete="off" required>
                        </div>

                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyID"></strong>
                            </span>
                    </div>

                    <div class="form-group row parentID" hidden>
                        <label class="col-md-4 col-form-label text-md-right">Parent ID Number</label>

                        <div class="col-md-6">
                            <input id="PidNo" type="text" class="form-control is-invalid PidNumber" name="PidNumber" minlength="13" maxlength="13" onkeyup="ValidateID('PidNo')" onkeypress="return /[0-9]/i.test(event.key)" autocomplete="off">
                        </div>

                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyPID"></strong>
                            </span>
                    </div>


                    <div class="form-group row userMobile">
                        <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile</label>

                        <div class="col-md-6">
                            <input id="mobile" type="text" class="form-control is-invalid" name="mobile" minlength="10" maxlength="10" onkeyup="ValidateMobile()" onkeypress="return /[0-9]/i.test(event.key)" required autocomplete="off">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyMobile"></strong>
                            </span>
                    </div>



                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password&nbsp;</label>

                        <div  class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" placeholder="e.g 1234*Abcd" minlength="8" onkeyup="CreatePassword()" required autocomplete="off">
                            <span class="fa fa-eye" style="margin-top: -30px;position: absolute;right: 25px;"></span>
                        </div>

                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyPass"></strong>
                            </span>
                    </div>



                    <div class="form-group row">
                        <label for="passwordMatch" class="col-md-4 col-form-label text-md-right">Confirm Password&nbsp;</label>

                        <div class="col-md-6">
                            <input id="passwordMatch" type="password" class="form-control" name="passwordMatch" minlength="8" onkeyup="MatchPassword()" required autocomplete="off">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyMatch"></strong>
                            </span>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success form-control text-white">
                                Register
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
</div></div>
<!--student-->

<div class="modal fade" id="approve-student">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Approve Student</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="acc_approval" hidden>
                    <input name="acc_student" hidden>
                    <span id="apv-student"></span>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="view-student">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Student Profile</span>
            </div>
            <div class="modal-body">


                <div style="text-align: center"><img src="../assets/img/profile.png" alt="..." class="img-fluid rounded-circle"></div>

                <hr/>
                <div style="display: grid;float: left;">
                    <label class=" col-form-label">Name: <span class="st-name"></span></label>
                    <label class=" col-form-label">Surname: <span class="st-surname"></span></label>
                    <label class=" col-form-label">E-Mail Address: <span class="st-email"></span></label>
                    <label class=" col-form-label">ID Number: <span class="st-idNo"></span></label>
                    <label class=" col-form-label">Age: <span class="st-age"></span></label>
                    <label class=" col-form-label">Grade: <span class="st-grade"></span></label>
                    <label class=" col-form-label">Parent: <span class="st-parent"></span></label>

                </div>

            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="edit-student">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Edit Student</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data" onsubmit="return sendForm('editStudent')">

                    <input type="text" name="edit-st" hidden>

                    <div class="form-group row">
                        <label for="edit-st-name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="edit-st-name" type="text" class="form-control is-invalid" name="edit-st-name" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="edit-st-surname" class="col-md-4 col-form-label text-md-right">Surname</label>

                        <div class="col-md-6">
                            <input id="edit-st-surname" type="text" class="form-control is-invalid" name="edit-st-surname" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="edit-st-email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="edit-st-email" type="email" class="form-control is-invalid" name="edit-st-email" maxlength="30" onkeyup="validateEmail('editStudent')"  required autocomplete="">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="edit-st-verifyEmail"></strong>
                            </span>
                    </div>


                    <div class="form-group row">
                        <label for="edit-st-idNo" class="col-md-4 col-form-label text-md-right">ID Number</label>

                        <div class="col-md-6">
                            <input id="edit-st-idNo" type="text" class="form-control is-invalid" name="edit-st-idNo" minlength="13" maxlength="13" onkeypress="return /[0-9]/i.test(event.key)" onkeyup="validateID('editStudent')" required autocomplete="off">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="edit-st-verifyID"></strong>
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="edit-st-grade" class="col-md-4 col-form-label text-md-right">Grade</label>

                        <div class="col-md-6">
                            <select id="edit-st-grade" type="text" class="form-control" name="edit-st-grade" required autocomplete="false">
                              <option value="" selected disabled>Select grade</option>
                                <?php
                                $init = $pdo->open();
                                $sql = $init->prepare("SELECT * FROM grade");
                                $sql->execute();
                                foreach ($sql as $grade){
                                    echo '<option value="'.$grade['grade_code'].'">'.$grade['grade_code'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <input id="edit-st-gender" type="text" class="form-control is-invalid" name="edit-st-gender" hidden>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="delete-student">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header text-danger">
                <span>Delete Student</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="delete-student" hidden>

                    <span id="lbl-student"></span>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<!--Admin-->

<div class="modal fade" id="view-admin-profile">
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
                    <label class=" col-form-label">Name: <span class="admin-name"></span></label>
                    <label class=" col-form-label">Surname: <span class="admin-surname"></span></label>
                    <label class=" col-form-label">Email Address: <span class="admin-email"></span></label>

                </div>

            </div>
            <button id="<?php echo $_SESSION['id'] ?>" class="btn btn-warning edit-admin"><i class="fa fa-edit"></i> Edit</button>

        </div>
    </div>
</div>
</div></div>


<div class="modal fade" id="edit-admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Edit Admin</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data" onsubmit="return sendForm('editAdmin')">

                    <input type="text" name="edit-admin" hidden>

                    <div class="form-group row">
                        <label for="edit-admin-name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="edit-admin-name" type="text" class="form-control is-invalid" name="edit-admin-name" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="edit-admin-surname" class="col-md-4 col-form-label text-md-right">Surname</label>

                        <div class="col-md-6">
                            <input id="edit-admin-surname" type="text" class="form-control is-invalid" name="edit-admin-surname" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="edit-admin-email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="edit-admin-email" type="email" class="form-control is-invalid" name="edit-admin-email" maxlength="30" onkeyup="validateEmail('editAdmin')"  required autocomplete="">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="edit-admin-verifyEmail"></strong>
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


<div class="modal fade" id="delete-admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Delete Admin</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="delete-admin" hidden>

                    <span id="lbl-admin"></span>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<!--Parenet-->
<div class="modal fade" id="approve-parent">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Approve Parent</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="acc_approval" hidden>
                    <input name="acc_parent" hidden>
                    <span id="apv-parent"></span>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<!--Teacher-->
<div class="modal fade" id="approve-teacher">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Approve Teacher</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="acc_approval" hidden>
                    <input name="acc_teacher" hidden>
                    <span id="apv-teacher"></span>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>


<!--Drivers-->

<div class="modal fade" id="add-transport">
    <div class="modal-dialog" style="width: 150%">
        <div class="modal-content" style="width: inherit">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Add Transportation</span>
            </div>
            <div class="modal-body">
                <form id="regForm" method="POST" action="sql.php" enctype="multipart/form-data" onsubmit="return SendFormNow();">
                    <input name="add-transport" value="register" hidden>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control is-invalid" name="name" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Surname</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control is-invalid" name="surname" onkeypress="return /[a-z]/i.test(event.key)" required autocomplete="false">
                        </div>
                        <span class="text-center" role="alert" style="display: block">
                            </span>
                    </div>


                    <div class="form-group row userID" >
                        <label class="col-md-4 col-form-label text-md-right">ID Number</label>

                        <div class="col-md-6">
                            <input id="DidNo" type="text" class="form-control is-invalid idNumber" name="DidNo" minlength="13" maxlength="13" onkeypress="return /[0-9]/i.test(event.key)" onkeyup="ValidateDID()" autocomplete="off" required>
                        </div>

                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyDID"></strong>
                            </span>
                    </div>


                    <div class="form-group row userMobile">
                        <label for="Dmobile" class="col-md-4 col-form-label text-md-right">Mobile</label>

                        <div class="col-md-6">
                            <input id="Dmobile" type="text" class="form-control is-invalid" name="Dmobile" minlength="10" maxlength="10" onkeyup="ValidateMobileNo()" onkeypress="return /[0-9]/i.test(event.key)" required autocomplete="off">
                        </div>
                        <span class="invalid-feedback text-center" role="alert" style="display: block">
                                <strong id="verifyDMobile"></strong>
                            </span>
                    </div>

                    <div class="form-group row">
                        <label for="bus" class="col-md-4 col-form-label text-md-right">Bus Name</label>

                        <div class="col-md-6">
                            <input id="bus" type="text" class="form-control is-invalid" name="bus" minlength="5" maxlength="10" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="picture" class="col-md-4 col-form-label text-md-right">Bus Picture</label>

                        <div class="col-md-6">
                            <input id="picture" type="file" class="form-control is-invalid" name="picture" required>
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success form-control text-white">
                                Register
                            </button>
                        </div>
                    </div>

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

<div class="modal fade" id="delete-bus">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Delete Transport</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="delete-bus" hidden>

                    <span id="lbl-bus"></span>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="accept_return">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Confirm Book Return</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="accept_return" hidden>
                    <h4 class="text-success" id="accept_return_"></h4>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="decline_return">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Decline Book Return</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input name="decline_return" hidden>
                    <h4 class="text-danger" id="decline_return_"></h4>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="add_book">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Add New Book</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <input class="form-control" name="add_book" type="text" placeholder="Enter book name..." required>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="edit_book">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Edit Book</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">
                    <input name="edit_book_id" hidden>
                    <input class="form-control" name="edit_book" type="text" placeholder="Enter book name..." required>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="delete_book">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Delete Book</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">
                    <input name="delete_book_id" hidden>
                    <h4 id="delete_book_"></h4>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<div class="modal fade" id="broadcast-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
            <div class="modal-header">
                <span>Broadcast Message</span>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="POST" action="sql.php" enctype="multipart/form-data">

                    <select name="broad_cast" class="form-control" required>
                        <option value="" selected disabled>Select Audience</option>
                        <option value="teacher">Teachers</option>
                        <option value="student">Students</option>
                    </select>
                    <br>

                    <textarea name="broad_message" placeholder="Type your message here..." class="form-control bg-white" rows="3" style="border-radius: 5px" required></textarea>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-send fa-lis"></i> Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>

<script>
    function ValidateDID() {

            let id = $('#DidNo').val();
            let month = id.substr(2,2);
            let day = id.substr(4,2);
            let gender = id.substr(6,1);

            if(month > 0 && month < 13 && day > 0 && day < 32 && id.length == 13){
                $.ajax({
                    type: 'POST',
                    url: 'sql.php',
                    data: {
                        checkID:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.length > 0){
                            $('#verifyDID').css('color', 'red').html(' <i>ID number already exist</i>');
                        }
                        else{
                            gender >= 5 ? $('#verifyDID').css('color','green').html('<span>Identity Number Is Valid (<i class="fa fa-male"></i></span> male)')
                                : $('#verifyDID').css('color','green').html('<span>Identity Number Is Valid (<i class="fa fa-female"></i></span> female)');

                        }
                    }
                });

            }else{
                $('#verifyDID').css('color','#dc3545').html('<span>Identity Number Is Invalid <i class="fa fa-warning"></i></span>');

            }

    }

    function ValidateMobileNo() {
        let contact = $('input[name=Dmobile]').val();
        if (contact.length === 0) {
            $('#verifyDMobile').html('');
        }

        if (contact.length < 10) {
            $('#verifyDMobile').css('color', '#dc3545').html('<i>**the number is invalid!**</i>');
        }

        if ((contact.length === 10 && contact[0] === "0" && (contact[1] === "6" || contact[1] === "7" || contact[1] === "8"))
            || (contact.length === 11 && contact[0] === "2" && contact[1] === "7")) {

            // $.ajax({
            //     type: 'POST',
            //     url: './customRegister.php',
            //     data: {
            //         checkValues:contact},
            //     dataType: 'json',
            //     success: function(response){
            //         console.log(response)
            //         if(response.length > 0){
            //             $('#verifyMobile').css('color', 'red').html(' <i>the number already exist</i>');
            //         }
            //         else{
            //
            //             $('#verifyMobile').css('color', 'Green').html(' <i>the number is valid</i>');
            //         }
            //     }
            // });
            $('#verifyDMobile').css('color', 'Green').html(' <i>the number is valid</i>');

        } else if (contact.length > 10) {
            $('#verifyDMobile').css('color', '#dc3545').html('<i>**the number is invalid!**</i>');

        }
        else {
            $('#verifyDMobile').css('color', '#dc3545').html('<i>**the number is invalid!**</i>');

        }
    }

    function SendFormNow(){

        if($('#verifyDMobile').css('color') =='rgb(220, 53, 69)'){
            $('input[name=Dmobile]').focus();
            return false;
        }

        if($('#verifyDID').css('color') =='rgb(220, 53, 69)'){
            $('#DidNo').focus();
            return false;
        }


        return true;
    }
</script>