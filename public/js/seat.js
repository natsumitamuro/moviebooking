var selected_seats = [];
var count = 0;

// 席をクリックした時
function AddClass(seat_id){

        var targets = document.getElementById(seat_id);
        targets.classList.toggle("selected");
        
        var includes = selected_seats.indexOf(seat_id);
        if(includes != -1){
            count--;
            selected_seats.splice(includes,1);

        }else if(count < 5){
            count++;
            selected_seats.push(seat_id);

        }else{
            alert('選択できるのは５席までです。');
            targets.classList.remove("selected");

        }
}

//購入ボタンを押した時
function buyticket(scheduled_movie_id){
    //POSTリクエスト（通信）
    axios.defaults.headers.common = {
        'X-Requested-With': 'XMLHttpRequest',
        //'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    };
    const data = { scheduled_movie_id : scheduled_movie_id, selected_seats : selected_seats }
    const url = axios.post("/reservation", data)
    //then 成功だった時
            .then((res) => {
                if(res.status==200){
                    alert('購入されました。');
                    window.location.href='/';
                }
            })
    //catch 失敗した場合
            .catch(err => {
                alert('席が選択されていません。')
            console.log("err:", err);
            });

}

