@extends('layout.app')

@section('section')
    <header>
        <h1>About Me</h1>
    </header>
    <main>
        <section class="bio">
            <h2>Background</h2>
            <p> I come from a diverse educational background that has shaped my perspective. With a Bachelor of Science in
                Computer Science, I've delved deep into the world of technology, honing my skills in coding and
                problem-solving. My journey through an English medium school and college has equipped me with a strong
                command over language, enabling effective communication and a knack for articulation.
            </p>
        </section>
        <div class="skills-education">
            <section class="skills">
                <h2>Skills</h2>
                <ul>
                    <li>HTML/CSS</li>
                    <li>JavsScript</li>
                    <li>php</li>
                    <li>Laravel Basics</li>
                    <li>mySQL</li>
                </ul>
            </section>
            <section class="education">
                <h2>Education</h2>
                <ul>
                    <li><b>LEADING UNIVERSITY — SYLHET, BANGLADESH</b><br>
                        Bachelor of Science, Computer Science & Engineering, 2023<br>
                        CGPA: 3.66</li>
                        <li><b>THE SYLHET KHAJANCHIBARI INT. SCHOOL & COLLEGE — SYLHET,
                        BANGLADESH</b><br>
                        Higher Secondary Certificate, Science, 2018<br>
                        GPA: 3.75</li>

                    <li><b>SUNNY HILL INT. SCHOOL & COLLEGE — SYLHET, BANGLADESH</b><br>
                        Secondary School Certificate, Science, 2016<br>
                        GPA: 4.39</li>
                    <!-- Add more education details -->
                </ul>
            </section>
        </div>
        <div class="exp-certificate">
            <section class="experience">
                <h2>Work Experience</h2>
                <ul>
                    <li><b>1. FREELANCE CONTENT WRITER, STAFF ASIA</b><br>

                        <small>1st February, 2022 – 31st August, 2022</small><br>
                        - Worked in collaboration with a knowledgeable team of expert writers.<br>
                        - Kept fully up-to-date with emerging technologies, platforms, and best
                        practices to meet client objectives.<br>
                        - Edited existing content to better align with brand style guides and provide
                        constructive feedback on content ideas to other writers.<br>
                        - In-depth research into topics to write clear, concise, and accurate copy.<br>
                        - Managed own workload efficiently to produce high-quality work within
                        agreed deadlines.</li>

                        <li><b>2. CONTENT WRITER, TIMES IT</b><br>

                            <small>1st March, 2019 – 31st December, 2021</small><br>
                            - Oversaw a team of writers and improved their development while
                            providing necessary training.<br>
                            - Solved industry related issues and helped the company to make a profit of
                            over $1000 in a single month.<br>
                            - Communicated complex information in a clear and easy to understand
                            manner in How-to guide articles.<br>
                            - Updated existing articles according to industry best practices to engage
                            users and attract more traffic.<br>
                            - Thoroughly researched into topics and gained deep understanding of topics
                            before creating desired content.</li>
                </ul>
            </section>
            <section class="certifications">
                <h2>Certifications</h2>
                <ul>
                    <li><b>1. Bachelor of Science (CSE), Leading University, 2023</b></li><br>
                    <img class="img-certificate" src="{{asset('image/versity.jpeg')}}" alt="">
                    <li><br><b>2. Secondary School Certificate, Sunny Hill School, 2016</b></li><br>
                    <img class="img-certificate" src="{{asset('image/ssc.jpeg')}}" alt="">
                </ul>
            </section>
        </div>
    </main>
@endsection
