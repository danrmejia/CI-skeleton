#CodeIgniter Skeleton

This is a vanilla CI 1.7.2 installation, with the following additions:

- [CI_Session](http://www.matthewfedak.co.uk/session_hybrid_codeigniter.html)
- [DataMapper OverZealous Edition v1.7.1](http://www.overzealous.com/dmz/)
- [Scaffold CSS v0.3.0](http://github.com/anthonyshort/Scaffold)
- [HTML5 Boilerplate v0.9.5](http://github.com/paulirish/html5-boilerplate) - build script excluded 
- View template based on Boilerplate's index.html
- Some example mixins by Juan Pablo Buritica - *css/mixins.css*
- [CSS3PIE](http://css3pie.com)

###View Template

To use the view template, within your controllers use:
	
	//Define the content to be loaded within the template
	$data->main_content = "welcome_message";

	//Send data to template view and load
	$this->load->view('template/main', $data);

###Mixins

Some mixins for Scaffold CSS are included, these include the use of PIE.htc for compatibility in IE6-IE8

Included mixins are:

- box-shadow
- inset box-shadow
- border-radius
- bg-gradient

####Mixin Usage

#####box-shadow

In css file:

	.box{
		background: black;
		@include box-shadow(#000,0,0,15px);
	}

Would output:

	.box {
		background:black;
		box-shadow:#000 0 0 15px;
		-moz-box-shadow:#000 0 0 15px;
		-webkit-box-shadow:#000 0 0 15px;
		behavior:url(/skeleton/css/PIE.htc);
	}

#####inset box-shadow

*note: Inset box-shadow not implemented yet in CSS3PIE*

In css file:

	.box{
		background: black;
		@include box-shadow(#000,0,0,15px);
	}

Would output:

	.box {
		background:black;
		box-shadow:inset #000 0 0 15px;
		-moz-box-shadow:inset #000 0 0 15px;
		-webkit-box-shadow:inset #000 0 0 15px;
	}

#####border-radius

In css file:

	.box{
		background: black;
		@include border-radius(10px);
	}

Would output:

	.box {
		background:black;
		border-radius:10px;
		-moz-border-radius:10px;
		-webkit-border-radius:10px;
		behavior:url(/skeleton/css/PIE.htc);
	}

#####bg-gradient

In css file:

	.box{
		background: black;
		@include bg-gradient(#fff,#d9d9d9);
	}

Would output:

	.box {
		background:black;
		background:#fff;
		background: -webkit-gradient(linear,  0 0,  0 bottom,  from(#fff),  to(#d9d9d9));
		background: -moz-linear-gradient(#fff,  #d9d9d9);
		background:linear-gradient(#fff,  #d9d9d9);
		-pie-background:linear-gradient(#fff,  #d9d9d9);
		behavior:url(/skeleton/css/PIE.htc);
	}	