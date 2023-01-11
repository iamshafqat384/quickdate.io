<?php
    $email = '';
    if( route(2) !== '' ){
        $email = strrev( base64_decode( route(2) ) );
    }
    if( $email == '' ){
        echo "<script>window.location = window.site_url + '/forgot';</script>";
    }
?>
<style>#nav-not-logged-in,.page-footer{display: none !important;visibility: hidden !important;}</style>
<!-- Header  -->
	<nav role="navigation">
        <div class="nav-wrapper container">
            <div class="left header_logo">
                <a id="logo-container" href="<?php echo $site_url;?>/" class="brand-logo"><img src="<?php echo $theme_url;?>assets/img/logo.png" /></a>
            </div>
            <ul class="right not_usr_nav">
                <li class="hide-on-med-and-down black-text"><?php echo __( 'Don\'t have an account?' ); ?></li>
				<li class="hide_mobi_login"><a href="<?php echo $site_url;?>/register" data-ajax="/register" class="btn-flat btn bold white waves-effect black-text"><?php echo __( 'Register' );?></a></li>
                <div class="show_mobi_login">
                    <a class="dropdown-trigger" href="#" data-target="log_in_dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#222" d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" /></svg></a>
                    <ul id="log_in_dropdown" class="dropdown-content">
                        <li><a href="<?php echo $site_url;?>/login" data-ajax="/login"><?php echo __( 'Login' );?></a></li>
                        <li><a href="<?php echo $site_url;?>/register" data-ajax="/register"><?php echo __( 'Register' );?></a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
<!-- End Header  -->
<!-- Login  -->
	
	<div class="container-fluid auth_bg_img">
		<div class="usr_circle sml" style="background-image: url(<?php echo $theme_url;?>assets/img/login-sm.jpg);"></div>
		<div class="usr_circle mdm" style="background-image: url(<?php echo $theme_url;?>assets/img/login-md.jpg);"></div>
		<div class="usr_circle mlr" style="background-image: url(<?php echo $theme_url;?>assets/img/login-ml.jpg);"></div>
		<div class="usr_circle lrg" style="background-image: url(<?php echo $theme_url;?>assets/img/forgot.jpg);"></div>
		<div class="container dt_login_bg">
			<div class="section">
				<div class="dt_login_con">
					<div class="row dt_login">
						<form method="POST" action="/Useractions/mailotp" class="register">
							<p><span class="bold"><?php echo __( 'Password recovery,' );?></span> <?php echo __( 'Please enter the verification code sent to your Email' );?></p>
							<div class="alert alert-success" role="alert" style="display:none;"></div>
							<div class="alert alert-danger" role="alert" style="display:none;"></div>
							<div class="enter_otp_email" style="display: block;margin: 0px;padding: 0px;border: 0px;">
								<div id="otp_outer" style="margin: 0px;">
									<div id="otp_inner">
										<input id="otp_check_forget_email" name="email_code" type="text" maxlength="4" value="" pattern="\d*" title="Field must be a number." onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required  /><br><br>
										<input type="hidden" name="email" value="<?php echo $email;?>">
										<a href="<?php echo $site_url;?>/forgot" data-ajax="/forgot"><?php echo __( 'Resend' );?></a>
									</div>
								</div>
							</div>

							<br>
							<div class="dt_login_footer valign-wrapper">
								<button class="btn btn-large waves-effect waves-light bold btn_primary btn_round" type="submit" name="action"><span><?php echo __( 'Login' );?></span> <svg viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path fill="currentColor" d="M18.6 6.9v-.5l-6-6c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l5 5H1c-.5 0-.9.4-.9.9s.4.8.9.8h14.4l-4 4.1c-.3.3-.3.9 0 1.2.2.2.4.2.6.2.2 0 .4-.1.6-.2l5.2-5.2h.2c.5 0 .8-.4.8-.8 0-.3 0-.5-.2-.7z"></path></svg></button>
							</div>
						</form>
					</div>		
				</div>
			</div>
		</div>
	</div>
<!-- End Login  -->