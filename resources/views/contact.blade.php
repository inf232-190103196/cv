<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" 
        crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../vsproject/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://npmcdn.com/tootik@1.0.2/css/tootik.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

    </head>

<body>
    

<section id="contact-us" class="section section-contact-us wow fadeInUp" data-wow-offset="40" style="visibility: visible; animation-name: fadeInUp;">
            <div class="header-section">
                <h2 class="h2-section">CONTACT US</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12"  >
                    <div class="form-content">
                        <form action="processcv.php" method="post" id="contactForm" data-toggle="validator" novalidate="true">
                            <input type="text" name="Name" id="name" placeholder="name" required="">
                            <input type="email" name="Email" id="email" placeholder="email" required="">
                            <textarea id="message" name="Message" placeholder="message" required=""></textarea>
                            <input type="submit" name="btn-save1" class="btn-save1" id="form-submit" value="SEND" class="disabled" style="pointer-events: all; cursor: pointer;">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </form>
                    </div>
                </div>
            </div>
           
        </section>
        <a class="home-style" href="{{ route('home') }}">Home page</a>
        <a class="skill-style" href=" {{ route('skills') }}">Skills</a>
        
        
</body>
</html>