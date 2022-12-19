var score=0; // set score to 0
var total=20; // total number of questions
var point=1; // points per correct answer
var highest=total * point;

// initializer
function init(){
    // set correct answer
    sessionStorage.setItem('a1','c');
    sessionStorage.setItem('a2','b');
    sessionStorage.setItem('a3','b');
    sessionStorage.setItem('a4','d');
    sessionStorage.setItem('a5','a');
    sessionStorage.setItem('a6','c');
    sessionStorage.setItem('a7','d');
    sessionStorage.setItem('a8','b');
    sessionStorage.setItem('a9','b');
    sessionStorage.setItem('a10','d');
    sessionStorage.setItem('a11','d');
    sessionStorage.setItem('a12','a');
    sessionStorage.setItem('a13','d');
    sessionStorage.setItem('a14','c');
    sessionStorage.setItem('a15','b');
    sessionStorage.setItem('a16','a');
    sessionStorage.setItem('a17','b');
    sessionStorage.setItem('a18','a');
    sessionStorage.setItem('a19','a');
    sessionStorage.setItem('a20','b');
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
        $('#results').html('<h4><i>Your final score is : '+score+' out of '+highest+'</i></h4><a href="chemistry.html">Take Quiz Again</a>'); 
        $('#answers').html('<a href="answers.html"><buuton>See Answer</button></a>'); 
        if(score==highest){
            $('#results').append('<p>Your are an HTML5 Master!');
        }
        else if(score==highest-point || score==highest - point - point){
            $('#results').append('<p>Good Job');
        }
    }
    return false; 
}




// function process(q){
//     if(q=='q1'){
//         var submitted=$('input[name=q1]:checked').val();
//         if(submitted==sessionStorage.al){
//             score++;
//         }
//     }

//     if(q=='q2'){
//         var submitted=$('input[name=q2]:checked').val();
//         if(submitted==sessionStorage.a2){
//             score++;
//         }
//     }

//     if(q=='q3'){
//         var submitted=$('input[name=q3]:checked').val();
//         if(submitted==sessionStorage.a3){
//             score++;
//         }
//     }

//     if(q=='q4'){
//         var submitted=$('input[name=q4]:checked').val();
//         if(submitted==sessionStorage.a4){
//             score++;
//         }
//     }

//     if(q=='q5'){
//         var submitted=$('input[name=q5]:checked').val();
//         if(submitted==sessionStorage.a5){
//             score++;
//         }
//         $('#results').html('<h3>Your final score is : '+score+' out of 5</h3><a href="amharic.html">Take Quiz Again</a>'); 
//     }
//     return false;
// }
// add event listener
window.addEventListener('load',init,false);