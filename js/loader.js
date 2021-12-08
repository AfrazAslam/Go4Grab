jQuery(document).ready(() => {
  $("#body").offset().top;
  $("#main").hide();
});

jQuery(window).load(function () {
  $("#main").show();
  $("#loadercontianer").animate(
    {
      opacity: 0,
    },
    600,
    () => {
      console.log($("#loadercontianer").remove());
    }
  );
});
