@extends('layouts.guest')
@section('custom_header')

@endsection
@section('content')
  @include('layouts.navbar1')
  <br>
 
  <livewire:auth.login-component />
   
  @endsection
  @section('footer')

    <script>
      // $('.btn').on('click', function(e) {
      //   $("#pilihan").hide();
      //   $("#"+this.id+'-login').show(); 
      // });

      // $('.kembali').on('click', function(e) {
      //   $("#pilihan").show();
      //   $(".login").hide();

      // });

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