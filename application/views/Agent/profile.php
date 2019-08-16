<?php
$this->load->view("agent/admin_includes/head");
$this->load->view("agent/admin_includes/header");
$this->load->view("agent/admin_includes/sidebar"); ?>
    <style>

         .swal2-select {
            display: none !important;
        }
    </style>
    <section class="content">
        <div class="container-fluid">

            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $this->session->userdata('Agent_name'); ?> Profile
                            </h2>

                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#Personal_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Personal Info
                                    </a>
                                </li>
                                <?php if ($profile[0]["AgentType"] == 2) { ?>
                                    <li role="presentation">
                                        <a href="#company_with_icon_title" data-toggle="tab">
                                            <i class="material-icons">event_seat</i> Company Info
                                        </a>
                                    </li>
                                <?php } ?>
                                <li role="presentation">
                                    <a href="#address_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> Address
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#contact_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> Contact
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#billing_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">money</i> Billing
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#accounts_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings_applications</i> Account Type / Setting
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php if ($profile[0]["AgentType"] == 2) { ?>
                                    <div role="tabpanel" class="tab-pane fade" id="company_with_icon_title">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="comapny_name"
                                                               value="<?= $profile[0]["cName"]; ?>" required/>
                                                        <label class="form-label">Company Name</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="comapny_Address"
                                                               value="<?= $profile[0]["caddress"]; ?>" required/>
                                                        <label class="form-label">Company Address</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group form-float">

                                                    <div class="thumbnail">
                                                        <img src="http://placehold.it/500x300">
                                                        <div class="caption">
                                                            <input type="file" class="form-control"
                                                                   name="comapny_logo"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                <div role="tabpanel" class="tab-pane fade in active"
                                     id="Personal_with_icon_title">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="user_name"
                                                           value="<?= $profile[0]["AgentName"]; ?>" required/>
                                                    <label class="form-label">Agent Name</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control "
                                                           data-inputmask="'mask': '99999-9999999-9'"
                                                           placeholder="XXXXX-XXXXXXX-X" id="cnic" name="cnic"
                                                           value="<?= $profile[0]["CNIC"]; ?>" required/>
                                                    <label class="form-label">CNIC</label>
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control"
                                                           id="dob-date"
                                                           name="dob" data-dtp="dtp_jPGcg" required/>
                                                    <label class="form-label">Date Of birth</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label for="form-label">Marital Status</label>
                                                    <input type="radio" id="radio_30" name="marital_status"
                                                           value="S"
                                                           class="with-gap radio-col-green" checked="">
                                                    <label for="radio_30">Singal</label>
                                                    <input type="radio" id="radio_31" name="marital_status"
                                                           value="M"
                                                           class="with-gap radio-col-red">
                                                    <label for="radio_31">Married</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label for="form-label">Gender</label>
                                                    <input type="radio" id="radio_32" name="gender" value="M"
                                                           class="with-gap radio-col-deep-purple" checked="">
                                                    <label for="radio_32">Male</label>
                                                    <input type="radio" id="radio_33" name="gender" value="F"
                                                           class="with-gap radio-col-deep-purple">
                                                    <label for="radio_33">Female</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="religion"
                                                           required/>
                                                    <label class="form-label">Religion</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div  class="col-sm-3">
                                            <div class="thumbnail">
                                                <img src="http://placehold.it/500x300">
                                                <div class="caption">
                                                    <input type="file" class="form-control"
                                                           name="profile_pic"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                            <textarea type="text" class="form-control" name="objective"
                                                                      required></textarea>
                                                    <label class="form-label">Objective</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="address_with_icon_title">
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="paddress"
                                                   value="<?= $profile[0]["PAddress"]; ?>" required/>
                                            <label class="form-label">Current Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="maddress" required/>
                                            <label class="form-label">Permanent Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" name="baddress" required/>
                                            <label class="form-label">Postal Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="contact_with_icon_title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="email"
                                                           value="<?= $profile[0]["Email"]; ?>" required/>
                                                    <label class="form-label">Email</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="mobile"
                                                           name="mobile"
                                                           data-inputmask="'mask': '0399-99999999'" type="text"
                                                           value="<?= substr($profile[0]["Mobile"], 3); ?>"
                                                           maxlength="12" required/>
                                                    <label class="form-label">Mobile No / SMS / Whatsapp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" id="omobile"
                                                           name="omobile" maxlength="12"/>
                                                    <label class="form-label">Other Mobile </label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" id="landline"
                                                           name="landline" maxlength="12"/>
                                                    <label class="form-label">Landline </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="billing_with_icon_title">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="bank_title"
                                                           value="<?= $profile[0]["btitle"]; ?>" required/>
                                                    <label class="form-label">bank Account Title</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="bank_account"
                                                           value="<?= $profile[0]["baccount"]; ?>" required/>
                                                    <label class="form-label">bank A/C No</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="bank_code"
                                                           value="<?= $profile[0]["bcode"]; ?>" required/>
                                                    <label class="form-label">Branch Code</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="bank_name"
                                                           value="<?= $profile[0]["bname"]; ?>" required/>
                                                    <label class="form-label">Bank Name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="accounts_with_icon_title">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="header  bg-cyan">
                                                    <h2>
                                                        Free / Basic Services
                                                        <small>Silver Package</small>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus
                                                    imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis
                                                    per facilisi sociosqu. Volutpat. Ridiculus nostra.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-orange">
                                                    <h2>
                                                        Permotional Services
                                                        <small>Gold Package</small>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus
                                                    imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis
                                                    per facilisi sociosqu. Volutpat. Ridiculus nostra.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-green">
                                                    <h2>
                                                        Full Support & Services
                                                        <small>Platinum Package</small>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus
                                                    imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis
                                                    per facilisi sociosqu. Volutpat. Ridiculus nostra.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" >
                                <div class="col-lg-offset-10 col-md-offset-2 col-sm-offset-4 col-xs-offset-5" style="margin-bottom:20px;">
                                    <button type="button" class="btn btn-primary waves-effect">Save</button>
                                    <button type="button" class="btn btn-default waves-effect ">Cancel</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #END# Tabs With Icon Title -->

        </div>
    </section>
    <script>
        $('#dob-date').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY',
            maxDate: new Date('<?=date('(Y - 20)-m-d');?>')
        });


        $("#cnic").inputmask({"mask": "99999-9999999-9"});
        $("#mobile").inputmask({"mask": "0399-9999999"});
    </script>
<?php check_flash_messages();
$this->load->view("agent/admin_includes/footer"); ?>