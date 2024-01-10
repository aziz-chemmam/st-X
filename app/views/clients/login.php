<?php require APPROOT."/views/incFile/header.php"; ?>

<div class="mt-48">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover">
            <img src="/wikis/public/img/logo/kisspng-wikipedia-logo-wikimedia-foundation-wikimedia-comm-5bf0aede4a9c48.1983645215425000623056.png" alt="">
        </div>
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Wikis</h2>
            <p class="text-xl text-gray-600 text-center">Welcome back!</p>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <a  class="text-xs text-center text-gray-500 uppercase">login</a>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" />
            </div>
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <a href="#" class="text-xs text-gray-500">Forget Password?</a>
                </div>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" />
            </div>
            <div class="mt-8">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="<?php echo URLROOT?>/pages/registration" class="text-xs text-gray-500 uppercase">or sign up</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </div>
    </div>
    <footer
  class="flex flex-col items-center text-center text-white mt-[65px]  bg-gray-700">
  <div class="container p-6">
    <div class="">
      <p class="flex items-center justify-center">
        <span class="mr-4">Register for free</span>
        <button
          type="button"
          class=" rounded-full border-2  px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-300 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-30"
          data-te-ripple-init
          data-te-ripple-color="light">
          Sign in!  
        </button>
      </p>
    </div>
  </div>

  <div
    class="w-full p-4 text-center"
    style="background-color: rgba(0, 0, 0, 0.2)">
    © 2024 Copyright:
    <a class="text-white" href="https://tw-elements.com/">TW elements</a>
   </div>
  </footer>
</div>
<?php require APPROOT."/views/incFile/footer.php"; ?>
