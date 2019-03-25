<?php
require_once dirname(__file__).'/pdf/tcpdf.php';
class Nav {
	protected $_ci;

	function __construct()
	{
		$this->_ci =&get_instance();
		}

	function isi($template,$data=null)
	{
		$data['content']	=	$this->_ci->load->view($template,$data, TRUE);
		$data['footer']		=	$this->_ci->load->view('header/footer',$data, TRUE);
		$data['nav']		=	$this->_ci->load->view('header/nav',$data, TRUE);

		$this->_ci->load->view('header/index',$data);

	}

}
?>
