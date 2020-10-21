function insertchamp(){
    
    var $name = $("#name").val();
    var $rank = $("#rank2").val();
    var $role = $("#role2").val();
    var $imgurl = $("#imgurl").val();
    var $rankid = 1;
    
    // switch(rank){
    //     case "iron": rankid = 1; break;
    //     case "bronze": rankid = 2; break;
    //     case "silver": rankid = 3; break;
    //     case "gold": rankid = 4; break;
    //     case "platinum": rankid = 5; break;
    //     case "diamond": rankid = 6; break;
    //     case "master": rankid = 7; break;
    //     case "grandmaster": rankid = 8; break;
    //     case "challanger": rankid = 9; break;
    //     default: rankid = 0;
    // }
    $.ajax({
        url: "c.php",
        type: "get",
        data: {
            name: $name,
            rankid: $rankid,
            role: $role,
            imgurl: $imgurl
        },
        success: function(data) {
            alert("Champion added successfully!");
         },
         error: function(){
            alert("There was an error with your request.");
        }
    });


}

function find(){
    var rankid = $("#rank").val();
    var role = $("#role:checked").val();
    $.ajax({
        url: "a.php",
        type: "get",
        data: {
            rankid: rankid,
            role: role
          },
            success: function(data){
            $("#popuni").html(data);
        }
    });
}

function findfordev(){

    $.ajax({
        url: "d.php",
        type: "get",
        data: {

          },
            success: function(data){
            $("#dev-table").html(data);
        }
    });
}


function findbyname(){
    var name = $("#txt").val();
    $.ajax({
        url: "b.php",
        type: "get",
        data: {
            name: name
        },
        success: function(data){
            $("#livesearch").show();
            $("#livesearch").html(data);
        }
    });
}

function deletebyname(){
    var name = $("#deletename").val();
    $.ajax({
        url: "e.php",
        type: "get",
        data: {
            name: name
          },
            success: function(data){
            alert("Champion deleted successfully!");
        }
    });
}


