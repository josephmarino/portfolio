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
<title>My portfolio</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex">
<meta name="robots" content="noarchive">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta name="keywords" content="my name, what i do, other keywords i want to target"/>
<meta name="author" content="My name">

<!-- Open Graph -->
<meta property="og:site_name" content="mydomain.com">
<meta property="og:title" content="My name">
<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://mydomain.com/portfolio/">

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/header.php'); ?>
</head>

<body id="page-top">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/nav.php'); ?>
	<br><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="text-center">
				<div class="col-md-6">
					<a href="/portfolio/1/" class="display-block">
						<picture>
  						<source type="image/webp" srcset="/img/ss1.webp">
							<img src="/img/ss1.jpg" alt="Product #1 short description" class="img-responsive thumbnail">
						</picture>
      					<div class="carousel-caption">
        					<h4>Product #1</h4>
      					</div>
      				</a>
				</div>
				<div class="col-md-6">
					<a href="/portfolio/2/" class="display-block">
						<picture>
  							<source type="image/webp" srcset="/img/ss2.webp">
							<img src="/img/ss2.jpg" alt="Product #2 short description" class="img-responsive thumbnail">
						</picture>
				    	<div class="carousel-caption">
        					<h4>Product #2</h4>
      					</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="/portfolio/3/" class="display-block">
						<picture>
							<source type="image/webp" srcset="/img/ss3.webp">
							<img src="/img/ss3.jpg" alt="Product #3 short description" class="img-responsive thumbnail">
						</picture>
						<div class="carousel-caption">
        					<h4>Product #3</h4>
      					</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="/portfolio/4/" class="display-block">
						<picture>
							<source type="image/webp" srcset="/img/ss4.webp">
							<img src="/img/ss4.jpg" alt="Product #4 short description" class="img-responsive thumbnail">
						</picture>
						<div class="carousel-caption">
        					<h4>Product #4</h4>
      					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<br>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/footer.php'); ?>
</body>
</html>