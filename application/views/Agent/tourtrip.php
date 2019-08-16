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
                            Trip & Tour
                        </h2>
                        <ul class="nav nav-tabs pull-right  m-r--5"
                            style="position: absolute;top: 0px; right: 15px; list-style: none;" role="tablist">
                            <li role="presentation pull-right" class="active">
                                <a href="#newtrip_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">location_on</i> Add
                                </a>
                            </li>

                            <li role="presentation pull-right">
                                <a href="#viewtrip_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">map</i> View
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->


                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="newtrip_with_icon_title">
                                <!-- Basic Example | Horizontal Layout -->
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <form id="" method="POST">
                                                <div class="body">
                                                    <div id="wizard_vertical">
                                                        <h2>Trip Basic Info</h2>

                                                        <section>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                       name="trip_title"
                                                                                       required/>
                                                                                <label class="form-label">Title</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="number"
                                                                                       class="form-control"
                                                                                       name="trip_member" required/>
                                                                                <label class="form-label">No Of Member /
                                                                                    Trip </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <b>Diffculty Level</b>
                                                                        <div class="row m-l--20">
                                                                            <div class="col-sm-3 ">
                                                                                <input name="trip_difficulty"
                                                                                       type="radio"
                                                                                       id="radio_easy"
                                                                                       class="with-gap radio-col-green">
                                                                                <label for="radio_easy">Easy</label>
                                                                            </div>
                                                                            <div class="col-sm-3 m-l--5">
                                                                                <input name="trip_difficulty"
                                                                                       type="radio"
                                                                                       id="radio_normal"
                                                                                       class="with-gap radio-col-blue">
                                                                                <label for="radio_normal">Normal</label>
                                                                            </div>
                                                                            <div class="col-sm-3 ">
                                                                                <input name="trip_difficulty"
                                                                                       type="radio"
                                                                                       id="radio_hard"
                                                                                       class="with-gap radio-col-cyan"
                                                                                       checked="">
                                                                                <label for="radio_hard">Hard</label>
                                                                            </div>
                                                                            <div class="col-sm-3 m-l--20">
                                                                                <input name="trip_difficulty"
                                                                                       type="radio"
                                                                                       id="radio_challenging"
                                                                                       class="with-gap radio-col-red">
                                                                                <label for="radio_challenging">Challenging</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <b>allowed Person</b>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox"
                                                                                       id="md_checkbox_male"
                                                                                       class="filled-in chk-col-green"/>
                                                                                <label for="md_checkbox_male">Male</label>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox"
                                                                                       id="md_checkbox_female"
                                                                                       class="filled-in chk-col-green"/>
                                                                                <label for="md_checkbox_female">Female</label>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox"
                                                                                       id="md_checkbox_child"
                                                                                       class="filled-in chk-col-green"/>
                                                                                <label for="md_checkbox_child">Children</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                            <textarea rows="4" name="trip_description"
                                                                                      class="form-control no-resize" minlength="20" maxlength="300"
                                                                                      placeholder="Please type trip Description..."
                                                                                      required></textarea>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </section>

                                                        <h2>Location & places</h2>
                                                        <section>
                                                            <div class="row" id="from_trip_row">
                                                                <div class="col-sm-12">
                                                                    <label class="form-label">Trip From </label>
                                                                    <hr style="border-top: 1px solid #795548"/>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <select id="country_from"
                                                                            class="form-control show-tick"
                                                                            data-live-search="true"
                                                                            onchange="getregion('region_from',this.id)">
                                                                        <option> -- Select Country --</option>
                                                                        <?php foreach ($country as $row) { ?>
                                                                            <option <?php if ($row['name'] != 'Pakistan') {
                                                                                'disabled';
                                                                            } else {
                                                                                echo 'selected';
                                                                            } ?> value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                                                        <?php } ?>

                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <select id="region_from"
                                                                            class="form-control show-tick"
                                                                            data-live-search="true" on
                                                                            onchange="getcities('city_from',this.id)">
                                                                        <option> -- Select Region --</option>


                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <select id="city_from" name="city_from[]"
                                                                            class="form-control show-tick"
                                                                            data-live-search="true">
                                                                        <option> -- Select City/Place --</option>


                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-line">
                                                                        <input type="number" class="form-control"
                                                                               name="trip_cost"
                                                                               required/>
                                                                        <label class="form-label">Cost/Per
                                                                            Person</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4 float-lg-right">
                                                                    <a onclick="add_from_trip()" type="button"
                                                                       class="btn bg-red btn-block btn-lg waves-effect">Add
                                                                        More</a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="form-label">Trip To </label>
                                                                    <hr style="border-top: 1px solid #795548"/>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <select id="country_to" name="country_to"
                                                                            class="form-control show-tick"
                                                                            data-live-search="true"
                                                                            onchange="getregion('region_to',this.id)">
                                                                        <option> -- Select Country --</option>
                                                                        <?php foreach ($country as $row) { ?>
                                                                            <option <?php if ($row['name'] != 'Pakistan') {
                                                                                'disabled';
                                                                            } else {
                                                                                echo 'selected';
                                                                            } ?> value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                                                        <?php } ?>

                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <select id="region_to" name="region_to"
                                                                            class="form-control show-tick"
                                                                            data-live-search="true" on
                                                                            onchange="getcities('city_to',this.id)">
                                                                        <option> -- Select Region --</option>


                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <select id="city_to" name="city_to"
                                                                            class="form-control show-tick"
                                                                            data-live-search="true">
                                                                        <option> -- Select City/Place --</option>


                                                                    </select>
                                                                </div>
                                                            </div>


                                                        </section>

                                                        <h2>Day plans & timingies </h2>
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group ">
                                                                        <label class="form-label">Please choose Trip
                                                                            Start date & time...</label>
                                                                        <div class="form-line">
                                                                            <input type="text" id="trip-date-start"
                                                                                   name="trip_starttime"
                                                                                   class="datetimepicker form-control "
                                                                                   data-date-format="DD/MM/YYYY HH:mm">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group ">
                                                                        <label class="form-label">Please choose Trip End
                                                                            date & time...</label>
                                                                        <div class="form-line">
                                                                            <input type="text" id="trip-date-end"
                                                                                   name="trip_endtime"
                                                                                   class="datetimepicker form-control"
                                                                                   data-date-format="DD/MM/YYYY HH:mm">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row>">
                                                                <div class="col-sm-12"><b>Trip Detail plan</b></div>
                                                            </div>
                                                            <div class="row" id="plan_trip">
                                                                <div class="col-sm-8">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control"
                                                                                   name="minmaxvalue" min="10" max="200"
                                                                                   required>
                                                                            <label class="form-label">Plan
                                                                                Descrption</label>
                                                                        </div>
                                                                        <div class="help-info">Min. Value: 10, Max.
                                                                            Value: 200
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group ">
                                                                        <div class="form-line">
                                                                            <input type="text" name="trip_starttime"
                                                                                   class="datetimepicker form-control"
                                                                                   placeholder="Date & time...">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4 float-lg-right">
                                                                    <a onclick="addmore_datetime()" type="button"
                                                                       class="btn bg-red btn-block btn-lg waves-effect">Add
                                                                        More</a>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <h2>Photo & Gallery</h2>
                                                        <section>
                                                            <div class="dz-message  dropzone dz-clickable"
                                                                 style="text-align: center;">
                                                                <div class="drag-icon-cph">
                                                                    <i class="material-icons">touch_app</i>
                                                                </div>
                                                                <h3>Drop files here or click to upload.</h3>
                                                            </div>
                                                            <div class="fallback">
                                                                <input name="file" type="file" multiple
                                                                       accept=".png, .jpg, .jpeg"
                                                                       data-max-size="32154"/>
                                                            </div>
                                                        </section>
                                                        <h2>Permotion & Discounts</h2>
                                                        <section>
                                                            <p>

                                                            </p>
                                                        </section>

                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- #END# Basic Example | Horizontal Layout -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="viewtrip_with_icon_title">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- #END# Tabs With Icon Title -->

    </div>
