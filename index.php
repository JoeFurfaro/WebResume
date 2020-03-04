<?php
    $img_href = "me.png";
    $about_text = "I am a first year student at McMaster University currently achieving a Bachelor of Applied Science degree, majoring in Computer Science. My main areas of interest are project management, web development, and autonomous vehicles. I am passionate about innovation and am excited to spend my career making as many people's lives better as possible.";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Joe Furfaro</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div id="main" class="col-12 col-md-9 pl-0 pr-0">
                        <div id="left-section" class="col-12">
                            <div class="row">
                                <div class="col-12 col-md-6 pr-0 pl-0 pt-md-4 pb-md-4">
                                    <img class="img-fluid d-block d-md-none" src="<?php echo $img_href; ?>">
                                    <h2 class="ml-md-5 text-center text-md-left mb-0 mt-4 mt-md-0">Joe Furfaro</h2>
                                    <h5 class="ml-md-5 text-center text-md-left mb-0"><small>contact@joefurfaro.ca</small></h5>
                                    <h5 class="ml-md-5 text-center text-md-left mb-0"><small>(647) 783-7146</small></h5>
                                </div>
                                <div class="col-12 col-md-6 pt-3 pt-md-1 pr-0 pl-0 pt-md-4 pb-4">
                                    <a class="mr-md-5 d-block ml-auto text-center text-md-right" target="_blank" href="https://github.com/JoeFurfaro">Github</a>
                                    <a class="mr-md-5 d-block ml-auto text-center text-md-right" target="_blank" href="https://www.linkedin.com/in/joe-furfaro-6944aa191/">LinkedIn</a>
                                    <a class="mr-md-5 d-block ml-auto text-center text-md-right" target="_blank" href="/request.php">Request Résumé</a>
                                    <div class="d-md-none">
                                        <hr />
                                        <h4 class="text-center mt-0">About Me</h4>
                                        <p class="text-center mr-3 ml-3"><?php echo $about_text; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-main">
                                <div class="col-12 pl-md-5 pt-md-4 pr-md-5 pt-4 pb-4">
                                    <h4 class="mb-4 text-center text-md-left">Work Experience</h4>
                                    <h6 class="mb-0 text-center text-md-left">Chief Information Officer - <em>Dipole Inc.</em></h6>
                                    <h6 class="text-center text-md-left"><small>December 2019 - Present</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Co-founded and developed a modular and scalable food preparation and delivery web platform that will be released in October, 2020. Dipole includes a self-limiting kitchen inventory management system, GIS live asset tracking using the Google Cloud Platform, Stripe integration for payment processing, responsive user and administrator interfaces, a human resources management platform, and a customer service/relationships platform.</p>
                                    <hr />
                                    <h6 class="mb-0 text-center text-md-left">Sole Proprietorship - <em>Web Developer</em></h6>
                                    <h6 class="text-center text-md-left"><small>June 2016 - Present</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Developed and maintained websites for small businesses and non-profitable organizations including lightonthehill.ca, aof1.ca, and joynusevents.ca. Coordinated with a wide variety of organizations to create websites specifically tailored to their audience and public image. Created websites both from scratch and using content management systems such as WordPress.</p>
                                    <hr />
                                    <h6 class="mb-0 text-center text-md-left">Martinrea Alfield - <em>Summer Engineering Student</em></h6>
                                    <h6 class="text-center text-md-left"><small>July 2019 - August 2019</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Optimized and streamlined the robot software mentioned below from 2018. Developed a computer vision module for stereo camera object detection and tracking. Created pattern recognition systems for detecting the presence of signs and color patterns using OpenCV. Produced documentation and manuals for robot and user software. Created strategies and infrastructure for mass deployment and centralized version control.</p>
                                    <hr />
                                    <h6 class="mb-0 text-center text-md-left">Martinrea Alfield - <em>Summer Engineering Student</em></h6>
                                    <h6 class="text-center text-md-left"><small>July 2018 - August 2018</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Developed core and user software for the prototype of a fully autonomous, free-driving, and intelligent inventory management robot. Focused heavily on scalability, modularity, developer friendliness, and future potential for developer expandability. Created user/developer software for the robot including performance monitoring tools, a developer testing environment, and a robot task tracking platform.</p>
                                </div>
                            </div>
                            <div class="row bg-main-2">
                                <div class="col-12 pl-md-5 pt-md-4 pr-md-5 pt-4 pb-4">
                                    <h4 class="mb-4 text-center text-md-left">Volunteer Experience</h4>
                                    <h6 class="mb-0 text-center text-md-left">McMaster University - <em>Men's Volleyball Team Manager</em></h6>
                                    <h6 class="text-center text-md-left"><small>December 2019 - Present</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Managed the  day-to-day operation of the Men’s Volleyball team at McMaster for the 2019-20 season. Handled logistics and transportation of food and equipment, and communication with external organizations and clubs. Organized major competitions and events whose profits supported the growth of McMaster’s volleyball program.</p>
                                    <hr />
                                    <h6 class="mb-0 text-center text-md-left">LIFT Church - <em>Simple Church Apprentice</em></h6>
                                    <h6 class="text-center text-md-left"><small>February 2020 - Present</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Trained to improve leadership skills and lead Bible study sessions with McMaster students interested in learning more about the Bible and the Christian faith.</p>
                                    <hr />
                                    <h6 class="mb-0 text-center text-md-left">Light on the Hill Church - <em>Worship Leader</em></h6>
                                    <h6 class="text-center text-md-left"><small>February 2020 - Present</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Planned, organized, and led Sunday morning church services. Selected worship music and led a variety of different teams through rehearsals, and musical performances.</p>
                                </div>
                            </div>
                            <div class="row bg-main">
                                <div class="col-12 pl-md-5 pt-md-4 pr-md-5 pt-4 pb-4">
                                    <h4 class="mb-4 text-center text-md-left">Education</h4>
                                    <h6 class="mb-0 text-center text-md-left">McMaster University - <em>Bachelor of Applied Science</em></h6>
                                    <h6 class="text-center text-md-left"><small>September 2019 - Present</small></h6>
                                    <p class="text-center text-md-left mr-3 ml-3 ml-md-0 mr-md-0">Field of study: Computer Science</p>
                                    <hr />
                                    <h6 class="mb-0 text-center text-md-left">Aurora High School - <em>OSSD</em></h6>
                                    <h6 class="text-center text-md-left"><small>September 2017 - June 2019</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="right-section" class="col-12 col-md-3">
                        <div class="row">
                            <div class="col-12 pr-0 pl-0">
                                <img class="img-fluid d-none d-md-block" src="<?php echo $img_href; ?>">
                            </div>
                        </div>
                        <div class="row bg-right-1">
                            <div class="col-12 d-none d-md-block pb-4 pr-0 pl-0">
                                <h4 class="text-center mt-4">About Me</h4>
                                <p class="text-center mr-3 ml-3"><?php echo $about_text; ?></p>
                            </div>
                        </div>
                        <div class="row bg-right-2">
                            <div id="about-me" class="col-12 pb-4 pr-0 pl-0">
                                <h4 class="text-center mt-4">Technical Skills</h4>
                                <h5 class="text-center mt-0 mb-0 mr-4 ml-4"><small>Python, Java, Javascript, Haskell, PHP, HTML, CSS, Bootstrap, BASH scripting, Unix, Slack, Discord, TeamGantt, Excel, Google Sheets, MySQL, Photoshop, Premiere Pro, Illustrator, Computer vision (including camera object detection), Git, WordPress</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
