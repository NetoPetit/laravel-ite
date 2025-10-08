<?php $__env->startSection('conteudo'); ?>

    <h1>Cadastro de Cliente</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($erro); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form action="<?php echo e(route('cliente.novo')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="nomeCompleto" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Digite seu nome" value="<?php echo e(old('nomeCompleto')); ?>">
        </div>
        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" value="<?php echo e(old('cpf')); ?>">
        </div>
        <div class="mb-3">
          <label for="dataNasc" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control" id="dataNasc" name="dataNasc" value="<?php echo e(old('dataNasc')); ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?php echo e(old('email')); ?>">
        </div>
        <div class="mb-3">
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Sexo</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" value="<?php echo e(old('endereco')); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\si\Desktop\Matérias 4 termo\laravel\site\resources\views/clientes/cadastro.blade.php ENDPATH**/ ?>