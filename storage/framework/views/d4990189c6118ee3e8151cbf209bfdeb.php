
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('The list of Products')); ?>

            <span><a href="<?php echo e(url('add-product')); ?>" class="btn btn-primary">create</a></span>
        </h2>
     <?php $__env->endSlot(); ?>


<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if (isset($component)) { $__componentOriginalc7125c02bcfdcb31f42cc057bc670038 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7125c02bcfdcb31f42cc057bc670038 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.success-status','data' => ['class' => 'mb-4','status' => session('success')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('success-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('success'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7125c02bcfdcb31f42cc057bc670038)): ?>
<?php $attributes = $__attributesOriginalc7125c02bcfdcb31f42cc057bc670038; ?>
<?php unset($__attributesOriginalc7125c02bcfdcb31f42cc057bc670038); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7125c02bcfdcb31f42cc057bc670038)): ?>
<?php $component = $__componentOriginalc7125c02bcfdcb31f42cc057bc670038; ?>
<?php unset($__componentOriginalc7125c02bcfdcb31f42cc057bc670038); ?>
<?php endif; ?>
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Product Description</th>
                      <th>Product Price</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <?php $__empty_1 = true; $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tbody>
                    <tr>
                        <td><?php echo e($products->id); ?></td>
                        <td><?php echo e($products->name); ?></td>
                        <td><?php echo e($products->description); ?></td>
                        <td><?php echo e($products->price); ?></td>
                        <td>
                            <a href="<?php echo e(url('/edit-product/'.$products->id)); ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="<?php echo e(url('/delete-product/'.$products->id)); ?>" method="POST" class="btn btn-danger">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button>Delete</button>
                            </form>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td colspan="6">No More Records</td>
                      </tr>
                    <?php endif; ?>
                   </tbody>
               </table>
            </div>
        </div>

</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\chirper\resources\views/products/index.blade.php ENDPATH**/ ?>