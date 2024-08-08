




//document.getElementById('mode').style.visibility='hidden';
//document.getElementById('mode').style.backgroundColor='black';
//document.getElementById('mode').addEventListener('click',mode);
/*function mode(){
    document.body.style.backgroundColor='white';
    document.body.style.color='black';
    document.getElementById('changemode').style.backgroundColor='black';
    document.getElementById('backmode').style.visibility='visible';
    document.getElementById('mode').style.visibility='hidden';
      //document.getElementById('backmode').style.visibility='hidden';
    //document.getElementById('mode').style.visibility='visible';


}*/
document.getElementById('backmode').style.backgroundColor='white';
document.getElementById('backmode').style.marginRight='42px';


function backmode(){
    if(document.body.style.backgroundColor==''|| document.body.style.backgroundColor=='white'){
    document.body.style.backgroundColor='black';
    document.body.style.color='white';
    document.getElementById('changemode').style.backgroundColor='white';
    document.getElementById('backmode').style.marginRight='0px';

    }else{
        document.body.style.backgroundColor='white';
        document.body.style.color='black';
        document.getElementById('changemode').style.backgroundColor='black';
        document.getElementById('backmode').style.marginRight='42px';


    }

}
document.getElementById('backmode').addEventListener('click',backmode);

var button=document.getElementById("bu");
button.addEventListener("click",addli);
function addli(){
    var carElement = document.getElementById("ca");
    var i=5;
    if (carElement) {

        carElement.innerHTML
    
    += `
        <div class="card" id="card" align="center">
            <div class="column" id="column">
                <div class="card_img">

                    <a href=".html"> <img src="../image/15.jpg"></a>
                </div>
                <div class="card_text">
                    <p> مغامرات حوريات البحر</p>
                    <p>2015,رسوم متحركة</p>
                </div>
            </div>
            <div class="column" id="column">
                <div class="card_img">

                    <a href=".html"> <img src="../image/16.jpg"></a>
                </div>
                <div class="card_text">
                    <p> السنافر</p>
                    <p>2021,رسوم متحركة</p>
                </div>
            </div>
            <div class="column" id="column">
                <div class="card_img">

                    <a href=".html"> <img src="../image/17.jpg"></a>
                </div>
                <div class="card_text">
                    <p>Beyblade Burst</p>
                    <p>2016,رسوم متحركة</p>
                </div>

            </div>
            <div class="column" id="column">
                <div class="card_img">

                    <a href=".html"> <img src="../image/18.jpg"></a>
                </div>
                <div class="card_text">
                    <p>Kung Fu Panda: Legends of Awesomeness</p>
                    <p>2011,رسوم متحركة</p>
                </div>

            </div>
            <div class="column" id="column">
                <div class="card_img">

                    <a href=".html"> <img src="../image/19.jpg"></a>
                </div>
                <div class="card_text">
                    <p>بن10</p>
                    <p>2006,رسوم متحركة</p>
                </div>

            </div>

            <div class="column" id="column">
                <div class="card_img">

                    <a href=".html"> <img src="../image/20.jpg"></a>
                </div>
                <div class="card_text">
                    <p>سبايدرمان المذهل</p>
                    <p>2008,رسوم متحركة</p>
                </div>

            </div></div>
`;
}};

