
function clickNews(num) {

  $('#news_list').css( 'opacity', '0' );
  $('#news_list').css( 'z-index', '0' );
  $('#news_list').css( 'display', 'none' );

  let id = num;

  $.ajax({
    type: "GET",
    url: "../news_list_get.php",
    data: { "id" : id },
    dataType : "json",
  }).done(function(data){
    if (data) {
      $('.news_text').html(data);
    } else {
      console.log(data)
    }
  }).fail(function(XMLHttpRequest, status, e){
    alert("ニュースの取得に失敗しました");
    console.log(e)
  });

  $('#news_div').css( 'opacity', '1' );
  $('#news_div').css( 'z-index', '100' );
  $('#news_div').css( 'display', 'block' );
}

function clickNewsSp(num) {

  $('#news_list').css( 'opacity', '0' );
  $('#news_list').css( 'z-index', '0' );
  $('#news_list').css( 'display', 'none' );

  let id = num;

  $.ajax({
    type: "GET",
    url: "../news_list_get_sp.php",
    data: { "id" : id },
    dataType : "json",
  }).done(function(data){
    if (data) {
      $('.news_text_sp').html(data);
    } else {
      console.log(data)
    }
  }).fail(function(XMLHttpRequest, status, e){
    alert("ニュースの取得に失敗しました");
    console.log(e)
  });

  $('#news_div').css( 'opacity', '1' );
  $('#news_div').css( 'z-index', '100' );
  $('#news_div').css( 'display', 'block' );
}




function clickNewsBtn() {

  $('#news_div').css( 'opacity', '0' );
  $('#news_div').css( 'z-index', '0' );
  $('#news_div').css( 'display', 'none' );

  $('#news_list').css( 'opacity', '1' );
  $('#news_list').css( 'z-index', '100' );
  $('#news_list').css( 'display', 'block' );
}


$(function(){
  $("#news_button").on("click", function(event){
    let page = 1;

    $.ajax({
      type: "GET",
      url: "news_list_get.php",
      data: { "page" : page },
      dataType : "json",
    }).done(function(data){
      if (data) {
        $('.news_div').html(data);
        $('.news_back_btn').addClass('none');
      } else {
        console.log(data)
      }
    }).fail(function(XMLHttpRequest, status, e){
      alert("ニュースの取得に失敗しました");
      console.log(e)
    });
  });
});

$(function(){
  $(".news_back_btn").on("click", function(event){
    let page = 1;

    $.ajax({
      type: "GET",
      url: "news_list_get.php",
      data: { "page" : page },
      dataType : "json",
    }).done(function(data){
      if (data) {
        $('.news_div').html(data);
        $('.news_back_btn').addClass('none');
      } else {
        console.log(data)
      }
    }).fail(function(XMLHttpRequest, status, e){
      alert("ニュースの取得に失敗しました");
      console.log(e)
    });
  });
});

