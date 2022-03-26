//function addclass(){
    //var seat = document.getElementById("seat");
    //seat.classList.add("reserved");
//}

//function AddClass(){
    //var target = document.getElementById("target");
    //target.classList.add("selected");
//}

document.getElementById("target").onclick = function() {
    this.classList.toggle("selected");
};

//document.getElementById('target').addEventListener('click',function(){
    //要素の取得 → 背景色を変える
    //document.getElementById('target').style.background='pink';
//});

alert("Hello");