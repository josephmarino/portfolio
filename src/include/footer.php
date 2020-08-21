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
?>
<footer>
  <div class="thin_hr"></div><br>
	<div class="footer-text">&copy; <?php echo date("Y"); ?>&nbsp; My name</div>
</footer><br>

<!-- load js libraries -->

<!-- jquery -->
<script defer src="/libs/jquery/v3.5.1/jquery.min.js"></script>

<!-- jquery advanced easing -->
<script defer src="/libs/jquery-easing/v1.4.1/jquery.easing.min.js"></script>
<script defer src="/libs/jquery-easing/smooth-scrolling.min.js"></script>

<!-- bootstrap -->
<script defer src="/libs/bootstrap/v3.4.1/js/bootstrap.min.js"></script>

<!-- analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=**INSERT_YOUR_GOOGLE_ANALYTICS_ID_HERE**"></script>

<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', '**INSERT_YOUR_GOOGLE_ANALYTICS_ID_HERE**');
</script>
