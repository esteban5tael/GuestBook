<?php $__env->startSection('title'); ?>
    Libro de Visitas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <?php if(session('success')): ?>
        <div class="row">
            <div class="col s12">
                <div class="card green lighten-2">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo e(session('success')); ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    

    
    <?php if($errors->any()): ?>
        <div class="row">
            <div class="col s12">
                <div class="card red lighten-2">
                    <div class="card-content white-text">
                        <span class="card-title">¡Ups! Hay errores en el formulario:</span>
                        <ul>
                            <!-- Mostrar cada error -->
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <form action="<?php echo e(route('guests.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="input-field col s3">
            <i class="material-icons prefix">account_circle</i>
            <label for="name">Nombres</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required>
        </div>

        <div class="input-field col s3">
            <i class="material-icons prefix">account_circle</i>
            <label for="lastname">Apellidos</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo e(old('lastname')); ?>" required>
        </div>

        <div class="input-field col s6">
            <i class="material-icons prefix">comment</i>
            <label for="subject">Motivo</label>
            <input type="text" name="subject" id="subject" value="<?php echo e(old('subject')); ?>" required>
        </div>

        <div class="row">
            <div class="col s12">
                <button class="waves-effect waves-light btn">
                    <i class="material-icons left">save</i>
                    Registrar
                </button>
            </div>
        </div>
    </form>
    <hr>

    <div class="row">
        <div class="col s12">
            <table class="striped" id="table" name="table">
                <caption>Listado de Visitantes de Hoy: <?php echo e(now()->format('Y/m/d')); ?> </caption>
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Movivo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($guest->name); ?></td>
                            <td><?php echo e($guest->lastname); ?></td>
                            <td><?php echo e($guest->subject); ?></td>
                            <td><?php echo e($guest->created_at); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php\laravel\facultadAutodidacta\GuestBook\resources\views/index.blade.php ENDPATH**/ ?>