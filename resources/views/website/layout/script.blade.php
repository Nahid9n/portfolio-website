<!-- Js Plugins -->
<script src="{{asset('/')}}website/assets/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}website/assets/js/mixitup.min.js"></script>
<script src="{{asset('/')}}website/assets/js/masonry.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.slicknav.js"></script>
<script src="{{asset('/')}}website/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    toastr.options = {
        "progressBar" : true,
        "closeButton" : true,
    }
    @if(Session::has('message'))
    toastr.success("{{ Session::get('message') }}");

    @elseif(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");

    @elseif(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");

    @elseif(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>
