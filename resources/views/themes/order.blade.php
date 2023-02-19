@extends('layouts.guest')



@section('content')

@include('layouts.navbar2')

<div class="container mx-auto mt-5">

    <div class="grid grid-cols-10 gap-2">

        <div class="col-span-6 px-4">

            <div class="alert shadow-md mb-3">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <div>
                    <h3 class="font-bold">Masuk/Daftar untuk Mendapatkan Promo Spesial</h3>                    
                  </div>
                </div>
                <div class="flex-none">
                  <button class="btn btn-sm btn-primary">Login</button>
                </div>
            </div>
           
            <div class="card bg-base-100 shadow-md">
                
                <div class="card-body">
                  <h2 class="card-title">
                    Shoes!
                    <div class="badge badge-primary">NEW</div>
                  </h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <div class="badge badge-outline">Fashion</div> 
                    <div class="badge badge-outline">Products</div>
                  </div>
                </div>
            </div>

        </div>
            <!-- ... -->
        <div class="col-span-4">

            <div class="card bg-base-100 shadow-xl mx-4">
                
                <div class="card-body">
                  <h2 class="card-title">
                    Shoes!
                    <div class="badge badge-secondary">NEW</div>
                  </h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <div class="badge badge-outline">Fashion</div> 
                    <div class="badge badge-outline">Products</div>
                  </div>
                </div>
              </div>

            </div>
            <!-- ... -->
            
        
        </div> 

    
    </div>

</div>


@endsection