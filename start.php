<?php
session_start();
$_SESSION['i'] ++;
?>
<!-- You should not do that... ( ͡° ͜ʖ ͡°) -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Paradigm</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body style="background: url(character.gif) no-repeat center fixed;background-color:black;"> 

        <div id="screen">

        </div>

            <script>

<?php if($_SESSION['i'] >= 4){
    ?>console.log("༼(づ｡◕‿‿◕｡)づ hm, it seems like in an infinite loop...");<?php
}?>

function me(){
    cpt=9999;
    $('body').css("background-image", "url(in_the_matrix.gif)");
    $('body').css("background-color", "white");
    console.log("༼(づ｡◕‿‿◕｡)づ You found me...");
    // Unless you're still reading the code... (ง ͠° ͟ل͜ ͡°)ง 
    // I advise you now to give your answers in the console of your browser, by typing answer() ಠ_ಠ



    // Unless... Hm, you are pestering me!  ̿'̿'\̵͇̿̿\з=( ͠° ͟ʖ ͡°)=ε/̵͇̿̿/'̿̿ ̿ ̿ ̿ ̿ ̿


    console.log("Where am I? ༼(づ｡◕‿‿◕｡)づ");

}

function answer(){
    cpt=99999;
    console.log("༼(づ｡◕‿‿◕｡)づ Ahah you thought we were on Send your answer to 3615!");
    console.log("In fact, this was a french joke here... (づ｡◕‿‿◕｡)づ");
    console.log("༼ つ ◕_◕ ༽つ But you can't understand... Nevermind.");

    // In fact, you did not understand anything! ಠ_ಠ



    











    //ಠ_ಠ
    //
    //̿̿ ̿̿ ̿̿ ̿'̿'\̵͇̿̿\з= ( ▀ ͜͞ʖ▀) =ε/̵͇̿̿/’̿’̿ ̿ ̿̿ ̿̿ ̿̿
    //
    // As you are a little disabled, I will help you:
    // You need to open the developer console of your internet browser.
    // For that, you can watch a tutorial on google. Otherwise you can also type Ctrl + Shift + J on Chrome.
    // Once open, you have to type "ok()" in this famous console.
    //
    // Always not ?!
    //
    //̿'̿'\̵͇̿̿\з=( ͠° ͟ʖ ͡°)=ε/̵͇̿̿/'̿̿ ̿ ̿ ̿ ̿ ̿
}


var cpt=0;
var level=0;
$( document ).ready(function() {


    $('#screen').click(function()
    {    
        $('div').hide();
        $('#screen').show();

        switch(level){
        case 0:
            level0switch();
            break;

        case 1:
            level1switch();
            break;
        }


    });




});


function level0switch(){
    if(cpt==2){cpt=0;}
    switch(cpt){
    case 0 : $('body').css("background-image", "url(find_me.gif)");break; 
    case 1 : $('body').css("background-image", "url(character.gif)");break;
    }  
    cpt++;
}

function level1switch(){
    switch(cpt){
    case 0 : console.log("Very good! ༼(づ｡◕‿‿◕｡)づ");$('body').css("background-image", "url(character.gif)");break;
    case 1 : console.log("༼(づ｡◕‿‿◕｡)づ Now that you understand how the game works, tell me, how many levels does it contain?");$('body').css("background-image", "url(game_map.gif)");cpt=0;break;
    }  
    cpt++;
}

function ok(){
    console.log("༼(づ｡◕‿‿◕｡)づ You are a genius my friend!");
    me();
}



// You should stop reading code now

























function matrix(){
    level++;
    cpt=0;










    console.log("༼(づ｡◕‿‿◕｡)づ Good !");
    $('body').css("background-image", "url(character.gif)");
    $('body').css("background-color", "black");
}












































function one(){
    console.log("｡◕‿‿◕｡ Bad answer ! Noob !");
    $('body').css("background-image", "url(character.gif)");  
    }
function two(){
    console.log("｡◕‿‿◕｡ Bad answer ! Noob !");
    $('body').css("background-image", "url(character.gif)");  
    }
function three(){
    console.log("｡◕‿‿◕｡ Bad answer ! Noob !");
    $('body').css("background-image", "url(character.gif)");  
    }
function ten(){
    console.log("｡◕‿‿◕｡ Bad answer ! Noob !");
    $('body').css("background-image", "url(character.gif)");  
    }
function twelve(){
    console.log("｡◕‿‿◕｡ Bad answer ! Noob !");
    $('body').css("background-image", "url(character.gif)");  
    }
function sixteen(){
    console.log("(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧ ✧ﾟ･: *ヽ(◕ヮ◕ヽ) Congratulation !");
    console.log("The game can start... ( ͡° ͜ʖ ͡°)");
    $('body').css("background-image", "url(character.gif)");  
    cpt=9999;
}
function twenty(){
    console.log("｡◕‿‿◕｡ Bad answer! Noob !");
    $('body').css("background-image", "url(character.gif)");  
    }
function idk(){
    console.log("｡◕‿‿◕｡ Yes you know... You're not that stupid...");
    $('body').css("background-image", "url(character.gif)");  
}
function start(){
    document.location.href="index.php" 
}




setTimeout(fonctionAExecuter, 100); 

function fonctionAExecuter()
{
    $('div').hide();
    $('#screen').show();
}










            </script>
    </body>
</html>

