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

        <script>
            $(document).ready(function () {
                // Activate tooltip
                $('[data-bs-toggle="tooltip"]').tooltip();

                var checkbox = $('table tbody input[type="checkbox"]');
                $("#selectAll").click(function () {
                    if (this.checked) {
                        checkbox.each(function () {
                            this.checked = true;
                        });
                    } else {
                        checkbox.each(function () {
                            this.checked = false;
                        });
                    }
                });
                checkbox.click(function () {
                    if (!this.checked) {
                        $("#selectAll").prop("checked", false);
                    }
                });
            });
        </script>
    </body>
</html>
