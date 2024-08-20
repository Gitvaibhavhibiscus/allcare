<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function enquiry_form(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname", "<strong>First Name</strong>", "required");
        $this->form_validation->set_rules("lname", "<strong>Last Name</strong>", "required");
        $this->form_validation->set_rules("email", "<strong>Email Address</strong>", "required|valid_email");
        $this->form_validation->set_rules("mobile", "<strong>Mobile Number</strong>", "required");
        $this->form_validation->set_rules("message", "<strong>Message</strong>", "required");
        if(!$this->recaptcha($this->input->post('g-recaptcha-response'))){
            $response['status'] = 0;
            $response['message'] = '<p class="text-danger">Captcha Validation Failed.</p>';
            echo json_encode($response);
            return;
        }
        
        if($this->form_validation->run() === FALSE){
            $response["status"]  = 0;
            $response["message"] = validation_errors('<p class="text-danger">','</p>');
            echo json_encode($response);
            return;
        }

        $post_data = $this->input->post(["fname", "lname","mobile","email","message","consent","service"], TRUE);
        // $post_data["created_at"] = date('Y-m-d H:i:s');
        // $post_data["_server"] = json_encode($_SERVER);
        // $result = $this->db->insert("form_contact",$post_data);


        $email_message = '
        Hi,<br/>
        Received a new Enquiry request from '.$post_data['fname'].' '.$post_data['lname'].'.<br/><br/>
        <table cellspacing="0" cellpadding="5" border="1">';
        
        // unset($post_data["_server"]);
        // $post_data['created_at'] = date('d-M-Y H:i', strtotime($post_data['created_at']));

        foreach ($post_data as $key => $value) {
            if($key == 'service'){
                $value = implode(', ', $value);
            }
            $email_message .= '<tr>
                <td style="font-weight:bold;">'.ucwords(str_replace("_"," ",$key)).'</td>
                <td>'.nl2br($value).'</td>
            </tr>';
        }
        $email_message .= '</table>
        ';

        $this->sesmail("info@allcare4u.com","New Contact Request",$email_message);

        $response["status"]  = 1;
        $response["message"] = '<p class="text-success">Thank you for reaching out to us, '.$post_data['name'].' Someone from our team shall get in touch with you soon.</p>';
        echo json_encode($response);

    }
    public function contact_form(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "<strong>Full Name</strong>", "required");
        $this->form_validation->set_rules("email", "<strong>Email Address</strong>", "required|valid_email");
        $this->form_validation->set_rules("phone", "<strong>Phone Number</strong>", "required");
        $this->form_validation->set_rules("message", "<strong>Message</strong>", "required");
        if(!$this->recaptcha($this->input->post('g-recaptcha-response'))){
            $response['status'] = 0;
            $response['message'] = '<p class="text-danger">Captcha Validation Failed.</p>';
            echo json_encode($response);
            return;
        }
        
        if($this->form_validation->run() === FALSE){
            $response["status"]  = 0;
            $response["message"] = validation_errors('<p class="text-danger">','</p>');
            echo json_encode($response);
            return;
        }

        $post_data = $this->input->post(["name","phone","email","message"], TRUE);
        $post_data["created_at"] = date('Y-m-d H:i:s');
        $post_data["_server"] = json_encode($_SERVER);
        $result = $this->db->insert("form_contact",$post_data);


        $email_message = '
        <table cellspacing="0" cellpadding="5" border="1">';
        
        unset($post_data["_server"]);
        $post_data['created_at'] = date('d-M-Y H:i', strtotime($post_data['created_at']));

        foreach ($post_data as $key => $value) {
            
            $email_message .= '<tr>
                <td style="font-weight:bold;">'.ucwords(str_replace("_"," ",$key)).'</td>
                <td>'.nl2br($value).'</td>
            </tr>';
        }
        $email_message .= '</table>
        ';

        $this->sesmail("info@allcare4u.com","General Inquiry Form Request by " . $post_data['name'], $email_message);

        // Create feedback message for user
    $user_email_message = '
    <p>Dear ' . $post_data['name'] . ',</p>
    <p>Thank you for reaching out to us with your query, someone will be in touch with soon.</p>
    <p style="margin-bottom:0px;">For your reference, here is a copy of your message:</p>
    <p style="margin-top:0px;">' . $post_data['message'] . '</p>
    <p style="margin-bottom:0px;">Best,</p>
    <p style="margin-top:0px;">The All Care Team</p>';

    // Send feedback email to user
    $this->sesmail($post_data['email'], "Your Message on our Website, " . $post_data['name'], $user_email_message);


        $response["status"]  = 1;
        $response["message"] = '<p class="text-success">Thank you for reaching out to us, '.$post_data['name'].'. Someone from our team shall get in touch with you soon.</p>';
        echo json_encode($response);

    }

