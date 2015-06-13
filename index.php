<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php include('functions.php'); ?>
	<title>LBC</title>
	<meta name="description" content="Revolutionary by design. Longbeard Creative is intent on stoking a design revolution in the nonprofit sector." />

	<?php includeHeader () ?>

</head>
<body>
<div id="first">
	
<div id="nav">
	<span>Logo</span><span>We can help</span><span>Team</span><span>Work</span><span>Contact us</span>
</div>
	

<h1>DESIGNED<br />
TO BE<br />
A FORCE<br />
FOR CHANGE</h1>

<p class="white first"> You have the vision and conviction to make a difference, but you 
need a partner to help get the word out? Perfect, believe in the beard.<p>


	
	
</div>







<script>
// scroll to anchor point script.	
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
</script>
</body>
</html>