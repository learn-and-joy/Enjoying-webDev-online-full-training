<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p id="salutation" style="color: brown;">good day1</p>
    <p id="batata" style="color: brown;"></p>

    <script>
        // js code:
        // var time = 16;
        // if ( time > 12 ){
        //     var salutation = "morning";
        // }else if ( time < 20 ) {
        //     salutation = "day";
        // }else {
        //     salutation = "evening";
        // }

        // time > 12 ? salutation = "morning" : 'x stric. inférieur à 10';

        // == égal à
        // === valeur égale et type égal
        // != différent de
        // !== valeur différente ou type différent
        // > supérieur à
        // <	Inférieur à
        // >= supérieur ou égal à
        // <= inférieur ou égal à
        // ? opérateur ternaire

        // document.getElementById("batata").innerHTML = "have a good " + salutation
        
        // ES6 = ES2015

        // chiffres ( réels et entiers)
        // chaines ( chaines + caractaires)
        // Boolean

        
        // time = 16;
        // var time = 16;

        // let time = 16;
        // const time = 16;

        // var x = 3;
        // var y = x * x;
        // var y = x - x;
        // var y = x + x;
        // var y = x ** 3;
        // var y = x / x;
        // x++; // x = 4
        // x--; // x = 3; x = x - 1

        // var text1 = "haha"
        // var num = '5'
        // var text = text1 + num;


        
        // console.log("text =",text);  

        // switch:
        var blabla = new Date().getDay()
        console.log(blabla);

        switch (new Date().getDay()) {
            case 0:
                day = "Sunday";
                break;
            case 1:
                day = "Monday";
                break;
            case 2:
                day = "Tuesday";
                break;
            case 3:
                day = "Wednesday";
                break;
            case 4:
                day = "Thursday";
                break;
            case 5:
                day = "Friday";
                break;
            case 6:
                day = "Saturday";
            default:
                text = "No value found";
            }
        document.getElementById("batata").innerHTML = "today is: " + day


    </script>



    <!-- 
        si < 12 good morning
        si < 20 good day
        si non good evening 
    -->
    
    
</body>
</html>