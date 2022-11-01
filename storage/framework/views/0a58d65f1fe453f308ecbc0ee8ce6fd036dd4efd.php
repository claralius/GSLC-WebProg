<?php $__env->startSection('title', 'books'); ?>

<?php $__env->startSection('content'); ?>
<title>Books List</title>

    <?php $__currentLoopData = $book_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <h1><?php echo e($books->title); ?></h1>
        <img src=<?php echo e($books->content_url); ?> alt="">
        <br>
           <h2><?php echo e($books->text); ?></h2>
        <br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\liusc\Desktop\gslcblade\resources\views/books.blade.php ENDPATH**/ ?>