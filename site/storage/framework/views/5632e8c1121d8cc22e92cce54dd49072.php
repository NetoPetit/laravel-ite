<?php $__env->startSection('conteudo'); ?>

    <h2>Cadastrar novo carro</h2>

    <div class="container">
        <form action="<?php echo e(route('carros.novo')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <span>Marca</span>
                <input type="text" name="marca" id="marca">
            </div><div class="row">
                <span>Modelo< /span>
                <input type="text" name="modelo" id="modelo">
            </div>
            <div class="row">
                <span>Cor</span>
                <input type="text" name="cor" id="cor">
            </div>
            <div class="row">
                <span>Ano Fabricação</span>
                <input type="text" name="ano_fabricacao" id="ano_fabricacao">
            </div>
            <div class="row">
                <input type="submit" title="SALVAR" class="btn btn-success">
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\si\Desktop\Matérias 4 termo\laravel\laravel\site\resources\views/carros/cadastrar.blade.php ENDPATH**/ ?>