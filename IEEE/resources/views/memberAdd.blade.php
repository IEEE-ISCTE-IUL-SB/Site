@extends('layouts.nav')

@section('content')




<!-- Form Name -->
<section style="padding-top:3vh;border:5px solid white;background-color:white;padding-bottom:6vh;">
<h1 class="cand-title">Member Application for the IEEE ISCTE-IUL Student Branch</h1>
<div style="margin-top:2vh;margin-bottom:10vh;width:70%;margin:auto;text-align:center;justify-content:center;">
<h1 class="m-desc">

Congratulations!

You've taken the very first step in what might be your best adventure yet!

Answer the following questions and wait for us to contact you.

After we speak a little, we'll let you know if you were accepted to our Student Branch.

Are you ready?

</h1>

</div>
</section>

<section style="justify-content:center;background-color:#616877;padding-top:4%;-webkit-box-shadow: inset 0px 19px 25px -5px rgba(0,0,0,0.3);box-shadow: inset 0px 19px 25px -5px rgba(0,0,0,0.3);">
<!-- Text input-->
<form style="width:100%;padding-bottom:20vh;" action={{url("/memberapplication")}} method="post">
    @csrf
    <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-bottom:1%;">
      <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
      <input id="" name="member_name" class="inputstyle"style="color:white;text-decoration-line:none;border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Full Name*" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;" >
      <input id="" name="phone_number" class="inputstyle" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" type="tel" placeholder="Phone Number*" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
      <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" name="email" pattern="^\S+@\S+[\.][0-9a-z]+$" type="email" placeholder="Email*" class="inputstyle" required>

      </div>
    </div>


    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
      <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" name="student_number" type="text" placeholder="Student Number*" class="inputstyle" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
      <input id="" name="student_degree" style="border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="What degree are you attending*" class="inputstyle" required>

      </div>
    </div>



    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:9%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.7vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Briefly explain what IEEE means to you*</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="what_is_ieee" placeholder="Answer here..." required></textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:9%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.7vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">How did you learn about our IEEE Student Branch*</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="how_did_you_find_us" placeholder="Answer here..." required></textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:9%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.7vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Why do you want to join this organization? What would you like to do with us?*</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="reason_to_join" placeholder="Answer here..." required></textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:9%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.7vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">What's your weekly availability to work with the IEEE ISCTE-IUL SB?*</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="availability" placeholder="Answer here..." required></textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:9%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.7vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">In what areas do you think you can help us?*</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="value_add" placeholder="Answer here..." required></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:9%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.7vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">When are you be able to start?*</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="when_to_start" placeholder="Answer here..." required></textarea>
      </div>
    </div>



    <!-- Button -->
    <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <input type="submit" onclick="validateForm()" id="singlebutton" value="Submit" name="submitbutton" style="width:90%;" class="butpro">
      </div>
    </div>

</form>

</section>


<style>


.txtarea{
    border: 2px solid  white;
    outline: none;
    width: 100%;
    color:white;
    background-color:#616877;
    border-style: none none outset none;
    overflow: auto;
    padding-bottom: 5%;
}

.txtarea::placeholder {
    color: white;
}


::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white;
  background-color:#616877;
}
::-moz-placeholder { /* Firefox 19+ */
  color: white;
  background-color:#616877;
}
:-ms-input-placeholder { /* IE 10+ */
  color: white;
  background-color:#616877;
}
:-moz-placeholder { /* Firefox 18- */
  color: white;
  background-color:#616877;
}


.butpro:hover, .butpro:active{

        font-size: 17px;
        transition:0.2s;
        outline:none;
      background:white;
 color:#616877; border:2px solid white;
}

    .butpro{
        margin-top: 30px;
        -webkit-background-clip: text;
        background-size: cover;background-position: center;
        font-size: 17px;
        font-family:'font-letter2';
        width: 10pc;
        padding-left:1vw;
        padding-right:1vw;
        padding-top: 1.3vh;
        padding-bottom: 1.3vh;
        text-align:center;

        color: white;
          border:2px solid white;
        outline:none;
        transition:0.2s;
  background-color:#616877;
}

@media  (min-width:900px){

  .inputstyle {
    border-style: none none outset none;
    border-color: whitesmoke;
    font-size: 2.1vh;
    color:white;
    width: 100%;
    padding-bottom: 2vh;
    outline: none;
    background-color:#616877;
}

.txtarea{

    font-size: 20px;

}

.m-desc{
  line-height:3vh;font-size:2.4vh;text-align:center;justify-content:center;
}

  .cand-title{margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:auto;margin-right:auto;font-size:3vw;font-family:'font-letter2';}
}

@media  (max-width:900px){
  .txtarea{
    margin-top:1vh;
    font-size: 2.3vh;

}


.m-desc{
  line-height:3vh;font-size:2.3vh;text-align:center;justify-content:center;
}
  .inputstyle {
    border-style: none none outset none;
    border-color: whitesmoke;
    font-size: 2.9vh;
    color:white;
    width: 100%;
    margin-top:5vh;
    padding-bottom: 5vh;
    outline: none;
    background-color:#616877;

}

  .cand-title{margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:2%;margin-right:2%;font-size:8vw;font-family:'font-letter2';}
}

 .touched-field:invalid {
     border-color: red!important;
 }

 /*.touched-field::placeholder {
     color: red!important;
 }

 .touched-radio-field {
     color: red;
 }*/

 .touched-radio-item:invalid:after {
     box-shadow: 0 0 0 2pt red!important;
 }
</style>

<script>
    const form_items = document.querySelectorAll('.inputstyle');

    form_items.forEach(el => el.addEventListener('focusout', event => {
        el.classList.add('touched-field')
    }));

    function validateForm() {
        const form_items = document.querySelectorAll('.inputstyle, .radio-item, .txtarea');
        form_items.forEach(el => {
            if (el.hasAttribute('required')) {
                if (el.getAttribute('type') === 'radio') {
                    var isCheckedFlag;
                    const radio_items = document.getElementsByName(el.getAttribute('name'))
                    radio_items.forEach(x => {if (x.checked) isCheckedFlag = true;});
                    if (!isCheckedFlag) {
                        el.parentElement.parentElement.previousElementSibling.classList.add('touched-radio-field');
                        el.classList.add('touched-radio-item');
                    }
                }
                else {
                    el.classList.add('touched-field')
                }
            }
        });
    };
</script>
@endsection
