<!DOCTYPE HTML>
<html lang="en">
    <head>
            <title>The Random Password Generator</title>
            <meta name="description" content="The website is for random generating a password">
            <meta name="keywords" content="password random generator https http safe random">
            <meta name="author" content="Aniruddha Ghosh">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="icon" href="pass.ico"  type="image/x-icon" sizes="16x16">
            <link rel="stylesheet" href="css/index.css">
            <link rel="stylesheet" href="css/button.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

            
    </head>
<body>
                <div class="ranpassgenmenu center">
                        <div class="quicksand center up">
                            <p>The Random Password Generator</p>
                            <p>Created by : Aniruddha Ghosh</p>
                        </div>
                <hr>
                        <label for="pass1">Password length : </label>
                            <select autocomplete="off" name="passize" id="passize">
                                <?php
                                    $n=1024;
                                    echo '<optgroup label="Weak">';
                                    for($i=7;$i<=15;$i++){
                                        echo "<option value=".$i.">".$i."";
                                    }
                                    echo '<optgroup label="Strong">';
                                    for($i=16;$i<=200;$i++){
                                        echo "<option value=".$i.">".$i."";
                                    }
                                    echo '<optgroup label="Toughest">';
                                    for($i=1;$i<=5;$i++){
                                        echo "<option value=".$n*$i.">".$n*$i."</option>";
                                    }
                                ?>
                            </select> 
                            <br>
                            <br>
                            <table class="centertable">
                              
                                    <tr>
                                        <td><label for="num">Include Numbers</label></td>
                                        <td><input type="checkbox" id="numbers" checked></td>
                                    </tr>
                                    <tr>
                                        <td><label for="num">Include Symbols</label></td>
                                        <td><input type="checkbox" id="symbols" checked></td>
                                    </tr>
                                    <tr>
                                        <td><label for="sch">Include Smallcase Characters</label></td>
                                        <td><input type="checkbox" id="schar" checked></td>

                                    </tr>
                                    <tr>
                                            <td><label for="upcch">Include Uppercase Characters</label></td>
                                            <td><input type="checkbox" id="upchar" checked></td>
                                    </tr>
                                    <tr>
                                            <td><label for="copy">Automatically copy the password once it's generated</label></td>
                                            <td><input type="checkbox" id="autocopy"></td>
                                    </tr>
                            
                            </table>
                            <p >Click "Generate" to generate a random password</p>
                            <p >Click "Reset" to remove the random generated password</p>

                            <table class="centertable">
                                <tr>
                                <td><button type="button" class="button" onclick="passrangen()">Generate</button></td>
                                <td><button type="button" class="button" onclick="passreset()">Reset</button></td>
                                </tr>
                            </table>
                            <p >Random Generated Password : </p>
                            <input type="text" autocomplete="off" class="center responsive" name="generatedpassword" id="generatedpassword" placeholder="Random Password...." size=35 READONLY>
                                <br>
                                
                         
                            <p  id="error"></p>
                                <button class="button" onclick="CopyTheRanGenPassword()">Copy</button>
                                <br>
                            <p >You can copy and paste the random generate password on any website you want</p>
                            <p >The password is random generated on your device and the website server doesn't generate the random password, so it is safe to use the random generated password</p>
            </div>
            <div  style="color:white;">
            <p class="center" > Tips : </p>
            <ol> 
                <li>It is not recommend to send sensitive information via unencrypted aka HTTP or FTP because information in these connections can be retrieved with very easy effort. You should use secure encrypted connection such as HTTPS, SFTP, FTPS & SMTPS etc whenever possible.</li>
                <li>Do not use the same password in all website.</li>
                <li>Turn on 2-step authentication whenever possible.</li>
            </ol>
                            
            </div>
            <hr>
            <div class="center">
                <small>Copyright &copy; <snap id="year"></snap> Aniruddha Ghosh</small>
                <br>
                <small>The website is open source and it's code is available at </small><br><a href="https://github.com/AGhosh2020/Random-Password-Generator"><img src="src/GitHub_Logo_White.png" style="width:47px; height:19px;"></a>
            </div>
    </body>
    <script type="text/javascript" src="src/index.js"></script>
</html>
