<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function checkAdminAuth()
{
    $CI =& get_instance();
    if (!$CI->session->userdata(USER_ID)) {
        redirect('member', 'refresh');
    }
}

function checkLoggedIn()
{
    $CI =& get_instance();
    if ($CI->session->userdata(USER_ID)) {
        redirect('home', 'refresh');
    }

}


function currentDateTimeStamp()
{
    $site_info = getSiteInfo();
    $gm_hour = $site_info->gmt_hour;
    $gm_minute = $site_info->gmt_minute;
    $year = gmdate("Y");
    $month = gmdate("m");
    $day = gmdate("d");
    $hour = gmdate("H") + $gm_hour;
    $min = gmdate("i") + $gm_minute;
    $sec = gmdate("s");
    $today = mktime($hour, $min, $sec, $month, $day, $year);
    return $today;
}

function getShippingPrice($weight, $newshippingId)
{
    $price = 0;
    $CI =& get_instance();
    $sql = "SELECT shipping_price FROM tbl_weights WHERE $weight>=min_weight AND $weight<=max_weight and shipping_type=$newshippingId LIMIT 1";
    $query = $CI->db->query($sql);
    if ($query->num_rows() > 0) {
        $result = $query->row();
        $price = $result->shipping_price;
    }

    return $price;
}

function getCountryList()
{
    $CI =& get_instance();
    $CI->db->order_by("countries_name", "ASC");
    $query = $CI->db->get("tbl_countries");

    if ($query->num_rows() > 0)
        return $query->result();

    return 0;
}

function shippaddById($shippaddId)
{
    $CI =& get_instance();
    $CI->db->where("shipping_id", $shippaddId);
    $query = $CI->db->get("tbl_shippingaddress");
    if ($query->num_rows() > 0)
        return $query->row();
    return 0;
}

function getCountryByCode($code)
{
    $CI =& get_instance();
    $CI->db->where("countries_iso_code_2", $code);
    $query = $CI->db->get("tbl_countries");
    if ($query->num_rows() > 0) {
        $data = $query->row();
        return $data->countries_name;
    }
    return;
}

function getDBDate()
{
    $CI =& get_instance();
    $query = $CI->db->query('SELECT now() as mtime');
    if ($query->num_rows() > 0) {
        $data = $query->row();
        $row = explode(" ", $data->mtime);
        return $row[0];
    }
    return;
}

function getMaxId($table, $field)
{
    $CI =& get_instance();
    $CI->db->select_max($field, 'norder');
    $query = $CI->db->get($table);
    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->norder;
    }
    return 0;
}

function checkUserType()
{
    $CI =& get_instance();
    if ($CI->session->userdata(ADMIN_AUTH_TYPE) == 'client') {
        return 1;
    } elseif ($CI->session->userdata(ADMIN_AUTH_TYPE) == 'affiliate' || $CI->session->userdata(ADMIN_AUTH_TYPE) == 'referrer') {
        return 2;
    } elseif ($CI->session->userdata(ADMIN_AUTH_TYPE) == 'line') {
        return 4;
    } else {
        return 3;
    }
}	