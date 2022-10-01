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
    <title>Fulgie Mktg | Installment Caculator</title>
</head>
<body>
    <div class="main-container container">
        <div class="content-wrapper">

            <h2>FULGIE Marketing</h2>
            <div class="fields-wrapper">
                <div class="inputwrap">
                     <p>Installment calculator</p>
                </div>
                <div class="inputwrap">
                    <label class="lbltitle" for="">Code</label>
                    <input type="text" name="txtcode" id="txtcode" placeholder="Enter Code" autocomplete="off">
                </div>
                <div class="result-container">
                    <div>
                        <label class="lbltitle" for="">SRP</label>
                        <label for="" class="lblvalue" id="srp">0</label>
                    </div>
                    <div>
                        <label class="lbltitle" for="">Down payment</label>
                        <label for="" class="lblvalue">0</label>
                    </div>
                    <div>
                        <label class="lbltitle" for="">3 months</label>
                        <label for="" class="lblvalue">0</label>
                    </div>
                    <div>
                        <label class="lbltitle" for="">6 months</label>
                        <label for="" class="lblvalue">0</label>
                    </div>
                    <div>
                        <label class="lbltitle" for="">10 months</label>
                        <label for="" class="lblvalue">0</label>
                    </div>
                    <div>
                        <label class="lbltitle" for="">1 year</label>
                        <label  for="" class="lblvalue">0</label>
                    </div>      
                </div>
                <div class="inputwrap noborderbottom">
                    <div class="btnEditDp">
                        <svg 
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="20px" height="20px">
                        <image  x="0px" y="0px" width="20px" height="20px"  xlink:href="data:img/png;base64,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" />
                        </svg>
                        <span>Down payment</span>
                    </div>
                </div>
                <div class="inputwrap noborderbottom">
                     <div class="settingsdiv">
                        <a href="login.php" class="settings"> Settings </a>
                     </div>
                </div>
            </div>
        </div>

        <footer>&copy;2021 Fulgie Marketing. All rights Reserved.</footer>

    </div>

        <!-- Modal HTML embedded directly into document -->
        <div id="modalform" class="modal">       
            <div>
                <p>Enter Desired Down Payment</p>
                <input type="number" class="txtnewdp" placeholder="Amount" autocomplete="off">
                <input type="button" value=" Update " class="btnUpdateDp">
            </div>   
        </div>


    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <!-- jQuery Modal -->
    <script src="jquery.modal.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#txtcode").on("input",function(){    
                $.ajax({
                    'type':'post',
                    'url':'db.php',
                    'data':{
                        'newcode':$("#txtcode").val()
                    },
                    success:function(res){
                        $(".result-container").html(res);
                    }
                });
            });


            $(".btnEditDp").on("click",function(){
                // $(".txtnewdp").reset();
                // $(".txtnewdp").focus();
                $('#modalform').modal();
            });


            $(".btnUpdateDp").on("click",function(){
                if (!$.trim($(".txtnewdp").val())) {
                    // textarea is empty or contains only white-space
                }else{
                    $.ajax({
                        'type':'post',
                        'url':'dbUpdateDp.php',
                        'data':{
                            'newcode':$("#txtcode").val(),
                            'newdp':$(".txtnewdp").val()
                        },
                        success:function(res){
                            $(".result-container").html(res);
                            $.modal.close();
                        }
                    });
                }
                
            });


            // ##################################
            // TEXT INPUT ONLY LETTERS
            // ###################################
            $('#txtcode').on('input', function() {
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