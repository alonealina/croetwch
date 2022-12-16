




function clickMailButton() {
    error_flg = 0;
    var error_message = document.getElementById('error_message');
    if (mail_form.name.value == ""){
        $('#name').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#name').css( 'background', '#fff' );
    }

    if (mail_form.tel.value == ""){
        $('#tel').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#tel').css( 'background', '#fff' );
    }

    if (mail_form.mail.value == "" || !(mail_form.mail.value.match(/.+@.+\..+/)) ){
        $('#mail').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#mail').css( 'background', '#fff' );
    }

    if (mail_form.content.value == ""){
        $('#content').css( 'background', '#FFE1E1' );
        error_flg = 1;
    } else {
        $('#content').css( 'background', '#fff' );
    }

    if (error_flg) {
        error_message.innerHTML = '※不足している項目があります。';
    } else {
        document.forms.mail_form.submit();
    }
}

