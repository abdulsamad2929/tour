<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


//to print data in pretty view
if (!function_exists('debug')) {

    function debug($data, $message = '')
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        // die($message);
    }
}

if (!function_exists('parse_date_range')) {

    function parse_date_range($date_range)
    {

        $date = explode('-', $date_range);
        $start = date('d-M-Y', strtotime(trim($date[0])));
        $end = date('d-M-Y', strtotime(trim($date[1])));

        return array('start_date' => $start, 'end_date' => $end);

    }
}
/**
 * login Check Function
 */
if (!function_exists('isLogin')) {
    function isLogin()
    {
        $ci = &get_instance();  //get instance, access the CI superobject
        $login_id = $ci->session->userdata('login_id');
        $User_id = $ci->session->userdata('User_id');
        if ($login_id != '' && $User_id != '') {
            return TRUE;
        }
        $ci->session->set_flashdata('2');
        redirect('AgentSignUp/Login');
    }
}


/**
 * If flash session is set then this code will show message
 * call this function into your view
 * and set flash message in your controller
 */
if (!function_exists('check_flash_messages')) {

    function check_flash_messages()
    {

        $CI =& get_instance();
        if ($CI->session->flashdata('success_flash')) {
            ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'success',
                    title: 'Success...',
                    text: "<?=$CI->session->flashdata('success_flash'); ?>",
                    showConfirmButton: true,
                    timer: 3500
                })  </script>


            <?php
        }
        if ($CI->session->flashdata('info_flash')) {
            ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'info',
                    title: 'Information !',
                    text: "<?=$CI->session->flashdata('info_flash'); ?>",
                    showConfirmButton: true,
                    timer: 3500
                })  </script>

            <?php
        }
        if ($CI->session->flashdata('warning_flash')) {
            ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'warning',
                    title: 'Warning...',
                    text: "<?=$CI->session->flashdata('warning_flash'); ?>",
                    showConfirmButton: true,
                    timer: 3500
                })  </script>

            <?php
        }
        if ($CI->session->flashdata('error_flash')) {
            ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: "<?=$CI->session->flashdata('error_flash'); ?>",
                    showConfirmButton: true,
                    timer: 3500
                })  </script>
            <?php
        }


    }
}
