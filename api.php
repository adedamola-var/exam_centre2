<?php
    require_once('includes/functions.php');

    $action = $_REQUEST['action'];

    if (isset($action) && $action != '') {
        $response = array(
            'status' => '', // success or failed
            'data' => '',
            'message' => ''
        );

        switch ($action) {
            case 'signup':
                if ($_POST['firstname'] == '' || $_POST['lastname'] == '' || $_POST['email'] == '' ||$_POST['phone'] == '' || $_POST['password1'] == '') {
                    $response['status'] = 'failed';
                    $response['message'] = 'Empty form field'; 
                } else {
                $signup_data = array(
                    'code' => 'sicl',
                    'call' => 'register_applicant',
                    'meta[email]' => $_POST['email'],
                    'meta[phone]' => $_POST['phone'],
                    'meta[password1]' => $_POST['password1'],
                    'meta[lastname]' => $_POST['lastname'],
                    'meta[firstname]' => $_POST['firstname']
                );

                $api_res = makeApiCall($signup_data);
                $response = json_encode($api_res);
            }
            break; 

            case 'signin':
                if ($_POST['email'] == '' || $_POST['password'] == '') {
                    $response['status'] = 'failed';
                    $response['message'] = 'Empty form field'; 
                } else {
                $signin_data = array(
                    'code' => 'sicl',
                    'call' => 'authenticate_applicant',
                    'meta[email]' => $_POST['email'],   
                    'meta[password]' => $_POST['password'],
                );

                $api_res = makeApiCall($signin_data);
                $response = json_encode($api_res);
            }
            break; 

            case 'exam_form':
                if ($_POST['student_lname'] == '' || $_POST['student_fname'] == '' || $_POST['student_sex'] == '' || $_POST['student_dob'] == ''|| $_POST['nationality'] == ''|| $_POST['states'] == ''|| $_POST['student_local'] == '' || $_POST['present_school'] == '' || $_POST['student_address'] == '' || $_POST['student_email'] == '' || $_POST['student_phone'] == '' || $_POST['recent_class'] == '' || $_POST['title1'] == '' || $_POST['title2'] == '' || $_POST['surname1'] == '' || $_POST['surname2'] == '' || $_POST['fname1'] == '' || $_POST['fname2'] == '' ||$_POST['email1'] == '' ||$_POST['email2'] == '' ||$_POST['mobile_phone1'] == '' ||$_POST['mobile_phone2'] == ''  ) {
                    $response['status'] = 'failed';
                    $response['message'] = 'Empty form field'; 
                } else {
                $exam_form_data = array(
                    'code' => 'sicl',
                    'call' => 'register_applicant',
                    'meta[student_lname]' => $_POST['student_lname'],
                    'meta[student_fname]' => $_POST['student_fname'],
                    'meta[student_oname]' => $_POST['student_oname'],
                    'meta[disability]' => $_POST['disability'],
                    'meta[student_sex]' => $_POST['student_sex'],
                    'meta[student_dob]' => $_POST['student_dob'],
                    'meta[nationality]' => $_POST['nationality'],
                    'meta[states]' => $_POST['states'],
                    'meta[student_religion]' => $_POST['student_religion'],
                    'meta[student_local]' => $_POST['student_local'],
                    'meta[student_htown]' => $_POST['student_htown'],
                    'meta[student_pob]' => $_POST['student_pob'],
                    'meta[present_school]' => $_POST['present_school'],
                    'meta[student_address]' => $_POST['student_address'],
                    'meta[student_email]' => $_POST['student_email'],
                    'meta[student_phone]' => $_POST['student_phone'],
                    'meta[recent_class]' => $_POST['recent_class'],
                    'meta[title1]' => $_POST['title1'],
                    'meta[surname1]' => $_POST['surname1'],
                    'meta[fname1]' => $_POST['fname1'],
                    'meta[email1]' => $_POST['email1'],
                    'meta[mobile_phone1]' => $_POST['mobile_phone1'],
                    'meta[home_mail1]' => $_POST['home_mail1'],
                    'meta[bussiness_address1]' => $_POST['bussiness_address1'],
                    'meta[occupation1]' => $_POST['occupation1'],
                    'meta[employer1]' => $_POST['employer1'],
                    'meta[birth1]' => $_POST['birth1'],
                    'meta[home_phone1]' => $_POST['home_phone1'],
                    'meta[title2]' => $_POST['title2'],
                    'meta[surname2]' => $_POST['surname2'],
                    'meta[fname2]' => $_POST['fname2'],
                    'meta[email2]' => $_POST['email2'],
                    'meta[mobile_phone2]' => $_POST['mobile_phone2'],
                    'meta[home_mail2]' => $_POST['home_mail2'],
                    'meta[bussiness_address2]' => $_POST['bussiness_address2'],
                    'meta[occupation2]' => $_POST['occupation2'],
                    'meta[employer2]' => $_POST['employer2'],
                    'meta[home_phone2]' => $_POST['home_phone2']
                );

                $api_res = makeApiCall($exam_form_data);
                $response = json_encode($api_res);
            }
            break; 

        }
        echo json_encode($response);
    }
?>