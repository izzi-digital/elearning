$(document).ready(function () {
  // Cursor
  const $cursorDot = $(".cursor-dot");
  const $cursorOutline = $(".cursor-outline");

  function setupCursor() {
    if (!$cursorDot.length || !$cursorOutline.length) return;
    const $allLinks = $("a");

    $(window).on("mousemove", (e) => {
      $cursorDot.css({
        top: e.clientY,
        left: e.clientX,
      });
      $cursorOutline.css({
        top: e.clientY,
        left: e.clientX,
      });
    });
    $(document).on("mouseover", "a", () => {
      $cursorDot.addClass("hover");
      $cursorOutline.addClass("hover");
    });
    $(document).on("mouseout", "a", () => {
      $cursorDot.removeClass("hover");
      $cursorOutline.removeClass("hover");
    });

    $(document).on("mouseleave", () => {
      $cursorDot.addClass("cursor-hidden");
      $cursorOutline.addClass("cursor-hidden");
    });
    $(document).on("mouseenter", () => {
      $cursorDot.removeClass("cursor-hidden");
      $cursorOutline.removeClass("cursor-hidden");
    });
  }
  setupCursor();
});
