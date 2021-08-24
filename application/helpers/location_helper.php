<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* ===== Documentation ===== 
Name: location_helper
Role: Helper
Description: custom location helper
Author: Quest2Reality Ltd.
Date Created: 8th April, 2019
Date Modified: 8th April, 2019
*/




function currency_codes() {
    $currencies = array (
        'Albania Lek' => '76',
        'Afghanistan Afghani' => '1547',
        'Argentina Peso' => '36',
        'Aruba Guilder' => '402',
        'Australia Dollar' => '36',
        'Azerbaijan New Manat' => '1084',
        'Bahamas Dollar' => '36',
        'Barbados Dollar' => '36',
        'Belarus Ruble' => '66',
        'Belize Dollar' =>  '66',
        'Bermuda Dollar' => '36',
        'Bolivia Bolíviano' => '36',
        'Bosnia & Herzegovina Convertible Marka' => '75',
        'Botswana Pula' => '80',
        'Bulgaria Lev' => '1083',
        'Brazil Real' => '82',
        'Brunei Darussalam Dollar' => '36',
        'Cambodia Riel' =>  '6107',
        'Canada Dollar' =>  '36',
        'Cayman Islands Dollar' =>  '36',
        'Chile Peso'    =>  '36',
        'China Yuan Renminbi'   =>  '165',
        'Colombia Peso' =>  '36',
        'Costa Rica Colon'  =>  '8353',
        'Croatia Kuna'  =>  '107',
        'Cuba Peso' =>  '8369',
        'Czech Republic Koruna' =>  '75',
        'Denmark Krone' =>  '107',
        'Dominican Republic Peso'   =>  '82',
        'East Caribbean Dollar' =>  '36',
        'Egypt Pound'   =>  '163',
        'El Salvador Colon' =>  '36',
        'Euro Member Countries' =>  '8364',
        'Falkland Islands (Malvinas) Pound' =>  '163',
        'Fiji Dollar'   =>  '36',
        'Ghana Cedi'    =>  '162',
        'Gibraltar Pound'   =>  '163',
        'Guatemala Quetzal' =>  '81',
        'Guernsey Pound'    =>  '163',
        'Guyana Dollar' =>  '36',
        'Honduras Lempira'  =>  '76',
        'Hong Kong Dollar'  =>  '36',
        'Hungary Forint'    =>  '70',
        'Iceland Krona' =>  '107',
        'India Rupee'   =>  '8377',
        'Indonesia Rupiah'  =>  '82',
        'Iran Rial' =>  '65020',
        'Isle of Man Pound' =>  '163',
        'Israel Shekel' =>  '8362',
        'Jamaica Dollar'    =>  '74',
        'Japan Yen' =>  '165',
        'Jersey Pound'  =>  '163',
        'Kazakhstan Tenge'  =>  '1083',
        'Korea (North) Won' =>  '8361',
        'Korea (South) Won' =>  '8361',
        'Kyrgyzstan Som'    =>  '1083',
        'Laos Kip'  =>  '8365',
        'Lebanon Pound' =>  '163',
        'Liberia Dollar'    =>  '36',
        'Macedonia Denar'   =>  '1076',
        'Malaysia Ringgit'  =>  '82',
        'Mauritius Rupee'   =>  '8360',
        'Mexico Peso'   =>  '36',
        'Mongolia Tughrik'  =>  '8366',
        'Mozambique Metical'    =>  '77',
        'Namibia Dollar'    =>  '36',
        'Nepal Rupee'   =>  '8360',
        'Netherlands Antilles Guilder'  =>  '402',
        'New Zealand Dollar'    =>  '36',
        'Nicaragua Cordoba' =>  '67',
        'Nigeria Naira' =>  '8358',
        'Korea (North) Won' =>  '8361',
        'Norway Krone'  =>  '107',
        'Oman Rial' =>  '65020',
        'Pakistan Rupee'    =>  '8360',
        'Panama Balboa' =>  '66',
        'Paraguay Guarani'  =>  '71',
        'Peru Sol'  =>  '83',
        'Philippines Peso'  =>  '8369',
        'Poland Zloty'  =>  '122',
        'Qatar Riyal'   =>  '65020',
        'Romania New Leu'   =>  '108',
        'Russia Ruble'  =>  '1088',
        'Saint Helena Pound'    =>  '163',
        'Saudi Arabia Riyal'    =>  '65020',
        'Serbia Dinar'  =>  '1044',
        'Seychelles Rupee'  =>  '8360',
        'Singapore Dollar'  =>  '36',
        'Solomon Islands Dollar'    =>  '36',
        'Somalia Shilling'  =>  '83',
        'South Africa Rand' =>  '82',
        'Korea (South) Won' =>  '8361',
        'Sri Lanka Rupee'   =>  '8360',
        'Sweden Krona'  =>  '107',
        'Switzerland Franc' =>  '67',
        'Suriname Dollar'   =>  '36',
        'Syria Pound'   =>  '163',
        'Taiwan New Dollar' =>  '78',
        'Thailand Baht' =>  '3647',
        'Trinidad and Tobago Dollar'    =>  '84',
        'Turkey Lira'   =>  '8378',
        'Tuvalu Dollar' =>  '36',
        'Ukraine Hryvnia'   =>  '8372',
        'United Kingdom Pound'  =>  '163',
        'United States Dollar'  =>  '36',
        'Uruguay Peso'  =>  '36',
        'Uzbekistan Som'    =>  '1083',
        'Venezuela Bolivar' =>  '66',
        'Viet Nam Dong' =>  '8363',
        'Yemen Rial'    =>  '65020',
        'Zimbabwe Dollar'   =>  '90',
    );
    return $currencies;
}


function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => $ipdat->geoplugin_city,
                        "state"          => $ipdat->geoplugin_regionName,
                        "country"        => $ipdat->geoplugin_countryName,
                        "country_code"   => $ipdat->geoplugin_countryCode,
                        "continent"      => $continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => $ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = $ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = $ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = $ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = $ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = $ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}


function ip_info_safe($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}


