<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Bharat Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    <!------------- NAVIGATION BAR ------------->
    <nav class="navbar">
        <div class="navbar-container container">
            <ul class="menu-items">
                <li><a class="nav-link active" href="index.php">Home</a></li>
                <li><a class="nav-link active" href="#about">About</a></li>
                <li><a class="nav-link active" href="#contact">Contact</a></li>
                <li><a class="nav-link active" href="login.php">Admin</a></li>
                <li><a class="nav-link active" href="result.php">Result</a></li>
                <li><a class="nav-link active" href="addVoter.php">Voters Register</a></li>
            </ul>
            <h1 class="logo">E-Bharat</h1>
        </div>
    </nav>


    <!------------- HERO SECTION ------------->
    <section id="hero">
        <div id="hero-container">

            <div id="bg">
                <div id="color-overlay"></div>
            </div>

            <div class="sitetitle">
                <h1 id="hero-title">Welcome to E-Bharat!</h1>
                <p id="hero-content">
                    We are thrilled to have you as part of our democratic journey, where your voice matters. With
                    E-Bharat, we have revolutionized the way we participate in elections by bringing the power of
                    technology and convenience to your fingertips.
                    <br />
                    <br />
                    E-Bharat Voting System ensures the highest standards of security and privacy. We have implemented
                    robust encryption protocols and advanced authentication mechanisms to safeguard your information and
                    maintain the integrity of the voting process. Rest assured that your vote is anonymous, and your
                    personal data remains confidential.
                </p>
                <br />
                <br />
                <a href="Voters_Login.php" class="hero-button">Vote Now!</a>
            </div>
        </div>
    </section>

    <!------------- ABOUT US SECTION ------------->
    <section id="about">
        <div class="main">
            <img src="img/about.png" alt="Ballot box">
            <div class="about-text">
                <h1>Choose Wisely!</h1>
                <p>Through E-Bharat, we strive to make the electoral process more inclusive and accessible to all.
                    Whether you are a seasoned voter or a first-time participant, our user-friendly interface and
                    intuitive design will guide you seamlessly through the voting journey. We prioritize transparency
                    and have incorporated features that allow you to verify your vote, track the progress of the
                    election, and witness the democratic process unfold in real-time.
                    <br />
                    <br />
                    Thank you for choosing E-Bharat as your trusted e-voting partner. Together, let us embark on this
                    exciting digital voyage and create a future where every citizen's voice is heard and every vote
                    matters.
                </p>
                <br />
                <br />
                <a href="reg2.php" class="about-button">Vote Now!</a>
            </div>
        </div>
    </section>

    <!------------- CONTACT US SECTION ------------->
    <section id="contact">
        <div class="section-header">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="material-icons">home</i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Address</h4>
                            <p>ABES Institute of Technology<br /> Ghaziabad,Uttar Pradesh<br /></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="material-icons">phone</i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Phone</h4>
                            <p>+91 94520-52586</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="material-icons">email</i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p>prabhatsinghc00@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="" id="contact-form">
                        <h2>Send Message</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="">
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="">
                            <span>Email</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name=""></textarea>
                            <span>Type your Message...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Send" name="">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!------------- FOOTER ------------->

</body>

</html>