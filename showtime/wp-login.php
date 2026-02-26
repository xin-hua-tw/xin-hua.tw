<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-TW">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>XinHua Offical webside &rsaquo; 登入</title>
	<link rel='stylesheet' id='buttons-css'  href='/showtime/wp-includes/css/buttons.min.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='/showtime/wp-includes/css/dashicons.min.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='/showtime/wp-admin/css/login.min.css?ver=4.2.2' type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	</head>
	<body class="login login-action-login wp-core-ui  locale-zh-tw">
	<div id="login">
		<h1><a href="http://tw.wordpress.org/" title="本網誌使用 WordPress 建置" tabindex="-1">XinHua Offical webside</a></h1>
	
<form name="loginform" id="loginform" action="/showtime/wp-login.php" method="post">
	<p>
		<label for="user_login">帳號<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">密碼<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 記住我</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登入" />
		<input type="hidden" name="redirect_to" value="/showtime/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="/showtime/wp-login.php?action=lostpassword" title="密碼招領">忘了密碼？</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/showtime/" title="你迷路了？">&larr; 回到 XinHua Offical webside</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	