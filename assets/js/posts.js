(function ($) {
  $(function () {
    $("ul.posts__tabs__caption").on("click", "li:not(.active)", function () {
      $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest("div.posts__tabs")
        .find("div.posts__tabs__content")
        .removeClass("active")
        .eq($(this).index())
        .addClass("active");
    });
  });
})(jQuery);
