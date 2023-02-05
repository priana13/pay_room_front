 <!-- pencarian -->
 <div id="cari" class="z-40 fixed top-0 content-center h-full w-full bg-white overflow-y-auto hidden">
      <div class="max-w-xl mx-auto">
          <div class="mt-6  px-3 flex bg-white sticky top-0">
            <button class="close-cari"><i class="fa-solid fa-arrow-left text-xl"></i></button>&emsp;
            <input type="text" name="" class="border-2 w-[93%] focus:outline-none rounded-md py-2 px-3 " placeholder="Coba Ciomas Bogor Kota" id="">
          </div>
          <button class="flex mt-7 w-full items-center font-semibold text-gray-500 px-3">
            <div class="px-4 py-3 bg-gray-100 border rounded-md">
              <i class="fa-solid fa-map-location-dot"></i>            
            </div>
            <p class="ml-5">Cari Sekitar Lokasi Anda</p>
          </button>
          <div class="grid grid-cols-[15%_15%_25%_35%] mt-2 rounded-full sticky top-[43px] z-10 px-2 bg-white text-[#6F6D6D] border-b ">
            <button id="kampus"  class="py-2.5 px-0 text-black text-center border-b-2 border-[#327989] font-semibold text-sm  btn ">
                Kampus
            </button>
            <button id="area"  class="py-2.5 text-center  text-sm btn font-semibold">
                Area              
            </button>
            <button id="stasiun" class="py-2.5  text-center  text-sm btn font-semibold">
                Stasiun & Halte
            </button>
          </div>
          <div class="mt-5 px-5">
            <div id="tab-kampus" class="tab">
                <p class="font-semibold text-gray-500">Pencarian Populer</p>
                <div class="mt-3">
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UGM</button>
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNDAP Jatinegara</button>
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNSI</button>
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UGM</button>
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UB</button>
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNDAP Jatinegara</button>
                  <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNSI</button>
                </div>
                <p class="font-semibold text-gray-500 mt-5">Kampus Berdasar Kota</p>
                <div>
                  <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                      <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                        <span class="text-xl">Bandung</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                      <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                        <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                          <div class="px-4 py-3 bg-gray-100 border rounded-md">
                            <i class="fa-solid fa-location-dot"></i>            
                          </div>
                          <p class="ml-5">Isi Denpasar</p>
                        </button>  
                        <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                          <div class="px-4 py-3 bg-gray-100 border rounded-md">
                            <i class="fa-solid fa-location-dot"></i>            
                          </div>
                          <p class="ml-5">Isi Denpasar</p>
                        </button>  
                        <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                          <div class="px-4 py-3 bg-gray-100 border rounded-md">
                            <i class="fa-solid fa-location-dot"></i>            
                          </div>
                          <p class="ml-5">Isi Denpasar</p>
                        </button>  
                                          
                      </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                      <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span class="text-xl">Bali</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                      <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                        <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                          <div class="px-4 py-3 bg-gray-100 border rounded-md">
                            <i class="fa-solid fa-location-dot"></i>            
                          </div>
                          <p class="ml-5">Isi Denpasar</p>
                        </button>  
                      </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                      <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span class="text-xl">Bogor</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                    </div>
                  </div>
                </div>
            </div>
            <div id="tab-area" class="hidden tab">
              <p class="font-semibold text-gray-500">Pencarian Populer</p>
              <div class="mt-3">
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">Bogor</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">Jatinegara</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">Depok</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UGM</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UB</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNDAP Jatinegara</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNSI</button>
              </div>
              <p class="font-semibold text-gray-500 mt-5">Kampus Berdasar Kota</p>
              <div>
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                  <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                      <span class="text-xl">Bandung</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </h2>
                  <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                                        
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                      <span class="text-xl">Bali</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </h2>
                  <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                      <span class="text-xl">Bogor</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </h2>
                  <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                      <div class="px-4 py-3 bg-gray-100 border rounded-md">
                        <i class="fa-solid fa-location-dot"></i>            
                      </div>
                      <p class="ml-5">Isi Denpasar</p>
                    </button>  
                  </div>
                </div>
              </div>
            </div>

            <div id="tab-stasiun" class="hidden tab">
              <p class="font-semibold text-gray-500">Pencarian Populer</p>
              <div class="mt-3">
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">Stasiun Bogor</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">StasiunJatinegara</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">StasiunDepok</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UGM</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UB</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNDAP Jatinegara</button>
                <button class="py-1 px-3 border rounded-xl mx-1 mt-3">UNSI</button>
              </div>
              <p class="font-semibold text-gray-500 mt-5">Kampus Berdasar Kota</p>
              <div>
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                  <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                      <span class="text-xl">Bandung</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </h2>
                  <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                                        
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                      <span class="text-xl">Bali</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </h2>
                  <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                      <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                        <div class="px-4 py-3 bg-gray-100 border rounded-md">
                          <i class="fa-solid fa-location-dot"></i>            
                        </div>
                        <p class="ml-5">Isi Denpasar</p>
                      </button>  
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                      <span class="text-xl">Bogor</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </h2>
                  <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <button class="flex mt-3 w-full items-center font-semibold text-gray-500 px-3 pb-3 border-b">
                      <div class="px-4 py-3 bg-gray-100 border rounded-md">
                        <i class="fa-solid fa-location-dot"></i>            
                      </div>
                      <p class="ml-5">Isi Denpasar</p>
                    </button>  
                  </div>
                </div>
              </div>
            </div>
            
          </div>
      </div> 
    </div>