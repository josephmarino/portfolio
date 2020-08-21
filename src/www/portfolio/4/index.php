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
<title>Product #4</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta name="keywords" content="my name, what i do, other keywords i want to target"/>
<meta name="author" content="My name">
<meta name="robots" content="noarchive">
<link rel="canonical" href="https://mydomain.com/portfolio/1/">

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/header.php'); ?>

<!-- Open Graph -->
<meta property="og:site_name" content="mydomain.com">
<meta property="og:title" content="page title"/>
<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."/>
<meta property="og:type" content="website">
<meta property="og:image" content="/img/ss1.jpg"/>
<meta property="og:url" content="https://mydomain.com/portfolio/1/"/>
</head>

<body id="page-top">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/nav.php'); ?>
	<br><br><br>
	<div class="container">
		<div class="row padding-left-right-10px"><br><br>
			<picture>
				<source type="image/webp" srcset="/img/product_logo.webp">
				<img src="/img/product_logo.jpg" alt="Short description of what this image is" class="logo-akamail padding-left-right-10px">
			</picture>
		</div><br>
		<div class="row padding-left-right-10px">
			<div class="open-sans-blue padding-left-right-10px">
				<h1>Heading 1</h1>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row padding-left-right-10px">
			<div class="open-sans-body padding-left-right-10px">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl nisi scelerisque eu ultrices vitae auctor. Pulvinar neque laoreet suspendisse interdum consectetur.
				<div class="visible-xs visible-sm"><br>
				</div>At augue eget arcu dictum varius duis at consectetur. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Non quam lacus suspendisse faucibus interdum posuere lorem. Feugiat nisl pretium fusce id velit ut tortor pretium viverra.
				<div class="visible-xs visible-sm"><br>
				</div>Augue lacus viverra vitae congue. Bibendum enim facilisis gravida neque. Nulla at volutpat diam ut venenatis tellus in metus. Tortor at auctor urna nunc.<br><br>
				<h4 class="open-sans-blue">Heading 2</h4>Vulputate odio ut enim blandit volutpat maecenas. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Tristique senectus et netus et malesuada fames ac.
				<div class="visible-xs visible-sm"><br>
				</div>Vulputate ut pharetra sit amet. Nibh nisl condimentum id venenatis. Sed felis eget velit aliquet. Nisi porta lorem mollis aliquam. Aliquam ultrices sagittis orci a scelerisque purus semper eget. Vulputate ut pharetra sit amet. Nibh nisl condimentum id venenatis. Sed felis eget velit aliquet. Nisi porta lorem mollis aliquam. Aliquam ultrices sagittis orci a scelerisque purus semper eget.<br><br>
				<h4 class="open-sans-blue">Heading 3</h4>Lorem donec massa sapien faucibus et molestie ac. Volutpat diam ut venenatis tellus. Hendrerit gravida rutrum quisque non. Pellentesque dignissim enim sit amet. Curabitur gravida arcu ac tortor dignissim.
				<div class="visible-xs visible-sm"><br>
				</div>Eget egestas purus viverra accumsan in nisl nisi scelerisque eu. Sagittis eu volutpat odio facilisis mauris sit amet massa. Eget egestas purus viverra accumsan in nisl nisi scelerisque eu. Sagittis eu volutpat odio facilisis mauris sit amet massa.
				<div class="visible-xs visible-sm"><br>
				</div>Sagittis id consectetur purus ut faucibus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices.
			</div>
		</div>
	</div>
	<br><br>
	<div class="thin_hr"></div>
	<br>
	<div class="container">
		<div class="row">
			<picture>
				<source type="image/webp" srcset="/img/ss1.webp">
				<img src="/img/ss1.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			<br><br>
			<picture>
				<source type="image/webp" srcset="/img/ss2.webp">
				<img src="/img/ss2.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			<br><br>
			<picture>
				<source type="image/webp" srcset="/img/ss3.webp">
				<img src="/img/ss3.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			<br><br>

		</div>
	</div>
	<br><br>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/footer.php'); ?>
</body>
</html>