<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title></title>

    @include('backend.partial.style')

</head>

<body>


@include('backend.partial.navbar')

@include('backend.partial.sidebar')

<div id="contentRef" class="content">
    @yield('content')
</div>



@include('backend.partial.script')


</body>
</html>
