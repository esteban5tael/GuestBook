<div class="container">
    <nav class="#00695c teal darken-3">
        <div class="nav-wrapper">
            <a href="<?php echo e(route('index')); ?>" class="brand-logo">
                <i class="large material-icons">book</i>
                Libro de Visitas Digital
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo e(route('guests.index')); ?>">Día</a></li>
                <li><a href="<?php echo e(route('guests.index', ['all' => true])); ?>">Historico</a></li>

            </ul>
        </div>
    </nav>
</div>
<?php /**PATH D:\xampp\htdocs\php\laravel\facultadAutodidacta\GuestBook\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>