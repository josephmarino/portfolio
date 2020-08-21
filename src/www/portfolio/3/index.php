<?php
///
// +------------------------------------------------------------------------------------------------+
// | Portfolio v1.0                                                                                 |
// | Author: Joseph P. Marino <joseph@marino.net> | https://josephmarino.net                        |
// +------------------------------------------------------------------------------------------------+
// | MIT License                                                                                    |
// |                                                                                                |
// | Copyright (c) 2020 Joseph P. Marino <joseph@marino.net>                                        |
// |                                                                                                |
// | Permission is hereby granted, free of charge, to any person obtaining a copy of this software  |
// | and associated documentation files (the "Software"), to deal in the Software without           |
// | restriction, including without limitation the rights to use, copy, modify, merge, publish,     |
// | distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the  |
// | Software is furnished to do so, subject to the following conditions:                           |
// |                                                                                                |
// | The above copyright notice and this permission notice shall be included in all copies or       |
// | substantial portions of the Software.                                                          |
// |                                                                                                |
// | THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING  |
// | BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND     |
// | NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,   |
// | DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, |
// | OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.        |
// +------------------------------------------------------------------------------------------------+
///

require ($_SERVER['DOCUMENT_ROOT'] . '/../include/portfolio.class');

     $portfolio = new Portfolio();

     $portfolio->SetHTTPHeader('Content-Security-Policy');
     $portfolio->SetHTTPHeader('Strict-Transport-Security');
     $portfolio->SetHTTPHeader('Referrer-Policy');
     $portfolio->SetHTTPHeader('X-Content-Type-Options');
     $portfolio->SetHTTPHeader('X-XSS-Protection');
     $portfolio->SetHTTPHeader('X-Frame-Options');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Article</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta name="keywords" content="my name, what i do, other keywords i want to target"/>
<meta name="author" content="My name">
<meta name="robots" content="noarchive">
<link rel="canonical" href="https://mydomain.com/product/3/">

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/header.php'); ?>

<!-- Open Graph -->
<meta property="og:site_name" content="mydomain.com">
<meta property="og:title" content="page title"/>
<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."/>
<meta property="og:type" content="website">
<meta property="og:image" content="/img/ss1.jpg"/>
<meta property="og:url" content="https://mydomain.com/product/3/"/>
</head>

<body id="page-top">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/nav.php'); ?>
	<br><br><br>
	<div class="container">
		<div class="row padding-left-right-10px"><br><br>
		<picture>
		  <source type="image/webp" srcset="/img/product_logo.webp">
		  <img src="/img/product_logo.jpg" alt="Short description of what this image is" class="logo-ms">
		</picture>
		</div><br>
		<div class="row padding-left-right-10px">
			<div class="open-sans-blue padding-left-right-10px">
				<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row padding-left-right-10px">
			<div class="open-sans-body padding-left-right-10px">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Feugiat in fermentum posuere urna nec tincidunt praesent. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. Commodo ullamcorper a lacus vestibulum sed. Etiam dignissim diam quis enim lobortis scelerisque fermentum. Eget felis eget nunc lobortis mattis. Duis tristique sollicitudin nibh sit amet commodo nulla. Est ultricies integer quis auctor elit sed. Fermentum leo vel orci porta. Proin sed libero enim sed faucibus turpis in eu mi. Sed augue lacus viverra vitae congue eu consequat ac felis. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Facilisis gravida neque convallis a cras semper auctor neque vitae. Placerat orci nulla pellentesque dignissim enim sit. Et malesuada fames ac turpis egestas maecenas pharetra. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed.
				<br><br>
				<h4 class="open-sans-blue">Viverra accumsan in nisl nisi scelerisque eu ultrices</h4>
				<div>
				<picture>
				  <source type="image/webp" srcset="/img/ss1.webp">
				  <img src="/img/ss1.jpg" alt="Short description of what this image is" class="ms-privacy-bug img-responsive">
				</picture>	
					<div class="padding-left-15px">
						<small class="color-light-grey">
							Turpis massa sed elementum tempus egestas sed sed risus pretium.
						</small>
					</div>
				</div><br>

				<h4 class="open-sans-blue">Et malesuada fames ac turpis.</h4> Turpis massa sed elementum tempus egestas sed sed risus pretium. Quisque id diam vel quam elementum pulvinar etiam non quam. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Faucibus purus in massa tempor nec. Id ornare arcu odio ut sem nulla pharetra diam. Sed velit dignissim sodales ut eu sem integer vitae. Ut venenatis tellus in metus vulputate eu. Purus sit amet volutpat consequat mauris. Et malesuada fames ac turpis.
				<div class="visible-xs visible-sm"><br>
				</div>Turpis massa sed elementum tempus egestas sed sed risus pretium.
				<div class="visible-md visible-lg"><br>
				</div>Turpis massa sed elementum tempus egestas sed sed risus pretium. Quisque id diam vel quam elementum pulvinar etiam non quam.
				<div class="visible-xs visible-sm"><br>
				</div>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Faucibus purus in massa tempor nec. Id ornare arcu odio ut sem nulla pharetra diam. Sed velit dignissim sodales ut eu sem integer vitae.
				<div class="visible-xs visible-sm"><br>
				</div>Ut venenatis tellus in metus vulputate eu. Purus sit amet volutpat consequat mauris. Et malesuada fames ac turpis. Duis convallis convallis tellus id interdum velit. Elit at imperdiet dui accumsan sit amet nulla facilisi.<br><br>

				<h4 class="open-sans-blue">Blandit massa enim nec dui.</h4>Ut venenatis tellus in metus vulputate eu. Purus sit amet volutpat consequat mauris. Et malesuada fames ac turpis. Duis convallis convallis tellus id interdum velit. Elit at imperdiet dui accumsan sit amet nulla facilisi.
				<div class="visible-xs visible-sm"><br>
				</div>Purus semper eget duis at tellus at urna. Non tellus orci ac auctor augue mauris augue neque gravida. Auctor urna nunc id cursus. Mi tempus imperdiet nulla malesuada. Blandit massa enim nec dui. Morbi tempus iaculis urna id. Nisi porta lorem mollis aliquam ut. Urna duis convallis convallis tellus id interdum velit laoreet id.<br><br> Auctor urna nunc id cursus. Mi tempus imperdiet nulla malesuada. Blandit massa enim nec dui. Morbi tempus iaculis urna id. Nisi porta lorem mollis aliquam ut.
				<br><br> Auctor urna nunc id cursus. Mi tempus imperdiet nulla malesuada. Blandit massa enim nec dui. Morbi tempus iaculis urna id. Nisi porta lorem mollis aliquam ut.
			</div>
		</div>
	</div>
	<br>
	<div class="thin_hr"></div>
	<br>
	<div class="container">
		<div class="row">
			<!-- iframe calling an embeddeded pdf file using pdf.js -->

			<iframe src="/libs/pdf.js/v2.3.200/web/viewer.html?file=/pdf/sample.pdf" width="100%" height="1000" class="border-none" title="PDF Viewer"></iframe>

			<br><br>
		</div>
	</div>
	<br><br>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/footer.php'); ?>
</body>
</html>