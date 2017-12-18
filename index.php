<?php
/**
 * URL shorter by baker alharoun
 * this work is an open source 
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AABU URL SHORTER</title>
        <link rel="stylesheet" href="w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <script src="generator.js"></script>

        <style>
            .lobster {
                font-family: "Lobster", serif;
                font-size: 100px;
            }
        </style>
    </head>
    <body>
        
        <div class="w3-container w3-display-middle">
            <div class="lobster w3-center w3-blue">
                aab/u/rl
            </div>
                <p id="error" class="w3-text-red"></p>
                <input  style="width:390px"
                        type="text" name="url" id="url"
                        placeholder="Enter an URL"
                        class="w3-input">
                <input  type="button"
                          onclick="getResult()"
                          value="Short it"
                          name="submit"
                          class="w3-margin-top w3-large w3-button w3-white w3-border w3-border-blue w3-hover-border-black">
            </form>
            <p id="result">
            </p>
        </div>

        <footer class="w3-display-bottommiddle w3-margin-bottom">
            created by <a href="https://fb.com/baker.zaher">Bakr al7aroon</a> . 
            <a href="https://github.com/bkrtoni/aaburl">github</a>
        </footer>
    </body>
</html>
