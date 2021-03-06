@extends('layouts.nav')

@section('content')




<!-- Form Name -->
<section style="background-color:white;padding-bottom:3vh;margin-bottom:8vh;-webkit-box-shadow: 0px 24px 27px -3px rgba(0,0,0,0.3);box-shadow: 0px 24px 27px -3px rgba(0,0,0,0.3);">
    <h1 class="cand-title"style="margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:auto;margin-right:auto;font-family:'font-letter2';"> Inscrição em {{$event->event_name}}</h1>
    <div style="margin-top:2vh;margin-bottom:5vh;width:80%;margin:auto;text-align:center;justify-content:center;">
    <h1 class="w-desc" style="line-height:3vh;text-align:center;justify-content:center;">

        {{$event->event_description}}
        <br> {{$event->event_registration_description}}
    *Required

    </h1>
      <div class="row" style="margin-top:4vh;margin-bottom:3vh;">
      <div style="width:50%;">
          <h1 style="font-family:'font-letter2';font-size:4vh;">{{ date('H:i', strtotime($event->event_time)) }} GMT</h1>
        </div>
        <div style="width:50%;">
          <h1 style="font-family:'font-letter2';font-size:4vh;">{{ date('d/m/y', strtotime($event->event_date)) }}</h1>
        </div>
      </div>
    </div>
</section>

<section style="justify-content:center;">
<!-- Text input-->
    <form style="width:100%;" id="main-form" action="/eventregistration/{{$event->id}}" method="post">
        @csrf
        <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:2%;margin-bottom:1%;">
          <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
            <input id="" name="insc_name" class="inputstyle" style="color:#333333;text-decoration-line:none;border:0px;border-radius:0px;border-bottom: 3px solid #333333;" type="text" placeholder="Full Name*" required>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">
          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
            <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid #333333;" name="insc_email" pattern="^\S+@\S+[\.][0-9a-z]+$" placeholder="Email*" type="email" class="inputstyle" required>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

          <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
              <legend for="group1" class="radio-group-label">What University are you attending?*</legend>
              <fieldset id="group1" class="inputstyle">
                  <div class="row radio-row">
                    <input type="radio" value="Iscte" name="insc_uni" id="radio1-1" class="radio-item" required><label for="radio1-1">Iscte</label>
                  </div>
                  <div class="row radio-row">
                    
                        <input type="radio" value="" name="insc_uni" id="radio1-2" class="radio-item radio-item2" required>
                      
                        <input id="textinput" style="margin-top: 4px;border:0px;border-radius:0px;border-bottom: 3px solid #333333;" name="insc_uni_other" type="text" placeholder="Other..." class="inputstyle radio-other-text-field">
             
                  </div>
              </fieldset>
          </div>
        </div>
        <style>
        
        .radio-item2{
            box-sizing: border-box;
            padding: 0;
        }
        </style>
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

            <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
                <legend for="group2" class="radio-group-label">What degree do you study?*</legend>
                <fieldset id="group2" class="inputstyle">
                    <div class="row radio-row">
                        <input type="radio" value="LEI" name="insc_degree" id="radio2-1" class="radio-item" required><label for="radio2-1">LEI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="MEI" name="insc_degree" id="radio2-2" class="radio-item" required><label for="radio2-2">MEI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="LETI" name="insc_degree" id="radio2-3" class="radio-item" required><label for="radio2-3">LETI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="METI" name="insc_degree" id="radio2-4" class="radio-item" required><label for="radio2-4">METI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="LIGE" name="insc_degree" id="radio2-5" class="radio-item" required><label for="radio2-5">LIGE</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="MIG" name="insc_degree" id="radio2-6" class="radio-item" required><label for="radio2-6">MIG</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="LCD" name="insc_degree" id="radio2-7" class="radio-item" required><label for="radio2-7">LCD</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="" name="insc_degree" id="radio2-8" class="radio-item" required>
                        <input id="textinput" style="margin-top: 4px;border:0px;border-radius:0px;border-bottom: 3px solid #333333;" name="insc_degree_other" type="text" placeholder="Other..." class="inputstyle radio-other-text-field">
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

            <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
                <legend for="group3" class="radio-group-label">How far are you into your degree?*</legend>
                <fieldset id="group3" class="inputstyle">
                    <div class="row radio-row">
                        <input type="radio" value="1Ano" name="insc_year" id="radio3-1" class="radio-item" required><label for="radio3-1">1st Year</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="2Ano" name="insc_year" id="radio3-2" class="radio-item" required><label for="radio3-2">2nd Year</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="3Ano" name="insc_year" id="radio3-3" class="radio-item" required><label for="radio3-3">3rd Year</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="4Ano" name="insc_year" id="radio3-4" class="radio-item" required><label for="radio3-4">4th Year</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="5Ano" name="insc_year" id="radio3-5" class="radio-item" required><label for="radio3-5">5th Year</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="NA" name="insc_year" id="radio3-6" class="radio-item" required><label for="radio3-6">Not Applicable</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!-- Select Basic -->

        <!-- Button -->
        <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
          <label class="col-md-6 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
              <input type="submit" onclick="validateForm()" id="singlebutton" name="singlebutton" style="width:90%;" class="butpro">
          </div>
        </div>
    </form>
