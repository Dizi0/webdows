JQuery.noConflict();
JQuery(".draggable").draggable({
  start: function(event, ui) {
    JQuery(this).data("preventBehaviour", true);
  }
});
JQuery(".draggable")
  .find(":input")
  .on("mousedown", function(e) {
    var mdown = document.createEvent("MouseEvents");
    mdown.initMouseEvent(
      "mousedown",
      false,
      true,
      window,
      0,
      e.screenX,
      e.screenY,
      e.clientX,
      e.clientY,
      true,
      false,
      false,
      true,
      0,
      null
    );
    JQuery(this)
      .closest(".draggable")[0]
      .dispatchEvent(mdown);
  })
  .on("click", function(e) {
    var JQuerydraggable = JQuery(this).closest(".draggable");
    if (JQuerydraggable.data("preventBehaviour")) {
      console.log(1);
      e.preventDefault();
      JQuerydraggable.data("preventBehaviour", false);
    }
  });
