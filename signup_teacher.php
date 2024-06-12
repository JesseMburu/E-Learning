<?php include('header.php'); ?>
  <body id="login">
    <div class="container">
	<div class="row-fluid">
	<div class="span6">
		<div class="title_index">
			<?php include('title_index.php'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="pull-right">
				<?php include('signup_teacher_form.php'); ?>
		</div>
	</div>
    </div>
	<div class="row-fluid">
		<div class="span12">
			<div class="index-footer">
				<?php include('link.php'); ?>
			</div>
		</div>
	</div>
		   <!-- /container -->
		<?php include('footer.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
<script>
    jQuery(document).ready(function () {
        jQuery("#signin_teacher").submit(function (e) {
            e.preventDefault();

            var password = jQuery('#password').val();
            var cpassword = jQuery('#cpassword').val();

            if (password === cpassword) {
                var formData = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "signup_teacher.php",
                    data: formData,
                    success: function (html) {
                        if (html === 'true') {
                            $.jGrowl("Welcome to FJS Learning Management System", { header: 'Sign up Success' });
                            var delay = 2000;
                            setTimeout(function () {
                                window.location = 'dashboard_teacher.php';
                            }, delay);
                        } else if (html === 'false') {
                            $.jGrowl("Teacher not found in the database. Please check your ID Number, Firstname, and Lastname.", { header: 'Sign Up Failed' });
                        }
                    }
                });
            } else {
                $.jGrowl("Passwords do not match", { header: 'Sign Up Failed' });
            }
        });
    });
</script>
  </body>
</html>