</section>


<style>



@media  (min-width:900px){

.inputstyle {
  border-style: none none outset none;
  border-color: whitesmoke;
  font-size: 2.1vh;
  color:#333333;
  width: 100%;
  padding-bottom: 2vh;
  outline: none;
  background-color:white;
}

.cand-title{margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:auto;margin-right:auto;font-size:3vw;font-family:'font-letter2';}


.txtarea{
  
    font-size: 20px;

}

.radio-group-label {
         margin-bottom: 1.9rem;
         margin-top: 1.5rem;
         font-size: 2.5vh;
         color: white;
    }

    .w-desc{
        font-size:2vh;
    
}

}





@media  (max-width:900px){
.inputstyle {
  border-style: none none outset none;
  border-color: whitesmoke;
  font-size: 2.9vh;
  color:#333333;
  width: 100%;
  margin-top:5vh;
  padding-bottom: 5vh;
  outline: none;
  background-color:white;
  
}

.w-desc{
    font-size:2.4vh;

}
.cand-title{margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:2%;margin-right:2%;font-size:8vw;font-family:'font-letter2';}


.radio-group-label {
         margin-top:1.4rem;
         margin-bottom: 1.5rem;
         font-size: 4vh;
         color: white;
    }


.txtarea{
    margin-top:1vh;
    font-size: 2.9vh;
    
}

}

 .radio-group-label {
     margin-bottom: 1.5rem;
     font-size: 2.1vh;
 }

 .radio-other-text-field {
     width: auto;
     padding-bottom: 0.5rem;
 }

 .radio-row {
     margin-bottom: 1.3rem;
     margin-left: 0.1rem;
 }

 .radio-item {
     margin: auto 1rem;
 }

 .radio-item:after {
     width: 15px;
     height: 15px;
     top: -2px;
     left: -1px;
     position: relative;
     border-radius: 15px;
     border: solid white 3px;
     box-shadow: 0 0 0 2pt #2b2b2b;
     background-color: white;
     content: '';
     display: inline-block;
     visibility: visible;
     transition: .2s;
 }

 .radio-item:checked:after {
     width: 15px;
     height: 15px;
     border-radius: 15px;
     top: -2px;
     left: -1px;
     position: relative;
     background-color: #380e99;
     border: solid white 3px;
     box-shadow: 0 0 0 2pt #2b2b2b;
     content: '';
     display: inline-block;
     visibility: visible;
     transition: .2s;
 }



.txtarea{
    border: 2px solid  #333333;
    outline: none;
    font-size: 20px;
    width: 100%;
    border-style: none none outset none;
    overflow: auto;
    padding-bottom: 5%;
}


::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #333333;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #333333;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #333333;
}
:-moz-placeholder { /* Firefox 18- */
  color: #333333;
}


.butpro:hover, .butpro:active{
        border:2px solid  #333333;
        background:  #333333;
        color: white;font-size: 17px;
        transition:0.2s;
        outline:none;

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
        border:2px solid #585A5C;
        background:transparent;
        color:#333333;
        outline:none;
        transition:0.2s;



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
        const form_items = document.querySelectorAll('.inputstyle, .radio-item');
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
