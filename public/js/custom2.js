$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      stagePadding:200,
      touchDrag:true,
      margin:-200,
      responsiveClass:true,
      nav:true,
      responsive:{
          0:{
              items:1,
              stagePadding:20,
              nav:true
          },
          400:{
            items:1,
            stagePadding:40,
            nav:true
          },
          600:{
              items:3,
              stagePadding:100,
              nav:false,
              
          },
          1000:{
              items:3,
              stagePadding:60,
              nav:true,
              
          },
      }
    });
  });

  window.onscroll = function(){myFunction()};
  function myFunction(){
      var navbar = document.getElementById("nav");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        navbar.className =" navbar navbar-expand-lg navbar-dark white fixed-top";
      }else{
          navbar.className = "navbar navbar-expand-lg navbar-dark white sticky";
      }
  }
  var penjumlahan= 0 ;

  function compare(kd_lp,tipe,img){
   
   penjumlahan++;
    var no = $(".laptop-item").length+1;
    var content ='<div class="data-list" >'
    content+='<li class="laptop-item'+kd_lp+'">';
    content+='<img class="img-comp" src="'+img+'">';
    //content+='<p>'+kd_lp+'</p>';
    content+='<h6>'+tipe+'</h6>';
    content+='<span>';
    content+='<a  class="close" kd="'+kd_lp+'" onclick="remove_lp(this,'+kd_lp+')">X</a>';
    content+='<input type="hidden" value="'+penjumlahan+'">';
    content+='<input type="hidden" value="'+kd_lp+'" name="kd_lp[]">';
    content+='<input type="hidden" value="'+tipe+'" name="tipe[]">';
    content+='</span>';
    content+='</li>';
    content+='</div>';

    $('#banding'+kd_lp).attr("disabled", true);

    if (penjumlahan==3) {
      penjumlahan--
      alert("DELETE COMPARE JUST FOR 2 item");
      $('#banding'+kd_lp).removeAttr("disabled");
      var cls = $(obj).attr("kd");
      $(".laptop-item"+cls).remove();
    };

    $('#compare').append(content);
    var footer = document.getElementById("ft");
    if (document.body.onclick){
      footer.className="page-footer font-small  pt-4 fixed-bottom ft";
    }else{
      footer.className="page-footer font-small  pt-4 fixed-bottom ft1";
    }
  }

  function remove_lp(obj,kd_lp){
    penjumlahan--
    var cls = $(obj).attr("kd");
    $(".laptop-item"+cls).remove();
    $('#banding'+kd_lp).removeAttr("disabled");
  }
  function tampil(footer){
    var footer = document.getElementById("ft");
    if (document.body.onclick){
      footer.className="page-footer font-small blue pt-4 fixed-bottom ft1";
    }else{
      footer.className="page-footer font-small blue pt-4 fixed-bottom ft";
    }
    $(".banding").removeAttr("disabled");
    penjumlahan = 0
    $(".data-list").remove();
  }


 