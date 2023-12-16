<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-400">
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="<?php echo e(url('/')); ?>" >
                <svg height="200px" width="200px" version="1.1" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110" style="height:65px!important;width:65px!important" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 451 451" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#33e636;" d="M434.741,290.023c-27.015,0.877-48.853,22.717-49.717,49.721L384.759,348H443v-58.244 L434.741,290.023z"></path> <path style="fill:#33e636;" d="M384.759,103l0.264,8.256c0.865,27.004,22.703,48.844,49.717,49.721l8.259,0.268V103H384.759z"></path> <path style="fill:#EFEFEF;" d="M435.187,160.962c-27.476-0.643-49.508-22.672-50.16-50.151L384.842,103H66.145l-0.183,7.813 c-0.643,27.479-22.671,49.507-50.149,50.149L8,161.145v128.711l7.813,0.183c27.478,0.643,49.506,22.671,50.149,50.149L66.145,348 h318.697l0.185-7.811c0.651-27.479,22.684-49.509,50.16-50.151l7.813-0.183v-128.71L435.187,160.962z"></path> <path style="fill:#33e636;" d="M65.975,339.741c-0.875-27.003-22.713-48.842-49.716-49.718L8,289.756V348h58.243L65.975,339.741z"></path> <path style="fill:#33e636;" d="M8,103v58.244l8.259-0.268c27.003-0.876,48.841-22.715,49.716-49.718L66.243,103H8z"></path> <g> <path d="M134.83,222.23V169.5h11c4.42,0,8-3.58,8-8s-3.58-8-8-8h-11v-12c0-4.42-3.58-8-8-8s-8,3.58-8,8v12h-10v-12 c0-4.42-3.58-8-8-8s-8,3.58-8,8v12.14C75.58,155.16,62,169.69,62,187.33v16.34c0,17.64,13.58,32.17,30.83,33.69v52.14h-15 c-4.42,0-8,3.58-8,8s3.58,8,8,8h15v15c0,4.42,3.58,8,8,8s8-3.58,8-8v-15h10v15c0,4.42,3.58,8,8,8s8-3.58,8-8v-15.73 c15.31-3.24,26.83-16.85,26.83-33.1v-16.34C161.66,239.08,150.14,225.47,134.83,222.23z M92.83,221.23 C84.42,219.79,78,212.48,78,203.67v-16.34c0-8.81,6.42-16.12,14.83-17.56V221.23z M118.83,289.5h-10v-52h10V289.5z M118.83,221.5 h-10v-52h10V221.5z M145.66,271.67c0,7.35-4.47,13.67-10.83,16.4v-49.14c6.36,2.73,10.83,9.05,10.83,16.4V271.67z"></path> <path d="M342,204.33v13.17h19c4.42,0,8,3.58,8,8s-3.58,8-8,8h-19v16h19c4.42,0,8,3.58,8,8c0,4.42-3.58,8-8,8h-19v55 c0,4.42-3.58,8-8,8s-8-3.58-8-8v-55h-21c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8h21v-16h-21c-4.42,0-8-3.58-8-8s3.58-8,8-8h21 v-13.17l-40.23-49.8c-2.77-3.44-2.24-8.48,1.2-11.25c3.44-2.78,8.48-2.25,11.25,1.19l35.78,44.3l35.77-44.3 c2.78-3.43,7.82-3.97,11.25-1.19c3.44,2.77,3.98,7.81,1.2,11.25L342,204.33z"></path> <path d="M261.5,208.5c0,4.42-3.58,8-8,8h-48c-4.42,0-8-3.58-8-8s3.58-8,8-8h48C257.92,200.5,261.5,204.08,261.5,208.5z"></path> <path d="M261.5,241.5c0,4.42-3.58,8-8,8h-48c-4.42,0-8-3.58-8-8s3.58-8,8-8h48C257.92,233.5,261.5,237.08,261.5,241.5z"></path> <path d="M192.66,220.84c3.12,3.13,3.12,8.19,0,11.32c-1.57,1.56-3.61,2.34-5.66,2.34s-4.1-0.78-5.66-2.34l-20-20 c-3.12-3.13-3.12-8.19,0-11.32l20-20c3.13-3.12,8.19-3.12,11.32,0c3.12,3.13,3.12,8.19,0,11.32l-14.35,14.34L192.66,220.84z"></path> <path d="M293.66,248.16l-20,20c-1.57,1.56-3.61,2.34-5.66,2.34c-2.05,0-4.1-0.78-5.66-2.34c-3.12-3.13-3.12-8.19,0-11.32 l14.34-14.34l-14.34-14.34c-3.12-3.13-3.12-8.19,0-11.32c3.13-3.12,8.19-3.12,11.32,0l20,20 C296.78,239.97,296.78,245.03,293.66,248.16z"></path> <path d="M443,95H8c-4.42,0-8,3.58-8,8v245c0,4.42,3.58,8,8,8h435c4.42,0,8-3.58,8-8V103C451,98.58,447.42,95,443,95z M16,111 h41.979C57.24,133.82,38.82,152.24,16,152.98V111z M16,340v-41.98c22.82,0.74,41.24,19.16,41.979,41.98H16z M435,340h-41.98 c0.73-22.82,19.16-41.24,41.98-41.98V340z M435,282.04c-31.64,0.74-57.22,26.32-57.97,57.96H73.96 c-0.74-31.64-26.33-57.22-57.96-57.96V168.96c31.63-0.74,57.22-26.32,57.96-57.96h303.07c0.75,31.64,26.33,57.22,57.97,57.96 V282.04z M435,152.98c-22.82-0.74-41.25-19.16-41.98-41.98H435V152.98z"></path> </g> </g> </g></svg>
              </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col md:flex-row p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                  
                  <li class="md:ml-6">
                    <a href="<?php echo e(url('/')); ?>" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Currencies</a>
                  </li>
                  
                  <div class="li md:ml-6">
                    <div class="relative px-10">
                        <input type="text" class="bg-gray-400 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                        <div class="absolute top-0">
                            
                            <svg viewBox="0 0 24 24" class="fill-current w-8 text-gray-900" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#908e8e"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15 10.5C15 12.9853 12.9853 15 10.5 15C8.01472 15 6 12.9853 6 10.5C6 8.01472 8.01472 6 10.5 6C12.9853 6 15 8.01472 15 10.5ZM14.1793 15.2399C13.1632 16.0297 11.8865 16.5 10.5 16.5C7.18629 16.5 4.5 13.8137 4.5 10.5C4.5 7.18629 7.18629 4.5 10.5 4.5C13.8137 4.5 16.5 7.18629 16.5 10.5C16.5 11.8865 16.0297 13.1632 15.2399 14.1792L20.0304 18.9697L18.9697 20.0303L14.1793 15.2399Z" fill="#0087 Icon Size  200px Padding  0% Thickness  0% Line Color  #908e8e Flip/Mirror Rotation Diagonal BG Shape Trace Width  0%8a"></path> </g></svg>
                            
                        </div>
                        
                    </div>
                  </div>
                  <div class="li md:ml-6">
                  
                    <div class="ml-1">
                      <a href="#" >
                        <img src="img/avatar.PNG" alt="avatar" class="rounded-full w-8 h-8 border border-gray-400">
                      </a>
                    </div>
                  </div>
                </ul>
              </div>
        </div>
      </nav>
      <?php echo $__env->yieldContent('content'); ?>
</body>
</html>


  <?php /**PATH C:\xampp\htdocs\currency-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>