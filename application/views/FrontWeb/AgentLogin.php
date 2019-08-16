<?php $this->load->view("FrontWeb/includes/head"); ?>


<body id="login_bg">

<nav id="menu" class="fake_menu"></nav>

<!--<div id="preloader">-->
<!--    <div data-loader="circle-side"></div>-->
<!--</div>-->
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="index.html"><img src="img/logo_sticky.png" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
        </figure>
        <form action="<?=base_url();?>AgentSignUp/Authenticate_Agent" method="post">
            <div class="access_social">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
            </div>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_30">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <input type="submit" class="btn_1 rounded full-width" name="Login " >
            <div class="text-center add_top_10">New to Panagea? <strong><a href="<?=base_url();?>AgentSignUp/AgentRegister">Sign up!</a></strong></div>
        </form>
        <div class="copy">© 2019 </div>
    </aside>
</div>
<?=check_flash_messages(); ?>
<?php  $this->load->view("FrontWeb/includes/footer"); ?>