<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Hide all slides by default */
        .mySlides {
            display: none;
            width: 50%; /* Set width to half of the viewport */
            height: 50%; /* Auto height to maintain aspect ratio */
            margin: 0 auto; /* Center the images horizontally */
        }
    </style>
</head>
<body> 
<a href="https://www.fadhilischools.sc.ke/">FADHILI SCHOOLS</a>
    <div class="slideshow-container">
        <div class="mySlides fade"><img src="admin/images/g.jpg" alt=""></div>
        <div class="mySlides fade"><img src="admin/images/ph.jpg" alt=""></div>
        <div class="mySlides fade"><img src="admin/images/m.jpg" alt=""></div>
        <div class="mySlides fade"><img src="admin/images/pic.jpg" alt=""></div>
        <div class="mySlides fade"><img src="admin/images/t.jpg" alt=""></div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            
            // Hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            
            // Move to the next slide
            slideIndex++;
            
            // Reset to the first slide if reached the end
            if (slideIndex > slides.length) {slideIndex = 1}    
            
            // Display the current slide
            slides[slideIndex-1].style.display = "block";  
            
            // Repeat the slideshow every 2 seconds (2000 milliseconds)
            setTimeout(showSlides, 2000); 
        }
    </script>
</body>
</html>
    </center>