<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<link rel="stylesheet" href="screen.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="floom/floom.css" type="text/css" media="screen" charset="utf-8" />

	<script type="text/javascript" charset="utf-8" src="mootools-core-1.3-full-nocompat.js"></script>
	<script type="text/javascript" charset="utf-8" src="mootools-more.js"></script>
	<script type="text/javascript" charset="utf-8" src="../Source/floom.js"></script>
	
	<script type="text/javascript" charset="utf-8">
		window.addEvent('domready', function(e){
			
			// option 1		
			var slides = [
				{
					image: 'fotos/inprolink.jpg',
					caption: ''
				},
				{
					image: 'fotos/publicidade.jpg',
					caption: 'Excepteur sint occaecat cupidatat non proident'
				},
				{
					image: 'nature-photo2.jpg',
					caption: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.'
				},
				{
					image: 'nature-photo3.jpg',
					caption: 'Deserunt mollit anim id est laborum'
				},
				{
					image: 'nature-photo4.jpg',
					caption: 'Laboris nisi ut aliquip ex ea commodo consequat'
				}
			];
			
			// option 2
			// var slides = $$('#blinds img');

			$('blinds').floom(slides, {
				slidesBase: 'slides/',
				sliceFxIn: {
					left: [20, 0]
				}
			});
			
		});
	</script>
	
	<title>Floom 1.3</title>
	
</head>

<body>
		
	<div id="blinds-cont">
		<div id="blinds">
		</div>
	</div>
	
</body>
</html>