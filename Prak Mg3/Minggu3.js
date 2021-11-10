function change_weather(value){
    switch(value){
        case "Sunny" : 
            document.getElementById("Sentence").innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream."
        break;
        case "Rainy" :
            document.getElementById("Sentence").innerHTML = "Rain is falling outside. Take a raincoat and a brolly, don't stay outside for too long."
        break;
        case "Winter": 
            document.getElementById("Sentence").innerHTML = "Snow is falling outside. Let's make hot chocolate and warm up in front of the fireplace."
        break;    
    }
}

function change_theme(value){
    if (value=="White")
    {   
        document.body.style.backgroundColor = value;
        document.body.style.color = "Black"
    }
    else
    {
        document.body.style.backgroundColor = value;
        document.body.style.color = "White"
    }
}

function pemfaktoran() {
    let input = document.getElementById("number").value;
    let hasil = 1;
    for (let i = 1; i <= input; i++) {
      hasil = hasil * i;
    }
    document.getElementById("hasil_faktor").innerHTML = "The factorial is of " + input + " is " + hasil;
}