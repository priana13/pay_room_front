@extends('layouts.guest')
@section('custom_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
@endsection
@section('content')

  @include('layouts.navbar2')
  <div class="max-w-6xl mx-auto px-2">
      <div class="grid lg:grid-cols-[30%_80%] sm:grid-cols-none">

          <livewire:dashboard.sidebar />

            <div>
            
                <livewire:member.dashboard-panel :user="$user" />      
                
                

                <livewire:member.booking-history />

                <livewire:member.order-history />

                <livewire:member.verifikasi-akun />                 
               
                
            </div>
      </div>
  </div>
 
  <br>

  @include('layouts.cari')

  
  @endsection
  @section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
  <script>
    // Tab menu
    $('.menu_btn').on('click', function() {
        $(".tab_menu").hide();  
        $("#"+this.id+'_tab').show()
        $(".menu_btn").css({ ' --tw-text-opacity' : '1', 'color' : 'rgb(107 114 128 / var(--tw-text-opacity)'});  
        $("#"+this.id).css("color","black");     
      // console.log(this.id)
      });

    // Tab riwayat & Daftar
    $('.btn_rd').on('click', function() {
        $(".rdr_tb").hide();  
        $("#"+this.id+'_tb').show()
        $(".btn_rd").css({ ' --tw-text-opacity' : '#29af61', 'color' : 'rgb(107 114 128 / var(--tw-text-opacity)','border':'none'});  
        $("#"+this.id).css({ 'border-bottom': '2px solid #29af61', 'color' : '#29af61'});     
      });
    //file btn
    $('#kartu-btn').on('click', function() {
      $('#kartu').click();
    })
    $('#selfi-btn').on('click', function() {
      $('#selfi').click();
    })
        
    </script>
@endsection