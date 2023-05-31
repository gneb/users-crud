<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"
    >
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li>
                <a href="{{ url('/') }}" class="nav-link px-2 link-secondary"
                    >Home</a
                >
            </li>
        </ul>

        <div class="col-md-3 text-end">
            <a
                type="button"
                href="{{ url('/login') }}"
                class="btn btn-outline-primary me-2"
            >
                Login
            </a>
        </div>
    </header>
</div>
