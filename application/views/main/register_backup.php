<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Wifi | Register & Login</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="<?php echo base_url('assets/themes/metronic-default/assets/vendors/base/vendors.bundle.css'); ?>" rel="stylesheet" type="text/css" />


		<link href="<?php echo base_url('assets/themes/metronic-default/assets/demo/default/base/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login"
                style="background-image: url(<?php echo base_url('assets/images/bg-3.jpg'); ?>);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="<?php echo base_url('assets/images/sdu-logo-h120.png'); ?>">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In To ...</h3>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--focus">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div>
								<div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn m-btn--pill m-btn m-btn--gradient-from-primary m-btn--gradient-to-info m-btn--wide">Sign In</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">ลงทะเบียนเข้าใช้งาน Wi-Fi</h3>
								<div class="m-login__desc">Enter your details to create your account:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="หมายเลขบัตรประจำตัวประชาชน" name="regis_idcard" id="regis_idcard" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="ชื่อ" name="regis_name" id="regis_name" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="นามสกุล" name="regis_surname" id="regis_surname" autocomplete="off" >
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="อีเมล์" name="regis_email" id="regis_email" autocomplete="off" >
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
                                <button id="m_login_signup_submit" class="btn m-btn--pill m-btn m-btn--gradient-from-primary m-btn--gradient-to-info m-btn--wide">ลงทะเบียนเข้าใช้งาน</button>
                                &nbsp;&nbsp;
                                <button id="m_login_signup_cancel" type="button" class="btn m-btn--pill    btn-outline-warning m-btn m-btn--custom m-btn--outline-2x">ยกเลิก</button>

								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">Request</button>&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">ลงทะเบียนเข้าใช้งาน</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin::Global Theme Bundle -->
		<script src="<?php echo base_url('assets/themes/metronic-default/assets/vendors/base/vendors.bundle.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/themes/metronic-default/assets/demo/default/base/scripts.bundle.js'); ?>" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="<?php echo base_url('assets/js/auth.full.js'); ?>" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>