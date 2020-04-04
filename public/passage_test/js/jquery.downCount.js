 $(document).ready(function() {
        setInterval(function(){
            var h=$('#hour').html();
            var m=$('#min').html();
            var s=$('#sec').html();
            if(h==00 && m==00 && s==00){
                clearInterval();
            }
            else{
                if(s>00){
                    s--;
                    if(s<10){
                        s="0"+s;
                    }
                    $('#sec').html(s);
                }
                else if(m>00){
                    m--;
                    $('#sec').html(59);
                    if(m<10){
                        m="0"+m;
                    }
                    $('#min').html(m);
                }
                else{
                    h--;
                    $('#min').html(59);
                    if(h<10){
                        h="0"+h;
                    }
                    $('#hour').html(h);
                }
            }
        },1000);
    });