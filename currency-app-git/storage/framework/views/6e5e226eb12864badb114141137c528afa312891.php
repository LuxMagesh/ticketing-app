

<?php $__env->startSection('content'); ?>
<div class="container mx-auto mt-20 px-4 pt-16">
    <div class="popular-movies mr-20 ml-20">
        <h2 class="animate-pulse uppercase tracking-wider transition ease-in-out delay-150 hover:-translate-300-y-1 hover:scale-110 text-gray-600 text-3xl hover:bg-red-900 md:hover:bg-transparent md:hover:text-red-900 md:p-0 md:dark:hover:text-blue-500 dark:text-slate-300 dark:hover:bg-gray-700 dark:hover:text-slate-300 md:dark:hover:bg-transparent font-semibold">Currencies</h2>
        <div class="grid lg:grid-cols-12 sm:grid-col-2 md:grid-cols-3 gap-4 bg-blue-600">
          </div>
          <div class="grid grid-rows-3 grid-flow-col gap-4 mt-4">
            <div class="row-span-3 ...">
            
            <svg width="256px" height="256px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="animate-pulse iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#292F33" d="M15.068 14.278c0-4.719-8.7-4.411-8.7-7.261c0-1.379 1.32-2.053 2.85-2.053c2.574 0 3.032 1.654 4.198 1.654c.824 0 1.223-.521 1.223-1.103c0-1.353-2.053-2.378-4.021-2.732V1.476a1.476 1.476 0 0 0-2.952 0v1.353c-2.147.489-3.992 1.978-3.992 4.404c0 4.532 8.698 4.349 8.698 7.532c0 1.103-1.193 2.207-3.155 2.207c-2.941 0-3.921-1.992-5.115-1.992c-.582 0-1.103.49-1.103 1.23c0 1.17 1.965 2.581 4.667 2.976l-.001.01v1.473a1.477 1.477 0 1 0 2.953 0v-1.473c0-.018-.008-.031-.009-.047c2.431-.453 4.459-2.039 4.459-4.871zm8.828 11.598h-4.104c-.688 0-1.227-.327-1.227-.985c0-.661.539-.99 1.227-.99h2.876l-4.792-7.399c-.298-.449-.449-.775-.449-1.195c0-.571.57-.99 1.049-.99c.481 0 .958.21 1.378.839l5.36 8.058l5.362-8.058c.419-.629.897-.839 1.378-.839c.477 0 1.046.419 1.046.99c0 .42-.148.746-.448 1.195L27.76 23.9h2.875c.689 0 1.229.329 1.229.99c0 .658-.539.985-1.229.985h-4.102v2.126h4.102c.689 0 1.229.332 1.229.99c0 .658-.539.987-1.229.987h-4.102v4.611c0 .868-.539 1.41-1.319 1.41c-.778 0-1.317-.542-1.317-1.41v-4.611h-4.104c-.688 0-1.227-.329-1.227-.987c0-.658.539-.99 1.227-.99h4.104v-2.125z"></path><path fill="#24f527" d="M23.875 6.125L17 2l4.125 6.875L17 13h11V2zm-14.75 23.75L16 34l-4.125-6.875L16 23H5v11z"></path></g></svg>
            
                
            </div>
            
            <div class="row-span-2 col-span-2 ...">
                <form action="<?php echo e(url('update-data/'.$currencies->id)); ?>" method="post" class="">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Curreny Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="<?php echo e($currencies->currency_name); ?>" id="currency_name" type="text" name="currency_name" placeholder="Example : Dollar">
                        
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Currency Code
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  value="<?php echo e($currencies->currency_code); ?>" id="currency_code" type="text" name="currency_code" placeholder="Example : $">
                      </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3 mb-2">
                      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <div class="md:w-full max-w-lg"></div>
                        <div class="md:w-full max-w-lg">
                          <button type="submit" class="bg-white mr-4 w-full max-w-lg hover:bg-blue-500 text-blue-700 font-semibold hover:text-slate-300 py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Update
                        </button>
                        </div>
                      </div>
                    </div>
                  </form>

            </div>
          </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\currency-app\resources\views/edit.blade.php ENDPATH**/ ?>