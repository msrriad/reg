<?php
require_once 'header.php';

if($_REQUEST['submit']){
	if( ($_REQUEST['email'] === 'admin@bphs.com') && (md5($_REQUEST['password']) === md5('secrete')) ){
		$_SESSION['email'] = 'admin@bphs.com';
		$_SESSION['password'] = md5('secrete');
		header('Location: admin.php');
	}else{
		header('Location: login.php?error=Email or password incorrect.');
	}
}
?>
    <!-- Begin page content -->
    <div class="container">

	    <form class="form-signin" action="" method="post">
    		<h2 class="form-signin-heading">Please sign in</h2>
	    	<?php echo (@$_REQUEST['error']) ? $_REQUEST['error'] : ''; ?>
    		<label for="inputEmail" class="sr-only">Email address</label>
    		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    		<label for="inputPassword" class="sr-only">Password</label>
    		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    		<div class="checkbox">
    			<label>
    				<input type="checkbox" value="remember-me"> Remember me
    			</label>
    		</div>
    		<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
    	</form>
    </div>
<?php require_once 'footer.php'; ?>

