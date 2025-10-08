<?php $__env->startSection('conteudo'); ?>
    <h2>Você está na view clientes</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($linha->nomeCompleto); ?></td>
                    <td><?php echo e($linha->cpf); ?></td>
                    <td><?php echo e($linha->dataNasc); ?></td>
                    <td><?php echo e($linha->email); ?></td>
                    <td><?php echo e($linha->endereco); ?></td>
                    <td><?php echo e($linha->sexo); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('template_admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\si\Desktop\Matérias 4 termo\laravel\laravel\site\resources\views/clientes/index.blade.php ENDPATH**/ ?>