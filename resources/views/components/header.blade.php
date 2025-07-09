<div class="bg-[#000000] text-[#FFFFFF] font-[Inter]">

  <div class="max-w-[1430px] mx-auto px-4 lg:px-0">
    
    <!-- Topbar -->
    <div class="text-[12px] font-[500] pt-[9px]">
      <div class="flex flex-col lg:flex-row justify-between text-center lg:text-left">
        <div class="lg:pl-[80px]">
          Νέα τηλεφωνική γραμμή για Συνεργάτες B2B:
          <span class="text-[#ED872B] font-[500]">215 215 6660</span>
        </div>
        <div>
          Γίνε συνεργάτης <span class="text-[#ED872B] font-[500]">B2B</span>
        </div>
        <div class="lg:pr-[80px]">
          Αυθημερόν αποστολή για παραγγελίες έως τις 16:00
        </div>
      </div>
    </div>

    <!-- Logo - Search - Icons -->
    <div class="flex flex-col lg:flex-row justify-between items-center gap-6 lg:pl-[80px] lg:pr-[87px]">

      <!-- Logo -->
      <div class="mt-[24px] lg:mt-[38px]">
        <img src="{{ asset('images/logo.svg') }}" alt="GeekOn Logo" class="w-[194px] h-[59px]">
      </div>

      <!-- Search -->
      <div class="relative mt-6 lg:mt-[54px] w-full max-w-[600px] h-[40px] mx-auto lg:mx-0">
        <input
          class="bg-[#F3F4F6] text-black w-full h-full rounded-[25px] text-[16px] font-[500] pl-[40px] pr-[40px]"
          placeholder="Αναζήτησε για..."
        >
        <img
          src="{{ asset('images/search.svg') }}"
          alt="Search Icon"
          class="absolute left-[1px] top-1/2 transform -translate-y-1/2 w-[50px] h-[30px]"
        >
        <img
          src="{{ asset('images/microphone.svg') }}"
          alt="Mic Icon"
          class="absolute right-[10px] top-1/2 transform -translate-y-1/2 w-[26px] h-[26px]"
        >
      </div>

      <!-- Είσοδος & Καλάθι -->
      <div class="flex justify-center lg:justify-start items-center gap-4 lg:gap-[30px] mt-6 lg:mt-[70px]">
        <div class="flex items-center text-[14px] font-[400] gap-[4.5px]">
          <img src="{{ asset('images/Icon.svg') }}" alt="Icon" class="w-[17px] h-[19px]">
          <span>Είσοδος / Εγγραφή</span>
        </div>
        <div class="relative">
          <img src="{{ asset('images/cart.svg') }}" alt="Cart" class="w-[18px] h-[20px]">
          <span class="absolute -top-3 -right-3 text-[#ED872D] text-[16px] font-[600]">0</span>
        </div>
      </div>
    </div>

    <!-- Κάτω border -->
    <div class="border-b border-[#ED872D] mt-[35px]"></div>

    <!-- Menu -->
    <div class="text-[#FFFFFF]">
      <div class="max-w-[1430px] mx-auto px-4 lg:px-[405px]">
        <div class="flex items-center overflow-x-auto whitespace-nowrap gap-4 lg:gap-[25px] text-[16px] font-[500] pt-[24px] pb-[24px]">
          <span>Κινητά</span>
          <span>Laptop</span>
          <span>Tablet</span>
          <span>Smart Watches</span>
          <span>Κονσόλες</span>
          <span>Gadget</span>
          <span>Desktop</span>
        </div>
      </div>
    </div>

    <!-- Κάτω border -->
    <div class="border-b border-[#ED872D]"></div>
  </div>
</div>