function sesmail($to, $subject, $message) {
    $from = "support@allcare4u.com";
    $headers = "From: All Care WebForms <$from>\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $result = mail($to, $subject, $message, $headers);

    // if ($result) {
    //     echo "Email sent successfully.";
    // } else {
    //     echo "Email sending failed.";
    // }

    return $result;
}



    // function sesmail($to,$subject,$message){
    //     $ch = curl_init();
        
    //     $post = [
    //                             "from" => [
    //                                     "email" => "kamla2491@gmail.com",
    //                                     "name"  => "BluOne India"
    //                             ],
    //                             "to" => $to,
    //                             "cc" => "",
    //                             // "bcc"=> "mohit.handa@bluone.in",
    //                             // "bcc"=> "arun.jain@bluone.in",
    //                             "subject" => $subject,
    //                             "message" => $message
        
    //     ];
        
    //     curl_setopt($ch, CURLOPT_URL,"https://mailer.bluone.in/v1/web/send");
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     //curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
        
    //     // In real life you should use something like:
    //      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    //     //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     // Receive server response ...
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
    //     $server_output = curl_exec($ch);
        
    //     curl_close ($ch);

    //     echo $server_output;
    //     // Further processing ...
    //     $response = json_decode($server_output,TRUE);
    //     return $response['status'] == "success" ? TRUE : FALSE;
        
    // }

    private function recaptcha($gresponse){
        
        $ch = curl_init();
        
        $post = [
            "secret" => RECAPTCHA_SECRET_KEY,
            "response"=> $gresponse,
        ];

        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
        
        // In real life you should use something like:
         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec($ch);
        
        curl_close ($ch);
        //echo $server_output;
        // Further processing ...
        $response = json_decode($server_output,TRUE);
        

        return isset($response['success']) && $response['success'];
        
    }

    public function event_form(){


        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname", "<strong>First Name</strong>", "required");
        $this->form_validation->set_rules("lname", "<strong>Last Name</strong>", "required");
        $this->form_validation->set_rules("mobile", "<strong>Phone Number</strong>", "required");
        $this->form_validation->set_rules("email", "<strong>Email Address</strong>", "required|valid_email");     
        $this->form_validation->set_rules("consent", "<strong>Consent</strong>", "required");        

        if(!$this->recaptcha($this->input->post('g-recaptcha-response'))){
            $response['status'] = 0;
            $response['message'] = '<p class="text-danger">Captcha Validation Failed.</p>';
            echo json_encode($response);
            return;
        }

        if($this->form_validation->run() === FALSE){
            $response["status"]  = 0;
            $response["message"] = validation_errors('<p class="text-danger">','</p>');
            echo json_encode($response);
            return;
        }

        $post_data = $this->input->post(["fname","lname","email","mobile","consent","eventId"], TRUE);
        $data['firstName'] = $post_data['fname'];
        $data['lastName'] = $post_data['lname'];
        $data['email'] = $post_data['email'];
        $data['phone'] = $post_data['mobile'];
        $data['consent'] = ($post_data['consent'] == 'Agreed') ? '1' : '0';
        $data['eventId'] = $post_data['eventId'];
        $data["_server"] = json_encode($_SERVER);
        $data["createdOn"] = date('Y-m-d H:i:s');

        $this->db->select('email', 'eventId');
        $this->db->where('eventId', $data['eventId']);
        $this->db->where('email', $data['email']);
        $query = $this->db->get('event_registration');

        if(!empty($query->result()) && count($query->result()) > 0){
            $response["status"]  = 2;
            $response["message"] = '<p class="text-success">You have already registered for this event!</p>';
            echo json_encode($response);
            die();
        }

        $result = $this->db->insert("event_registration",$data);

        if($result){
            $this->db->where('id', $data['eventId']);
            $query = $this->db->get('events');
            $this->db->where('id', $data['eventId']);
            $this->db->update("events", array('availableSeats' => ($query->result()[0]->availableSeats - 1)));
        }

        $email_message = '
        Hi,<br/>
        Greetings of the Day!<br/><br/>
        We have received a new registration request for the AllCare Event from '.$post_data['fname'].' '.$post_data['lname'].'.<br/><br/>
        <table cellspacing="0" cellpadding="5" border="1">';
        
        unset($data["_server"]);
        $data['createdOn'] = date('d-M-Y H:i', strtotime($data['createdOn']));
        $consent = ($data['consent'] == '1') ? 'Agreed' : 'Denied';
            
        $email_message .= '
            <tr>
                <td style="font-weight:bold;">Name</td>
                <td>'.nl2br($data['firstName'].' '.$data['lastName']).'</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Email</td>
                <td>'.nl2br($data['email']).'</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Phone No.</td>
                <td>'.nl2br($data['phone']).'</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Consent ( Using email address for future events )</td>
                <td>'.$consent.'</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Event Name</td>
                <td>'.$query->result()[0]->name.'</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Registered On ( Date-Time )</td>
                <td>'.date('M d, Y H:i:s', strtotime($data['createdOn'])).'</td>
            </tr>
        ';
    
        $email_message .= '</table>';

        $this->sesmail("heather.c@allcare4u.com","New registration for ".$query->result()[0]->name.' event',$email_message);

        $response["status"]  = 1;
        $response["message"] = '<p class="text-success">Saved Successfully.</p>';
        echo json_encode($response);
        die();
    }

    public function appointment_form(){
        // Load necessary resources
        $this->load->database();
        $this->load->library('form_validation');
    
        // Set form validation rules
        $this->form_validation->set_rules("name", "<strong>Full Name</strong>", "required");
        $this->form_validation->set_rules("phone_number", "<strong>Phone Number</strong>", "required");
        $this->form_validation->set_rules("email_address", "<strong>Email Address</strong>", "required|valid_email");
        $this->form_validation->set_rules("date", "<strong>Date</strong>", "required");
        $this->form_validation->set_rules("office", "<strong>Office Location</strong>", "required");        
        $this->form_validation->set_rules("reason", "<strong>Reason</strong>", "required");
    
        // Validate reCAPTCHA
        if(!$this->recaptcha($this->input->post('g-recaptcha-response'))){
            $response['status'] = 0;
            $response['message'] = '<p class="text-danger">Captcha Validation Failed.</p>';
            echo json_encode($response);
            return;
        }
    
        // Run form validation
        if($this->form_validation->run() === FALSE){
            $response["status"]  = 0;
            $response["message"] = validation_errors('<p class="text-danger">','</p>');
            echo json_encode($response);
            return;
        }
    
        // Collect and sanitize form data
        $post_data = $this->input->post(["name","phone_number","email_address","date","office","reason"], TRUE);
        $post_data["created_at"] = date('Y-m-d H:i:s');
        $post_data["_server"] = json_encode($_SERVER);
        $result = $this->db->insert("form_appointment",$post_data);
    
        // Prepare email message
        $email_message = '<table cellspacing="0" cellpadding="5" border="1">';
        unset($post_data["_server"]);
        $post_data['created_at'] = date('d-M-Y H:i', strtotime($post_data['created_at']));
    
        foreach ($post_data as $key => $value) {
            $email_message .= '<tr>
                <td style="font-weight:bold;">'.ucwords(str_replace("_"," ",$key)).'</td>
                <td>'.nl2br($value).'</td>
            </tr>';
        }
        $email_message .= '</table>';
    
        // Send email to admin
        $this->sesmail("info@allcare4u.com", "Schedule an Appointment Form Request by " . $post_data['name'], $email_message);
    
        // Create feedback message for user
        $user_email_message = '
        <p>Dear ' . $post_data['name'] . ',</p>
        <p>We have received your Appointment Schedule request through our website. Someone from our team shall get in touch with you soon.</p>
        <p>For your reference, here is a copy of the details you shared:</p>
        <p style="margin-bottom:0px;"><strong>Preferred Date:</strong></p>
        <p style="margin-top:0px;">' . $post_data['date'] . '</p>
        <p style="margin-bottom:0px;"><strong>Preferred Office Location</strong></p>
        <p style="margin-top:0px;">' . $post_data['office'] . '</p>
        <p style="margin-bottom:0px;"><strong>Reason / Message</strong></p>
        <p style="margin-top:0px;">' . $post_data['reason'] . '</p>
        <p style="margin-bottom:0px;">Best,</p>
        <p style="margin-top:0px;">The All Care Team</p>';
    
        // Send feedback email to user
        $this->sesmail($post_data['email_address'], "Your Appointment with us, " . $post_data['name'], $user_email_message);
    
        // Return success response
        $response["status"]  = 1;
        $response["message"] = '<p class="text-success">Thank you for reaching out to us, '.$post_data['name'].'. Someone from our team shall get in touch with you soon.</p>';
        echo json_encode($response);
    }
    

