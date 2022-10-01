<?php
ob_start();
session_start();

if(isset($_SESSION['auth'])){
    header('location:admin.php');
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
    <title>Login | Admin</title>
</head>
<body>
    <div class="main-container-login">
        <div class="login-wrapper">
            <div class="error_content"></div>
            <div class="divTexts">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                <defs>
                </defs>
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                    <path d="M 75.546 78.738 H 14.455 C 6.484 78.738 0 72.254 0 64.283 V 25.716 c 0 -7.97 6.485 -14.455 14.455 -14.455 h 61.091 c 7.97 0 14.454 6.485 14.454 14.455 v 38.567 C 90 72.254 83.516 78.738 75.546 78.738 z M 14.455 15.488 c -5.64 0 -10.228 4.588 -10.228 10.228 v 38.567 c 0 5.64 4.588 10.229 10.228 10.229 h 61.091 c 5.64 0 10.228 -4.589 10.228 -10.229 V 25.716 c 0 -5.64 -4.588 -10.228 -10.228 -10.228 H 14.455 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 11.044 25.917 C 21.848 36.445 32.652 46.972 43.456 57.5 c 2.014 1.962 5.105 -1.122 3.088 -3.088 C 35.74 43.885 24.936 33.357 14.132 22.83 C 12.118 20.867 9.027 23.952 11.044 25.917 L 11.044 25.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 46.544 57.5 c 10.804 -10.527 21.608 -21.055 32.412 -31.582 c 2.016 -1.965 -1.073 -5.051 -3.088 -3.088 C 65.064 33.357 54.26 43.885 43.456 54.412 C 41.44 56.377 44.529 59.463 46.544 57.5 L 46.544 57.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 78.837 64.952 c -7.189 -6.818 -14.379 -13.635 -21.568 -20.453 c -2.039 -1.933 -5.132 1.149 -3.088 3.088 c 7.189 6.818 14.379 13.635 21.568 20.453 C 77.788 69.973 80.881 66.89 78.837 64.952 L 78.837 64.952 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 14.446 68.039 c 7.189 -6.818 14.379 -13.635 21.568 -20.453 c 2.043 -1.938 -1.048 -5.022 -3.088 -3.088 c -7.189 6.818 -14.379 13.635 -21.568 20.453 C 9.315 66.889 12.406 69.974 14.446 68.039 L 14.446 68.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
                </svg>
                </span>
                <input type="text" class="txtusername" placeholder="User name">
            </div>
            <div class="divTexts NoBorderTop">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                <defs>
                </defs>
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                    <path d="M 40.052 48.233 c -13.298 0 -24.117 -10.819 -24.117 -24.117 S 26.754 0 40.052 0 s 24.116 10.819 24.116 24.117 S 53.35 48.233 40.052 48.233 z M 40.052 4 c -11.092 0 -20.117 9.024 -20.117 20.117 s 9.024 20.117 20.117 20.117 c 11.092 0 20.116 -9.024 20.116 -20.117 S 51.144 4 40.052 4 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 46.468 90 H 8.237 c -1.104 0 -2 -0.896 -2 -2 v -9.953 c 0 -18.646 15.169 -33.814 33.814 -33.814 c 4.744 0 9.333 0.964 13.64 2.864 c 1.011 0.446 1.468 1.627 1.022 2.638 s -1.626 1.467 -2.638 1.022 c -3.794 -1.675 -7.84 -2.524 -12.024 -2.524 c -16.44 0 -29.814 13.375 -29.814 29.814 V 86 h 36.23 c 1.104 0 2 0.896 2 2 S 47.572 90 46.468 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 79.034 90 H 57.375 c -2.607 0 -4.729 -2.121 -4.729 -4.729 V 67.729 c 0 -2.607 2.121 -4.729 4.729 -4.729 h 21.659 c 2.607 0 4.729 2.121 4.729 4.729 v 17.543 C 83.763 87.879 81.642 90 79.034 90 z M 57.375 67 c -0.401 0 -0.729 0.327 -0.729 0.729 v 17.543 c 0 0.401 0.327 0.729 0.729 0.729 h 21.659 c 0.401 0 0.729 -0.327 0.729 -0.729 V 67.729 c 0 -0.401 -0.327 -0.729 -0.729 -0.729 H 57.375 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 77.433 67 c -1.104 0 -2 -0.896 -2 -2 v -6.347 c 0 -3.566 -2.902 -6.469 -6.469 -6.469 h -1.518 c -3.566 0 -6.469 2.902 -6.469 6.469 V 65 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 v -6.347 c 0 -5.772 4.696 -10.469 10.469 -10.469 h 1.518 c 5.772 0 10.469 4.696 10.469 10.469 V 65 C 79.433 66.104 78.537 67 77.433 67 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 68.205 79.333 c -1.104 0 -2 -0.896 -2 -2 v -1.852 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 1.852 C 70.205 78.438 69.31 79.333 68.205 79.333 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
                </svg>
                </span>
                <input type="password" class="txtpassword" placeholder="Password">
            </div>
            <div class="divButtons">
                 <input type="button" value="Home" class="btnhome">
                <input type="button" value="Login" class="btnlogin">
            </div>
        </div>
    </div>    


    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <!-- jQuery Modal -->
    <script src="jquery.modal.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".btnhome").on("click",function(){
                location.href="index.php";
            });

            $(".btnlogin").on("click",function(){
                $.ajax({
                    'type':'post',
                    'url':'search_user.php',
                    'data':{
                        'username':$('.txtusername').val(),
                        'password':$('.txtpassword').val()
                    },
                    success:function(res){
                        let a=parseInt(res);                        
                        if(a===1){
                            $.ajax({
                                type:'post',
                                url:'session_auth.php',
                                data:{
                                    'auth': 1
                                },
                                success:function(res){
                                    location.href='admin.php';
                                }
                            });
                        }else{
                            $('.error_content').html("<div class='error_notif'> Incorrect username or password.</div>");
                        }     
                    }
                });
            });

        });
    </script>


</body>
</html>