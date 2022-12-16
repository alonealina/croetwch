function clickMenuBrandButton() {
    if ($('#menu_brand_sp').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#menu_brand_sp').css( 'display', 'none' );
        $('#up_brand').css( 'display', 'none' );
        $('#down_brand').css( 'display', 'block' );
        
    } else {
        // 非表示の場合の処理
        $('#menu_brand_sp').css( 'display', 'flex' );
        $('#up_brand').css( 'display', 'block' );
        $('#down_brand').css( 'display', 'none' );
    }
}

function clickMenuCompanyButton() {
    if ($('#menu_company_sp').css('display') == 'block') {
        // 表示されている場合の処理
        $('#menu_company_sp').css( 'display', 'none' );
        $('#up_company').css( 'display', 'none' );
        $('#down_company').css( 'display', 'block' );
        
    } else {
        // 非表示の場合の処理
        $('#menu_company_sp').css( 'display', 'block' );
        $('#up_company').css( 'display', 'block' );
        $('#down_company').css( 'display', 'none' );
    }
}

function clickMenuLinkButton() {
    if ($('#menu_link_sp').css('display') == 'block') {
        // 表示されている場合の処理
        $('#menu_link_sp').css( 'display', 'none' );
        $('#up_link').css( 'display', 'none' );
        $('#down_link').css( 'display', 'block' );
        
    } else {
        // 非表示の場合の処理
        $('#menu_link_sp').css( 'display', 'block' );
        $('#up_link').css( 'display', 'block' );
        $('#down_link').css( 'display', 'none' );
    }
}

function clickNewSp() {
    $('#item_new_a').css( 'border-bottom', 'none' );
    $('#item_add_a').css( 'border-bottom', '1px solid' );
    $('#item_down_a').css( 'border-bottom', '1px solid' );

    $('#item_new_div').css( 'display', 'flex' );
    $('#item_add_div').css( 'display', 'none' );
    $('#item_down_div').css( 'display', 'none' );
}

function clickAddSp() {
    $('#item_new_a').css( 'border-bottom', '1px solid' );
    $('#item_add_a').css( 'border-bottom', 'none' );
    $('#item_down_a').css( 'border-bottom', '1px solid' );

    $('#item_new_div').css( 'display', 'none' );
    $('#item_add_div').css( 'display', 'flex' );
    $('#item_down_div').css( 'display', 'none' );
}

function clickDownSp() {
    $('#item_new_a').css( 'border-bottom', '1px solid' );
    $('#item_add_a').css( 'border-bottom', '1px solid' );
    $('#item_down_a').css( 'border-bottom', 'none' );

    $('#item_new_div').css( 'display', 'none' );
    $('#item_add_div').css( 'display', 'none' );
    $('#item_down_div').css( 'display', 'flex' );
}



function clickRegistButton() {
    document.forms.regist_form.submit();
}