$(window).scroll(function () {
  console.log($(window).scrollTop() + window.innerHeight);
    let threshold = 1100;
  if ($(window).scrollTop() + window.innerHeight < threshold) {
    $("#body").animate(
      {
        backgroundColor: "#2caf45",
        color: "#fbf8ef",
      },
      600,
      () => {
        $("#body").removeAttr("style").addClass("body");
      }
    );
    $("#body").stop();
  } else if (
    $(window).scrollTop() + window.innerHeight >= threshold &&
    $(":animated").length === 0
  ) {
    $("#body").stop();

    $("#body").animate(
      {
        backgroundColor: "#fbf8ef",
        color: "#353e4a",
      },
      600,
      () => {
        console.log($("#body").removeClass("body"));
      }
    );

    //Otherwise remove inline styles and thereby revert to original stying
  }
});