</section>
<style>
    .wizard.vertical > .steps {
        width: 23% !important;
    }

    .wizard.vertical > .content {
        width: 77% !important;
    }

    .card .body {
        padding: 5px !important;
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {

        $('#trip-date-end').bootstrapMaterialDatePicker({weekStart: 0});
        $('#trip-date-start').bootstrapMaterialDatePicker({weekStart: 0}).on('change', function (e, date) {
            $('#trip-date-end').bootstrapMaterialDatePicker('setMinDate', date);
        });

        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY HH:mm',
            clearButton: true,
            weekStart: 1,
            time: true
        });
    });

    function getregion(whr, val) {

        var Country_id = document.getElementById(val).value;

        $.ajax({
            type: "POST",
            data: {CountryId: Country_id},
            url: "<?php echo base_url();?>Agent/GetRegionbyCountry",
            success: function (data) {
                $("#" + whr).html(data);
                $("#" + whr).selectpicker('refresh');
            },
            error: function () {
                alert('Some Error Occured, Please Try Again');
            }
        });
    }

    function getcities(whr, val) {
        var Region_id = document.getElementById(val).value;
alert(Region_id);
        $.ajax({
            type: "POST",
            data: {RegionId: Region_id},
            url: "<?php echo base_url();?>Agent/GetCitybyRegion",
            success: function (data) {
                $("#" + whr).html(data);
                $("#" + whr).selectpicker('refresh');
            },
            error: function () {
                alert('Some Error Occured, Please Try Again');
            }
        });
    }

    function addmore_datetime() {
        $("#plan_trip").append(' <div class="row" id="plan_trip"><div class="col-sm-8"><div class="form-group form-float"><div class="form-line"><input type="text" class="form-control" name="minmaxvalue" min="10" max="200" placeholder="Plan Description" required><label class="form-label"></label></div><div class="help-info">Min. Value: 10, Max. Value: 200</div></div></div><div class="col-sm-4"><div class="form-group form-float"><div class="form-line"><input type="text"  name="trip_plan_time"  class="datetimepicker form-control " placeholder="Date & time..." ></div></div></div></div>');
        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'dd DD MMM YYYY - HH:mm',
            clearButton: true,
            weekStart: 1,
            time: true
        });
    }


</script>
<?php check_flash_messages();
$this->load->view("agent/admin_includes/footer"); ?>
