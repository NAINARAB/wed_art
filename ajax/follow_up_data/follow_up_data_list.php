<?php
    require_once '../datab.php';
    $res = [];
    $count = 0; 

    $lead = mysqli_real_escape_string($conn, $_POST['lead']);
    $lead_id = mysqli_real_escape_string($conn, $_POST['lead_id']);

    if ($lead == 'baby') 
    {
        $sql = "SELECT l.lead_no, l.name, DATE_FORMAT(L.event_dateTime, '%d-%m-%Y') event_dateTime, l.service, l.main_service, l.lead_status, l.other_info, f.id,  DATE_FORMAT(f.follow_up_date, '%d-%m-%Y') AS follow_up_date, f.approach, f.response, 
                sd.service_name
            FROM lead_form_baby AS l 
            JOIN follow_up AS f
            ON l.id = f.lead_id
            JOIN service_data AS sd
            ON l.main_service = sd.id
            WHERE f.category = '$lead' AND f.lead_id = '$lead_id'";
            
        if ($result = mysqli_query($conn, $sql)) 
        {
            while ($data = mysqli_fetch_assoc($result)) 
            { 
                $count++;
                $res['data'][] = $data;
            }
            $res['status'] = 'Success';
            $res['remarks'] = 'Follow Data Listed Successfully';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Failed to List Follow Data';
        }
    } 
    else if ($lead == 'wedding') 
    {
        $sql = "SELECT l.lead_no, l.name, DATE_FORMAT(l.event_date, '%d-%m-%Y') AS event_date, l.service, l.lead_status, l.other_info, f.id, DATE_FORMAT(f.follow_up_date, '%d-%m-%Y') follow_up_date, f.follow_up_details, f.approach, f.response, 
                        sd.service_name
            FROM lead_form_wd AS l 
            JOIN follow_up AS f
            ON l.id = f.lead_id
            JOIN service_data AS sd
            ON l.main_service = sd.id
            WHERE f.category = '$lead' AND f.lead_id = '$lead_id'";
            
        if ($result = mysqli_query($conn, $sql)) {
            while ($data = mysqli_fetch_assoc($result)) 
            { 
                $count++;
                $res['data'][] = $data;
            }
            $res['status'] = 'Success';
            $res['remarks'] = 'Follow Up Data Listed Successfully';
        } 
        else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Failed to List Follow Up Data';
        }
    } 
    else 
    {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error in backend';
    }
    
    $res['count'] = $count;

    echo json_encode($res);
?>