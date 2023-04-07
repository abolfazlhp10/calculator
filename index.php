<?php
if (isset($_POST["="])) {
    $result = $_POST["result"];
    if (strpos($result, "+")) {
        $str = str_replace("+", " ", $result);
        $res = explode(" ", $str);
        $res = current($res) + end($res);
    }
    if (strpos($result, "/")) {
        $str = str_replace("/", " ", $result);
        $res = explode(" ", $str);
        $res = current($res) / end($res);
    }
    if (strpos($result, "-")) {
        $str = str_replace("-", " ", $result);
        $res = explode(" ", $str);
        $res = current($res) - end($res);
    }
    if (strpos($result, "*")) {
        $str = str_replace("*", " ", $result);
        $res = explode(" ", $str);
        $res = current($res) * end($res);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js" integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js" integrity="sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- create table -->

<body>
    <div class="alert alert-dark text-center">
        <h2>Calculator</h2>
    </div>
    <br>
    <form method="post">

        <body>
            <table id="calcu">
                <tr>
                    <td colspan="3"><input type="text" name="result" value="<?php if (isset($res)) {
                                                                                echo $res;
                                                                            } ?>" id="result"></td>
                    <td><button type="submit" name="c">c</button> </td>

                </tr>
                <tr>
                    <!-- create button and assign value to each button -->
                    <!-- dis("1") will call function dis to display value -->
                    <td><input type="button" value="1" onclick="dis('1')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="2" onclick="dis('2')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="3" onclick="dis('3')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="/" onclick="dis('/')" onkeydown="myFunction(event)"> </td>
                </tr>
                <tr>
                    <td><input type="button" value="4" onclick="dis('4')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="5" onclick="dis('5')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="6" onclick="dis('6')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="*" onclick="dis('*')" onkeydown="myFunction(event)"> </td>
                </tr>
                <tr>
                    <td><input type="button" value="7" onclick="dis('7')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="8" onclick="dis('8')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="9" onclick="dis('9')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="-" onclick="dis('-')" onkeydown="myFunction(event)"> </td>
                </tr>
                <tr>
                    <td><input type="button" value="0" onclick="dis('0')" onkeydown="myFunction(event)"> </td>
                    <td><input type="button" value="." onclick="dis('.')" onkeydown="myFunction(event)"> </td>
                    <td><button type="submit" name="=">=</button> </td>

                    <!-- solve function call function solve to evaluate value -->


                    <td><input type="button" value="+" onclick="dis('+')" onkeydown="myFunction(event)"> </td>
                </tr>
            </table>
    </form>
    <script>
        // Function that display value
        function dis(val) {
            document.getElementById("result").value += val
        }

        function myFunction(event) {
            if (event.key == '0' || event.key == '1' ||
                event.key == '2' || event.key == '3' ||
                event.key == '4' || event.key == '5' ||
                event.key == '6' || event.key == '7' ||
                event.key == '8' || event.key == '9' ||
                event.key == '+' || event.key == '-' ||
                event.key == '*' || event.key == '/')
                document.getElementById("result").value += event.key;
        }

        var cal = document.getElementById("calcu");
        cal.onkeyup = function(event) {
            if (event.keyCode === 13) {
                console.log("Enter");
                let x = document.getElementById("result").value
                console.log(x);
                solve();
            }
        }

        // Function that clear the display
        // function clr() {
        //     document.getElementById("result").value = ""
        // }
    </script>
    <br><br>
    <br><br>
</body>

</html>