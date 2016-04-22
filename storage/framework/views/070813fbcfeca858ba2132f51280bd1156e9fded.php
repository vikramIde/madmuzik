<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700' rel='stylesheet' type='text/css' />
	<!--  -->
	<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('/css/main.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" />
	<script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/jquery.flexslider.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/scripts.js')); ?>"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<style>
	.g-background-default {
				background-color: #F69028 !important;
	}
	</style>
</head>
<body>

	<div class="">
	<?php echo $__env->make('website.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('website.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</body>
</html>