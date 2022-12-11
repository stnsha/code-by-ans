@extends('layouts.public')
@section('title', 'Code by ANS')
@section('content')
<div class="responsive">
    <table class="table align-middle">
        <tr>
            {{-- <td class="w-25"><img src="{{ asset('assets/img/avatar/ans01.jpg') }}" alt="code-by-ans"
                    class="rounded rounded-circle mx-auto d-block" width="250px">
            </td> --}}
            <td class="text-center" colspan="5">
                <div class="d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('assets/img/avatar/ans01.jpg') }}" alt="code-by-ans"
                            class="rounded rounded-circle mx-auto d-block" width="200px">
                    </div>
                    <div class="align-self-center ms-2">
                        <h3>Siti Anasuha Binti Rosli</h3>
                        <h6>Junior Developer at Far Digital Ventures</h6>
                        <div>
                            <span class="mx-2 align-middle">+6011 5640 3061</span>
                            <span>|</span>
                            <span class="mx-2 align-middle">contact@codebyans.com</span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th colspan="5" class="text-center">Overview</th>
        </tr>
        <tr>
            <td colspan="5" class="text-center">A full-stack web developer with hands-on experience in both back-end and front-end
                development,
                including User
                Acceptance Testing (UAT). A standalone web developer developed multiple webites from scratch.
                Enthusiastic in gaining more knowledge to make your ideas come true.</td>
        </tr>
        <tr>
            <th colspan="5" class="text-center">Education</th>
        </tr>
        <tr>
            <td colspan="5">
                <h4>Universiti Teknologi Malaysia (UTM), Johor</h4>
                <h6>Bachelor of Computer Science, Software Engineering</h6>
                <div>
                    <span>CGPA: 3.45</span>
                    <span class="ms-2">School of 2022</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <h4>Kolej Universiti Poly-Tech MARA (KUPTM), Kuala Lumpur</h4>
                <h6>Diploma in Computer Science</h6>
                <div>
                    <span>CGPA: 3.61</span>
                    <span class="ms-2">School of 2018</span>
                </div>
            </td>
        </tr>
        <tr>
            <th colspan="5" class="text-center">Relevant skills</th>
        </tr>
        <tr>
            <td colspan="5" class="text-center align-middle">
                <span class="fs-small me-2 text-white">References</span>
                <span class="badge rounded-md bg-beginner m-1">Beginner</span>
                <span class="badge rounded-md bg-intermediate m-1">Intermediate</span>
                <span class="badge rounded-md bg-advanced m-1">Advanced</span>
            </td>
        </tr>
        <tr class="text-center">
            <th>Programming Languages</th>
            <th>Frameworks</th>
            <th>Databases</th>
            <th>Tools</th>
            <th>Others</th>
        </tr>
        <tr class="text-center">
            <td class="w-20">
                <span class="badge rounded-md bg-beginner m-1">C#</span>
                <span class="badge rounded-md bg-beginner m-1">C++</span>
                <span class="badge rounded-md bg-intermediate m-1">Java</span>
                <span class="badge rounded-md bg-advanced m-1">PHP</span>
            </td>
            <td class="w-20">
                <span class="badge rounded-md bg-beginner m-1">.NET</span>
                <span class="badge rounded-md bg-intermediate m-1">Livewire</span>
                <span class="badge rounded-md bg-advanced m-1">Laravel</span>
                <span class="badge rounded-md bg-advanced m-1">TailwindCSS</span>
                <span class="badge rounded-md bg-advanced m-1">Bootstrap</span>
            </td>
            <td class="w-20">
                <span class="badge rounded-md bg-beginner m-1">SQL Server</span>
                <span class="badge rounded-md bg-advanced m-1">MySQL</span>
            </td>
            <td class="w-20">
                <span class="badge rounded-md bg-beginner m-1">Docker</span>
                <span class="badge rounded-md bg-intermediate m-1">Git</span>
                <span class="badge rounded-md bg-intermediate m-1">SourceTree</span>
                <span class="badge rounded-md bg-advanced m-1">phpMyAdmin</span>
            </td>
            <td class="w-20">
                <span class="badge rounded-md bg-intermediate m-1">FTP Server</span>
                <span class="badge rounded-md bg-advanced m-1">Web Hosting</span>
            </td>
        </tr>
        <tr>
            <th colspan="5" class="text-center">Working Experience</th>
        </tr>
        <tr>
            <td colspan="5">
                <section>
                    <div class="container py-5">
                        <div class="main-timeline">
                            <div class="timeline left">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <h5>Junior Developer, Far Digital Ventures</h5>
                                        <h6>March 2022 - Present</h6>
                                        <ul>
                                            <li>Responsible for the front-end development of an internal website.
                                                Transformed interface designs from Figma, to an
                                                actual responsive web design.
                                            </li>
                                            <li>Monitored performances of WordPress sites, by updating plugins to latest
                                                versions and optimising leverage browsing
                                                caching.</li>
                                            <li>Automated daily reports from Facebook, and TikTok's API resources on
                                                Google Sheets.</li>
                                        </ul>
                                        <div class="text-center">
                                            <span class="badge rounded-pill bg-primary">PHP</span>
                                            <span class="badge rounded-pill bg-primary">Laravel</span>
                                            <span class="badge rounded-pill bg-primary">Tailwind CSS</span>
                                            <span class="badge rounded-pill bg-primary">Livewire</span>
                                            <span class="badge rounded-pill bg-primary">MySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline right">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <h5>Back-End Developer, SoftwareQ <span
                                                class="badge rounded-pill bg-info ms-2">Internship</span></h5>
                                        <h6>October 2020 - February 2021</h6>
                                        <ul>
                                            <li>Involved directly with Learning Management System (LMS) project.
                                            </li>
                                            <li>Responsible to write web services and APIs used by front-end
                                                developers</li>
                                        </ul>
                                        <div class="text-center">
                                            <span class="badge rounded-pill bg-primary">C#</span>
                                            <span class="badge rounded-pill bg-primary">ASP.NET Core</span>
                                            <span class="badge rounded-pill bg-primary">.NET Framework</span>
                                            <span class="badge rounded-pill bg-primary">Swagger API</span>
                                            <span class="badge rounded-pill bg-primary">Rest APIs</span>
                                            <span class="badge rounded-pill bg-primary">SQL Server</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline left">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <h5>Web Developer, Jamu Ratu Malaya Negeri Sembilan (JRMNS) <span
                                                class="badge rounded-pill bg-orange ms-2">Part-time</span></h5>
                                        <h6>May 2020 - October 2020</h6>
                                        <ul>
                                            <li>Developed Stockist-Agents web-based system.
                                            </li>
                                            <li>Trained and supervised multiple team members for ongoing
                                                reformatting/quality control projects.</li>
                                        </ul>
                                        <div class="text-center">
                                            <span class="badge rounded-pill bg-primary">PHP</span>
                                            <span class="badge rounded-pill bg-primary">CSS</span>
                                            <span class="badge rounded-pill bg-primary">JavaScript</span>
                                            <span class="badge rounded-pill bg-primary">jQuery</span>
                                            <span class="badge rounded-pill bg-primary">MySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline right">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <h5>Web Developer, Jamu Ratu Malaya Negeri Sembilan (JRMNS) <span
                                                class="badge rounded-pill bg-orange ms-2">Part-time</span><a
                                                href="https://github.com/stnsha/employee-management-system"
                                                class="ms-2 fs-2 align-middle"><i class="fa-brands fa-github"></i></a>
                                        </h5>

                                        <h6>January 2020 - February 2020</h6>
                                        <ul>
                                            <li>Developed Employee Management web-based system.
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <span class="badge rounded-pill bg-primary">PHP</span>
                                            <span class="badge rounded-pill bg-primary">CSS</span>
                                            <span class="badge rounded-pill bg-primary">JavaScript</span>
                                            <span class="badge rounded-pill bg-primary">jQuery</span>
                                            <span class="badge rounded-pill bg-primary">MySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline left">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <h5>Web Developer, Jamu Ratu Malaya Negeri Sembilan (JRMNS) <span
                                                class="badge rounded-pill bg-orange ms-2">Part-time</span>
                                        </h5>

                                        <h6>April 2018 - October 2018</h6>
                                        <ul>
                                            <li>Responsible for managing e-commerce websites such as inspecting landing
                                                pages, product information, checkout options,
                                                and all other pertinent website-related systems to ensure visual appeal,
                                                accuracy, and ease of use.
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <span class="badge rounded-pill bg-primary">WordPress</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline right">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <h5>Web Developer, Proton Shah Alam <span
                                                class="badge rounded-pill bg-info ms-2">Internship</span>
                                        </h5>

                                        <h6>October 2017 - January 2018</h6>
                                        <ul>
                                            <li>Developed Vehicle Measurement web-based system specifically for Testing
                                                & Development Department, Vehicle Function
                                                group.
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <span class="badge rounded-pill bg-primary">PHP</span>
                                            <span class="badge rounded-pill bg-primary">CSS</span>
                                            <span class="badge rounded-pill bg-primary">JavaScript</span>
                                            <span class="badge rounded-pill bg-primary">jQuery</span>
                                            <span class="badge rounded-pill bg-primary">MySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </td>
        </tr>
    </table>
</div>
@endsection