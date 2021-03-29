<!DOCTYPE HTML>
<html>
    <head>
        <style>
            
           /* body {
                
                background-color: #0c0c0c;
                background-size: 800px;
                filter: blur(8px); */
            /* -webkit-filter: blur(8px);
                
            } */
            .background-image {
                position: fixed;
                left: 0;
                right: 0;
                z-index: 1;
                display: block;
                
                width: 1500px;
                height: 800px;
                -webkit-filter: blur(2px);
                -moz-filter: blur(2px);
                -o-filter: blur(2px);
                -ms-filter: blur(2px);
                filter: blur(2px);
            }
            .content {
                position: fixed;
                left: 0;
                right: 0;
                z-index: 9999;
                margin-left: 20px;
                margin-right: 20px;
                color: red;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-weight: bold;
                font-size: x-large;
            }
           
        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    
    function check(){
        City=document.getElementById("city").value;
        const key="7723a77dbc994f0494131936212303";
        url=" https://api.weatherapi.com/v1/current.json?key="+key+"&q="+City+"&aqi=no";
    try{    let req= new XMLHttpRequest();
        req.open("POST",url);
        req.send();
        req.onload= ()=>{
                if(req.status == 200){
                let obj=JSON.parse(req.response);
                    $(".rev").empty();
                    $(".res").empty();
                $(".d1").css("display","block");
                $(".rev").append(`<p>Weather at :${obj.location.name}, ${obj.location.region}, ${obj.location.country} is ${obj.current.condition.text}<p>`);
                if(obj.current.condition.text=="Partly cloudy"){
                    $(".background-image").css("background-image","url(partly.jpeg)");
                }
                else if(obj.current.condition.text=="Cloudy"){
                    $(".background-image").css("background-image","url(cloudy.jpg)");
                }
                else if(obj.current.condition.text=="Clear"){
                    $(".background-image").css("background-image","url(clear.jpg)");
                }
                else if(obj.current.condition.text=="Sunny"){
                    $(".background-image").css("background-image","url(sunny.jpg)");
                }
                else if(obj.current.condition.text=="Mist"){
                    $(".background-image").css("background-image","url(mist.jpg)");
                }
                else if(obj.current.condition.text=="Overcast"){
                    $(".background-image").css("background-image","url(overcast.jpeg)");
                }

                $("#c").click(()=>{
                    $(".res").empty();
                    $(".res").append(`<p>temprature in celcius is: ${obj.current.temp_c} </p>`);
                    $(".res").append(`<img src="http:${obj.current.condition.icon}" >`);
                    
                }
                );  
                $("#f").click(()=>{
                    $(".res").empty();
                    $(".res").append(`<p>temprature in fahrenheit is: ${obj.current.temp_f} </p>`)
                    $(".res").append(`<img src="http:${obj.current.condition.icon}" alt="Weather">`);
                }
                );   
            }
        }
    }
    catch(err){
        console.error();
    }
    }
    $(document).ready(()=>{
        $("#btn1").click(()=>{
          
        }
        );
    });
        </script>
        <title>weather app</title>
    </head>
    <body >
    <div class="background-image" style="background-image: url(weather.jpg);"></div>
    <div class="content" >
        <p style="color: rgb(255, 0, 0); font-size: 50px; ">Weather app</p>
        <input type="text" id="city" placeholder="City " >
        <button id="btn1"  class="btn btn-danger" value="check weather" onclick="check()">Submit</button>
        <br><br>
    
        <div class="d1" style="display: none;">
            <button id="c">temp in celcius</button>
            <button id="f">temp in fahrenheit</button>
        </div>
        <div class="rev"></div>
        <div class="res"></div>
    </div>
    </body>
</html>