public function survey_form(){
    $this->load->database();
    $this->load->library('form_validation');
    $this->form_validation->set_rules("full_name", "<strong>Full Name</strong>", "required");
    $this->form_validation->set_rules("email", "<strong>Email Address</strong>", "required|valid_email");
    $this->form_validation->set_rules("date", "<strong>Date</strong>", "required");
    $this->form_validation->set_rules("comment", "<strong>Message</strong>", "required");
    if(!$this->recaptcha($this->input->post('g-recaptcha-response'))){
        $response['status'] = 0;
        $response['message'] = '<p class="text-danger">Captcha Validation Failed.</p>';
        echo json_encode($response);
        return;
    }
    
    if($this->form_validation->run() === FALSE){
        $response["status"]  = 0;
        $response["message"] = validation_errors('<p class="text-danger">','</p>');
        echo json_encode($response);
        return;
    }

    $post_data = $this->input->post(["full_name","email","date","visit","friendliness","waittime","physician","location","recommendus","comment"], TRUE);
    $post_data["created_at"] = date('Y-m-d H:i:s');
    $post_data["_server"] = json_encode($_SERVER);
    $result = $this->db->insert("form_survey",$post_data);

    $questions = [
        "full_name" => "Full Name",
        "email" => "Email Address",
        "date"  => "Date",
        "visit" => "How was your visit with us ?",
        "friendliness"  => "Friendliness of the staff?",
        "waittime" => "How was your wait time with us ?",
        "location"=> "Location of Appointment ?",
        "physician"=> "Physician you saw today",
        "recommendus" => "Would you recommend us to your family and friends ?",
        "comment"   => "Additional Comments",
        "created_at" => "Submitted At"
    ];
    
    $email_message = '
    <table cellspacing="0" cellpadding="5" border="1">';
    
    unset($post_data["_server"]);
    $post_data['created_at'] = date('d-M-Y H:i', strtotime($post_data['created_at']));
    $post_data['date'] = date('d-M-Y', strtotime($post_data['date']));

    foreach ($post_data as $key => $value) {
        $email_message .= '<tr>
            <td style="font-weight:bold;">'.$questions[$key].'</td>
            <td>'.nl2br($value).'</td>
        </tr>';
    }
    $email_message .= '</table>';

    //$this->sesmail("vaibhav@hibiscus.services","New Satisfaction Survey Submission " .$post_data['full_name'], $email_message);
    $this->sesmail("info@allcare4u.com","Satisfaction Survey Submission by " . $post_data['full_name'], $email_message);

    // Create feedback message for user
    $user_email_message = '
    <p>Dear ' . $post_data['full_name'] . ',</p>
    <p>We truly appreciate your taking out the time to fill this survey.</p>
    <p>You could also share your comments on Google:</p>
    <ul style="padding-left: 0px;">
        <li style="list-style: none;"><a href="https://www.google.com/search?q=all+care+medical+consultants+clearwater&sca_esv=803cfa2ecf2f59a2&sca_upv=1&ei=vXIeZrCWE7iPnesPyMiX2AE&ved=0ahUKEwjw6KTS4caFAxW4R2cHHUjkBRsQ4dUDCBA&uact=5&oq=all+care+medical+consultants+clearwater&gs_lp=Egxnd3Mtd2l6LXNlcnAiJ2FsbCBjYXJlIG1lZGljYWwgY29uc3VsdGFudHMgY2xlYXJ3YXRlcjIGEAAYFhgeMgsQABiABBiGAxiKBTIIEAAYgAQYogRI9iZQ9AFY7yRwAngAkAEBmAGoAqAB_RyqAQYwLjIxLjG4AQPIAQD4AQGYAhGgAsMTwgIIEAAYgAQYsAPCAgkQABiwAxgIGB7CAgsQABiABBiwAxiiBMICBRAAGIAEwgIIEAAYogQYiQWYAwCIBgGQBgeSBwQyLjE1oAfvWA&sclient=gws-wiz-serp">Clearwater</a></li>
        <li style="list-style: none;"><a href="https://www.google.com/search?q=all+care+medical+consultants+seminole&sca_esv=803cfa2ecf2f59a2&sca_upv=1&ei=4HIeZo2nM-6RseMPw-y8uA8&ved=0ahUKEwiNl53j4caFAxXuSGwGHUM2D_cQ4dUDCBA&uact=5&oq=all+care+medical+consultants+seminole&gs_lp=Egxnd3Mtd2l6LXNlcnAiJWFsbCBjYXJlIG1lZGljYWwgY29uc3VsdGFudHMgc2VtaW5vbGUyBRAAGIAEMgYQABgWGB4yCBAAGIAEGKIESIkmUOsBWOgkcAF4AJABAJgBxAGgAeQVqgEEMC4xOLgBA8gBAPgBAZgCDaACig_CAgcQABiwAxgewgIOEAAYgAQYsAMYhgMYigXCAgsQABiABBiwAxiiBMICCxAAGIAEGIYDGIoFwgIIEAAYogQYiQWYAwCIBgGQBgWSBwQxLjEyoAesPA&sclient=gws-wiz-serp">Seminole</a></li>
        <li style="list-style: none;"><a href="https://www.google.com/search?q=all+care+medical+consultants+palm+harbor&sca_esv=803cfa2ecf2f59a2&sca_upv=1&ei=s3IeZoqtHODjseMP8NutmAs&oq=all+care+medical+cons&gs_lp=Egxnd3Mtd2l6LXNlcnAiFWFsbCBjYXJlIG1lZGljYWwgY29ucyoCCAEyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBhAAGBYYHjIIEAAYgAQYogQyCBAAGIAEGKIESI0nUNkDWNcacAF4AJABAJgBuwKgAdcbqgEIMC4xOS4xLjG4AQHIAQD4AQGYAhagAqAcqAIKwgIWEAAYAxi0AhjlAhjqAhiMAxiPAdgBAcICGBAAGAMYtAIY5QIY6gIYChiMAxiPAdgBAcICFxAuGIAEGJECGLEDGNEDGIMBGMcBGIoFwgIREC4YgAQYkQIY0QMYxwEYigXCAgsQABiABBixAxiDAcICCBAAGIAEGLEDwgIOEC4YgAQYsQMYgwEYigXCAiYQLhiABBiRAhixAxjRAxiDARjHARiKBRiXBRjcBBjeBBjgBNgBAsICCxAuGIAEGJECGIoFwgIREAAYgAQYkQIYsQMYgwEYigXCAgUQLhiABMICCBAuGIAEGLEDwgILEC4YgAQYsQMYgwHCAg4QLhiABBixAxjRAxjHAcICGhAuGIAEGJECGIoFGJcFGNwEGN4EGOAE2AECwgILEAAYgAQYkQIYigXCAhEQLhiABBixAxjRAxiDARjHAcICCxAuGIAEGNEDGMcBwgILEC4YgAQYxwEYrwHCAggQABgWGAoYHpgDCboGBAgBGAq6BgYIAhABGBSSBwgxLjE5LjEuMaAH6eEB&sclient=gws-wiz-serp#ip=1">Palm Harbor</a></li>
    </ul>
    <p>We look forward to serving you again.</p>
    <p style="margin-bottom:0px;">Best,</p>
    <p style="margin-top:0px;">The All Care Team</p>';

    // Send feedback email to user
    $this->sesmail($post_data['email'], "Thank you for your feedback, " . $post_data['full_name'], $user_email_message);

    $response["status"]  = 1;
    $response["message"] = '<p class="text-success">Thank you for reaching out to us, '.$post_data['full_name'].'. Someone from our team shall get in touch with you soon.</p>';
    echo json_encode($response);
}


    public function aep_campaign() {
    $this->load->database();
    $this->load->library('form_validation');
    $this->form_validation->set_rules("name", "<strong>First Name</strong>", "required");
    $this->form_validation->set_rules("phone_number", "<strong>Phone Number</strong>", "required");
    $this->form_validation->set_rules("preferred_time", "<strong>Preferred time slots</strong>", "required");
    $this->form_validation->set_rules("filled_by", "<strong>I am a</strong>", "required");

    if ($this->form_validation->run() === FALSE) {
        $response["status"] = 0;
        $response["message"] = validation_errors('<p class="text-danger">', '</p>');
        echo json_encode($response);
        return;
    }

    // Set the timezone (US Eastern Time Zone)
    date_default_timezone_set('America/New_York');

    // Get the current time in 12-hour format with "AM" or "PM"
    $usTime = date('Y-m-d h:i A');

    $post_data = $this->input->post(["name", "phone_number", "preferred_time", "filled_by"], TRUE);
    $post_data["_server"] = json_encode($_SERVER);
    $post_data["created_at"] = date('Y-m-d H:i:s');
    $result = $this->db->insert("form_aep", $post_data);

    $email_message = '
    <table cellspacing="0" cellpadding="5" border="1">';

    unset($post_data["_server"]);
    $post_data['created_at'] = date('d-M-Y h:i A T', strtotime($post_data['created_at']));

    foreach ($post_data as $key => $value) {
        $email_message .= '<tr>
            <td style="font-weight:bold;">' . ucwords(str_replace("_", " ", $key)) . '</td>
            <td>' . nl2br($value) . '</td>
        </tr>';
    }

    // Add a static column with a hyperlink
    $staticColumnValue = "https://allcare4u.com/aep-appointment";
    $staticColumnLink = "https://allcare4u.com/aep-appointment"; 
    $email_message .= '<tr>
        <td style="font-weight:bold;">Source</td>
        <td><a href="' . $staticColumnLink . '">' . $staticColumnValue . '</a></td>
    </tr>';

    $email_message .= '</table>';

    $this->sesmail("info@allcare4u.com", "New Callback Request", $email_message);

    $response["status"] = 1;
    $response["message"] = '<p class="text-success">Saved Successfully.</p>';
    echo json_encode($response);
}

