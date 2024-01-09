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


        <form method="POST" class="max-w-md mx-auto">
          <div class="relative z-0 w-full mb-5 group">
              <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
              <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="adresse" id="adresse" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">User Name</label>
        </div>
        
          <div class="relative z-0 w-full mb-5 group"> 
          <div class="sm:col-span-3">
            <label for="country" class="block text-sm font-medium text-gray-700">
              Picture (Optional)
            </label>
            <div >

            <div class="mt-1 flex justify-center bg-white px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="flex text-sm text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer  rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span>Upload a file</span>
                    <input id="userImg" name="userImg" type="file" class="sr-only w-[770px]">

              </div>
            </div>
          </div>
          </div>
        </div>
        <div class=" flex justify-center items-center ">
        <button type="submit" name="add" class="text-white  bg-gray-700 mt-4  font-bold rounded-lg text-sm w-full sm:w-auto px-9 py-2.5 text-center ">Submit</button>
      </div>
        </form>

      </div>
    </div>

    
  </div>
  <footer
  class="flex flex-col items-center text-center text-white mt-12  bg-gray-700">
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
