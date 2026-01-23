<!-- Sponsor Section - Infinite Scroll -->
<section class="py-12 bg-white border-y border-gray-100 overflow-hidden">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <p data-reveal class="text-center text-sm text-gray-500 mb-8 tracking-wider uppercase">Dipercaya oleh berbagai perusahaan & institusi</p>
    </div>

    <?php if($brands->count() > 0): ?>
    <!-- Infinite Scroll Container -->
    <div class="relative">
        <div class="flex animate-scroll">
            <!-- First Set of Sponsors -->
            <div class="flex items-center gap-16 px-8">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <?php if($brand->url): ?>
                    <a href="<?php echo e($brand->url); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo e($brand->logo); ?>" alt="<?php echo e($brand->name); ?>" class="max-h-10 w-auto object-contain">
                    </a>
                    <?php else: ?>
                    <img src="<?php echo e($brand->logo); ?>" alt="<?php echo e($brand->name); ?>" class="max-h-10 w-auto object-contain">
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Duplicate Set for Seamless Loop -->
            <div class="flex items-center gap-16 px-8">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-60 hover:opacity-100">
                    <?php if($brand->url): ?>
                    <a href="<?php echo e($brand->url); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo e($brand->logo); ?>" alt="<?php echo e($brand->name); ?>" class="max-h-10 w-auto object-contain">
                    </a>
                    <?php else: ?>
                    <img src="<?php echo e($brand->logo); ?>" alt="<?php echo e($brand->name); ?>" class="max-h-10 w-auto object-contain">
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <?php else: ?>
    <!-- Empty State -->
    <div class="text-center py-8">
        <p class="text-gray-400 text-sm">No brands available at the moment.</p>
    </div>
    <?php endif; ?>
</section><?php /**PATH C:\laragon\www\apex-works\resources\views/frontend/section/brands.blade.php ENDPATH**/ ?>