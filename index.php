CTYPE HTML>
<html>  
<head>
<style>
form input.in{
  width:200px;
    height:30px;
      border:0;
        background:#E9E9E9;
          padding:10px;
            border-radius:5px;
            }

            .sub{
              width:220px;
                height:30px;
                  background:#0C9;
                    border:0;
                      margin:10px;
                        border-radius:5px;
                          
                          }

                          .sub:hover {
                            background:#099;
                            }

                            .err{
                              color:red;
                              }

                              </style>
                              </head>
                              <body>
                              <?php
                              $error = "";
                              $namejson1 = file_get_contents('name.json');
                              $res = json_decode($namejson1);

                              if( isset($_POST['sub']) ){
                                $num = trim($_POST['num']);

                                  if( $num =="" ){
                                      $error .= "不能留空<br/>";
                                        }
                                          
                                              if( $num !="F34035031" && $num !="P38041075" && $num !="F34041066" && $num !="E24041909" && $num !="E24046030"){
                                                  $error .= "Sorry~你不是我們組的喔<br/>";
                                                    }
                                                    }
                                                    ?>

                                                    <center>
                                                    <form action="index.php" method="POST">
                                                    <p>請輸入你的學號</p>
                                                    <input class="in" type="text" name="num" placeholder="Ex: P38041075"><br>
                                                    <input class="sub" type="submit" name="sub">
                                                    </form>
                                                    <div class="err"><?php echo $error;?></div>
                                                    <?php if( isset($_POST['sub']) && $error == ""){?> 
                                                    <img src="images/<?php echo $num;?>.png" alt="profilepic"> </br>
                                                    <?php echo "HELLO, 你是" . $res-> $num . "對吧哈哈XD";?>
                                                    <?php }?>
                                                    </center>
                                                    <div id="output"></div>

                                                    </body>
                                                    </html>

