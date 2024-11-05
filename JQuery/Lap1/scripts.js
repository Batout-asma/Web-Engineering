$(document).ready(function(){
    alert('I love you ASMA <3')
    $("#Num_p1").text("1")
    $("#Nom_p1").text("Erithromycin 100 mg")
    $("#Prix_unit_p1").text("58")

    $("#Num_p2").text("2")
    $("#Nom_p2").text("Femramycin 500 mg")
    $("#Prix_unit_p2").text("46")

    $("#Num_p3").text("3")
    $("#Nom_p3").text("Oximycin 2 mg")
    $("#Prix_unit_p3").text("58")

    $("#total_lettre").text("Total")

    $("#gst_lettre").text("GST ot 15%")

    $("#G_total_lettre").text("Grand Total Rs.")

$("#Update").click(function(){
    
    var Prix_unit_p1 =parseFloat($("#Prix_unit_p1").text());
    var Prix_unit_p2 =parseFloat($("#Prix_unit_p2").text());
    var Prix_unit_p3 =parseFloat($("#Prix_unit_p3").text());
    var Quantity_p1 =parseFloat($("#Quantity_p1").val());
    var Quantity_p1 =parseFloat($("#Quantity_p2").val());
    var Quantity_p3 =$parseFloat(("#Quantity_p3").val());

    var Cost_p1 = Prix_unit_p1 * Quantity_p1;
    $("#Cost_p1").text(Cost_p1);

    var Cost_p2 = Prix_unit_p2 * Quantity_p2;
    $("#Cost_p2").text(Cost_p2);

    var Cost_p3 = Prix_unit_p3 * Quantity_p3;
    $("#Cost_p3").text(Cost_p3);

    var total_chiffre = Cost_p1 + Cost_p2 + Cost_p3;
    $("#total_chiffre").text(total_chiffre.toFixed(2));

    var gst_chiffre = (total_chiffre*15)/100;
    $("#gst_chiffre").text(gst_chiffre.toFixed(2));

    var G_total_chiffre = total_chiffre + gst_chiffre;
    $("#G_total_chiffre").text(G_total_chiffre.toFixed(2));
});
});