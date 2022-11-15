
<?php $__env->startSection('title', 'HOME'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-image shadow-2-strong home-content">
   <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.8);">
     <div class="container d-flex align-items-center justify-content-center text-center h-100">
       <div class="text-white">
         <h1 class="mb-3">WELCOME TO FAMDINER</h1>
         <h5 class="mb-4">Serves the best food with wonderful experience</h5>
         <a class="btn btn-outline-light btn-lg m-2" href="{https://www.youtube.com/watch?v=c9B4TPnak1A}" role="button"
           rel="nofollow">OPEN MENU</a>
       </div>
     </div>
   </div>
 </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-extra'); ?>
   <style>
      .home-content{
         background-image: url('<?php echo e(asset('assets/images/background_home.jpg')); ?>');
         height: 100vh;
         background-size: 100%;
      }
   </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\SMT5\Web Prog\GSLC\resources\views/famdiner/home.blade.php ENDPATH**/ ?>