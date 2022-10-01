<?php
ob_start();
session_start();

if(!isset($_SESSION['auth'])){
    header('location:login.php');
}

//no need to include dbConfig Class coz it is already present inside dbCrud Class 
require_once 'dbCrud.php';

//create new object for dbCrud
$crudObj=new Crud();

$getmarkup=0;
$getdp=0;
$getInterest=0;
$getcodes="";
$query="Select * FROM tblcode LIMIT 1";
$result= $crudObj->getData($query);
// print_r($result);      
foreach($result as $key => $res){
    $getmarkup=$res['markup'];
    $getdp=$res['dp'];
    $getInterest=$res['interest'];
    $getcodes=$res['codes'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- jQuery Modal css-->
     <link rel="stylesheet" href="jquery.modal.min.css" />

    <!--  -->
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Settings | Admin</title>
</head>
<body>

    <div class="main-container">
        <div class="admin_content">
                
                <h1>   
                <!-- <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="35px"><path d="M88 49c-1 0-2-.4-2.8-1.1L46 9.6 6.8 47.9c-1.6 1.5-4.1 1.5-5.7-.1-1.5-1.6-1.5-4.1.1-5.7l42-41c1.6-1.5 4-1.5 5.6 0l42 41c1.6 1.5 1.6 4.1.1 5.7-.8.8-1.9 1.2-2.9 1.2zm-8.8 39V48.9c0-2.2-1.8-4-4-4s-4 1.8-4 4V84H58.7V62.6c0-2.9-2.4-5.3-5.3-5.3H38.6c-2.9 0-5.3 2.4-5.3 5.3V84H20.8V48.9c0-2.2-1.8-4-4-4s-4 1.8-4 4V88c0 2.2 1.8 4 4 4h20.5c2.2 0 4-1.8 4-4V65.3h9.5V88c0 2.2 1.8 4 4 4h20.5c2.2 0 3.9-1.8 3.9-4z"/></svg>
                </span>                  -->
                    Settings - Admin
                </h1>

                <div class="header-menu">
                    <div><a href="#" class="btnpricingSettings active">Pricing settings</a></div>
                    <div><a href="#" class="btnloginSettings">Login settings</a></div>
                </div>
                <div class="settings-container">
                    <div class="pricing-container">
                        <div class="pricing-wrapper">
                            <div>
                                <label for="markup">Markup (%)</label>
                                <input type="number" class="txtmarkup" value="<?= $getmarkup; ?>" >
                            </div>
                            <div>
                                <label for="downpayment">Down payment (%)</label>
                                <input type="number" class="txtdp" value="<?= $getdp; ?>" >
                            </div>
                            <div>
                                <label for="interest">Interest (%)</label>
                                <input type="number" class="txtint" value="<?= $getInterest; ?>" >
                            </div>
                            <div>
                                <label for="interest">Code </label>
                                <input type="text" class="txtcode" value="<?= $getcodes; ?>">
                            </div>
                        </div>
                        <div class="pricingbtn-wrapper">
                                <input type="button" value="Update" class="btnupdatePricing">
                        </div>
                    </div>

                    <div class="loginSettings-container">
                        <div class="loginSettings-wrapper">
                            <div>
                                <p class="errorLogin-notif"></p>
                            </div>
                            <div>
                                <label for="user name">User name</label>
                                <input type="text" placeholder="New user name" class="txtusername">
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input type="password" class="txtpassword" placeholder="New password">
                            </div>
                            <div>
                                <label for="password">Re-type Password</label>
                                <input type="password" class="txtpasswordrepeat" placeholder="Re-type new password">
                            </div>
                        </div>
                        <div class="loginSettingsbtn-wrapper">
                            <div>
                                <input type="button" value="Update" class="btnUpdateLogin">
                            </div>
                        </div>
                    </div>
                    <div class="logout-wrapper">
                        <a href="session_destroy.php"> Logout </a>
                    </div>
                </div>
        </div>
    </div>

        <!-- Modal HTML embedded directly into document -->
        <div id="modalform" class="modal">       
            <div>
                <p id="notif_error"></p>
                <p id="notif_success"></p>
            </div>   
        </div>



    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <!-- jQuery Modal -->
    <script src="jquery.modal.min.js"></script>
        
    <script>
        $(document).ready(function(){
            $(".btnpricingSettings").on("click",function(){
                $(".btnpricingSettings").addClass("active");
                $(".btnloginSettings").removeClass("active");

                $(".pricing-container").addClass("active");
                $(".pricing-container").removeClass("inactive");

                $(".loginSettings-container").addClass("inactive");
                $(".loginSettings-container").removeClass("active");

                //alert($(window).width());
                if($(window).width()<=550){
                    $(".header-menu").css("cssText","flex-direction:column-reverse !important");
                }
                
            });

            $(".btnloginSettings").on("click",function(){
                $(".btnpricingSettings").removeClass("active");
                $(".btnloginSettings").addClass("active");

                $(".loginSettings-container").addClass("active");
                $(".loginSettings-container").removeClass("inactive");

                $(".pricing-container").addClass("inactive");
                $(".pricing-container").removeClass("active");

                // alert($(window).width());
                if($(window).width()<=550){
                    $(".header-menu").css("cssText","flex-direction:column !important");
                }
                
            });

            $(".btnupdatePricing").on("click",function(){
                let newmarkup=$(".txtmarkup").val();
                let newdp=$(".txtdp").val();
                let newintterest=$(".txtint").val();
                let newcodes=$(".txtcode").val();
                //alert(newcodes.length);
                if(!$.trim($(".txtmarkup").val()).length || !$.trim($(".txtdp").val()).length || !$.trim($(".txtint").val()).length || !$.trim($(".txtcode").val()).length) {
                    $("#notif_error").html("Invalid empty field/s.");
                    $("#notif_success").html("");
                    $('#modalform').modal();
                }else if(newcodes.length<10 || newcodes.length>10){
                    $("#notif_error").html("Ten (10) characters on codes field is required.");
                    $("#notif_success").html("");
                    $('#modalform').modal();
                }else{
                    $.ajax({
                        'type':'post',
                        'url':'updatePricing.php',
                        data:{
                            'markup':newmarkup,
                            'dp':newdp,
                            'interest':newintterest,
                            'codes':newcodes
                        },
                        success:function(res){
                            $("#notif_error").html("");
                            $("#notif_success").html(res);
                            $('#modalform').modal();
                        }
                    });
                }
                
            });


            $(".btnUpdateLogin").on("click",function(){
                if(!$.trim($(".txtusername").val()).length || !$.trim($(".txtpassword").val()).length || !$.trim($(".txtpasswordrepeat").val()).length) {
                    // alert("missing field");
                     $(".errorLogin-notif").html("Invalid empty field/s.");
                }else if($.trim($(".txtpassword").val()) != $.trim($(".txtpasswordrepeat").val())){
                    //alert("password not match");
                    $(".errorLogin-notif").html("Password not matched.");
                }else{
                    let newuser=$.trim($(".txtusername").val());
                    let newpassword=$.trim($(".txtpassword").val());
                    $.ajax({
                        'type':'post',
                        'url':'loginUpdate.php',
                        'data':{
                            'username':newuser,
                            'password':newpassword
                        },
                        'success':function(res){
                            $("#notif_error").html("");
                            $("#notif_success").html(res);
                            $('#modalform').modal();
                        }
                    });                    
                }
                
            });


                        // ##################################
            // TEXT INPUT ONLY LETTERS
            // ###################################
            $('.txtcode').on('input', function() {
                var cursor_pos = $(this).getCursorPosition()
                if(!(/^[a-zA-Z ']*$/.test($(this).val())) ) {
                    $(this).val($(this).attr('data-value'))
                    $(this).setCursorPosition(cursor_pos - 1)
                    return
                }
                $(this).attr('data-value', $(this).val())
            })

            $.fn.getCursorPosition = function() {
                if(this.length == 0) return -1
                return $(this).getSelectionStart()
            }
            $.fn.setCursorPosition = function(position) {
                if(this.lengh == 0) return this
                return $(this).setSelection(position, position)
            }
            $.fn.getSelectionStart = function(){
            if(this.lengh == 0) return -1
            input = this[0]
            var pos = input.value.length
            if (input.createTextRange) {
                var r = document.selection.createRange().duplicate()
                r.moveEnd('character', input.value.length)
                if (r.text == '') 
                pos = input.value.length
                pos = input.value.lastIndexOf(r.text)
            } else if(typeof(input.selectionStart)!="undefined")
            pos = input.selectionStart
            return pos
            }
            $.fn.setSelection = function(selectionStart, selectionEnd) {
            if(this.lengh == 0) return this
            input = this[0]
            if(input.createTextRange) {
                var range = input.createTextRange()
                range.collapse(true)
                range.moveEnd('character', selectionEnd)
                range.moveStart('character', selectionStart)
                range.select()
            }
            else if (input.setSelectionRange) {
                input.focus()
                input.setSelectionRange(selectionStart, selectionEnd)
            }
            return this
            }

             // ##################################
            // TEXT INPUT ONLY LETTERS
            // ###################################

        });
    </script>


</body>
</html>