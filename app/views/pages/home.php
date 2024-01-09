<?php require APPROOT."/views/incFile/header.php"; ?>
<header class='border-b bg-white font-sans min-h-[60px] px-10 py-3 relative'>
    <div class='flex flex-wrap items-center max-lg:gap-y-6 max-sm:gap-x-4'>
      <a href="<?php echo URLROOT?>/pages/home"><img src="/wikis/public/img/logo/kisspng-wikipedia-logo-wikimedia-foundation-wikimedia-comm-5bf0aede4a9c48.1983645215425000623056.png" alt="logo" class=' absolute     w-16' />
      </a>

      <ul id="collapseMenu"
        class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-3 lg:absolute lg:left-1/2 lg:-translate-x-1/2'>
        <li class='max-lg:border-b max-lg:py-2'><a href=''
            class='hover:text-[#007bff] text-[15px] text-[#007bff] block font-bold'>Home</a></li>
        <li class='max-lg:border-b max-lg:py-2'><a href=''
            class='hover:text-[#007bff] text-gray-600 font-bold text-[15px] block'>Team</a></li>
        <li class='max-lg:border-b max-lg:py-2'><a href=''
            class='hover:text-[#007bff] text-gray-600 font-bold text-[15px] block'>About</a></li>
        <li class='max-lg:border-b max-lg:py-2'><a href=''
            class='hover:text-[#007bff] text-gray-600 font-bold text-[15px] block'>Contact</a></li>
        <li class='max-lg:border-b max-lg:py-2'><a href=''
            class='hover:text-[#007bff] text-gray-600 font-bold text-[15px] block'>Source</a></li>
      </ul>
    </div>
    <div
      class="bg-gray-100 border border-transparent focus-within:border-blue-500 flex px-6 rounded-full h-9 lg:w-2/4 mt-3 mx-auto max-lg:mt-6">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"class="fill-gray-600 mr-3 rotate-90">
        <path d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"> </path>
      </svg>
      <input type='text' placeholder='Search...'
        class="w-full outline-none bg-transparent text-gray-600 font-semibold text-[15px]" />
    </div>
  </header>
<section>
</section>


<?php require APPROOT."/views/incFile/footer.php"; ?> 
