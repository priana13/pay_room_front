@extends('layouts.guest')



@section('content')

@include('layouts.navbar2')

<div class="container mx-auto mt-5">

    <div class="grid grid-cols-1 md:grid-cols-10 gap-2">

        <div class="col-span-6 px-4">

            <div class="alert bg-red-100 shadow-md mb-3">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <div>
                    <h3 class="font-bold text-normal">Please complate payment within <span class="text-red-600">59 : 44 sec</span>  to avoid cancellation</h3>   
                    <p>Thanks for your booking! please proceed ahead with the payment using the Bank Account details as mentioned below</p>                 
                  </div>
                </div>
                
            </div>
           
                <div class="card bg-base-100 shadow-md">
                    
                    <div class="card-body"> 

                        <div class="flex flex-row">
                            <img src="https://images.reddoorz.com/payment_methods/137/BCA_new-1n.png" class="w-[50px]" alt="">
                            <h2 class="text-xl mx-4">Bank BCA</h2>

                        </div>                       
                        

                        <div class="card card-bordered p-3">

                            <div class="grid grid-cols-3 p-2">
                            <div>
                                <span class="font-bold">Virtual Account </span> <br>
                                <span>29988827272626626</span>
                            </div>
                            
                            <div>
                                <span class="font-bold">Jumlah yang harus Dibayar </span> <br>
                                <span>Rp. 409.009</span>
                            </div>

                            <div>
                                <span class="font-bold">Transaction Code </span> <br>
                                <span>8847746</span>
                            </div>

                            </div>  
                            {{-- grid tanggal  --}}

                            <div class="mt-2 border-t-2 p-2">
                            
                            <p>Jika pembayaran sudah kami terima, Anda Akan mendapatkan konfirmasi melalui email dalam beberapa menit</p>
                            <p>Jika Anda tidak menerima konfirmasi setelah status pembayaran sukses, Anda bisa menghubungi call center kami di +021 099988xxx</p>

                            </div>
            
                        </div>
              

                </div>
            </div>

        </div>
            <!-- ... -->
        <div class="col-span-4">


          <div class="card card-side bg-base-100 shadow-md">
           
            {{-- hotel  --}}
            <div class="card-body">
              <div class="grid grid-flow-col auto-cols-max gap-2 my-2">
                  <div class="bg-[url('https://demo.keypayroom.co.id/storage/sample.jpg')] w-[60px] h-[60px] rounded-md">
                    tes
                  </div>
                  <div>
                      <h2 class="card-title">New movie is released!</h2>
                      <p>Click the button to watch on Jetflix app.</p>
                  </div>                
                
              </div>             

              

              <div class="card card-bordered p-3">

                <div class="grid grid-cols-3 p-2">
                  <div>
                    <span class="font-bold">Mendaftar </span> <br>
                    <span>Sab 4 Jan</span>
                  </div>
                  
                  <div>
                    <span class="font-bold">Sampai </span> <br>
                    <span>Ming 5 Jan</span>
                  </div>

                  <div>
                    <span class="font-bold">Kamar </span> <br>
                    <span>1</span>
                  </div>

                </div>  
                 {{-- grid tanggal  --}}

                 <div class="mt-2 border-t-2 p-2">

                  <span class="font-bold">Tipe Kamar </span> <br>
                  <span>Kamar Super Nyaman</span>

                 </div>
  
              </div>

              <div class="card mt-2 border-2 px-4 py-4">

                <span class="font-bold">Tamu </span>
                <span>Priana Saputra (herian.sap@gmail.com)</span>

               </div>


              {{-- Rincian --}}

              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3">Harga Kamar</span>
                <span class="col-span-1">Rp. 500.876</span>
              </div>   
              
              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3 text-lg">Jumlah yang Harus Dibayar</span>
                <span class="col-span-1 text-lg font-bold"> Rp. 500.876</span>
              </div> 

             

              <div class="px-4 mt-3 text-center">
                <button class="btn btn-secondary">Konfirmasi Sekarang</button>
              </div>


            </div>
            {{-- akhir card-body --}}           


          </div>
          {{-- akhir card --}}


          </div>
            <!-- ... -->
            
        
        </div> 
        {{-- col-span-4 --}}

    
    </div>
    {{-- grid --}}

</div>
{{-- container --}}


@endsection