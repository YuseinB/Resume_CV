<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusein Boshnakov - Resume</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Image/canvas2.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body>
    <div id="resume" class="container">
        <div class="block1">
            <div class="header">
                <img id="face" src="Image/canvas2.png" alt="">
                <div class="heading">
                    <h1>Yusein Boshnakov</h1>
                    <h6>DEVELOPER</h6>
                </div>
            </div>

            <div class="body">
                <h5>Profile</h5>
                <p>Entrepreneur with a passion for technology and networking.
                    Founded and managed an ISP (Internet Service Provider)
                    business for over 15 years. Proficient in network setup and maintenance,
                    including cable networks and wireless solutions (WLAN, PTP, PTMP)
                    Skilled in Linux and Windows operating systems.
                    Experience with various programming languages and technologies: Python, PHP, CSS, HTML, JS, GIT, Docker , AWS.
                    Extensive knowledge of networking protocols:
                    LAN, VLAN, IP, DNS, GPON, SSH, Telnet, FTP.
                    Proficient in setting up and managing Cisco, Linux and MikroTik servers.
                    Implemented surveillance systems. I enjoy finding innovative ways to solve complex
                    technical problems and optimize performance and efficiency.
                </p>
                <p>Furthermore, I am a proud parent of two wonderful children,
                    one of whom has special needs. My role as a parent to a child with
                    Autism enriches my perspective and motivates me to work remotely,
                    allowing me to balance my professional and personal responsibilities.
                    I am always eager to learn new skills, share insights,
                    and collaborate with like-minded individuals who value excellence and creativity.
                </p>

                <h5>Courses</h5>
                <p>Python, OOP, Web, Framework at Sotware University - SoftUni
                    <span>Apr, 2022 - Aug, 2023</span>
                </p>

                <p>HTML & CSS at Sotware University - SoftUni
                    <span>Apr, 2022 - Nov, 2023</span>
                </p>
                <p>JS Front-End at Sotware University - SoftUni
                    <span>Apr, 2022 - Present</span>
                </p>

                <h5>Employment History</h5>
                <p>Choreographer
                    <span>2005 - Present</span>
                </p>
                <p>Manager at SS Sistems ltd
                    <span>2010 - Present</span>
                </p>

                <h5>Education</h5>
                <p>School, High
                    <span>Jan, 1996</span>
                </p>
                <p>Secondary Education, GENERAL SECONDARY SCHOOL, Sofia
                    <span>Apr, 2022 - Present</span>

                    <span>Current Studies: Software Engineering at SoftUni, Sofia
                        Pursuing a degree in Software Engineering, currently in
                        the second year</span>
                </p>

            </div>

        </div>
        <div class="block2">
            <h5>Details</h5>
            <p>Ribnovo, 2967</p>
            <p>Bulgaria</p>
            <p>+359 89 757 5927</p>
            <p>ribanec(at)gmail.com</p>

            <h5>Skills</h5>
            <p>Python</p>
            <div class="hr" style="width: 80%;"></div>
            <p>JavaScript</p>
            <div class="hr" style="width: 60%;"></div>
            <p>HTML & CSS</p>
            <div class="hr" style="width: 80%;"></div>
            <p>PHP (Scripting Language)</p>
            <div class="hr" style="width: 50%;"></div>
            <p>Analytical Thinking</p>
            <div class="hr" style="width: 80%;"></div>
            <p>Networks</p>
            <div class="hr" style="width: 80%;"></div>
            <p>Electronics</p>
            <div class="hr" style="width: 80%;"></div>
            <p>Linux</p>
            <div class="hr" style="width: 10%;"></div>
            <p>Docker (Software)</p>
            <div class="hr" style="width: 5%;"></div>
            <p>AWS</p>
            <div class="hr" style="width: 5%;"></div>

            <h5>Links</h5>
            <a href="https://github.com/YuseinB">
                <p>GitHub</p>
            </a>
            <p>Certificate:</p>
            <a href="https://softuni.bg/certificates/details/182446/e36caab1">
                <p>Python Web Framework</p>
            </a>
            <a href="https://softuni.bg/certificates/details/169547/6228cb03">
                <p>Python OOP </p>
            </a>
            <a href="https://softuni.bg/certificates/details/191076/c0aef75c">
                <p>HTML & CSS </p>
            </a>

            <h5>Languages</h5>
            <p>Bulgarian</p>
            <div class="hr" style="width: 80%;"></div>
            <p>English</p>
            <div class="hr" style="width: 5%;"></div>


            <h5>Hobbies</h5>
            <p>In addition to my professional experience, I also play the synthesizer.
                I find solace and inspiration in music, often combining it with my coding projects to create harmonious and creative results.
            </p>
        </div>
    </div>
    <button id="downloadBtn">Download PDF</button>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            document.getElementById('resume').style.borderRadius = '0';
            let element = document.getElementById('resume');
            html2pdf(element);
        });

    </script>

</html>
