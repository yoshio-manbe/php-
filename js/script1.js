$("#open").click(function(){
    var selectedValue = $("#result").val();

    if (selectedValue === "住宅") {
        $(".house").show();
    } else if (selectedValue === "飲食店") {
        $(".food").show();
    } else if (selectedValue === "娯楽施設") {
        $(".work").show();
    } else if (selectedValue === "その他") {
        $(".others").show();
    } 
})


