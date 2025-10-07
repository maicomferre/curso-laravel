<!doctype html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Login Page</title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE 4 | Login Page" />
    <meta name="author" content="ColorlibHQ" />
    <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />

    @vite(['resources/js/app.js', 'resources/scss/app.scss'])

</head>
<!--end::Head-->
<!--begin::Body-->
<body class="login-page bg-body-secondary">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Reset your password</p>
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                @error('email')
                <div class="invalid-feedback">/Email incorreto</div>
                @enderror
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                    <div class="input-group-taext"><span class="bi bi-envelope"></span></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="d-grid gap-lg-2">
                            <button type="submit" class="btn btn-primary">Reset my password</button>
                        </div>
                    </div>
                </div>
            </form>

            <p class="mb-0">
                <a href="{{route('register')}}" class="text-center"> Register a new membership </a>
            </p>
        </div>
    </div>
</div>

</body>
<!--end::Body-->
</html>
