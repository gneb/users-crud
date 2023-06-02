<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>Admin</title>
        @include('partials.admin.styles')
    </head>
    <body>
        @include('partials.admin.header')
        <div class="container-xl">
            @include('partials.public.header_message') @yield('content')
        </div>
        @include('partials.admin.footer') @include('partials.admin.scripts')
    </body>
</html>
