@extends('layouts.nav')

@section('content')


<!-- Form Name -->
<section style="padding-top:3vh;border:5px solid white;background-color:white;padding-bottom:3vh;margin-bottom:10vh;">
<h1 class="criar-title">Suggest an event</h1>
<div class="roulette-wrapper">

<h1 class="roulette"><span id="menjase"><span> Do you want to share a new programming language through a workshop? <span></span></h1>


</div>
</section>
<style>

@media  (min-width: 1000px){

.criar-title {
  margin-top:7vw;text-align:center;color:#333333;margin-bottom:2vh;margin-left:auto;margin-right:auto;font-size:4vw;font-family:'font-letter2';
}

.roulette-wrapper {
  margin-top:2.1vh;margin-bottom:7vh;width:70vw;height:20vh;margin:auto;text-align:center;justify-content:center;
}
.roulette {
  position:relative;font-size:2vw;color:#555555;font-family:'font-letter2';
}
}


@media  (max-width: 1000px){

.criar-title {
  margin-top:10vw;text-align:center;color:#333333;margin-bottom:5vw;margin-left:auto;margin-right:auto;font-size:10vw;font-family:'font-letter2';
}
.roulette-wrapper {
  margin-top:6vw;margin-bottom:10vw;padding-bottom:28vw;width:80vw;height:15vh;margin:auto;text-align:center;justify-content:center;
}

.roulette {
  position:relative;font-size:5vw;color:#555555;font-family:'font-letter2';
}

}
</style>



<section style="justify-content:center;background-color:#616877;padding-top:4%;padding-bottom:2%;-webkit-box-shadow: inset 0px 19px 25px -5px rgba(0,0,0,0.3);box-shadow: inset 0px 19px 25px -5px rgba(0,0,0,0.3);"">
    <form style="width:100%;" id="main-form" action={{url("/eventsuggestion")}} method="post">
        @csrf
        <!-- Text input-->
        <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:2%;margin-bottom:1%;">
          <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
            <input id="" name="contact_name" class="inputstyle"style="color:white;text-decoration-line:none;border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Full Name*" required>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
            <input id="textinput" style="color:white;border:0px;border-radius:0px;border-bottom: 3px solid white;" name="contact_email" pattern="^\S+@\S+[\.][0-9a-z]+$" type="email" placeholder="Email*" class="inputstyle" required>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
            <input id="" name="contact_org" style="color:white;border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Organization" class="inputstyle">

          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">
            <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
                <label for="group1" class="radio-group-label ">Tipo de Evento*</label>
                <fieldset id="group1" class="inputstyle">
                    <div class="row radio-row">
                        <input type="radio" value="Workshop" name="event_type" id="radio1-1" class="radio-item" required><label for="radio1-1">Workshop</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="Lecture" name="event_type" id="radio1-2" class="radio-item" required><label for="radio1-2">Lecture</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="" name="event_type" id="radio1-2" class="radio-item" required>
                        <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" name="event_type_other" type="text" placeholder="Other..." class="inputstyle radio-other-text-field">
                    </div>
                </fieldset>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-bottom:4%;">
          <label class="col-md-6 control-label" style="color:white;font-size:3.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Event description*</label>
          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
            <textarea class="txtarea" id="textarea" style="background-color: transparent;"name="event_description" placeholder="What will your event be about..." required></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
          <label class="col-md-6 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
            <input type="submit" onclick="validateForm()" id="singlebutton" name="singlebutton" style="width:90%;"class="butpro">
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
  color:white;
  width: 100%;
  padding-bottom: 2vh;
  outline: none;
  background-color:#616877;
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

}



@media  (max-width:900px){
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

.radio-group-label {
         margin-top:1.4rem;
         margin-bottom: 1.5rem;
         font-size: 4vh;
         color: white;
    }

.cand-title{margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:2%;margin-right:2%;font-size:8vw;font-family:'font-letter2';}

.txtarea{
    margin-top:1vh;
    font-size: 2.9vh;
    
}

}

    .txtarea{
        border: 2px solid white;
        color: white;
        outline: none;
  
        width: 100%;
        border-style: none none outset none;
        overflow: auto;
        padding-bottom: 5%;
    }

    .txtarea::placeholder {
        color: lightgrey;
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
        border:2px solid white;
        background:  white;
        color: #616877;
        font-size: 17px;
        transition:0.2s;
        outline:none;

    }

    .radio-group-label {
         margin-bottom: 1.5rem;
    
         color: white;
    }

    .radio-other-text-field {
         width: auto;
         padding-bottom: 0.5rem;
    }

    .radio-row {
         margin-bottom: 1.3rem;
         margin-left: 0.1rem;
         color: white;
    }

    .radio-item {
         margin: auto 1rem;
    }

    .radio-item:after {
         width: 15px;
         height: 15px;
         border-radius: 15px;
         top: -2px;
         left: -1px;
         position: relative;
         border: solid transparent 3px;
         box-shadow: 0 0 0 2pt white;
         background-color: #616877;
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
         background-color: white;
         border: solid #616877 3px;
         box-shadow: 0 0 0 2pt white;
         content: '';
         display: inline-block;
         visibility: visible;
         transition: .2s;
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
        border:2px solid white;
        background:transparent;
        color:white;
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

/*
 * Slogan Roulette
 *
 * @author Dmitri Chapkine 2016
 * @usage https://github.com/dchapkine/slogan-roulette
 */
(function($) {

function animate(el, x, cb) {
    //var oldclass = el.attr("class");
    el.addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
            $(this).removeClass(x + ' animated');
            cb();
        });
};

function nextClaim(el, settings) {
    var autoplay = settings.autoplay;
    var repeat = settings.repeat;
    var interval = settings.interval;
    var outClass = settings.outClass;
    var inClass = settings.inClass;
    var slogans = settings.slogans;

    var i = ~~(el.attr("data-claim-id"));
    var theend = i >= slogans.length;
    var claim = theend ? slogans[0] : slogans[i];
    el.attr("data-claim-id", !theend ? i + 1 : (repeat == true ? 1 : i));

    if (!theend || repeat == true) {
        animate(el, outClass, function() {
            el.find("span").html(claim);
            animate(el, inClass, function() {
                if (autoplay === true) {
                    setTimeout(function() {
                        nextClaim(el, settings);
                    }, interval);
                }
            });
        });
    }
}

$.fn.sloganRoulette = function(options) {

    $(this).each(function() {

        var el = this;
        options = options || {};

        var settings = $.extend({
            autoplay: true,
            repeat: true,
            startDelay: 200,
            interval: 5000,
            outClass: "fadeOutDown",
            inClass: "fadeInDown",
            slogans: ["one", "two", "three"]
        }, options);

        $(el).css("display", "inline-block");

        if (settings.startDelay > 0) {
            setTimeout(function() {

                nextClaim($(el), settings);

            }, settings.startDelay);
        } else {
            nextClaim($(el), settings);
        }

    });

    return this;
};

}(jQuery));


(function($) {
$(document).ready(function() {
    $('#menjase').sloganRoulette({
        slogans: [" Do you want to organize a lecture about your project ", " Do you want to share a new programming language through a workshop"]
    });
})

})(jQuery);

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
