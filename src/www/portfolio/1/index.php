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

     $portfolio->SetHTTPHeader('Strict-Transport-Security');
     $portfolio->SetHTTPHeader('Referrer-Policy');
     $portfolio->SetHTTPHeader('X-Content-Type-Options');
     $portfolio->SetHTTPHeader('X-XSS-Protection');
     $portfolio->SetHTTPHeader('X-Frame-Options');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product #1</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta name="keywords" content="my name, what i do, other keywords i want to target"/>
<meta name="author" content="My name">
<meta name="robots" content="noarchive">
<link rel="canonical" href="https://mydomain.com/portfolio/2/">

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/header.php'); ?>

<!-- Open Graph -->
<meta property="og:site_name" content="mydomain.com">
<meta property="og:title" content="page title"/>
<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."/>
<meta property="og:type" content="website">
<meta property="og:image" content="<?php if (isset($_GET["id"]) && trim($_GET["id"]) == '0') { echo ('https://mydomain.com/img/ss1.jpg'); } else { echo('https://mydomain.com/img/ss2.jpg'); } ?>"/>
<meta property="og:url" content="https://mydomain.com/portfolio/2/">
</head>

<body id="page-top">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/nav.php'); ?>
	<br><br><br>
	<div class="container">
		<div class="row padding-left-right-10px"><br><br>
			<picture>
  				<source type="image/webp" srcset="/img/product_logo.webp"> 
  				<img src="/img/product_logo.jpg" alt="Short description of what this image is" class="logo-gytheion">
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit amet consectetur. Duis at consectetur lorem donec massa sapien faucibus. Urna id volutpat lacus laoreet non. Scelerisque varius morbi enim nunc faucibus a pellentesque sit. Amet consectetur adipiscing elit pellentesque habitant morbi. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Sed euismod nisi porta lorem mollis aliquam ut. Auctor neque vitae tempus quam pellentesque nec nam. Odio ut enim blandit volutpat. Orci ac auctor augue mauris augue neque gravida in fermentum. Consequat interdum varius sit amet. Ut enim blandit volutpat maecenas. Nibh nisl condimentum id venenatis a. Mauris vitae ultricies leo integer malesuada nunc vel risus. Fames ac turpis egestas integer eget. Consequat nisl vel pretium lectus quam id leo. Dolor morbi non arcu risus quis. Eu sem integer vitae justo eget magna.
			</div>
		</div>
	</div>
	<br><br>
	<div class="thin_hr"></div>
	<br>

	<div id="bodynav" class="container">
		<ul class="nav nav-pills nav-justified blue">
<?php 
/* 
      Activating specific navpill tabs and content sections. 
      Below are four simple if statements which look for a specific variable in the URL of this
      page. In this case, we are looking for the variable id=0. If id=0 is present in the URL, then
      we will write some HTML that sets specific tabs and content sections to an active state. I
      wrote these if statements because if I want to link someone to this page to show them the
      "remote firmware upgrader" section, then all I have to do is simply link them to
      https://josephmarino.net/portfolio/gytheion/?id=0
*/			
			if (isset($_GET["id"]) && trim($_GET["id"]) == '0') { echo ('<li>'); } else { echo('<li class="active">'); } 
?>
		<a href="#1" data-toggle="tab">Tab 1</a>
			</li>
			<?php if (isset($_GET["id"]) && trim($_GET["id"]) == '0') { echo('<li class="active">'); } else { echo('<li>'); }?>
			<a href="#2" data-toggle="tab">Tab 2</a>
			</li>
		</ul>
	</div>

	<div class="tab-content">
		<div class="tab-pane <?php if (isset($_GET["id"]) && trim($_GET["id"]) == '0') { echo (''); } else { echo('active'); } ?>" id="1">
			<div class="container open-sans-body"><br>Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique senectus. Sagittis orci a scelerisque purus semper eget duis at tellus. Fringilla phasellus faucibus scelerisque eleifend donec. Scelerisque felis imperdiet proin fermentum. Vitae tortor condimentum lacinia quis vel eros donec.<br>
			</div>
			<picture>
  				<source type="image/webp" srcset="/img/ss1.webp">
  				<img src="/img/ss1.jpg" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			<br><br>
			<picture>
  				<source type="image/webp" srcset="/img/ss2.webp">
  				<img src="/img/ss2.jpg" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			<br><br>
			<picture>
  				<source type="image/webp" srcset="/img/ss3.webp">
  				<img src="/img/ss3.jpg" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			<br><br>
		</div>
		<div class="tab-pane <?php if (isset($_GET["id"]) && trim($_GET["id"]) == '0') { echo ('active'); } ?>" id="2"><br>
			<div class="container open-sans-body">Nibh tellus molestie nunc non blandit. Diam maecenas sed enim ut sem viverra aliquet eget. Elit ullamcorper dignissim cras tincidunt lobortis. 
				<br><br>Viverra justo nec ultrices dui. Pulvinar neque laoreet suspendisse interdum consectetur libero. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Ac turpis egestas sed tempus.
				<br><br>
			<picture>
  				<source type="image/webp" srcset="/img/ss1.webp">
  				<img src="/img/ss1.jpg" class="ss-max-width-1024px-max-height-768px img-responsive">
			</picture>
			</div>

		</div>
	</div>

	<br><br>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/footer.php'); ?>
</body>
</html>