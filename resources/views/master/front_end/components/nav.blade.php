<div class="collapse navbar-collapse" id="nav-open-btn">
    <ul class="nav">
        <li class="{{ route('frontend.index') == url()->current() ? 'active' : '' }}">
            <a href="{{ route('frontend.index') }}">Home</a>
        </li>
        <li class="{{ route('frontend.about') == url()->current() ? 'active' : '' }}">
            <a href="{{ route('frontend.about') }}">About </a>
        </li>
        <li class="{{ route('frontend.contact') == url()->current() ? 'active' : '' }}">
            <a href="{{ route('frontend.contact') }}"> contact</a>
        </li>
        <li class="{{ route('frontend.checkout') == url()->current() ? 'active' : '' }}">
            <a href="{{ route('frontend.checkout') }}">Checkout</a>
        </li>
    </ul>
</div>
