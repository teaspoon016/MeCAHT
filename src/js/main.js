$(document).ready(function() {
    $("#supportersSlider").owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        navText: [
            "<i class='ti-angle-left'></i>",
            "<i class='ti-angle-right'></i>",
        ],
        autoplay: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
    $('.toggleNav').on('click', function() {
        $('.sidebar-navigation').toggleClass('isActive');
    });
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeOut(500);
    });
    var $ul = $('.sidebar-navigation > ul');
    $ul.find('li a').click(function(e) {
        var $li = $(this).parent();
        if ($li.find('ul').length > 0) {
            e.preventDefault();
            if ($li.hasClass('selected')) {
                $li.removeClass('selected').find('li').removeClass('selected');
                $li.find('ul').slideUp(400);
                $li.find('a i').removeClass(' ti-angle-up');
            } else {
                if ($li.parents('li.selected').length == 0) {
                    $ul.find('li').removeClass('selected');
                    $ul.find('ul').slideUp(400);
                    $ul.find('li a i').removeClass(' ti-angle-up');
                } else {
                    $li.parent().find('li').removeClass('selected');
                    $li.parent().find('> li ul').slideUp(400);
                    $li.parent().find('> li a i').removeClass(' ti-angle-up');
                }
                $li.addClass('selected');
                $li.find('>ul').slideDown(400);
                $li.find('>a>i').addClass(' ti-angle-up');
            }
        }
    });
    $('.sidebar-navigation > ul ul').each(function(i) {
        if ($(this).find('>li>ul').length > 0) {
            var paddingLeft = $(this).parent().parent().find('>li>a').css('padding-left');
            var pIntPLeft = parseInt(paddingLeft);
            var result = pIntPLeft + 20;
            $(this).find('>li>a').css('padding-left', result);
        } else {
            var paddingLeft = $(this).parent().parent().find('>li>a').css('padding-left');
            var pIntPLeft = parseInt(paddingLeft);
            var result = pIntPLeft + 20;
            $(this).find('>li>a').css('padding-left', result).parent().addClass('selected--last');
        }
    });
    var t = ' li > ul ';
    for (var i = 1; i <= 10; i++) {
        $('.sidebar-navigation > ul > ' + t.repeat(i)).addClass('subMenuColor' + i);
    }
    var activeLi = $('li.selected');
    if (activeLi.length) {
        opener(activeLi);
    }

    function opener(li) {
        var ul = li.closest('ul');
        if (ul.length) {
            li.addClass('selected');
            ul.addClass('open');
            li.find('>a>em').addClass('ti-angle-up');
            if (ul.closest('li').length) {
                opener(ul.closest('li'));
            } else {
                return false;
            }
        }
    }
    $('.video-modal').on('hidden.bs.modal', function() {
        var $this = $(this).find('iframe'),
            tempSrc = $this.attr('src');
        $this.attr('src', "");
        $this.attr('src', tempSrc);
    });
    const items = $(".list-wrapper .list-item");
    const numItems = items.length;
    const perPage = 7;
    items.slice(perPage).fadeOut();
    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function(pageNumber) {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).fadeIn();
        }
    });
});
