<nav class="navbar navbar-expand-lg header-nav">
    <div class="navbar-header">
        <a id="mobile_btn" href="javascript:void(0);">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
        <a href="/" class="navbar-brand logo">
            <img src="{{ asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
        </a>
    </div>
    <div class="main-menu-wrapper">
        <div class="menu-header">
            <a href="/" class="menu-logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>
    <ul class="nav header-navbar-rht">
        <li class="nav-item contact-item">
            <div class="header-contact-img">
                <i class="far fa-hospital"></i>
            </div>
            <div class="header-contact-detail">
                <p class="contact-header">Contact</p>
                <p class="contact-info-header">+855 23 996 111</p>
            </div>
        </li>
		
            @guest <!-- Show when the user is not logged in -->
                <li class="nav-item">
					<a href="{{ route('login') }}" style="color:blue">Login / Signup</a>
                </li>
            @else <!-- Show when the user is logged in -->
                <li class="nav-item">
				<a href="{{Auth::user()->id}}">Hi {{ auth()->user()->name }}!</a>
                </li>
                <li class="nav-item">
				<a href="/my-appointments">Your appointment</a>
                </li>
            @endguest
        
        @auth <!-- Show when the user is logged in -->
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link header-login" style="background-color: #ff0000; color: #ffffff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">Logout</a>
                </form>
            </li>
        @endauth
    </ul>
</nav>
