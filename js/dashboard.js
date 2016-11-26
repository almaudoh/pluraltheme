(function ($) {
  "use strict";

  function visibleSubMenuClose() {
    $('.menu-list').each(function () {
      var t = $(this);
      if (t.hasClass('nav-active')) {
        t.find('> ul').slideUp(300, function () {
          t.removeClass('nav-active');
        });
      }
    });
  }

  function adjustMainContentHeight() {
    // Adjust main content height
    var docHeight = $(document).height();
    if (docHeight > $('.dash-content').height())
      $('.dash-content').height(docHeight);
  }

  function repositionSearchForm() {
    if ($('.search-content').css('position') == 'relative') {
      $('.search-content').insertBefore('.dashboard-sidebar-info .search-field');
    } else {
      $('.search-content').insertAfter('.right-notification');
    }
  }

  // Add mouse hover class.
  $('.side-navigation > li').hover(function () {
    $(this).addClass('nav-hover');
  }, function () {
    $(this).removeClass('nav-hover');
  });

  // Sidebar toggle.
  $('.menu-list > a').click(function () {
    var parent = $(this).parent();
    var sub = parent.find('> ul');
    if (!$('.dashboard').hasClass('sidebar-collapsed')) {
      if (sub.is(':visible')) {
        sub.slideUp(300, function () {
          parent.removeClass('nav-active');
          $('.dash-content').css({height: ''});
          adjustMainContentHeight();
        });
      } else {
        visibleSubMenuClose();
        parent.addClass('nav-active');
        sub.slideDown(300, function () {
          adjustMainContentHeight();
        });
      }
    }
    return false;
  });

  // Toggle Menu
  $('.toggle-btn').click(function () {
    var dashboard = $('.dashboard');
    var dashboardPosition = dashboard.css('position');
    if (dashboardPosition != 'relative') {
      if (!dashboard.hasClass('sidebar-collapsed')) {
        dashboard.addClass('sidebar-collapsed');
        $('.side-navigation ul').attr('style', '');

      } else {
        dashboard.removeClass('sidebar-collapsed chat-view');
        $('.side-navigation li.active ul').css({display: 'block'});

      }
    } else {
      if (dashboard.hasClass('sidebar-open'))
        dashboard.removeClass('sidebar-open');
      else
        dashboard.addClass('sidebar-open');

      adjustMainContentHeight();
    }

  });

  $(window).resize(function () {
    if ($('.dashboard').css('position') == 'relative') {
      $('.dashboard').removeClass('sidebar-collapsed');
    } else {
      $('.dashboard').css({left: '', marginRight: ''});
    }
    repositionSearchForm();
  });

  repositionSearchForm();

})(jQuery);
