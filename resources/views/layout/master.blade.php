<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.header')
</head>
<body>
    <div class="homepage">
    
    
  
        <header class="header">
            @include('layout.navbar')
        </header> 
        
        <div class="main-contents">
            @yield('contents')
        </div>


        <footer class="footer">
            @include('layout.footer')
        </footer>
    </div>
    <!-- jQuery -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slick JS -->
		<script src="{{asset('assets/js/slick.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
