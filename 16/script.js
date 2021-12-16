const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
    options[i].addEventListener("click", ()=>{
        let answer = getValue(i);
        console.log(answer);
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                /*document.getElementById("demo").innerHTML = this.responseText;*/
                console.log(this.responseText)
            }
        };

        xhttp.open("POST", "poll.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("answer="+answer);

        for (let j = 0; j < options.length; j++) {
            if(options[j].classList.contains("selected")){
                options[j].classList.remove("selected");
            }
        }

        options[i].classList.add("selected");
        for (let k = 0; k < options.length; k++) {
            options[k].classList.add("selectall");
        }

        let forVal = options[i].getAttribute("for");
        let selectInput = document.querySelector("#"+forVal);
        let getAtt = selectInput.getAttribute("type");
        if(getAtt == "checkbox"){
            selectInput.setAttribute("type", "radio");
        }else if(selectInput.checked == true){
            options[i].classList.remove("selected");
            selectInput.setAttribute("type", "checkbox");
        }

        let array = [];
        for (let l = 0; l < options.length; l++) {
            if(options[l].classList.contains("selected")){
                array.push(l);
            }
        }
        if(array.length == 0){
            for (let m = 0; m < options.length; m++) {
                options[m].removeAttribute("class");
            }
        }
    });
}

function getValue(i){
    if(i==0){
        return "C";
    }else if(i==1){
        return "C++";
    }else if(i==2){
        return "Python";
    }else{
        return "Java";
    }
}