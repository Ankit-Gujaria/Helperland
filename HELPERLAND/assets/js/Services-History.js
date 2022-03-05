
document.getElementById('export').addEventListener('click', function () {
    var table2excel = new Table2Excel();
    table2excel.export(document.querySelectorAll("#table-download"));
});




function Tab1Click() {
    $("#Dashboard").addClass("active");
    $("#Service_History").removeClass("active");
    $("#Service_Schedule").removeClass("active");
    $("#Favourite_Pros").removeClass("active");
    $("#Invoices").removeClass("active");
    $("#Notifications").removeClass("active");


    $("#History_Content").hide();
    $("#Schedule_Content").hide();
    $("#Favourite_Content").hide();
    $("#Invoices_Content").hide();
    $("#Notifications_Content").hide();
    $("#Dashboard_Content").show();

}

function Tab2Click() {
    $("#Dashboard").removeClass("active");
    $("#Service_History").addClass("active");
    $("#Service_Schedule").removeClass("active");
    $("#Favourite_Pros").removeClass("active");
    $("#Invoices").removeClass("active");
    $("#Notifications").removeClass("active");


    $("#History_Content").show();
    $("#Schedule_Content").hide();
    $("#Favourite_Content").hide();
    $("#Invoices_Content").hide();
    $("#Notifications_Content").hide();
    $("#Dashboard_Content").hide();
}


function Tab3Click() {
    $("#Dashboard").removeClass("active");
    $("#Service_History").removeClass("active");
    $("#Service_Schedule").addClass("active");
    $("#Favourite_Pros").removeClass("active");
    $("#Invoices").removeClass("active");
    $("#Notifications").removeClass("active");


    $("#History_Content").hide();
    $("#Schedule_Content").show();
    $("#Favourite_Content").hide();
    $("#Invoices_Content").hide();
    $("#Notifications_Content").hide();
    $("#Dashboard_Content").hide();
}

function Tab4Click() {
    $("#Dashboard").removeClass("active");
    $("#Service_History").removeClass("active");
    $("#Service_Schedule").removeClass("active");
    $("#Favourite_Pros").addClass("active");
    $("#Invoices").removeClass("active");
    $("#Notifications").removeClass("active");


    $("#History_Content").hide();
    $("#Schedule_Content").hide();
    $("#Favourite_Content").show();
    $("#Invoices_Content").hide();
    $("#Notifications_Content").hide();
    $("#Dashboard_Content").hide();
}

function Tab5Click() {
    $("#Dashboard").removeClass("active");
    $("#Service_History").removeClass("active");
    $("#Service_Schedule").removeClass("active");
    $("#Favourite_Pros").removeClass("active");
    $("#Invoices").addClass("active");
    $("#Notifications").removeClass("active");


    $("#History_Content").hide();
    $("#Schedule_Content").hide();
    $("#Favourite_Content").hide();
    $("#Invoices_Content").show();
    $("#Notifications_Content").hide();
    $("#Dashboard_Content").hide();
}


function Tab6Click() {
    $("#Dashboard").removeClass("active");
    $("#Service_History").removeClass("active");
    $("#Service_Schedule").removeClass("active");
    $("#Favourite_Pros").removeClass("active");
    $("#Invoices").removeClass("active");
    $("#Notifications").addClass("active");


    $("#History_Content").hide();
    $("#Schedule_Content").hide();
    $("#Favourite_Content").hide();
    $("#Invoices_Content").hide();
    $("#Notifications_Content").show();
    $("#Dashboard_Content").hide();
}




