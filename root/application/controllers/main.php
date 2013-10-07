<?php
class Main extends CI_Controller
{
    private function _load_page($title='', $content='index', $styles=array('main'), $scripts=array('main'))
    {
        $data['title'] = $title;
		$data['content'] = $content;
        $data['styles'] = $styles;
        $data['scripts'] = $scripts;
        
		$this->load->view('main', $data);
    }
    
	public function index()
	{
        $this->_load_page();
	}
}
?>
