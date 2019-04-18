<!DOCTYPE html>

<html lang="en" xml:lang="en">
<head>
	<meta charset="UTF-8" />

		<title>Compiler_test</title>
	<meta name="keywords" content="online compiler, online ide, learn programming online, programming online, run code online, snippet, snippets, pastebin, online debugging tool, online interpreter, run your code online, run code, execute code, C++, Java, Python" />
	<meta property="og:site_name" content="Ideone.com"/>
	<meta property="og:image" content="http://profile.ak.fbcdn.net/hprofile-ak-prn1/50232_245768360841_3377786_q.jpg"/>
	<meta property="og:description" content="Ideone is something more than a pastebin; it's an online compiler and debugging tool which allows to compile and run code online in more than 40 programming languages."/>
	<meta property="og:title" content="Ideone.com"/>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


				<link href="//ideone.com/gfx2/libs/bootstrap/css/bootstrap-with-responsive-960-only.min.css" rel="stylesheet"/>


		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	






	<style>
	[class^="icon-"], [class*=" icon-"] {
		display: inline;
		width: auto;
		height: auto;
		
		vertical-align: baseline;
		background-image: none;
		background-position: 0% 0%;
		background-repeat: repeat;
		margin-top: 0;
	}
	a [class^="icon-"], a [class*=" icon-"] {
		display: inline;
	}
	</style>


	<link href="/gfx2/libs/fontello-8f7d2dfe/css/fontello.css" rel="stylesheet"/>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/gfx2/libs/fontello-8f7d2dfe/css/fontello-ie7.min.css">
	<![endif]-->


	<link href="//ideone.com/themes/smoothness/jquery-ui-1.10.1.custom.min.css" type="text/css" rel="stylesheet"/> <!-- jak sie wrzuci do bundle to nie dziala -->
	<!-- <link href="/gfx2/css/jquery-ui-bootstrap/jquery-ui-1.10.0.custom.css" type="text/css" rel="stylesheet" /> --> <!-- mozna ew wlaczyc zamiast tego powyzej -->

	<!-- 2013-02-07 by wiele: na czas develu wyrzucam to z bundle zeby moc latwiej debugowac w firebugu -->

	<link href="//ideone.com/gfx2/css/ideone-1-2.css?10" rel="stylesheet"/>
	<link href="//ideone.com/gfx2/css/ideone-recent.css?8" rel="stylesheet"/>
	<link href="//ideone.com/gfx2/css/ideone-myrecent.css?8" rel="stylesheet"/>
	<link href="//ideone.com/gfx2/css/ideone-view.css?8" rel="stylesheet"/>
	<!-- end of rzeczy przeniesione tymczasowo z bundle -->

	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery-1.9.1.min.js?8"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery-migrate-1.0.0.js?7"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery-custom-file-input.js?7"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/clipboard.min.js"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery.dirtyforms.min.js"></script>

 


	<script type="text/javascript">

		var cookie_name = 'settings';
		var cookie_time = 15552000;
		var is_mobile = 0;
		<!-- s -->

				var ace_options = {};
			</script>



	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery-ui-1.10.1.custom.min.js"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/libs/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery.cookie.js?9"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery.ajaxmanager.js?8"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/jquery.textarea.js"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/Base64.js?9"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/json2.js?9"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/libs/ace-2017-06/ace.js?1" data-ace-base="/gfx2/libs/ace-2017-06"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/ideone-common-cookie-helper.js?8"></script>
	<script type="text/javascript" src="//ideone.com/gfx2/js/ideone-common.js?7"></script>
	<!-- end of rzeczy przeniesione tymczasowo z bundle -->

</head>


<body class="  not-responsive">
<h1><center>Compile the program</center></h1>
	<div id="_container">
<noscript><div id="js_required" class="alert alert-error" style="margin-bottom: 0px">Ideone.com requires JavaScript to work.</div></noscript>


<div class="container" style="padding: 0; margin-top: 0; margin-bottom: 0;">

</div>

<div class="container">

	<br/><br/>
    <div class="row" style="color: #333;">

        <div class="col-md-6 span6">


<script>SEC_BASE = "compilers.widgets.sphere-engine.com";
SEC_HTTPS = true;
(function(d, s, id){
  SEC = window.SEC || (window.SEC = []);
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = (SEC_HTTPS ? "https" : "http") + "://compilers.widgets.sphere-engine.com/static/sdk/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "sphere-engine-compilers-jssdk"));</script>


                <div style="height: 500px">
                        <div class="sec-widget" data-widget="6d2090af94196903915268188962e183"></div>
                </div>

        </div>
</div>

</div>





<div class="modal hide fade" id="bug-dialog" role="dialog" tabindex="-1">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Report bug / make suggestion</h3>
  </div>
  <div class="modal-body">
	<img src="//ideone.com/gfx/loader.gif" style="width: 14px; height: 14px;" alt="loading..."/>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
    <a href="#" class="btn btn-primary" id="bug-dialog-submit">submit</a>
  </div>
</div>


<div class="modal hide fade" id="lang-dialog">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    	<h3>Choose your language</h3>
	</div>
	<div class="modal-body">
		<ul style="list-style-type: none;">
			<li><a href="/lang/en"><b>English</b></a></li>
			<li><a href="/lang/hi">Hindi</a></li>
			<li><a href="/lang/hu">Hungarian</a></li>
			<li><a href="/lang/mn">Mongolian</a></li>
			<li><a href="/lang/pl">Polish</a></li>
			<li><a href="/lang/ru">Russian</a></li>
			<li><a href="/lang/es">Spanish</a></li>
			<li><a href="/lang/zh">Traditional Chinese</a></li>
					</ul>

	</div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">close</a>
  </div>
</div>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-10507872-8', 'auto');
  ga('send', 'pageview');
</script>





	</body>
</html>
