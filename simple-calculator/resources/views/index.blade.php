{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    <style>--}}
{{--        table{--}}
{{--            border-collapse: collapse;--}}
{{--            padding: 20px;--}}
{{--        }--}}
{{--        th, td{--}}
{{--            border: 1px solid black;--}}
{{--            background-color: grey;--}}
{{--            text-align: center;--}}
{{--        }--}}
{{--        button{--}}
{{--            background-color: yellow;--}}
{{--        }--}}
{{--        input{--}}
{{--            text-align: right;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<form action="{{ route('calculate') }}" method="post">--}}
{{--    @csrf--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th colspan="4">--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    id="screen"--}}
{{--                    name="screen"--}}
{{--                    value="@if (isset($result))--}}
{{--                    {{ $result }}--}}
{{--                    @endif"--}}
{{--                >--}}
{{--            </th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><button type="button" onclick="operator('(')">(</button></td>--}}
{{--            <td><button type="button" onclick="operator(')')">)</button></td>--}}
{{--            <td><button type="button" onclick="operator('%')">%</button></td>--}}
{{--            <td><button type="button" id="reset" onclick="reset('')">AC</button></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><button type="button" id="num7" onclick="num(7)" value="7">7</button></td>--}}
{{--            <td><button type="button" id="num8" onclick="num(8)" value="8">8</button></td>--}}
{{--            <td><button type="button" id="num9" onclick="num(9)" value="9">9</button></td>--}}
{{--            <td><button type="button" id="division" onclick="operator('/')">/</button></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><button type="button" id="num4" onclick="num(4)" value="4">4</button></td>--}}
{{--            <td><button type="button" id="num5" onclick="num(5)" value="5">5</button></td>--}}
{{--            <td><button type="button" id="num6" onclick="num(6)" value="6">6</button></td>--}}
{{--            <td><button type="button" id="multiplication" onclick="operator('*')">*</button></td>--}}

{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><button type="button" id="num1" onclick="num(1)" value="1">1</button></td>--}}
{{--            <td><button type="button" id="num2" onclick="num(2)" value="2">2</button></td>--}}
{{--            <td><button type="button" id="num3" onclick="num(3)" value="3">3</button></td>--}}
{{--            <td><button type="button" id="subtraction" onclick="operator('-')">-</button></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><button type="button" id="num0" onclick="num(0)" value="0">0</button></td>--}}
{{--            <td><button type="button" id="decimal" onclick="'.'">.</button></td>--}}
{{--            <td><button>=</button></td>--}}
{{--            <td><button type="button" id="addition" onclick="operator('+')">+</button></td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--</form>--}}
{{--<script>--}}
{{--    function num(number) {--}}
{{--        document.getElementById("screen").value = document.getElementById("screen").value +  number;--}}
{{--    }--}}
{{--    function operator(op) {--}}
{{--        document.getElementById("screen").value +=op;--}}
{{--    }--}}
{{--    function reset(){--}}
{{--        document.getElementById("screen").value = "";--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculate</title>
</head>
<body>
<table>
    <tr>
        <label for="screen"></label>
        <input name="screen" id="screen">
    </tr>
    <tr>
        <td><button name="button" id="1" onclick="num(1)" value="1">1</button> </td>
        <td><button name="button" id="2" onclick="num(2)" value="2">2</button></td>
        <td><button name="button" id="3" onclick="num(3)" value="3">3</button></td>
        <td><button name="button" id="+" onclick="operator('+')" value="+">+</button></td>
    </tr>
    <tr>
        <td><button name="button" id="4" onclick="num(4)" value="4">4</button></td>
        <td><button name="button" id="5" onclick="num(5)" value="5">5</button></td>
        <td><button name="button" id="6" onclick="num(6)" value="6">6</button></td>
        <td><button name="button" id="-" onclick="operator('-')" value="-">-</button></td>
    </tr>
    <tr>
        <td><button name="button" id="7" onclick="num(7)" value="7">7</button></td>
        <td><button name="button" id="8" onclick="num(8)" value="8">8</button></td>
        <td><button name="button" id="9" onclick="num(9)" value="9">9</button></td>
        <td><button name="button" id="*" onclick="operator('*')" value="*">x</button></td>
    </tr>
    <tr>
        <td><button type="reset" id="reset" onclick="rs()" value="">c</button></td>
        <td><button name="button" id="0" onclick="num(0)" value="">0</button></td>
        <td><button >=</button></td>
        <td><button name="button" id="/" onclick="operator('/')" value="/">/</button> </td>
    </tr>
</table>
<script type="text/javascript">
    function num(id){
        document.getElementById("screen").value +=id;
    }
    function operator(id){
        document.getElementById("screen").value +=id;
    }
    function rs(){
        document.getElementById("screen").value ="";
    }
</script>
</body>
</html>
