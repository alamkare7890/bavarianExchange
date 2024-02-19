jQuery(document).ready(function($){
// document start


 // Navbar
 $( "<span class='clickD'></span>" ).insertAfter(".navbar-nav li.menu-item-has-children > a");
 $('.navbar-nav li .clickD').click(function(e) {
     e.preventDefault();
     var $this = $(this);
     if ($this.next().hasClass('show'))
        {
            $this.next().removeClass('show');
            $this.removeClass('toggled');
        } 
        else 
        {
            $this.parent().parent().find('.sub-menu').removeClass('show');
            $this.parent().parent().find('.toggled').removeClass('toggled');
            $this.next().toggleClass('show');
            $this.toggleClass('toggled');
        }
 });

 $(window).on('resize', function(){
     if ($(this).width() < 1025) {
         $('html').click(function(){
             $('.navbar-nav li .clickD').removeClass('toggled');
             $('.toggled').removeClass('toggled');
             $('.sub-menu').removeClass('show');
         });
         $(document).click(function(){
             $('.navbar-nav li .clickD').removeClass('toggled');
             $('.toggled').removeClass('toggled');
             $('.sub-menu').removeClass('show');
         });
         $('.navbar-nav').click(function(e){
            e.stopPropagation();
         });
     }
 });
 // Navbar end


 
/* ===== For menu animation === */
$(".navbar-toggler").click(function(){
    $(".navbar-toggler").toggleClass("open");
    $(".navbar-toggler .stick").toggleClass("open");
    $('body,html' ).toggleClass("open-nav");
});

// Navbar end




// back to top
if($("#scroll").length){
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 200) { 
            $('#scroll').fadeIn(200); 
        } else { 
            $('#scroll').fadeOut(200); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 500); 
        return false; 
    }); 
}

// slick slider
$('.ending-slider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  
});

$('.feature-slider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.blog-slider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: '.prev-arrows',
  nextArrow: '.next-arrows',
  responsive: [
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
  ]
});

$('.search-btn').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('src-open');
  $('.search-wpr').toggleClass('open');
})
$('.search-btn-cls').on('click', function (e) {
  e.preventDefault();
  $('.search-wpr.open').removeClass('open');
  $('.search-btn.src-open').removeClass('src-open');
})

$('.filtercls').click(function(){
  if ($(this).parent().hasClass("fltropen")) {
  
    $(this).parent().removeClass("fltropen");
  }
  else{
  
  $(this).parent().addClass('fltropen');
  }
  
});

// SD CREATE 30.08.2023

$('.faq-hdng').on('click', function () {
  $(this).toggleClass('active');
  $(this).parents('.each-faq').toggleClass('active');
  $(this).parents('.each-faq').siblings().removeClass('active');
  $(this).next('.faq-ans').stop(true, true).slideToggle();
  $(this).parents('.each-faq').siblings().find('.faq-ans').slideUp();
  $(this).parents('.each-faq').siblings().find('.faq-hdng').removeClass('active');
})

$('.faq-hdng').each(function () {
if ($(this).hasClass('active')) {
    $(this).next('.faq-ans').stop(true, true).slideDown();
}
})

// SD CREATE 30.08.2023

// document end
//ajax loader


// var ppp = 3; // Post per page
// var cat = 8;
// var pageNumber = 1;


// function load_posts(){
//     pageNumber++;
//     var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
//     $.ajax({
//         type: "POST",
//         dataType: "html",
//         url: ajax_posts.ajaxurl,
//         data: str,
//         success: function(data){
//             var $data = $(data);
//             if($data.length){
//                 $("#ajax-posts").append($data);
//                 $("#more_posts").attr("disabled",false);
//             } else{
//                 $("#more_posts").attr("disabled",true);
//             }
//         },
//         error : function(jqXHR, textStatus, errorThrown) {
//             $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
//         }

//     });
//     return false;
// }

// $("#more_posts").on("click",function(){ // When btn is pressed.
//     $("#more_posts").attr("disabled",true); // Disable the button, temp.
//     load_posts();
// });
// $(window).on('scroll', function () {
//   if ($(window).scrollTop() + $(window).height()  >= $(document).height() - 100) {
//       load_posts();
//   }
// });
// $(window).on('scroll', function(){
//   if($('body').scrollTop()+$(window).height() > $('footer').offset().top){
//       if(!($loader.hasClass('post_loading_loader') || $loader.hasClass('post_no_more_posts'))){
//               load_posts();
//       }
//   }
// });
// $(window).on('scroll', function () {
//   console.log($(window).scrollTop() + $(window).height());
//   console.log($(document).height() - 100);
//   if ($(window).scrollTop() + $(window).height()  >= $(document).height() - 100) {
//       load_posts();
//   }
// });


  let currentPage = 1;
$('#more_posts').on('click', function() {
  currentPage++; // Do currentPage + 1, because we want to load the next page

  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'weichie_load_more',
      paged: currentPage,
    },
    success: function (res) {
      $('#ajax-posts').append(res);
    }
  });
});
})


