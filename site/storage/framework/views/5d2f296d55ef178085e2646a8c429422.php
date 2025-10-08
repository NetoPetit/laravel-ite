<?php $__env->startSection('conteudo'); ?>
    <h2>Você está na view carros</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($linha->marca); ?></td>
                    <td><?php echo e($linha->modelo); ?></td>
                    <td><?php echo e($linha->ano_fabricacao); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\si\Desktop\Matérias 4 termo\laravel\laravel\site\resources\views/carros/index.blade.php ENDPATH**/ ?>