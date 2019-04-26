document.getElementById('courses').onclick = function(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
    xhr.onreadystatechange=function(){
        if(xhr.readyState ===4){
            if(xhr.status===200){
                var json_text = xhr.responseText;
                var courses = JSON.parse(json_text);
                for(var i=0; i<courses.length; i++){
                    alert(courses[i].ccy);
                }
            } 
        }
    };
    xhr.send();
};

function getQuestions(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/questions');
    xhr.onreadystatechange=function(){
        if(xhr.readyState ===4){
            if(xhr.status===200){
                var json_text = xhr.responseText;
                var questions = JSON.parse(json_text);
                return questions;
                } else{
                    return false;
            } 
        }
    };
    xhr.send();
}

document.getElementById('questions-btn').onclick=function(){
    var questions = getQuestions();
    console.log(questions);
}
