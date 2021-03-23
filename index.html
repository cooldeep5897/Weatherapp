<html>
    <head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    
    function check(){
        City=document.getElementById("city").value;
        const key="7723a77dbc994f0494131936212303";
    //    var url="http://api.weatherapi.com/v1/current.json?key="+key+"&q"+City;
        url=" http://api.weatherapi.com/v1/current.json?key="+key+"&q="+City+"&aqi=no";
    try{    let req= new XMLHttpRequest();
        req.open("POST",url);
        req.send();
        req.onload= ()=>{
                if(req.status == 200){
                let obj=JSON.parse(req.response);
                    $(".rev").empty();
                    $(".res").empty();
                $(".d1").css("display","block");
                
                $(".rev").append(`<p>Weather at :${obj.location.name}, ${obj.location.region}, ${obj.location.country} is ${obj.current.condition.text}<p>`)
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
    </head>
    <body>
        <input type="text" id="city" placeholder="City " >
        <button id="btn1" value="check weather" onclick="check()">Submit</button>
        <br><br>
        <div class="d1" style="display: none;">
            <button id="c">temp in celcius</button>
            <button id="f">temp in fahrenheit</button>
        </div>
        <div class="rev"></div>
        <div class="res">

        </div>
        
        
    </body>
</html>