<?php $this->load->view("FrontWeb/includes/head"); ?>

    <body id="register_bg">
<nav id="menu" class="fake_menu"></nav>

<!--<div id="preloader">-->
<!--    <div data-loader="circle-side"></div>-->
<!--</div>-->
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="index.html"><img src="<?= base_url(); ?>assets/img/logo_sticky.png" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
        </figure>
        <form autocomplete="off" action="<?= base_url();?>AgentSignUp/AddAgentRegister" method="post">
            <div class="form-group">
                <label>Account Type</label><br>
<?php foreach($Agenttype as $data) {?>
                <input type="radio" id="test<?= $data['ATypeId']; ?>" name="AgentType" value="<?= $data['ATypeId']; ?>" checked>
                <label for="test<?= $data['ATypeId']; ?>"><?= $data['ATTitle']; ?></label>
    <?php } ?>

            </div>
            <div class="form-group">
                <label>Your Name</label>
                <input class="form-control" name="Fname" type="text" required>
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>Your Last Name</label>
                <input class="form-control" name="Lname" type="text" required>
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>Your Mobile/Contact</label>
                <input class="form-control" name="Mobile"  data-inputmask="'mask': '0399-99999999'"  type = "text" maxlength = "12"  required>
                <i class="ti-mobile"></i>
            </div>
            <div class="form-group">
                <label>Your CNIC</label>
                <input class="form-control" name="Cnic" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X" type="text" required>
                <i class="ti-id-badge"></i>
            </div>
            <div class="form-group">
                <label>Your Address</label>
                <input class="form-control" name="Address" type="text" required>
                <i class="ti-location-pin"></i>
            </div>
            <div class="form-group">
                <label>Your Email</label>
                <input class="form-control" name="Email" type="email" required>
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Your password</label>
                <input class="form-control" type="password" id="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input class="form-control" name="Password" type="password" id="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <i class="icon_lock_alt"></i>
            </div>
            <div id="pass-info" class="clearfix"></div>
            <input type="submit" class="btn_1 rounded full-width add_top_30" name="Register Now!" >
            <div class="text-center add_top_10">Already have an acccount? <strong><a href="<?= base_url(); ?>AgentSignUp/Login">Sign In</a></strong></div>
        </form>
        <div class="copy"></div>
    </aside>
</div>
<!-- /login -->
<style>
    #register_bg {
        background: url(<?= base_url(); ?>assets/img/hero_in_bg_2.jpg) center center no-repeat fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    [type="radio"]:checked,
    [type="radio"]:not(:checked) {
        position: absolute;
        left: -9999px;
    }
    [type="radio"]:checked + label,
    [type="radio"]:not(:checked) + label
    {
        position: relative;
        padding-left: 28px;
        cursor: pointer;
        line-height: 20px;
        display: inline-block;
        color: #666;
    }
    [type="radio"]:checked + label:before,
    [type="radio"]:not(:checked) + label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 21px;
        height: 20px;
        border: 1px solid #ddd;
        border-radius: 100%;
        background: #fff;
    }
    [type="radio"]:checked + label:after,
    [type="radio"]:not(:checked) + label:after {
        content: '';
        width: 12px;
        height: 12px;
        background: #F87DA9;
        position: absolute;
        top: 4px;
        left: 4px;
        border-radius: 100%;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
    [type="radio"]:not(:checked) + label:after {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    [type="radio"]:checked + label:after {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="<?= base_url();?>assets/js/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();

</script>
<?php check_flash_messages();
$this->load->view("FrontWeb/includes/footer"); ?>