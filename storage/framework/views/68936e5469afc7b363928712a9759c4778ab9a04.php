<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>
        <nav>
            <p><a href="/homepage">Home</a></p>
            <a href="/movies">Movies List</a></p>
            <p><a href="/books">Books List</a></p>
        </nav>
    </header>

    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>

<?php /**PATH C:\Users\liusc\Desktop\gslcblade\resources\views/template.blade.php ENDPATH**/ ?>