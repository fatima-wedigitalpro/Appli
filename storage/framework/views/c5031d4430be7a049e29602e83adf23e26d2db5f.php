<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    </head>
    <body>
            <div class="content" id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><?php echo e(__('New Survey')); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="<?php echo e(route('sujet.create', app()->getLocale())); ?>"><?php echo e(__('Subject')); ?></a>
                        <a class="nav-link" href="#"><?php echo e(__('Visualization')); ?></a>
                        <a class="nav-link" href="<?php echo e(route('compagne.voir', app()->getLocale())); ?>"><?php echo e(__('Companion')); ?></a>
                        <a class="nav-link" href="<?php echo e(route('user.user', app()->getLocale())); ?>"><?php echo e(__('Users')); ?></a>
                        
                    </div>
                    </div>
                </div>
                <div class="navbar-nav">
                  <ul>
                    <li class="nav-link">
                                <language-switcher
                                    locale="<?php echo e(app()->getLocale()); ?>"
                                    link-en="<?php echo e(route(Route::currentRouteName(), 'en')); ?>"
                                    link-fr="<?php echo e(route(Route::currentRouteName(), 'fr')); ?>"
                                ></language-switcher>
                            </li>
                  </ul>
                </div>
                </nav>
                <div>
                <?php echo $__env->yieldContent('content'); ?>
               </div>
        </div>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
       
    </body>
</html>
<?php /**PATH C:\Users\yahya\Desktop\myapp\resources\views/layout.blade.php ENDPATH**/ ?>