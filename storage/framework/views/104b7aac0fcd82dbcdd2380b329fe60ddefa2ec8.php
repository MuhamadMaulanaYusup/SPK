<?php $__env->startSection('title','| Detail Pelamar'); ?>
<?php $__env->startSection('lowonganActive','active'); ?>

<?php $__env->startSection('script'); ?>

<!-- Theme JS files -->
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/visualization/d3/d3.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/visualization/d3/d3_tooltip.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')); ?>">
</script>
<script type="text/javascript"
    src="<?php echo e(asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/moment/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/pickers/daterangepicker.js')); ?>">
</script>
<link href="<?php echo e(asset('template/material/assets/css/icons/fontawesome/styles.min.css')); ?>" rel="stylesheet"
    type="text/css">
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/core/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/media/fancybox.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/pages/components_thumbnails.js')); ?>"></script>
<script src="https://cdnjs.com/libraries/pdf.js"></script>


<script type="text/javascript" src="<?php echo e(asset('template/material/assets/js/plugins/ui/ripple.min.js')); ?>"></script>
<!-- /theme JS files -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <a href="<?php echo e(url('admin/lowongan')); ?>"><i class="icon-arrow-left52 position-left"></i></a>
                <span class="text-semibold">Admin</span> - Detail Pelamar
                <small class="display-block">Hello, <?php echo e(Auth::user()->name); ?>!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Detail Pelamar<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                </h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <?php echo $__env->make('admin.pelamar.identitas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Berkas<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                </h6>
            </div>

            <div class="panel-body">
                <?php switch(app('request')->input('file')):
                case ('cv'): ?>
                <?php echo $__env->make('admin.pelamar.cv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php case ('lamaran'): ?>
                <?php echo $__env->make('admin.pelamar.lamaran', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php case ('ijasah'): ?>
                <?php echo $__env->make('admin.pelamar.ijasah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
                <?php default: ?>

                <?php endswitch; ?>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Program Proyek Akhir\SPK\resources\views/admin/pelamar/show.blade.php ENDPATH**/ ?>