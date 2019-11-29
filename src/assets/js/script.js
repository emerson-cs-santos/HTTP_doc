$(function () {
    AOS.init();
});

let tabs = document.querySelectorAll('.nav-item');

tabs.forEach(element => {
    element.addEventListener('click', function () {
        console.log(event.target.id)

        switch (event.target.id) {
            case '0':
                $('#cont0').toggle();
                $('#0').addClass('active');

                $('#1').removeClass('active');
                $('#2').removeClass('active');
                $('#3').removeClass('active');
                $('#4').removeClass('active');

                $('#cont1').hide();
                $('#cont2').hide();
                $('#cont3').hide();
                $('#cont4').hide();
                break;
            case '1':
                $('#cont1').toggle();
                $('#1').addClass('active');

                $('#0').removeClass('active');
                $('#2').removeClass('active');
                $('#3').removeClass('active');
                $('#4').removeClass('active');

                $('#cont0').hide();
                $('#cont2').hide();
                $('#cont3').hide();
                $('#cont4').hide();
                break;
            case '2':
                $('#cont2').toggle();
                $('#2').addClass('active');

                $('#0').removeClass('active');
                $('#1').removeClass('active');
                $('#3').removeClass('active');
                $('#4').removeClass('active');

                $('#cont1').hide();
                $('#cont0').hide();
                $('#cont3').hide();
                $('#cont4').hide();
                break;
            case '3':
                $('#cont3').toggle();
                $('#3').addClass('active');

                $('#0').removeClass('active');
                $('#2').removeClass('active');
                $('#1').removeClass('active');
                $('#4').removeClass('active');

                $('#cont1').hide();
                $('#cont2').hide();
                $('#cont0').hide();
                $('#cont4').hide();
                break;
            case '4':
                $('#cont4').toggle();
                $('#4').addClass('active');

                $('#0').removeClass('active');
                $('#2').removeClass('active');
                $('#3').removeClass('active');
                $('#1').removeClass('active');

                $('#cont1').hide();
                $('#cont2').hide();
                $('#cont3').hide();
                $('#cont0').hide();
                break;
        }

    })
});