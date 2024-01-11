<?php require APPROOT."/views/incFile/header.php"; ?>


<div class=" bg-gray-50">
    
  <div class="h-screen  flex flex-col justify-center  ">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <img class="mx-auto h-20 w-auto" src="/wikis/public/img/logo/kisspng-wikipedia-logo-wikimedia-foundation-wikimedia-comm-5bf0aede4a9c48.1983645215425000623056.png" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Create  your account
      </h2>
     
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:roun ded-lg sm:px-10">


        <form method="POST"  class="max-w-md mx-auto">
          <div class="relative z-0 w-full mb-5 group">
              <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
              <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="username" id="adresse" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">User Name</label>
        </div>
        
          <div class="relative z-0 w-full mb-5 group"> 
          <div class="sm:col-span-3">
      
            
        </div>
        <div class=" flex justify-center items-center ">
        <button type="submit" name="add" class="text-white  bg-gray-700 mt-4  font-bold rounded-lg text-sm w-full sm:w-auto px-9 py-2.5 text-center ">Submit</button>
      </div>
        </form>

      </div>
    </div>

    
  </div>
  <footer
  class="flex flex-col items-center text-center text-white mt-48  bg-gray-700">
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
