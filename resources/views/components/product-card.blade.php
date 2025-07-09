<div class="bg-white text-[#000000] font-[Inter] overflow-x-hidden">
  <div class="w-full max-w-full lg:max-w-[1430px] mx-auto px-4 lg:px-0">
    <div class="mt-[24px] lg:mt-[32px] px-4 lg:px-0 lg:ml-0 lg:ml-[81px] flex flex-wrap gap-4 lg:gap-[10px] justify-center lg:justify-start">

      @for ($i = 0; $i < 5; $i++)
        <div class="w-full max-w-xs lg:w-[246px] h-auto lg:h-[423px] border border-[#E4E4E4] rounded-[8px] bg-[#FFFFFF] flex flex-col items-center font-[Inter]">
          <img src="{{ asset('images/mobile.png') }}" alt="product" class="w-[120px] lg:w-[156px] h-auto lg:h-[148px] mx-auto mt-[24px] lg:mt-[39px]" />

          <div class="text-[12px] text-[#6B7280] font-[400] mt-[20px] lg:mt-[31px]">SAMR031</div>

          <div class="w-full max-w-[217px] h-[1px] bg-[#E5E7EB] mt-[9px]"></div>

          <div class="text-[14px] leading-[14px] text-center font-[400] text-[#000000] mt-[9px]">
            Amoles Οθόνη LCD και<br>
            μηχανισμός αφής για ONEPLUS<br>
            NORD 4 Black
          </div>

          <div class="text-[17px] font-[500] text-[#000000] mt-[15px]">286,00 €</div>

          <div class="text-[12px] font-[500] text-[#ED872D] mt-[3px]">Τιμή χωρίς ΦΠΑ</div>

          <div class="flex items-center mt-[10px] mb-[20px]">
            <div class="w-[70px] lg:w-[93px] h-[38px] border border-[#ED872D] rounded-l-[5px] flex items-center justify-center text-[13px] text-[#ED872D]">
              <button class="font-[500] ml-[10px] lg:ml-[15px]">-</button>
              <span class="font-[600] mx-[6px] lg:mx-[10px]">1</span>
              <button class="font-[500] mr-[10px] lg:mr-[15px]">+</button>
            </div>

            <button class="bg-[#ED872D] text-white w-[90px] lg:w-[118px] h-[38px] px-[8px] lg:px-[11px] flex items-center justify-center gap-[6px] lg:gap-[9px] text-[12px] font-[700] rounded-r-[5px]">
              Προσθήκη
              <img src="{{ asset('images/cart2.svg') }}" alt="Καλάθι" class="w-[15px] lg:w-[19px] h-[15px] lg:h-[19px]" />
            </button>
          </div>
        </div>
      @endfor

    </div>
  </div>
</div>
