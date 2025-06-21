<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    @include('frontend.partial.meta')

    @include('frontend.partial.style')

</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class="indeterminate"></div>
    </div>
</div>

<div>
    @yield('content')
</div>

@include('frontend.partial.script')



</body>
</html>

