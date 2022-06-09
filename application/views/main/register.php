<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Wifi | Register & Login</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Global Theme Styles -->
		<link href="<?php echo base_url('assets/themes/metronic-default/assets/vendors/base/vendors.bundle.css'); ?>" rel="stylesheet" type="text/css" />


		<link href="<?php echo base_url('assets/css/style.base.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/fonts/maledpan/font.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->
		<!-- <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" /> -->
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

						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">ลงทะเบียนเข้าใช้งาน Wi-Fi</h3>
							</div>
							<form id="FrmRadiusRegister" class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="หมายเลขบัตรประจำตัวประชาชน" name="regis_idcard" id="regis_idcard" autocomplete="off" value="">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="ชื่อ" name="regis_name" id="regis_name" autocomplete="off" value="">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="นามสกุล" name="regis_surname" id="regis_surname" autocomplete="off" value="">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="อีเมล์" name="regis_email" id="regis_email" autocomplete="off" value="">
								</div>
								<!-- <div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--success">
											<input type="checkbox" name="agree">ฉันยอมรับ <a href="#" id="m_login_agreement" class="m-link m-link--focus">ข้อตกลงและเงื่อนไขในการใช้บริการ</a>.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div> -->
								<div class="m-login__form-action">
                                <button id="m_login_signup_submit" class="btn m-btn--pill m-btn m-btn--gradient-from-primary m-btn--gradient-to-info m-btn--wide">ลงทะเบียนเข้าใช้งาน</button>
                                &nbsp;&nbsp;
                                <button id="m_login_signup_cancel" type="button" class="btn m-btn--pill    btn-outline-warning m-btn m-btn--custom m-btn--outline-2x">ยกเลิก</button>

								</div>
							</form>
						</div>

						<div class="m-login__agreement">
							<div class="m-login__head">
								<h3 class="m-login__title">Agreement</h3>

							</div>

						</div>
						<div class="m-login__AccountInfo">

							<div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
								<div class="m-alert__icon">
									<i class="flaticon-safe-shield-protection"></i>
									<span></span>
								</div>
								<div class="m-alert__text">
									<div>
										<h3>ลงทะเบียนเรียบร้อย</h3>
									</div>
									<hr>
									<div>
										ชื่อผู้ใช้ : <h4 id="account_user" style="margin-left:30px;"></h4>
									</div>
									<div>
										รหัสผ่าน : <h4 id="account_password" style="margin-left:30px;"></h4>
									</div>
									<div>
										สามารถใช้งานได้ถึง : <span id="account_expire"></span>
									</div>
                  <div class="m--align-center mt-2">
                    <input type=button name="go_login" value="ไปยังหน้า Login" id="go_login" onClick="javascript:window.location.href='http://wifi.dusit.ac.th';" class="btn m-btn--pill m-btn m-btn--gradient-from-success m-btn--gradient-to-info m-btn--wide">
									</div>
									<hr>
									<div class="m--align-center m--font-danger">
									  <em>กรุณาเก็บข้อมูลผู้ใช้งานไว้เป็นความลับ !!</em>
									</div>




								</div>
							</div>

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
