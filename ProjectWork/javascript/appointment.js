// function addMedicine() {
//     var table = document.getElementById("dataTable"),
//         newRow = table.insertRow(table.length),
//         cell1 = newRow.insertCell(0),
//         cell2 = newRow.insertCell(1),
//         cell3 = newRow.insertCell(2);
//     medicineName = document.getElementById("medicine").value;
//     time = document.getElementById("time").value;
//     day = document.getElementById("day").value;
//     cell1.innerHTML = medicineName;
//     cell2.innerHTML = time;
//     cell3.innerHTML = day;
// }

// // function addDatabase() {
// //     var medicineName = [];
// //     var medicineTime = [];
// //     var medicineDay = [];

// //     $('.medicineName').each(function() {
// //         medicineName.push($(this).text());
// //     });
// //     $('.medicineTime').ecah(function() {
// //         medicineTime.push($(this).text());
// //     });
// //     $('.medicineDay').each(function() {
// //         medicineDay.push($(this).text());
// //     });
// //     var text = '{"medicineName":"' + medicineName + '","medicineTime":"' + medicineTime + '","medicineDay":"' + medicineDay + '"}';
// //     var obj = JSON.parse(text);
// //     $.ajax({
// //         url: "php/patient.inc.php",
// //         type: "POST",
// //         data: obj,
// //         success: function(data) {
// //             alert('form was submitted');
// //         }
// //     });
// // }
// // $(function() {
// //     $("#btndone").click(function() {
// //         var n = $("table").find("tr").length;

// //         for (var i = 1; i < n; i++) {
// //             var name = $("table").find("tr").eq(i).find("td").eq(0).text();
// //             var time = $("table").find("tr").eq(i).find("td").eq(1).text();
// //             var day = $("table").find("tr").eq(i).find("td").eq(2).text();


// //             //alert(salary);
// //             $.ajax({
// //                 type: "Post",
// //                 url: "php/patient.inc.php",
// //                 data: "{'Mname':'" + name + "','Time':'" + time + "','Day':" + day + "}",

// //                 contentType: "application/json; charset=utf-8",
// //                 dataType: "json",
// //                 success: function() {
// //                     //alert("complete");
// //                 },
// //                 error: function(err) {
// //                     alert(err);
// //                 }
// //             })
// //         }
// //     })
// // })
// var TableData;
// TableData = storeTblValues()
// TableData = $.toJSON(TableData);

// function storeTblValues() {
//     var TableData = new Array();

//     $('#sampleTbl tr').each(function(row, tr) {
//         TableData[row] = {
//             "taskNo": $(tr).find('td:eq(0)').text(),
//             "date": $(tr).find('td:eq(1)').text(),
//             "description": $(tr).find('td:eq(2)').text(),
//             "task": $(tr).find('td:eq(3)').text()
//         }
//     });
//     TableData.shift(); // first row will be empty - so remove
//     return TableData;
// }




// // $(document).ready(function() {

// //     $('#done').click(function() {

// //     });
// // });