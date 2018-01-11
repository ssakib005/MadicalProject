var shoppingCart = [];
var cart_total_price = 0;
var orderedProductsTblBody;
var GetRandomNumber;



function displayShoppingCart() {
    orderedProductsTblBody = document.getElementById("dataTable").getElementsByTagName('tbody')[0];

    //ensure we delete all previously added rows from ordered products table
    while (orderedProductsTblBody.rows.length > 0) {
        orderedProductsTblBody.deleteRow(0);
    }
    var count = 1;
    for (var product in shoppingCart) {
        var row = orderedProductsTblBody.insertRow();
        var medicineName = row.insertCell(0);
        var medicineTime = row.insertCell(1);
        var medicineDay = row.insertCell(2);
        medicineName.innerHTML = shoppingCart[product].name;
        medicineTime.innerHTML = shoppingCart[product].time;
        medicineDay.innerHTML = shoppingCart[product].day;
        count++;
    }
}

function AddtoCart() {
    var singleProduct = {};
    singleProduct.name = document.getElementById("medicine").value;
    singleProduct.time = document.getElementById("time").value;
    singleProduct.day = document.getElementById("day").value;
    shoppingCart.push(singleProduct);

    displayShoppingCart();

}

function record() {

    var dateObj = new Date();
    var month = dateObj.getMonth() + 1; //months from 1-12
    var day = dateObj.getDate();
    var year = dateObj.getFullYear();

    newdate = year + "-" + month + "-" + day;


    var billNo = GenerateRandomValue().toString();

    for (var product in shoppingCart) {
        var MedicineName = shoppingCart[product].name.toString();
        var time = shoppingCart[product].time.toString();
        var day = shoppingCart[product].day.toString();
        var date = newdate;
        var text = '{"Mname":"' + MedicineName + '","Time":"' + time + '","Day":"' + day + '","Date":"' + date + '"}';
        var obj = JSON.parse(text);
        try {
            $.ajax({
                type: 'POST',
                url: 'php/prescription.inc.php',
                //data: $('form').serialize(),
                data: obj,
                success: function(data) {
                    if (data === "false") {

                    } else {
                        alert('Data has been Submitted Successfully!');
                        window.location.href = "prescription.php";
                    }
                },
                fail: function() {

                }
            });
        } catch (err) {
            alert(err);
        }

    }


}

function PrintElem() {
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title + '</title>');
    mywindow.document.write('</head><body >');
    for (var product in shoppingCart) {

        mywindow.document.write('<h1>' + shoppingCart[product].Name.toString() + '</h1>');

    }
    //mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}


function ClearHtmlElement() {

    document.getElementById("ClientName").value = "";
    document.getElementById("ClientAddress").value = "";
    document.getElementById("ClientPhn").value = "";
    document.getElementById("PrintHeight").value = "";
    document.getElementById("PrintWide").value = "";
    document.getElementById("PrintQuantity").value = "";
    document.getElementById("PrintPrice").value = "";
    document.getElementById("PrintAdvancePay").value = "";

}



function GenerateRandomValue() {
    var a = Math.random();
    var b = Math.random();
    var start = Date.now();
    return GetRandomNumber = Math.floor((Math.random() * 70) + 15 + start + a + b);


}