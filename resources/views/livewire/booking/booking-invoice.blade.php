<div class="grid grid-cols-1 md:grid-cols-10 gap-2">

    <div class="col-span-5 px-4">

        <div class="alert bg-red-100 shadow-md mb-3">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <div>
                <h3 class="font-bold text-normal">Please complate payment within <span class="text-red-600">24 Hour from Now</span>  to avoid cancellation</h3>   
                <p>Thanks for your booking! please proceed ahead with the payment using the Bank Account details as mentioned below</p>                 
              </div>
            </div>
            
        </div>
       
            <div class="card bg-base-100 shadow-md">
                
                <div class="card-body"> 

                    <div class="flex flex-row">
                        <img src="#" class="w-[50px]" alt="">
                        <h2 class="text-xl mx-4">Bank - </h2>

                    </div>                       
                    

                    <div class="card card-bordered p-3">

                        <div class="grid grid-cols-3 p-2">
                        <div>
                            <span class="font-bold">Virtual Account </span> <br>
                            <span>-</span>
                        </div>
                        
                        <div>
                            <span class="font-bold">Total Bayar </span> <br>
                            <span>Rp. {{ number_format($total_bayar,0,',','.')  }}</span>
                        </div>

                        <div>
                            <span class="font-bold">Status Pembayaran </span> <br>
                            <span class="badge badge-{{ ($data_order['status'] == 'Completed')?'success':'warning' }}">{{ $data_order['status'] }}</span>
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
    <div class="col-span-3">


      <div class="card card-side bg-base-100 shadow-md">
       
        {{-- hotel  --}}
        <div class="card-body">
          <div class="grid grid-flow-col auto-cols-max gap-2 my-2">
              <div class="bg-[url('{{ $hotel['thumbnail'] }}')] w-[60px] h-[60px] rounded-md">
                
              </div>
              <div class="p-2">                
                <h2 class="card-title">{{ $hotel['title'] }}</h2>
                <p>{{ $hotel['address'] }}</p>
              </div>                
            
          </div>             

          

          <div class="card card-bordered p-3">

            <div class="grid grid-cols-3 p-2">
              <div>
                <span class="font-bold">Mendaftar </span> <br>
                <span>{{ date('d M Y', strtotime($booking->start_date)) }}</span>
              </div>
              
              <div>
                <span class="font-bold">Sampai </span> <br>
                <span>{{ date('d M Y', strtotime($booking->end_date)) }}</span>
              </div>

              <div>
                <span class="font-bold">Kamar </span> <br>
                <span>{{ $booking->day_qty }}</span>
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
            <span>{{ $booking->name }} ({{ $booking->email }})</span>

           </div>


          {{-- Rincian --}}

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Harga Kamar</span>
            <span class="col-span-1">Rp. {{ number_format($hotel['price'],0,',','.')  }}</span>
          </div>
          
          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Total</span>
            <span class="col-span-1 line-through">Rp. {{ number_format($total,0,',','.')  }}</span>
          </div>

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Total Discount ({{ $hotel['discount'] }}%)</span>
            <span class="col-span-1">Rp. {{ number_format($discount,0,',','.')  }}</span>
          </div>

          <div class="px-4 mt-3">

            <h2 class="text-lg">Jumlah yang Harus Dibayar: <strong>Rp. {{ number_format($total_bayar,0,',','.')  }}</strong></h2>
          </div>

         

          <div class="px-4 mt-3 text-center">
            <a  href="https://web.whatsapp.com/send?phone=5541988897799&text&app_absent=0" target="_blank" class="btn btn-primary">Konfirmasi Sekarang</a>
          </div>


        </div>
        {{-- akhir card-body --}}           


      </div>
      {{-- akhir card --}}


      </div>
        <!-- ... -->
        
    
    </div> 
    {{-- col-span-4 --}}



     <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
     <script src="{{
        !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
        data-client-key="{{ config('services.midtrans.clientKey')
        }}"></script>  
        
        @if($data_order['status'] == 'Pending')
    
        <script type="text/javascript"> 
          
            //   window.addEventListener('getSnap', event => {
  
                //   const token  = event.detail.token;
                  const token = "{{ $booking->payment_token }}";
  
                  // SnapToken acquired from previous step
                  snap.pay(token, {
                  // Optional
                  onSuccess: function(result){
                      /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                  },
                  // Optional
                  onPending: function(result){
                      /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                  },
                  // Optional
                  onError: function(result){
                      /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                  }
                  }); 
                
            //   });   
            
        </script>

        @endif 


</div>