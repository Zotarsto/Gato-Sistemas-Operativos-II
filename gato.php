<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .f{
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class = "container">
        <div class = "row">
            <div class = "col-2"></div>
            <div class = "col-8 mt-3">
                <div class = "row">
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn1">
                            <div class = "f"></div>
                        </button></div>
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn2">
                            <div class = "f"></div>
                        </button></div>
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn3">
                            <div class = "f"></div>
                        </button></div>
                </div>
            </div>

            <div class = "col-2"></div>
        </div>
        <div class = "row">
            <div class = "col-2"></div>
            <div class = "col-8 mt-3">
                <div class = "row">
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn4">
                            <div class = "f"></div>
                        </button></div>
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn5">
                            <div class = "f"></div>
                        </button></div>
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn6">
                            <div class = "f"></div>
                        </button></div>
                </div>
            </div>

            <div class = "col-2"></div>
        </div>
        <div class = "row">
            <div class = "col-2"></div>
            <div class = "col-8 mt-3">
                <div class = "row">
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn7">
                            <div class = "f"></div>
                        </button></div>
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn8">
                            <div class = "f"></div>
                        </button></div>
                    <div class = "col-4 text-center"><button class = "btn btn-primary" type = "button" id = "btn9">
                            <div class = "f"></div>
                        </button></div>
                </div>
            </div>
            <div class = "col-2"></div>
        </div>
    </div>

    <script src = "js/jquery-3.7.1.min.js"></script>
    <script>
        var estado = "0";
        (function(){
           $("#btn1").click(function(){
            estado = estado == "0"? "x": "0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn2").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn3").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn4").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn5").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn6").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn7").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn8").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
           $("#btn9").click(function(){
            estado = estado == "0"?"x":"0";
            $(this).html(' <img src = "img/' + estado + '.svg" class = "f" />');
            $(this).prop('disabled', true);
           });
        
        })();
    </script>
</body>
</html>