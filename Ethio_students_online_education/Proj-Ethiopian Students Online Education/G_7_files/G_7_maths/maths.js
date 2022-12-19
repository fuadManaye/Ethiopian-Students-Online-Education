var score=0; // set score to 0
var total=22; // total number of questions
var point=1; // points per correct answer
var highest=total * point;

// initializer
function init(){
    // set correct answer
    sessionStorage.setItem('a1','b');
    sessionStorage.setItem('a2','a');
    sessionStorage.setItem('a3','b');
    sessionStorage.setItem('a4','d');
    sessionStorage.setItem('a5','a');
    sessionStorage.setItem('a6','c');
    sessionStorage.setItem('a7','d');
    sessionStorage.setItem('a8','a');
    sessionStorage.setItem('a9','b');
    sessionStorage.setItem('a10','d');
    sessionStorage.setItem('a11','d');
    sessionStorage.setItem('a12','c');
    sessionStorage.setItem('a13','b');
    sessionStorage.setItem('a14','b');
    sessionStorage.setItem('a15','a');
    sessionStorage.setItem('a16','b');
    sessionStorage.setItem('a17','c');
    sessionStorage.setItem('a18','b');
    sessionStorage.setItem('a19','a');
    sessionStorage.setItem('a20','b');
    sessionStorage.setItem('a21','a');
    sessionStorage.setItem('a22','c');
}

$(document).ready(function(){
    //hide all question
    $('.questionform').hide();
    // show first question
    $('#q1').show();


    $('.questionform #submit').click(function(){
        //Get data attributes
        current=$(this).parents('form:first').data('question');
        next=$(this).parents('form:first').data('question')+1;
        //Hide all Questions
        $('.questionform').hide();
        //Show next Qustions
        $('#q'+next+'').fadeIn(300);
        process(''+current+'');
        return false;
    }); 
});


// process the answer
function process(n){
    //Get input value
    var submitted=$('input[name=q'+n+']:checked').val();
    if(submitted==sessionStorage.getItem('a'+n+'')){
        score=score+point;
    }
    if(n==total){
        $('#results').html('<h4><i>Your final score is : '+score+' out of '+highest+'</i></h4><a href="maths.html">Take Quiz Again</a>'); 
        $('#answers').html('<a href="answers.html"><buuton>See Answer</button></a>'); 
        if(score==highest){
            $('#results').append('<p style="font-size:15px; font-weight:bold;"><br>Excellent!</p>');
        }
        else if(score==highest-point || score==highest - point - point){
            $('#results').append('<p style="font-size:15px; font-weight:bold;"><br>Good Job!</p>');
        }
    }
    return false; 
}
window.addEventListener('load',init,false);