<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @file-name: header.php
 * @file-description: Header template
 * @author: Juan Pablo Buritica - <hello@juanpabloburitica.com>
 * CodeIgniter Skeleton - <http://github.com/Buritica/CI-skeleton>
 * @includes: HTML5 Boilerplate by Paul Irish - <http://html5boilerplate.com> 
 */
?>
	
	<?php $this->load->view('template/header'); ?>
		<div id="main">
			<?php $this->load->view($main_content); ?>
		</div>
	<?php $this->load->view('template/footer'); ?>
	
<?php  
/* End of file main.php */
/* Location: ./system/application/views/template/main.php */
?>