public function aep_campaign_web() {
    $this->load->database();
    $this->load->library('form_validation');
    $this->form_validation->set_rules("name", "<strong>First Name</strong>", "required");
    $this->form_validation->set_rules("phone_number", "<strong>Phone Number</strong>", "required");
    $this->form_validation->set_rules("preferred_time", "<strong>Preferred time slots</strong>", "required");
    $this->form_validation->set_rules("filled_by", "<strong>I am a</strong>", "required");

    if ($this->form_validation->run() === FALSE) {
        $response["status"] = 0;
        $response["message"] = validation_errors('<p class="text-danger">', '</p>');
        echo json_encode($response);
        return;
    }

    $post_data = $this->input->post(["name", "phone_number", "preferred_time", "filled_by"], TRUE);
    $post_data["_server"] = json_encode($_SERVER);
    $post_data["created_at"] = date('Y-m-d H:i:s');
    $result = $this->db->insert("form_aep_web", $post_data);

    $email_message = '
    <table cellspacing="0" cellpadding="5" border="1">';

    // Set the timezone (US Eastern Time Zone)
    date_default_timezone_set('America/New_York');

    // Get the current time in 12-hour format with "AM" or "PM"
    $usTime = date('Y-m-d h:i A');

    unset($post_data["_server"]);
        $post_data['created_at'] = date('d-M-Y H:i A T', strtotime($post_data['created_at']));

    foreach ($post_data as $key => $value) {
        $email_message .= '<tr>
            <td style="font-weight:bold;">' . ucwords(str_replace("_", " ", $key)) . '</td>
            <td>' . nl2br($value) . '</td>
        </tr>';
    }

    // Add a static column with a hyperlink
    $staticColumnValue = "https://allcare4u.com/annual-enrollment-period-aep";
    $staticColumnLink = "https://allcare4u.com/annual-enrollment-period-aep"; // Replace with your hyperlink URL
    $email_message .= '<tr>
        <td style="font-weight:bold;">Source</td>
        <td><a href="' . $staticColumnLink . '">' . $staticColumnValue . '</a></td>
    </tr>';

    $email_message .= '</table>';

    $this->sesmail("info@allcare4u.com", "New Callback Request", $email_message);

    $response["status"] = 1;
    $response["message"] = '<p class="text-success">Saved Successfully.</p>';
    echo json_encode($response);
}


    public function bloglist(){
        $this->load->database();

        $this->load->helper('text');
        
        $offset = $this->input->post('page')*5;

        $category = (!empty($this->input->post('category'))) ? strtolower(str_replace(' ', '-', $this->input->post('category'))) : '';
        $archive = (!empty($this->input->post('archive'))) ? explode(' ', $this->input->post('archive')) : '';
        $condition = "";

        if(!empty($category)){
            $category = $this->db->escape_str($category);
            if($category == "uncategorized"){
                $condition = " AND category IS NULL";
            }else{
                $condition = " AND category LIKE '%$category%'";
            }
        }

        if(!empty($archive)){
            $year = $archive[1];
            $monthsName = array(
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July ',
                'August',
                'September',
                'October',
                'November',
                'December',
            );
            $month = (int) array_search(ucwords($archive[0]), $monthsName) + 1;
            if($year != "" && $month != "" && is_numeric($year) && is_numeric($month)){
                $month = str_pad($month,2,0);
                $month = ucwords($archive[0]);
                $condition .= " AND monthname(dated)='$month' AND year(dated)=$year";
            }
        }

        $blogs = $this->welcome->get_blogs($condition." AND category != 'newsletter' ORDER BY id DESC LIMIT 5 OFFSET $offset");
        
        echo json_encode($blogs);

    }
}