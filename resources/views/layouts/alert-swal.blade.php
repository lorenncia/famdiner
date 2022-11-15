@if ($message = Session::get('success-swal'))
    <script>
      swal("Success", '{{ $message }}', "success");
    </script>
@endif

@if ($message = Session::get('error-swal'))
    <script>
      swal("Failed", '{{ $message }}', "error");
    </script>
@endif

@if ($message = Session::get('warning-swal'))
    <script>
      swal("Warning", '{{ $message }}', "warning");
    </script>
@endif