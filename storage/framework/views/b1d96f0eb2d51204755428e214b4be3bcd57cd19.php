<?php $__env->startSection('content'); ?>
        

        <div class="w-full lg:w-3/4 bg-white mb-4">
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                <span class="text-black">New Post</span>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <form class="w-full ml-4 mb-10"
                      method="POST"
                      action="<?php echo e(route('store-post')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="flex items-center border-b border-b-2 border-yesayasoftware py-2 mb-4 mr-4">
                        <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                               type="text"
                               name="title"
                               placeholder="Building a blog with Laravel"
                               aria-label="Post Title">
                    </div>

                    <div class="flex items-center border-b border-b-2 border-yesayasoftware py-2 mb-4 mr-4">
                        <select name="category_id"
                                id="category_id"
                                class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                                required
                                title="Category">
                            <option value="">
                                Choose Category...
                            </option>

                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"
                                        <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                                    <?php echo e($category->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="flex items-center py-2 mb-4">
                        <wysiwyg name="body" class="w-full mr-4"></wysiwyg>
                    </div>

                    <div class="flex items-center py-2 mb-4">
                        <button class="fill-btn">
                            Publish
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <?php echo $__env->make('partials._trending', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>