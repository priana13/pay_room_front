@extends('template.component.layout')
@section('custom_header')


<style>


</style>
@endsection
@section('content')
  @include('template.component.navbar1')


  <br>
  <div class="max-w-lg mx-auto px-2">
    <div id="pilihan" class="p-6 rounded-xl mt-7  shadow-costum1 ">
        <button class="text-2xl text-gray-500"><i class="fa-solid fa-x"></i></button>
        <p class="text-xl font-semibold mt-5">Masuk ke Mamikos</p><br>
        <p>Saya Login Masuk Sebagai</p>
        <button id="pencari" class="felx items-center shadow-costum1 p-5 w-full text-left rounded-xl mt-8 btn">
            <p class="text-xl font-semibold"><i class="fa-solid fa-door-open text-3xl"></i>&emsp; Pencari Kos</p>
        </button>
        <button id="pemilik" class="felx items-center shadow-costum1 p-5 w-full text-left rounded-xl mt-8 btn">
            <p class="text-xl font-semibold"><i class="fa-solid fa-house text-2xl"></i>&emsp; Pencari Kos</p>
        </button>
    </div>

    <div id="pemilik-login" class="p-6 rounded-xl hidden  mt-7 shadow-costum1 login">
      <button class="text-2xl text-gray-500 kembali"><i class="fa-solid fa-arrow-left"></i></button>
      <p class="text-xl font-semibold mt-5">Login Pencari Kos</p><br>
      <button class=" border p-5 w-full  rounded-md mt-6 flex">
          <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" class="w-8 " alt=""></a>
          <p class="text-xl font-semibol  ml-3">Singn In With Google</p>
      </button>
      <button class=" border p-5 w-full  rounded-md mt-4 flex">
          <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" class="w-8 " alt=""></a>
          <p class="text-xl font-semibol  ml-3">Singn In With Facebook</p>
      </button>
      <div class="flex items-center py-4">
          <div class="flex-grow h-px border"></div> 
          <span class="flex-shrink  text-gray-500 px-4  font-light">atau</span>
          <div class="flex-grow h-px border"></div>
      </div>
      <p>Nomor Handphone</p>
      <input type="text" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-2" placeholder="Nomor Handphone" name="" id="">
      <br><br><br>
      <p>Password</p>
      <div id="show_hide_password" class="relative rounded-md shadow-sm">
        <input type="password" id="pass" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-2" placeholder="Nomor Handphone" name="" id="">
        <button class="absolute inset-y-0 right-0 pr-3 flex items-center  z-10">
          <span class="font-bold text-base text-[##2C82B4]"> <i style="text-decoration: none;color: grey;" class="fa fa-eye-slash"></i> </apan>
        </button>
      </div>          <br><br><br>
      <button class="w-full py-3 bg-[#29af61] text-white font-semibold">
        Login
      </button>
       <p class="text-center text-sm mt-3">Belum punya akun ? <a class="text-[#29af61]" href="">Login Sekarang</a></p>
        <a class="block text-center text-sm text-[#29af61] mt-3" href="">Lupa Password</a>
    </div>

    <div id="pencari-login" class="p-6 rounded-xl hidden mt-7 shadow-costum1 login">
      <button class="text-2xl text-gray-500 kembali"><i class="fa-solid fa-arrow-left"></i></button>
      <p class="text-xl font-semibold mt-5">Login Pemilik</p><br>

      <p>Nomor Handphone</p>
      <input type="text" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-2" placeholder="Nomor Handphone" name="" id="">
      <br><br><br>
      <p>Password</p>
      <div id="show_hide_password1" class="relative rounded-md shadow-sm">
        <input type="password" id="pass" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-2" placeholder="Nomor Handphone" name="" id="">
        <button class="absolute inset-y-0 right-0 pr-3 flex items-center  z-10">
          <span class="font-bold text-base text-[##2C82B4]"> <i style="text-decoration: none;color: grey;" class="fa fa-eye-slash"></i> </apan>
        </button>
      </div>    
      <br><br><br>
      <button class="w-full py-3 bg-[#29af61] text-white font-semibold">
        Login
      </button>
      <p class="text-center text-sm mt-3">Belum punya akun ? <a class="text-[#29af61]" href="">Daftar Sekarang</a></p>
      <a class="block text-center text-sm text-[#29af61] mt-3" href="">Lupa Password</a>    </div>
  </div>


 
  <br>

  
 

  

  <br> <br> 
 
  
  @endsection
  @section('footer')

    <script>
      $('.btn').on('click', function(e) {
        $("#pilihan").hide();
        $("#"+this.id+'-login').show(); 
      });

      $('.kembali').on('click', function(e) {
        $("#pilihan").show();
        $(".login").hide();

      });

  $(document).ready(function() {
    $("#show_hide_password button").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
  });

  $(document).ready(function() {
    $("#show_hide_password1 button").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password1 input').attr("type") == "text"){
            $('#show_hide_password1 input').attr('type', 'password');
            $('#show_hide_password1 i').addClass( "fa-eye-slash" );
            $('#show_hide_password1 i').removeClass( "fa-eye" );
        }else if($('#show_hide_password1 input').attr("type") == "password"){
            $('#show_hide_password1 input').attr('type', 'text');
            $('#show_hide_password1 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password1 i').addClass( "fa-eye" );
        }
    });
  });

   
    </script>
@endsection