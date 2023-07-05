 function profi(){

    var income =parseInt (document.getElementById('income').value);
    var expence =parseInt (document.getElementById('expence').value);

    var answer = income-expence;
    
    document.getElementById('answer').innerHTML=answer;
    console.log(answer);

 }