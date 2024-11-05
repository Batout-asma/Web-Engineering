$(document).ready(function () {
  $("#cities").hide();
  $("label[for=Cities").hide();

  $("label[for=City").hide();
  $("#city").hide();

  $("#country").change(function () {
    if ($(this).val() == "Algeria") {
      $("#city").hide();
      $("label[for=City").hide();
      $("#cities").show();
      $("label[for=Cities").show();
    } else {
      if ($(this).val() == "Others") {
        $("#cities").hide();
        $("label[for=Cities").hide();
        $("#city").show();
        $("label[for=City").show();
      } else {
        $("#city").hide();
        $("label[for=City").hide();
        $("#cities").hide();
        $("label[for=Cities").hide();
      }
    }
  });
});
