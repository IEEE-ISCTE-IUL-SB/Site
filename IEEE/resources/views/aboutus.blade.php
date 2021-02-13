@extends('layouts.nav')

@section('content')


<section id="section1" style="background:white;padding-bottom:20%;padding-top:10%;">
        <div  style="color:white;margin-left:10%;">
                <h2 style="font-family:'font-letter2';font-size:4pc;letter-spacing:0.1px;color:rgb(78 81 97);">Sobre Nós</h2>
                <p class="text-muted lead" style="margin-top:10%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
         
        </div>


 
</section>


<div class="parallax" style="height:600px;"></div>

<style>
.parallax {
  /* The image used */
  background-image: url('img/ieee2.jpg');

  /* Full height */
  height: 100%; 


  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  filter: blur(0.5px);
}

</style>


<div class="container" style="margin-bottom:10%;">
<h2 style="font-family:'font-letter2';font-size:3.5pc;letter-spacing:0.1px;color:rgb(78 81 97);text-align:center;margin-bottom:10%;margin-top:10%;">Membros</h2>
  <div class="members">
    <div class="member">
      <img class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033344/itc-web-course-flexbox/richard.png">
      <h2 class="member-name">Richard Hendricks</h2>
      <span class="member-role">Founder & CEO</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033285/itc-web-course-flexbox/dinesh.png">
      <h2 class="member-name">Dinesh Chugtai</h2>
      <span class="member-role">Senior Programmer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033357/itc-web-course-flexbox/gilfoyle.png">
      <h2 class="member-name">Bertram Gilfoyle</h2>
      <span class="member-role">Chief Systems Architect</span>
    </div>
    <div class="member"><img  class="member-image"  src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/jared.png">
      <h2 class="member-name">Jared Dunn</h2>
      <span class="member-role">Chief Operating Officer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/monica.png">
      <h2 class="member-name">Monica Hall</h2>
      <span class="member-role">Chief Financial Officer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033300/itc-web-course-flexbox/big-head.png">
      <h2 class="member-name">Nelson Bighetti</h2>
      <span class="member-role">Majority Investor</span>

    </div>
  </div>
</div>

<style>

.members {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
}

.member-image{
    box-shadow: 0 0 black;
    border-radius:100px;
}

.member {
  text-align: center;
  flex-basis: 25%;
  padding: 24px;
  box-sizing: border-box;
  margin-bottom: 30px;
}

.member-name {
  margin: 0;
  margin-top: 18px;
  font-weight: 600;
  font-size: 20px;
  color: #333333;
  font-family:'font-letter4';
  letter-spacing:1px;
}

.member-role {
  font-style: normal;
  font-size: 18px;
  font-family:'font-letter4';
  letter-spacing:1px;
}
</style>









@endsection
