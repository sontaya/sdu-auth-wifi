<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Login | WiFi@Cafe</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Global Theme Styles -->
		<link href="<?php echo base_url('assets/themes/metronic-default/assets/vendors/base/vendors.bundle.css'); ?>" rel="stylesheet" type="text/css" />


		<link href="<?php echo base_url('assets/css/style.base.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/fonts/maledpan/font.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" type="text/css" />

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
								<h3 class="m-login__title">Sign In To WiFi@CAFE</h3>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="ชื่อผู้ใช้งาน" name="" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="รหัสเข้าใช้งาน" name="password">
								</div>

								<div class="m-login__form-action">
                    <button id="m_login_signin_submit" class="btn m-btn--pill m-btn m-btn--gradient-from-primary m-btn--gradient-to-info m-btn--wide">Sign In</button>
								</div>
							</form>
						</div>

						<footer class="footer">
							<div class="container-fluid clearfix text-center">
                <div class="text-muted d-block text-center text-sm-center d-sm-inline-block">
                  สงวนลิขสิทธิ์ © 2562 ฝ่ายเทคโนโลยีสารสนเทศและคอมพิวเตอร์ <br>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ
                </div>
							</div>
						</footer>

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
		<script>
			var base_url = '<?php echo base_url(); ?>';
		</script>
		<script src="<?php echo base_url('assets/js/auth.js'); ?>" type="text/javascript"></script>


		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
