<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use OpenTok\OpenTok;

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function startVideo()
	{				
		$opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
		
		$session = $opentok->createSession();        
		$iSessionId = $session->getSessionId();
		
		
		$data = array(
			'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $iSessionId,
            'token' => $session->generateToken()
        );
        echo "<pre />"; print_r($data);
		$this->load->view('video_11', $data);		
	}


	public function connectVideo()    // connect to a session
	{				
		$opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
		
		$session = '2_MX40NTg3MzYwMn5-MTQ5NjEyNjkwMjQyM35UVXpTVmtqYXZTWldqYVE0dDN5OXc4TlR-UH4';
        $token = $opentok->generateToken($session);
		$data = array(
			'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $session ,
			'token' => $token	
        );
        //echo "<pre />"; print_r($data);
		$this->load->view('video_22', $data);		
	}		
}
