//document.getElementById('courses').onclick = function () {
//    var xhr = new XMLHttpRequest();
//    xhr.open('GET', 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
//    xhr.onreadystatechange = function () {
//        if (xhr.readyState === 4) {
//            if (xhr.status === 200) {
//                var json_text = xhr.responseText;
//                var courses = JSON.parse(json_text);
//                for (var i = 0; i < courses.length; i++) {
//                    alert(courses[i].ccy);
//                }
//            }
//        }
//    };
//    xhr.send();
//};


function showQuestions() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/questions');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var json_text = xhr.responseText;
                var questions = JSON.parse(json_text);
                var tbody = document.querySelector('#questions tbody');
                tbody.innerHTML = '';
                for (i = 0; i < questions.length; i++) {
                    var tr = '<tr>\n\
 <td>' + (i + 1) + '</td>\n\
 <td>' + questions[i].author + '</td>\n\
 <td>' + questions[i].text + '</td>\n\
 <td>' + '<form name="delete"><input type="hidden" name="id" value="'+questions[i].id+'"><button>Delete</button></form>'+ '</td\n\
</tr>';
                    tbody.innerHTML+=tr;
                }
		var delete_form = document.getElementsByName('delete');
		for (i = 0; i < questions.length; i++) {
		    delete_form[i].onsubmit = function (e){
			var id = this.elements.id.value;
			deleteQuestion(id);
			
			e.preventDefault();
		    }
		}
            } else {
                return false;
            }
        }
    };
    xhr.send();
};
showQuestions();
function sendQuestion(author, text){
    var post_data = 'author='+author+'&text='+text;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/addquestion');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                showQuestions();
            }
        }
    };
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.send(post_data);
}

function deleteQuestion(id){
    var post_id='id='+id;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/deletequestion');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                showQuestions();
            }
        }
    }
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.send(post_id);
};
document.forms.question.onsubmit=function(event){
    var form_elements=this.elements;
    var author = form_elements.author.value;
    var text = form_elements.text.value;
    this.reset();
    
    sendQuestion(author, text);
    event.preventDefault();
};
