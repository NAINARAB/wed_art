<?php
require_once '../datab.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$res = [];
$count = 0;

$lead = mysqli_real_escape_string($conn, $_POST['lead']);
$lead_id = mysqli_real_escape_string($conn, $_POST['lead_id']);

if ($lead == 'baby') {
    $sql = "SELECT 
                l.lead_no, 
                l.name, 
                 CONCAT(
                    DATE_FORMAT(l.event_dateTime, '%d-%m-%Y '),
                    DATE_FORMAT(l.event_dateTime, '%H:%i:%s')
                ) AS event_datetime,
                l.service, 
                l.main_service, 
                l.lead_status, 
                l.other_info, 
                f.id,  
                DATE_FORMAT(f.follow_up_date, '%d-%m-%Y') AS follow_up_date, 
                f.approach, 
                f.response,
                sd.service_name 
            FROM lead_form_baby AS l 
            JOIN follow_up AS f
            ON l.id = f.lead_id
            JOIN service_data AS sd
            ON l.main_service = sd.id
            WHERE f.category = '$lead' AND l.id = '$lead_id'";
        
    if ($result = mysqli_query($conn, $sql)) {
        $res['data'] = []; 
        while ($data = mysqli_fetch_assoc($result)) { 
            $count++;
            $res['data'][] = $data;
        }
        $res['status'] = 'Success';
        $res['remarks'] = 'Follow Data Listed Successfully';
    } else {
        $res['data'] = []; 
        $res['status'] = 'Failed';
        $res['remarks'] = 'Failed to List Follow Data';
    }

    $res['lead_data'] = []; 

    $sql2 = "SELECT 
                l.lead_no, 
                l.lead_status,
                l.name, 
                l.estimated_amount,
                l.age,
                l.sex,
                CONCAT(
                    DATE_FORMAT(l.event_dateTime, '%d-%m-%Y '),
                    DATE_FORMAT(l.event_dateTime, '%H:%i:%s')
                ) AS event_datetime,
                l.phone,
                l.service,
                sd.service_name,
                sd.service_cost,
                l.other_info,
                l.follow_up_category
            FROM lead_form_baby AS l 
            JOIN service_data AS sd
            ON l.main_service = sd.id
            WHERE l.id = '$lead_id'";

    if ($result = mysqli_query($conn, $sql2)) {
        while ($lead_data = mysqli_fetch_assoc($result)) {
            $res['lead_data'][] = $lead_data;
        }
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to list lead data';
    }
} else if ($lead == 'wedding') {
    $sql = "SELECT 
                l.lead_no, 
                l.name, 
                DATE_FORMAT(l.event_date, '%d-%m-%Y') AS event_date, 
                l.service, 
                l.main_service, 
                l.lead_status, 
                l.other_info, 
                f.id, 
                DATE_FORMAT(f.follow_up_date, '%d-%m-%Y') follow_up_date, 
                f.follow_up_details, 
                f.approach, 
                f.response,
                sd.service_name     
            FROM lead_form_wd AS l 
            JOIN follow_up AS f
            ON l.id = f.lead_id
            JOIN service_data AS sd
            ON l.main_service = sd.id
            WHERE f.category = '$lead' AND l.id = '$lead_id'";
    
    if ($result = mysqli_query($conn, $sql)) {
        $res['data'] = []; // Initialize as an empty array
        while ($data = mysqli_fetch_assoc($result)) { 
            $count++;
            $res['data'][] = $data;
        }
        $res['status']    = 'Success';
        $res['remarks']   = 'Follow Up Data Listed Successfully';
    } else {
        $res['data'] = []; // Set to an empty array on query failure
        $res['status'] = 'Failed';
        $res['remarks'] = 'Failed to List Follow Up Data';
    }

    $res['lead_data'] = []; // Initialize as an empty array for the "wedding" case

    $sql2 = "SELECT 
                l.lead_no, 
                l.lead_status,
                l.name, 
                l.estimated_amount,
                l.event,
                DATE_FORMAT(l.event_date, '%d-%m-%Y') AS event_date, 
                l.mandapam,
                l.phone,
                l.service, 
                sd.service_name,
                sd.service_cost,
                l.other_info,
                l.follow_up_category
            FROM lead_form_wd AS l 
            JOIN service_data AS sd
            ON l.main_service = sd.id
            WHERE l.id = '$lead_id' ";

    if ($result = mysqli_query($conn, $sql2)) {
        while ($lead_data = mysqli_fetch_assoc($result)) {
            $res['lead_data'][] = $lead_data;
        }
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to list lead data';
    }
} else {
    $res['status'] = 'Error';
    $res['remarks'] = 'Error in backend';
}

$res['count'] = $count;

echo json_encode($res);
?>