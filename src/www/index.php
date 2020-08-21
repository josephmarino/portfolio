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
<title>My name | What I do</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta name="keywords" content="my name, what i do, other keywords i want to target"/>
<meta name="author" content="My name">
<meta name="robots" content="noarchive">
<link rel="canonical" href="https://mydomain.com">

<!-- Open Graph -->
<meta property="og:site_name" content="mydomain.com">
<meta property="og:title" content="My name">
<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
<meta property="og:type" content="website">
<meta property="og:image" content="/img/headshot.jpg">
<meta property="og:url" content="https://mydomain.com">

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/header.php'); ?>
</head>

<body id="page-top">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/nav.php'); ?><br><br><br><br>

	<div class="container">

		<!-- will appear only on sm md and lg screen sizes (contact and picture) -->

		<div class="col-xs-3 visible-sm visible-md visible-lg">
			<div class="pull-right">
				<picture>
					<source type="image/webp" srcset="/img/headshot.webp">
					<img src="/img/headshot.jpg" alt="A picture of My name" class="headshot img-responsive">
				</picture>
				<br>
				<div class="text-center">
					<!--- fontawesome linkedin svg icon -->
					<a href="https://www.linkedin.com/in/mylinkedin/" target="_blank" rel="noopener" aria-label="See my LinkedIn profile">
					<svg class="svg-linkedin-blue" width="35" height="35" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path d="M365 1414h231v-694h-231v694zm246-908q-1-52-36-86t-93-34-94.5 34-36.5 86q0 51 35.5 85.5t92.5 34.5h1q59 0 95-34.5t36-85.5zm585 908h231v-398q0-154-73-233t-193-79q-136 0-209 117h2v-101h-231q3 66 0 694h231v-388q0-38 7-56 15-35 45-59.5t74-24.5q116 0 116 157v371zm468-998v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"/>
					</svg></a>
					&nbsp;
					<a href="https://github.com/mygithub/" target="_blank" rel="noopener" aria-label="See my github">
						<!-- fontawesome github svg icon -->
						<svg width="35" height="35" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
							<path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z"/>
						</svg></a>
				</div>
			</div>
		</div>

		<!-- will appear only on xs screen sizes (contact and picture) -->

		<div class="visible-xs">
				<picture>
					<source type="image/webp" srcset="/img/headshot.webp">
					<img src="/img/headshot.jpg" alt="A picture of My name" class="headshot center-asset img-responsive">
				</picture>
			<br>
			<div class="text-center">
				<!--- fontawesome linkedin svg icon -->
				<a href="https://www.linkedin.com/in/mylinkedin/" target="_blank" rel="noopener" aria-label="See my LinkedIn profile">
					<svg class="svg-linkedin-blue" width="35" height="35" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path d="M365 1414h231v-694h-231v694zm246-908q-1-52-36-86t-93-34-94.5 34-36.5 86q0 51 35.5 85.5t92.5 34.5h1q59 0 95-34.5t36-85.5zm585 908h231v-398q0-154-73-233t-193-79q-136 0-209 117h2v-101h-231q3 66 0 694h231v-388q0-38 7-56 15-35 45-59.5t74-24.5q116 0 116 157v371zm468-998v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"/>
					</svg></a>
				&nbsp;
				<a href="https://github.com/mygithub/" target="_blank" rel="noopener" aria-label="See my github">
					<!-- fontawesome github svg icon -->
					<svg width="35" height="35" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z"/>
					</svg></a>
				<br><br>
			</div>
		</div>

		<div class="col-sm-8 visible-xs visible-sm visible-md visible-lg">
			<div class="open-sans-blue">
				<h1>About Me</h1>
			</div><br>
			<h4 class="open-sans-blue">Who I am</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
			<h4 class="open-sans-blue">What I've done in the past</h4>Duis aute irure dolor in reprehenderit in voluptate velit <a href="/portfolio/1/">esse cillum dolore eu fugiat</a> nulla pariatur. <a href="/portfolio/2/">Excepteur sint</a>, occaecat cupidatat non proident, sunt in <a href="/portfolio/3/">culpa qui</a>, officia deserunt mollit anim id est laborum.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			<div class="visible-xs visible-sm"><br>
			</div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>
			<h4 class="open-sans-blue">What I like to do outside of work</h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<div class="visible-xs visible-sm"><br>
			</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
		</div>
	</div>

	<br><br>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/../include/footer.php'); ?>
</body>
</html>