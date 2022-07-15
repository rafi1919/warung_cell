
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Warung Cell</title>

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="{{ url('css/style.css') }}" />

  <!----======== Bootstrap 5.0 ======== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
  <!----=====  CSRF ===== -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!----=====  Sweet Alert ===== -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!----=====  Jquery ===== -->
  <script src="js/jquery.3.3.1.min.js"></script>

  <!----===== Unicons CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!----===== Boxicons CSS ===== -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  @include('partials.sidebar')

  @yield('main-sec')

<script src="{{ url('js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

  @if (session('success'))
  <script>
    var Sweetalert2Demo = function() {
      var initDemos = function() {
        swal({
          title: "{{ session('success') }}",
          text: "{{ session('success') }}",
          icon: "success",
          buttons: {
            confirm: {
              text: "Confirm Me",
              value: true,
              visible: true,
              className: "btn btn-success",
              closeModal: true
            }
          }
          
        });
    };

    return {
      init: function() {
          initDemos();
    },
  };
}();

jQuery(document).ready(function() {
  Sweetalert2Demo.init();
});
  </script>
  @endif

</body>
</html>