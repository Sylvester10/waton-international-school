<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* ===== Documentation ===== 
Name: Constants::General
Role: Include
Description: Holds all the constants used by the app. Required in the construct of the core controller, MY_Controller, which makes it global to the entire application.
Author: Sylvester Esso Nmakwe
Date Created: 29th January, 2020
*/


$school_name = 'Waton International School';
$school_initials = 'WIS';
$school_phone_number = ' +234(0)8035132453';
$school_phone_number2 = ' +234(0)9021175178';
$school_address = '8 King Jesus Street Off, Peace Drive, Ozuboko, Port Harcourt, Rivers State, Nigeria';
$school_contact_email = 'watoninternationalschool@gmail.com';
$sub_tagline = 'Raising outstanding leaders';
$school_keywords = 'Waton International School, Waton International, Waton School, wis, Schools in Nigeria, schools in ph, schools in portharcourt, schools in Africa, IT schools in Portharcourt, IT compliant schools in Nigeria';
$school_description = "";


//Software Info
define('school_name', $school_name);
define('school_initials', $school_initials);
define('school_phone_number', $school_phone_number);
define('school_phone_number2', $school_phone_number2);
define('school_address', $school_address);
define('school_contact_email', $school_contact_email);
define('school_keywords', $school_keywords);
define('sub_tagline', $sub_tagline);
define('school_description', $school_description);
define('school_website', base_url());
define('school_logo', base_url('assets/img/logo2.svg'));
define('school_logo2', base_url('assets/img/logo3.png'));
define('school_favicon', base_url('assets/favicon.ico'));


//vendor
define('software_vendor_site', 'https://slydesigns.com');
define('software_vendor', 'S.E.N');


//MySQL-PHP server time difference. Change to zero if both are on same server
define('mysql_time_difference', 0); //if negative, write as -x, else, x


//Email config
define('school_web_mail', school_contact_email); 


//defaults
define('default_admin_password', 'wisadmin255');


//Others
define('pdf_icon', base_url('assets/images/icons/pdf_icon.png'));
define('user_avatar', base_url('assets/user.png'));