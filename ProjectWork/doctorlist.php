<?php 
include_once 'header.php';
?>
<div id="doc_lis_middel">
    <h2 id="middel_doc_H3_0">
        <b>Doctor List</b>
    </h2>
    <div style="height:10%;">
        <table id="catagory">
            <tr>
                <td>
                    <h4>Select Doctor Catagory:</h4>
                </td>
                <td>
                    <!--action="php/search.doctor.inc.php" method="post"-->
                    <form>
                        <select name="doctor" id="_list">
                            <option value="">Select</option>
                            <option value="medicine">Medicine specialist</option>
                            <option value="psychiatrist">Psychiatrist</option>
                            <option value="allergist">Allergist</option>
                            <option value="cardiologist">Cardiologist</option>
                        </select>
                        <a id="find-button" name="submit" type="button" onclick="ajaxRequest()">Find </a>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <hr style="padding-top:3px; margin-bottom:4px;background-color:#575353;border:0;">
    <div id="doc_list" style="height:77%; overflow-y:scroll;">

        <div id="ajaxReturn"></div>

    </div>
</div>
<div style="clear:both"></div>
</main>
<script>
    function ajaxRequest() {
        if ($("#doctor_list").val() != "") {
            jQuery.ajax({
                type: "POST",
                url: "php/search.doctor.inc.php",
                data: "doctor=" + $("#_list").val(),
                success: function (msg) {
                    $("#ajaxReturn").html(msg);
                },
                error: function () {
                    //echo "Error";
                }
            });
        } else {
            $("#ajaxReturn").html("");
        }

    }
</script>
<?php 
    include_once 'footer.php';
?>