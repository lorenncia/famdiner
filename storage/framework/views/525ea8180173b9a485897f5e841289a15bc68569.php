<?php if($message = Session::get('success-swal')): ?>
    <script>
      swal("Success", '<?php echo e($message); ?>', "success");
    </script>
<?php endif; ?>

<?php if($message = Session::get('error-swal')): ?>
    <script>
      swal("Failed", '<?php echo e($message); ?>', "error");
    </script>
<?php endif; ?>

<?php if($message = Session::get('warning-swal')): ?>
    <script>
      swal("Warning", '<?php echo e($message); ?>', "warning");
    </script>
<?php endif; ?><?php /**PATH D:\Documents\SMT5\Web Prog\GSLC\resources\views/layouts/alert-swal.blade.php ENDPATH**/ ?>