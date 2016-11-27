<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_calls extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		// nocache
		$this->gclass->nocache();
		// check
		//if ($this->session->userdata('admin_user') === FALSE) redirect(base_url('admin'), 'refresh');
		//if (!in_array('admin_calls', explode(',', $this->session->userdata('admin_user')->access))) redirect(base_url('admin'), 'refresh');

		// set language
		setTranslationLanguage($this->session->userdata('admin_user')->sys_lang, 'admin');
		
		
	}
	
	public function index()
	{
		// set title
		$this->gclass->addTitle(__('Calls'));
		
		// data
		$user_data = $this->session->userdata('admin_user');
		
		
		if(!empty($user_data->company_subdomain) && !empty($user_data->traffic_source)) {
			
			$api_key ='VCyoexYsLxsDW3sezB_D';
			$url = 'https://'.$user_data->company_subdomain.'.trackdrive.net/api/v1/calls.json?auth_token='.$api_key.'&traffic_source_id='.$user_data->traffic_source.'&per_page=1';
			
			
			//from date
			if(isset($_POST['created_at_from'])) {
				$url .= '&created_at_from='.$_POST['created_at_from'];
			} else {
				$date = strtotime ( '-0 day' , strtotime ( date('Y-m-d') ) ) ;
				$date = date ( 'Y-m-j' , $date );
				$url .= '&created_at_from='.$date;
			}
			
			//to date
			if(isset($_POST['created_at_to'])) {
				$url .= 'created_at_to='.$_POST['created_at_to'];
			} else {
				$date = strtotime ( '-0 day' , strtotime ( date('Y-m-d') ) ) ;
				$date = date ( 'Y-m-j' , $date );
				$url .= 'created_at_to='.$date;
			}
			
			
			//add data
			$data['all'] = $this->getTrackDriveData($url);
			$data['converted'] = $this->getTrackDriveData($url."&buyer_converted=true");
			$data['in_progress'] = $this->getTrackDriveData($url."&in_progress=true");
		}
		
		$data = array(
			'user_data' => $user_data,
			'data' => $data
		);
		
		// meta
		$meta = array(
			'title' => implode(' - ', array_reverse($this->gclass->title_array)),
			'keywords' => implode(', ', $this->gclass->keywords_array),
			'description' => implode(', ', $this->gclass->description_array),
			'css' => $this->gclass->css_array,
			'js' => $this->gclass->js_array
		);
		
		$this->gclass->addJs('/js/admin/jquery.ui.datepicker-'. $this->session->userdata('admin_user')->sys_lang.'.js');
		
		$this->load->view('header', $meta);
		$this->load->view('admin_calls', $data);
		$this->load->view('footer_iframe');
	}
	public function getTrackDriveData($url) {
		error_reporting(0);
		ini_set('display_errors', 0);
		
		$data = file_get_contents($url);
		$data = json_decode($data);
	
		$return = !empty($data) ? $data->metadata->total_count : 0;
		return $return;
	}
	
	
}