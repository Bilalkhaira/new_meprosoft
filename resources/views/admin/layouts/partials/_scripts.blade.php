<script src="{{ asset('js/admin/vendor/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/admin/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/admin/vendor/chart.umd.js') }}"></script>
<script src="{{ asset('js/admin/vendor/echarts.min.js') }}"></script>
<script src="{{ asset('js/admin/vendor/quill.min.js') }}"></script>
<script src="{{ asset('js/admin/vendor/simple-datatables.js') }}"></script>
<script src="{{ asset('js/admin/vendor/tinymce.min.js') }}"></script>
<script src="{{ asset('js/admin/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/admin/main.js') }}"></script>

<script>
    // for side bar active code
    var path = window.location.href;
    // var filterPath = path.substring(0, path.lastIndexOf('/'));
    // var activeTab = filterPath.substring(filterPath.lastIndexOf('/') + 1)
    $(".sidebar-nav li a").each(function() {
        if (this.href === path) {
            // $('#'+activeTab).addClass('show');
            if(path.search('menu') != -1){
                $('.navMenu').addClass('show');
            }
            $(".sidebar-nav li a").removeClass('active_nv');
            $(this).closest('a').addClass("active_nv");
        }
    });
</script>
@yield('scripts')