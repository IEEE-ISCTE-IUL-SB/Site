<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- Buttons for manually sliding the carousel -->


    <!-- The carousel containing the Youtube iframe videos -->
    <!-- Remember to add the ?enablejsapi=1 in the Youtube embed link as described in: -->
    <!-- https://developers.google.com/youtube/iframe_api_reference#Example_Video_Player_Constructors -->
    <div id="moviesCarousel" class="carousel slide col-lg-8" data-ride="carousel" data-interval="2000">
        <div class="carousel embed-responsive embed-responsive-16by9"> <!-- embed is used for responsive size regardless of device -->
            <div class="carousel-item embed-responsive-item active">
                <iframe id="katniss" src="https://www.youtube.com/embed/v98Rh9qzmPs?enablejsapi=1" allowfullscreen></iframe>
            </div>
            <div class="carousel-item embed-responsive-item">
                <iframe id="rancho" src="https://www.youtube.com/embed/-MlkASchodc?enablejsapi=1" allowfullscreen></iframe>
            </div>
            <div class="carousel-item embed-responsive-item">
                <iframe id="logan" src="https://www.youtube.com/embed/UgJr0bNmTL8?enablejsapi=1" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="btn-group col-lg-8" role="group" aria-label="Carousel controls">
        <button id="prevMovie" type="button" class="btn btn-danger">Prev</button>
        <button id="nextMovie" type="button" class="btn btn-info">Next</button>
    </div>

    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function()
        {
            // Slide the carousel upon button click
            // .carousel('prev') - Cycles to the previous item
            // .carousel('next') - Cycles to the next item.
            // Reference: https://getbootstrap.com/docs/4.4/components/carousel/#methods
            $('#prevMovie').on('click', function() {
                $('#moviesCarousel').carousel('prev');
            });
            $('#nextMovie').on('click', function() {
                $('#moviesCarousel').carousel('next');
            });

            // When a slide occurs, pause the current iframe video that is playing
            // player.pauseVideo():Void - Pauses the currently playing video.
            // Reference: https://developers.google.com/youtube/iframe_api_reference#Playback_controls
            $('#moviesCarousel').on('slide.bs.carousel', function(event) {
                // The variable "players" contain each Youtube Player for each iframe video
                // Reference: https://developers.google.com/youtube/iframe_api_reference#Loading_a_Video_Player
                // event.from - The index of the current video (before the slide occurs)
                //            - It is also the index of the corresponding player for the current video
                // Reference: https://getbootstrap.com/docs/4.4/components/carousel/#events
                players[event.from].pauseVideo();
            });
        });

        // Start of snippet from: https://developers.google.com/youtube/iframe_api_reference
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var players = []; // would contain 1 player for each iframe video
        function onYouTubeIframeAPIReady()
        {
            var allMovieIframes = document.getElementById("moviesCarousel").getElementsByTagName('iframe');
            for (currentIFrame of allMovieIframes)
            {
                players.push(new YT.Player(
                    currentIFrame.id, // the target iframe video, here it is  either katniss, rancho, or logan
                    { events: { 'onStateChange': onPlayerStateChange } }
                ));
            }
        }
        function onPlayerStateChange(event) // triggered everytime ANY iframe video player among the "players" list is played, paused, ended, etc.
        {
            // Check if any iframe video is being played (or is currently buffering to be played)
            // Reference: https://developers.google.com/youtube/iframe_api_reference#Events
            if (event.data == YT.PlayerState.PLAYING || event.data == YT.PlayerState.BUFFERING)
            {
                // If any player has been detected to be currently playing or buffering, pause the carousel from sliding
                // .carousel('pause') - Stops the carousel from cycling through items.
                // Reference: https://getbootstrap.com/docs/4.4/components/carousel/#methods
                $('#moviesCarousel').carousel('pause');
            }
            else
            {
                // If there are no currently playing nor buffering videos, resume the sliding of the carousel
                // This means that once the current video is in a state that is not playing (aside from buffering so either it was paused, or has ended, or wasn't totally played), then the carousel would now resume sliding
                $('#moviesCarousel').carousel();
            }
        }
        // End of snippet from Youtube iframe API
    </script>

</body>
</html>