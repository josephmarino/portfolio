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

function OpenGraphImage() {

/*
      This function is a simple switch statement that allows easy customization of the open graph
      image metadata for this page by simply passing an id variable in this page's URL. 

      For example, if I share the URL https://josephmarino.net/portfolio/spamcube/?id=2 with a user
      who is using an application that supports open graph protocol, the user would see this page's
      URL and the 2.jpg image listed below in the "2" case statement. An example of an application
      that supports open graph is Apple's imessage. By default, imessage generates inline previews
      for URLs that users send to each other. A page with an open graph image will show the page's
      URL in a grey bubble with the open graph image, the page's title, and domain name. For a page
      without an open graph image, imessage will simply show the page's URL in a grey bubble with
      the page's title, domain name, and a safari icon.

      To learn more about open graph protocol visit: https://ogp.me/  
*/

	if (isset($_GET["id"])) {

		switch ($_GET["id"]) {

			case "0":
				echo('https://mydomain.com/img/ss1.jpg');
				break;

			case "1":
				echo('https://mydomain.com/img/ss2.jpg');
				break;

			case "2":
				echo('https://mydomain.com/img/ss3.jpg');
				break;

			case "3":
				echo('https://mydomain.com/img/ss4.jpg');
				break;

			case "4":
				echo('https://mydomain.com/img/ss5.jpg');
				break;

			case "5":
				echo('https://mydomain.com/img/ss6.jpg');
				break;

			case "6":
				echo('https://mydomain.com/img/ss7.jpg');
				break;

			case "7":
				echo('https://mydomain.com/img/ss8.jpg');
				break;

			case "8":
				echo('https://mydomain.com/img/ss9.jpg');
				break;

			case "9":
				echo('https://mydomain.com/img/ss10.jpg');
				break;

			default:
				echo('https://mydomain.com/img/ss11.jpg');
				break;

		}

	} else {

		echo('https://mydomain.com/img/ss1.jpg');

	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product #2</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta name="keywords" content="my name, what i do, other keywords i want to target"/>
<meta name="author" content="My name">
<meta name="robots" content="noarchive">
<link rel="canonical" href="https://mydomain.com/portfolio/4/">

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/header.php'); ?>

<!-- Open Graph -->
<meta property="og:site_name" content="mydomain.com">
<meta property="og:title" content="page title"/>
<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."/>
<meta property="og:type" content="website">
<meta property="og:image" content="<?php OpenGraphImage() ?>"/>
<meta property="og:url" content="https://mydomain.com/portfolio/4/">
</head>

<body id="page-top">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/nav.php'); ?>
	<br><br><br>
	<div class="container">
		<div class="row padding-left-right-10px"><br><br>
			<picture>
				<source type="image/webp" srcset="/img/product_logo.webp">
				<img src="/img/product_logo.jpg" alt="Short description of what this image is" class="logo-sc padding-left-right-10px">
			</picture>
		</div><br>
		<div class="row padding-left-right-10px">
			<div class="open-sans-blue padding-left-10px">
				<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row padding-left-right-10px">
			<div class="open-sans-body padding-left-right-10px">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Feugiat in fermentum posuere urna nec tincidunt praesent. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. <a id="scroll-to-nyt" class="page-scroll" href="#nytimes-article">Commodo ullamcorper a lacus</a> vestibulum sed. Etiam dignissim diam quis enim lobortis scelerisque fermentum. Eget felis eget nunc lobortis mattis. Duis tristique sollicitudin nibh sit amet commodo nulla. Est ultricies integer quis auctor elit sed. Fermentum leo vel orci porta. Proin sed libero enim sed faucibus turpis in eu mi. Sed augue lacus viverra vitae congue eu consequat ac felis. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Facilisis gravida neque convallis a cras semper auctor neque vitae.
				<div class="visible-xs"><br>
				</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
				<div class="visible-xs"><br>
				</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
				<br><br> Porta nibh venenatis cras sed. Mauris pharetra et ultrices neque ornare aenean. At volutpat diam ut venenatis tellus in metus. Vitae auctor eu augue ut lectus. Diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Neque ornare aenean euismod elementum nisi quis eleifend quam. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.
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

	  Below are four simple if statements which look for a variable in the URL of this page. 
	  In this case, we are looking for the variable id=4. If id=4 is present in the URL, then
	  we will write some HTML that sets specific tabs and content sections to an active state. 
	  I wrote these if statements because sometimes I like to link people directly to the 
	  "news & awards" section of this page. When I want to do that, all I have to do is link them to
	  https://josephmarino.net/portfolio/spamcube/?id=4

	  To see this in action, visit the URL above the id=4 variable present and then also visit
	  https://josephmarino.net/portfolio/spamcube/?id=0 you'll see different tabs and content load
	  upon clicking each URL.
*/	
            if (isset($_GET["id"]) && trim($_GET["id"]) == '4') { echo ('<li>'); } else { echo('<li class="active">'); } 
?>
		<a href="#1" data-toggle="tab" id="sctab">Tab 1</a>
			</li>
		<li><a href="https://mydomain.com/login-area/" id="howtab">Tab 2</a>
			</li>
		<?php if (isset($_GET["id"]) && trim($_GET["id"]) == '4') { echo ('<li class="active">'); } else { echo('<li>'); } ?>
		<a href="#3" data-toggle="tab" id="newstab">Tab 3</a>
			</li>

		</ul>
	</div>

	<div class="tab-content">
		<div class="tab-pane <?php if (isset($_GET["id"]) && trim($_GET["id"]) == '4') { echo (''); } else { echo('active'); } ?>" id="1">

			<!-- spam cube product section (start) -->
			<p align="center">
				<picture>
					<source type="image/webp" srcset="/img/ss1.webp">
					<img src="/img/ss1.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss2.webp">
					<img src="/img/ss2.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss3.webp">
					<img src="/img/ss3.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss4.webp">
					<img src="/img/ss4.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss5.webp">
					<img src="/img/ss5.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss6.webp">
					<img src="/img/ss6.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss7.webp">
					<img src="/img/ss7.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss8.webp">
					<img src="/img/ss8.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss9.webp">
					<img src="/img/ss9.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss10.webp">
					<img src="/img/ss10.jpg" alt="Short description of what this image is" cclass="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss11.webp">
					<img src="/img/ss11.jpg" alt="Short description of what this image is" cclass="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
			</p>
			<!-- spam cube product section (end) -->

		</div>

		<div class="tab-pane <?php if (isset($_GET["id"]) && trim($_GET["id"]) == '4') { echo ('active'); } else { echo(''); } ?>" id="3">

			<!-- news & awards section (start) -->
			<p align="center">
				<picture>
					<source type="image/webp" srcset="/img/ss1.webp">
					<img src="/img/ss1.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss2.webp">
					<img id="nytimes-article" src="/img/ss2.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss3.webp">
					<img src="/img/ss3.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss4.webp">
					<img src="/img/ss4.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss5.webp">
					<img src="/img/ss5.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
				<picture>
					<source type="image/webp" srcset="/img/ss6.webp">
					<img src="/img/ss6.jpg" alt="Short description of what this image is" class="ss-max-width-1024px-max-height-768px img-responsive">
				</picture>
				<br>
			</p>
			<!-- news & awards section (end) -->
		</div>

	</div>

	<br><br>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/footer.php'); ?>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		document.getElementById('scroll-to-nyt')
			.addEventListener('click', function shownyt() {
				$('#newstab').trigger('click');
			} );
	} );
</script>
</body>
</html>