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
    <div class="container">
        <section id="about" class="section section-about" style="visibility: visabile; animation-name: fadeInUp;">
            <div class="profile wow fadeInUp">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="photo-profile">
                            <img src="https://images.assetsdelivery.com/compings_v2/2nix/2nix1408/2nix140800145.jpg" style="width: 229px; height: 239px;" alt="">
                        </div>
                    </div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="info-profile">
                                <h2>SULTAN ABDUALIYEV</h2>
                                <h3>web developer & web designer</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas reprehenderit dolores ex velit, odio est, sequi, repudiandae cum iste nihil explicabo nisi impedit. Officiis voluptatem tempora doloremque quis, similique repudiandae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, nesciunt distinctio aliquam a molestias non? Soluta adipisci aut officiis totam. Illo sunt fuga corporis reiciendis ab eos placeat est corrupti.</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="ul-info">
                                            <li class="li-info">
                                                <span class="title-info"><b>Age:</b></span>
                                                <span class="info">19</span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>Address:</b></span>
                                                <span class="info">Kaskelen, Karasay Batyr str, 2/52</span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>Email:</b></span>
                                                <span class="info"><a href="#" mailto:190103196@stu.sdu.edu.kz>190103196@stu.sdu.edu.kz</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="ul-info">
                                            <li class="li-info">
                                                <span class="title-info"><b>Phone:</b></span>
                                                <span class="info"><a href="tel:+77471307700">+7 747 130 77 00</a></span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>Website:</b></span>
                                                <span class="info">----</span>
                                            </li>

                                            <li class="li-info">
                                                <span class="title-info"><b>Nationality:</b></span>
                                                <span class="info">Kaz</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12">
                                        <span class="title-links">Social Links</span>
                                        <ul class="ul-social-links">
                                            <li class="li-social-links">
                                                <a href="#" data-tootik="Instagram" data-tootik-conf="square">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="li-social-links">
                                                <a href="#" data-tootik="VK" data-tootik-conf="square">
                                                    <i class="fa fa-vk" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="li-social-links">
                                                <a href="#" data-tootik="WhatsApp" data-tootik-conf="square">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="li-social-links">
                                                <a href="#" data-tootik="Google Plus" data-tootik-conf="square">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <a class="skill-style" href=" {{ route('skills') }}">Skills</a>
        <a class="contact-style" href=" {{ route('contact') }}">Contacts</a>
</body>
</html>