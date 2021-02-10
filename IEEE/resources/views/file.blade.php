@extends('layouts.app')


@section('content')

<style>
    .area-title{
  margin-top: 60px;
  margin-bottom: 60px;
  align-items: center;
  
}
#title-article{
  font-weight: bold;
  font-family: "Open Sans";
  color:black;
  text-align: center;
  font-size: 50px;
  
}
.two-a{
  display:inline;
}
.descr{
  font-family: "Open Sans";
  color: black;
  font-size: 20px;
}
#autor1{
  margin-bottom: 5px;
  float: left;
  color: #000000;
  font-family: "Open Sans";
  font-size: 13px;
}
#date{
  margin-bottom: 5px;
  float: right;
  color: #000000;
  font-family: "Open Sans";
  font-size: 13px;
}
.img{
  display: block;
  align-items: center;
  margin-bottom: 400px;
}
.textr{
  margin-top: 40px;
}
p {
  margin-bottom: 20px;
  text-align: justify;
  text-indent: 1.5em;
  margin-top: 0 ;
  color: #000000;
}
p + p {
  text-align: justify;
  text-indent: 1.5em;
  margin-top: 0 
}


.image{
  margin-bottom: 50px;
  width: 100%;
  height: 300px;
  align-items: center;
}
.image1{
  margin-top: 50px;
  margin-bottom: 50px;
  width: 100%;
  height: 300px;
  align-items: center;
}

</style>

<div class="container bot">
    
<div class="area-title">
        <h1 id="title-article">{{$data->title}}</h1>
    </div>
    <div class="row">
        
        <div class="col">
        </div>
        <div class="col-7 textr">
       
    <div class="descr">
        <p id="descri">{{$data->descricao}}</p>
    </div>
    <div class="two-a">
    <p id="autor1">by {{$data->name}}</p>
    <p id="date">{{$data->created_at}}</p>
    </div>
    
    <div clas="img">
                <img class="image" src="{{asset('img/'.$data->image)}}"  alt="">
    </div>
            <p>{{$data->introdution}}</p>            
           
            <p>{{$data->Desenvolvimento}}</p>
            <div clas="img">
                <img class="image1" src="{{asset('img/'.$data->image1)}}"  alt="">
            </div>
            <p>{{$data->Conclusão}}</p>

            <div class="redes">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/article/all/<?php echo $data->id; ?>" class="facebook-share-button">
	                <img width="40" height="40" src="https://ayltoninacio.com.br/img/s/18w50.jpg" alt="">
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://127.0.0.1:8000/article/all/<?php echo $data->id; ?>" class="facebook-share-button">
	                <img width="40" height="40" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTc3My4wMDAwMDAsIC0xMzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjMzQ2REE2IiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNNjAyLjk5NTkzNywwIEw2NTcuMDA0MDYzLDAgQzY1OC42NTg2NzMsMCA2NjAsMS4zMzczMDk3NCA2NjAsMi45OTU5Mzc0MyBMNjYwLDU3LjAwNDA2MjYgQzY2MCw1OC42NTg2NzMxIDY1OC42NjI2OSw2MCA2NTcuMDA0MDYzLDYwIEw2MDIuOTk1OTM3LDYwIEM2MDEuMzQxMzI3LDYwIDYwMCw1OC42NjI2OTAzIDYwMCw1Ny4wMDQwNjI2IEw2MDAsMi45OTU5Mzc0MyBDNjAwLDEuMzQxMzI2ODggNjAxLjMzNzMxLDAgNjAyLjk5NTkzNywwIFoiIGlkPSJzcXVhcmUtNyIvPjwvZz48ZyBmaWxsPSIjRkZGRkZGIiBpZD0iaWNvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTgyLjAwMDAwMCwgMTUwLjAwMDAwMCkiPjxwYXRoIGQ9Ik02MTIuODgzMDc1LDMxLjgyMzE1MTIgTDYxMi44ODMwNzUsMTMuNTI0MzM4OSBMNjA3LjIyNzM3LDEzLjUyNDMzODkgTDYwNy4yMjczNywzMS44MjMxNTEyIEw2MTIuODgzMDc1LDMxLjgyMzE1MTIgWiBNNjEyLjg4MzA3NSw3LjAzODIxNDU1IEM2MTIuODQ5Mzg4LDUuNDAwNjU5OTYgNjExLjc1ODAxNiw0LjE1Mzg0NjE1IDYwOS45ODUwNTQsNC4xNTM4NDYxNSBDNjA4LjIxMTYzMiw0LjE1Mzg0NjE1IDYwNy4wNTI4ODUsNS40MDA2NTk5NiA2MDcuMDUyODg1LDcuMDM4MjE0NTUgQzYwNy4wNTI4ODUsOC42NDAyMDIzNCA2MDguMTc3OTQ0LDkuOTIzMDc2OTIgNjA5LjkxNzIxOSw5LjkyMzA3NjkyIEw2MDkuOTUwOTA2LDkuOTIzMDc2OTIgQzYxMS43NTgwMTYsOS45MjMwNzY5MiA2MTIuODgzMDc1LDguNjQwMjAyMzQgNjEyLjg4MzA3NSw3LjAzODIxNDU1IFogTTYyMi4xMTAwNDIsMzEuODIzMTUxNyBMNjIyLjExMDA0MiwyMS4zOTczNzI5IEM2MjIuMTEwMDQyLDIwLjgzOTQwMTQgNjIyLjE1MDM3LDIwLjI4MTQzIDYyMi4zMTQ0NDcsMTkuODgzNjY4MiBDNjIyLjc2MzAzNCwxOC43NjgyNzc4IDYyMy43ODM5NTYsMTcuNjEzNjYzNyA2MjUuNDk4MTk5LDE3LjYxMzY2MzcgQzYyNy43NDM4OTYsMTcuNjEzNjYzNyA2MjkuMTUyMjc4LDE4Ljg4ODE1ODcgNjI5LjE1MjI3OCwyMS4zOTczNzI3IEw2MjkuMTUyMjc4LDMxLjgyMzE1MTYgTDYzNC44NDYxNTQsMzEuODIzMTUxNyBMNjM0Ljg0NjE1NCwyMS4xMTgzODcyIEM2MzQuODQ2MTU0LDE1LjM4Mzk4NzggNjMxLjc4NTA0NSwxMi43MTU2NjkgNjI3LjcwMTkxLDEyLjcxNTY2OSBDNjI0LjM1NDA4MSwxMi43MTU2NjkgNjIyLjg4NDU3MiwxNC41ODczNTkzIDYyMi4wNjg2MDgsMTUuODYxMzAyIEw2MjIuMTA5NDg5LDEzLjQxMzkxMjMgTDYxNi40MjU0NjIsMTMuNDEzOTEyMyBDNjE2LjUwNzIyNCwxNS4xNjU3MjE1IDYxNi40MjU0NjIsMzEuODIzMTUxNiA2MTYuNDI1NDYyLDMxLjgyMzE1MTYgTDYyMi4xMTAwNDIsMzEuODIzMTUxNyBaIiBpZD0ibGlua2VkaW4iLz48L2c+PC9nPjwvZz48L3N2Zz4=" alt="">
                </a>
            </div> 
        </div>
        <div class="col">
          <!--@yield('sidebar')-->
        </div>
    </div>

</div>





<style>
        .bot{
            margin-bottom:50px;
        }
        .redes{
            display:inline;
        }

        .facebook-share-button{
            margin: 5px;
        }      
    </style>
    
<!--<p>
<iframe src="{{url('storage/'.$data->file)}}" style="width:1000px;height:600px;"></iframe>
</p>-->
@endsection

