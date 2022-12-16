




function clickservice1() {
    var page_name = document.getElementById('page_name');
    page_name.innerHTML = 'Graphic Design';

    $('#close_btn').css( 'opacity', '1' );
    $('#close_btn').css( 'pointer-events', 'auto' );
    
    $('#service_menu').css( 'opacity', '0' );
    $('#service_menu').css( 'z-index', '0' );
    $('#service_menu').css( 'display', 'none' );

    $('#service1').css( 'opacity', '1' );
    $('#service1').css( 'z-index', '100' );
    $('#service1').css( 'display', 'block' );
}

function clickservice2() {
    var page_name = document.getElementById('page_name');
    page_name.innerHTML = 'Web Design';

    $('#close_btn').css( 'opacity', '1' );
    $('#close_btn').css( 'pointer-events', 'auto' );
    
    $('#service_menu').css( 'opacity', '0' );
    $('#service_menu').css( 'z-index', '0' );
    $('#service_menu').css( 'display', 'none' );

    $('#service2').css( 'opacity', '1' );
    $('#service2').css( 'z-index', '100' );
    $('#service2').css( 'display', 'block' );
}

function clickservice3() {
    var page_name = document.getElementById('page_name');
    page_name.innerHTML = 'Media Design';

    $('#close_btn').css( 'opacity', '1' );
    $('#close_btn').css( 'pointer-events', 'auto' );
    
    $('#service_menu').css( 'opacity', '0' );
    $('#service_menu').css( 'z-index', '0' );
    $('#service_menu').css( 'display', 'none' );

    $('#service3').css( 'opacity', '1' );
    $('#service3').css( 'z-index', '100' );
    $('#service3').css( 'display', 'block' );
}

function clickservice4() {
    var page_name = document.getElementById('page_name');
    page_name.innerHTML = 'Photo + Movie';

    $('#close_btn').css( 'opacity', '1' );
    $('#close_btn').css( 'pointer-events', 'auto' );
    
    $('#service_menu').css( 'opacity', '0' );
    $('#service_menu').css( 'z-index', '0' );
    $('#service_menu').css( 'display', 'none' );

    $('#service4').css( 'opacity', '1' );
    $('#service4').css( 'z-index', '100' );
    $('#service4').css( 'display', 'block' );
}

function clickCloseBtn() {
    var page_name = document.getElementById('page_name');
    page_name.innerHTML = 'Service';

    $('#close_btn').css( 'opacity', '0' );
    $('#close_btn').css( 'pointer-events', 'none' );

    $('#service_menu').css( 'opacity', '1' );
    $('#service_menu').css( 'z-index', '100' );
    $('#service_menu').css( 'display', 'block' );

    $('#service1').css( 'opacity', '0' );
    $('#service1').css( 'z-index', '0' );
    $('#service1').css( 'display', 'none' );

    $('#service2').css( 'opacity', '0' );
    $('#service2').css( 'z-index', '0' );
    $('#service2').css( 'display', 'none' );

    $('#service3').css( 'opacity', '0' );
    $('#service3').css( 'z-index', '0' );
    $('#service3').css( 'display', 'none' );

    $('#service4').css( 'opacity', '0' );
    $('#service4').css( 'z-index', '0' );
    $('#service4').css( 'display', 'none' );


}


