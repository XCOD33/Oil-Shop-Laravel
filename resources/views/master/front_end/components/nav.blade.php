<div class="collapse navbar-collapse" id="nav-open-btn">
    <ul class="nav">
        <li class="{{ route('frontend.index') == url()->current() ? 'active' : '' }}">
            <a href="{{ route('frontend.index') }}">Home</a>
        </li>
        <li>
            <a href="about-us_01.html">About </a>
        </li>
        <li>
            <a href="contact.html"> contact</a>
        </li>
        <li class="{{ route('frontend.checkout') == url()->current() ? 'active' : '' }}">
            <a href="{{ route('frontend.checkout') }}">Checkout</a>
        </li>
    </ul>
</div>
