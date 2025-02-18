<div class="navbar">
    <div class="logo">
        <img src="{{ asset('images/cocogen_logo.png') }}" alt="Cocogen Insurance Logo" class="logo-img">
    </div>
    <ul class="nav-links">
        <li><a href="/products">Products</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/inquiries">Inquiries</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/file-a-claim">File a Claim</a></li>
        <li><a href="/get-a-quote">Get a Quote</a></li>
    </ul>
    <div class="search-signin">
        <a href="/search"><i class="fa fa-search"></i></a>
        <a href="/signin"><i class="fa fa-sign-in"></i></a>
    </div>
</div>

<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        background-color: #2c3e50;
    }
    .logo-img {
        height: 40px;
    }
    .nav-links {
        display: flex;
        list-style: none;
    }
    .nav-links li {
        margin: 0 15px;
    }
    .nav-links a {
        color: white;
        text-decoration: none;
    }
    .search-signin a {
        color: white;
        margin-left: 15px;
    }
</style>
