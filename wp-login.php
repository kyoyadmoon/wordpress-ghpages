<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-TW">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>dmoon-test &lsaquo; 登入</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' href='/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.7.2' type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login login-action-login wp-core-ui  locale-zh-tw">
		<div id="login">
		<h1><a href="http://tw.wordpress.org/" title="本站採用 WordPress 建置" tabindex="-1">dmoon-test</a></h1>
	
<form name="loginform" id="loginform" action="/wp-login.php" method="post">
	<p>
		<label for="user_login">使用者名稱或電子郵件地址<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">密碼<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 記住我</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登入" />
		<input type="hidden" name="redirect_to" value="/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="/wp-login.php?action=lostpassword">忘了密碼？</a>
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

	<p id="backtoblog"><a href="/">&larr; 返回 dmoon-test</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	