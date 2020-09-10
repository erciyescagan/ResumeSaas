<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js" integrity="sha512-Y+cHVeYzi7pamIOGBwYHrynWWTKImI9G78i53+azDb1uPmU1Dz9/r2BLxGXWgOC7FhwAGsy3/9YpNYaoBy7Kzg==" crossorigin="anonymous"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "50px";
        $('.fa-bars').fadeOut();
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        $('.fa-bars').fadeIn();
    }
</script>
<script>
    $('#settingsButton').on('click', function () {
        $('#settingsCheck').val(1);
        $.toast({
            text: 'You can edit your profile now !',

            position: 'bottom-center',
            stack: false,
            icon: 'success'
        });
    })

    $('#profileImage').on('dblclick', function () {
        if ($('#settingsCheck').val() === '1'){
            $.toast({
                text: 'DOUBLE CLICKED!',

                    position: 'bottom-center',
                    stack: false,
                    icon: 'success'
                });
        } else {
            $.  toast({
                text: 'FALSE TRY !',

                position: 'bottom-center',
                stack: false,
                icon: 'warning'
            });
        }
    })
    $('#firstName').on('dblclick', function () {

    })

</script>
