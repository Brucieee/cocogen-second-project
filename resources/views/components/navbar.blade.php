<div class="navbar">
    <!-- Logo and Title Text on the Left -->
    <div class="logo">
        <img src="{{ asset('asset/cocogen-logo.svg') }}" alt="Cocogen Insurance Logo" class="logo-img">
    </div>
    
    <!-- Navigation Links aligned to the right -->
    <ul class="nav-links">
        <li><a href="/about">About</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/inquiries">Inquiries</a></li>
        <li><a href="/contact">Contact</a></li>
        <li class="file-claim"><a href="/file-a-claim">File a Claim</a></li>
        <li class="get-quote"><a href="/get-a-quote">Get a Quote</a></li>
        
        <!-- Search Icon -->
        <div class="search-signin">
            <a href="/search">
                <img src="{{ asset('asset/search-icon.svg') }}" alt="Search" class="search-icon">
            </a>
        </div>

        <!-- Sign In link with logo -->
        <li class="signin">
            <div class="signin-logo">
                <img src="{{ asset('asset/Icon-SignIn.svg') }}" alt="Sign In Logo" class="signin-logo-img">
            </div>
            <a href="/signin">Sign In</a>
        </li>
    </ul>
</div>

<!-- Main Content Section with Background Image -->


<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Segoe UI;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: white; /* White background for navbar */
    }

    .logo {
        display: flex;
        margin: 20px;
        align-items: center;
    }

    .logo-img {
        height: 40px;
        margin-right: 10px; /* Space between logo and text */
    }
    .nav-links {
        display: flex;
        list-style: none;
        margin-left: auto; /* Moves the nav-links to the right */
        padding: 0;
    }

    .nav-links li {
        position: relative;
        padding: 0px 15px;

    }

    .nav-links a {
        color: black; 
        text-decoration: none;
        display: block; 
        padding: 10px 15px;
        margin-top: 10px;
    }

    /* Background color applied to entire LI */
    .file-claim {
        background-color: #E4509A;
    }

    .file-claim a {
        color: white;
    }

    .get-quote {
        background-color: #008080;
    }

    .get-quote a {
        color: white;
    }

    /* Search Icon */
    .search-signin {
        display: flex;
        align-items: center;
        margin: 10px;
        margin-top: 20px;
    }

    .search-icon {
        width: 20px;
        height: 20px;
    }

    /* Sign In Logo beside Sign In Link */
    .signin {
        display: flex;
        align-items: center;
    }

    .signin a {
        margin-top: 10px ;
    }

    .signin-logo {
        margin: 5px; /* Space between logo and text */
        margin-top: 15px;
    }

    .signin-logo-img {
        width: 20px; /* Set logo size */
        height: 20px;
    }

</style>
