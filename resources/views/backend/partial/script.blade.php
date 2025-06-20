<script src="{{asset('backend/assets/js/jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/js/toastify-js.js')}}"></script>
<script src="{{asset('backend/assets/js/axios.min.js')}}"></script>
<script src="{{asset('backend/assets/js/config.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.js')}}"></script>

<script>
    function MenuBarClickHandler() {
        let sideNav = document.getElementById('sideNavRef');
        let content = document.getElementById('contentRef');
        if (sideNav.classList.contains("side-nav-open")) {
            sideNav.classList.add("side-nav-close");
            sideNav.classList.remove("side-nav-open");
            content.classList.add("content-expand");
            content.classList.remove("content");
        } else {
            sideNav.classList.remove("side-nav-close");
            sideNav.classList.add("side-nav-open");
            content.classList.remove("content-expand");
            content.classList.add("content");
        }
    }
</script>