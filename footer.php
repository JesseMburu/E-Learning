<center>
		<footer>
<?php
function generateLink($url, $text, $target = '_blank') {
    return '<a href="' . htmlspecialchars($url) . '" target="' . htmlspecialchars($target) . '">' . htmlspecialchars($text) . '</a>';
}
?>
<html>
	<style>
body {
            display: flex;
            flex-direction: column;
            height: 10vh;
            margin: 0;
        }
        .header {
            text-align: top;
            color: black;
        }
        .rectangle {
        width: 105%; /* Adjust width as needed */
        height: 200px; /* Adjust height as needed */
        background-color: #ADD8E6; /* Background color */
        border: 1px solid #2980b9; /* Border color and thickness */
        border-radius: 15px; /* Rounded corners */
    }
    </style>
    <div class="rectangle">
	<div class="header"
    <p><b><br><font size="4" >To visit our website click: <?php echo generateLink('https://www.fadhilischools.sc.ke/fis','fadhilischools.sc.ke/fis'); ?> Fadhili Schools.</font></br></b></p>

    </div>
	<div class="footer-social-images">
        <h><b>Follow Us on:</b></h>
	
	<a href="https://www.instagram.com/fadhilijs/" target="_blank">
		<img src="admin/images/in2.png" alt="Instagram" width="50" height="50">
	</a>
		<a href="https://www.facebook.com/fadhilijs/" target="_blank">
		<img src="admin/images/fb2.png" alt="Facebook" width="45" height="45">
		</a>
        <a href="https://www.youtube.com/watch?v=WBpY0YuF7OA&pp=ygUVZmFkaGlsaSBqdW5pb3Igc2Nob29s" target="_blank">
		<img src="admin/images/y.png" alt="Youtube" width="45" height="45">
		</a>
</div>

</body>
</html>
	<br>	
<p><b>Powered by bnncybersecsolutions</b></p>
		<p><b>All Rights Reserved ®2024</b></p>
			<!-- <p>Programmed by: Benjamin Nemwel </p> -->
    </br>
		</footer>
</center>
    </div>
