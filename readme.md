#CodeIgniter Skeleton

This is a vanilla CI 1.7.2 installation, with the following additions:

- [CI_Session](http://www.matthewfedak.co.uk/session_hybrid_codeigniter.html)
- [DataMapper OverZealous Edition v1.7.1](http://www.overzealous.com/dmz/)
- [Scaffold CSS v0.3.0](http://github.com/anthonyshort/Scaffold)
- [HTML5 Boilerplate v0.9.5](http://github.com/paulirish/html5-boilerplate) - except for the build script.
- View template based on Boilerplate's index.html. 

###View Template

To use the view template, within your controllers use:
	
	//Define the content to be loaded within the template
	$data->main_content = "welcome_message";

	//Send data to template view and load
	$this->load->view('template/main', $data);
