$(document).ready(function () {
    $('.js-heart-article').on('click', function (e) {
        e.preventDefault();
        var $link = $(e.currentTarget);
        $link.toggleClass('far').toggleClass('fas');
      $.ajax({url: $link.attr('href'),method: 'POST', success: function(data){
        console.log(data);
        $('.js-like-article-count').html(data['heart']);
      }});
    });
});