$(document).ready(function () {
  function calculate() {
    let total = 0;
    $(".quantity").each(function (index) {
      const unitCost = parseFloat($(".unit-cost").eq(index).text());
      const quantity = parseFloat($(this).val());
      const cost = unitCost * quantity;
      $("#cost-" + index).text(cost.toFixed(2));
      total += cost;
    });

    const gst = total * 0.15; 

    $("#total").text(total.toFixed(2));
    $("#gst").txext(gst.toFixed(2));
  }

  function calculateGrandTotal() {
    const total = parseFloat($("#total").text());
    const gst = parseFloat($("#gst").text());
    const grandTotal = total + gst;

    $("#grand-total").text(grandTotal.toFixed(2));
  }

  $(".quantity").on("input", function () {
    calculate();
  });

  $("#update-grand-total").on("click", function () {
    calculateGrandTotal();
  });

  calculate();
});
