<?php $__env->startSection('title', 'movies'); ?>

<?php $__env->startSection('content'); ?>
<title>Movies List</title>

    <?php $__currentLoopData = $movie_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <h1><?php echo e($movies->title); ?></h1>
    <img src=<?php echo e($movies->content_url); ?> alt="">
    <br>
        <h2><?php echo e($movies->text); ?></h2>
    <br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\liusc\Desktop\gslcblade\resources\views/movies.blade.php ENDPATH**/ ?>