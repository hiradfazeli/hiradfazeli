@extends('layouts.layout')

@section('content')
    <header class="w-full border-4 border-primary flex justify-between grow-1 items-center p-6">
        <h1 id="logo" class="font-bold text-3xl"><a href="#" class="">Hirad Fazeli</a></h1>
        @if (Route::has('login'))
            <section class="">
                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class=" ml-4">Register</a>
                    @endif
                @endauth
            </section>
        @endif
    </header>
    <main class="flex flex-wrap flex-1">
        <section class="flex flex-col flex-wrap grow-1 md:w-2/4 w-full">
            <section id="about"
                class="grow-1 border-4 border-primary flex justify-center items-center p-16 w-full
                                        hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer">
                <h2 class="text-2xl font-semibold">Who Am I?</h2>
            </section>

            <figure class="flex-1 border-4 border-primary flex justify-center items-stretch p-0">
                <img src="./assets/img/ukraine.png" alt="Hirad Fazeli" class="w-full flex-1 h-full object-cover" />
            </figure>
        </section>

        <section class="flex items-stretch flex-wrap flex-1 md:w-2/4 w-full">
            <section id="projects"
                class="flex grow-1 justify-center items-center p-16 border-4 border-primary w-2/4 float-left hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer">
                <h2 class="text-2xl font-semibold">Projects</h2>
            </section>

            <section id="work"
                class="flex grow-1 justify-center items-center p-16 border-4 border-primary w-2/4 float-right hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer">
                <h2 class="text-2xl font-semibold">Work Experience</h2>
            </section>

            <section id="education"
                class="flex grow-1 justify-center items-center p-16 border-4 border-primary w-2/4 float-left hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer">
                <h2 class="text-2xl font-semibold">Education & Certifications</h2>
            </section>

            <section
                class="flex grow-1 justify-center p-0 border-4 border-primary w-2/4 float-right flex-wrap items-stretch ">
                <a class="p-4 flex-1 flex justify-center items-center hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer"
                    href="https://www.linkedin.com/in/hiradfazeli/" target="_blank">
                    <i class="fa-brands fa-linkedin-in fa-4x"></i>
                </a>
                <a class="p-4 flex-1 flex justify-center items-center hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer"
                    href="https://github.com/hiradfazeli" target="_blank">
                    <i class="fa-brands fa-github fa-4x"></i>
                </a>
                <a class="p-4 flex-1 flex justify-center items-center hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer"
                    href="https://twitter.com/HiradFazeli" target="_blank">
                    <i class="fa-brands fa-twitter fa-4x"></i>
                </a>
                <a class="p-4 flex-1 flex justify-center items-center hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer"
                    href="https://www.facebook.com/thisishiradfazeli" target="_blank">
                    <i class="fa-brands fa-facebook fa-4x"></i>
                </a>
                <a class="p-4 flex-1 flex justify-center items-center hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer"
                    href="https://instagram.com/hirad_fazeli" target="_blank">
                    <i class="fa-brands fa-instagram fa-4x"></i>
                </a>
                <a class="p-4 flex-1 flex justify-center items-center hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer"
                    href="mailto: hirad.fazeli94@gmail.com">
                    <i class="fa-solid fa-envelope fa-4x"></i>
                </a>
            </section>

            <section id="contact"
                class="flex grow-1 justify-center items-center p-16 border-4 border-primary w-full float-left hover:transition-colors hover:bg-primary hover:text-secondary hover:cursor-pointer">
                <h2 class="text-2xl font-semibold">Contact Me</h2>
            </section>

            <section id="popup"
                class="bg-primary opacity-90 h-full hidden fixed inset-y-0 right-0 z-10 text-secondary overflow-y-scroll text-xl md:w-2/4 w-full">
                <div id="exit" class="absolute top-8 left-2/4 z-20 mx-auto">
                    <div
                        class="relative right-2/4 px-4 m-4 border-4 border-transparent hover:border-secondary active:bg-secondary active:text-primary">
                        <i class="fa-solid fa-xmark fa-4x"></i>
                    </div>
                </div>
                <article id="aboutPage" class="popItem hidden relative top-12 mx-auto mt-20 w-4/5 py-4 text-left">
                    <h2 class="text-2xl font-semibold">Who Am I?</h2>
                    <br>
                    <ul class="leading-10 list-none">
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">My Personal Info</h3>
                            <ul class="sublist list-none ml-10">
                                <li>
                                    <p class="not-italic leading-10">
                                        I'm a web developer with IT background who is in business field too.
                                        Below you can get familiar with me:
                                    </p>
                                    <br>
                                </li>
                                <li>Date of Birth: Oct 31, 1994</li>
                                <li>Sex: Male</li>
                                <li>Marital Status: Single</li>
                                <li>Country of Origin: Iran</li>
                                <li>Country of residence: Georgia</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Languages I Speak</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Farsi</li>
                                <li>English</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Skills I Have</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Web Design & Development</li>
                                <li>Business</li>
                                <li>Computer Networking</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">I'm Interested in</h3>
                            <ul class="sublist list-none ml-10">
                                <li>The Great Steve Jobs</li>
                                <li>Blockchain</li>
                                <li>Social networking</li>
                                <li>Books</li>
                                <li>Comic Book Movies</li>
                                <li>Learning</li>
                            </ul>
                        </li>
                    </ul>
                </article>
                <article id="projectsPage"
                    class="popItem popItem hidden relative top-12 mx-auto mt-20 w-4/5 py-4 text-left">
                    <h2 class="text-2xl font-semibold"><a href="https://github.com/hiradfazeli?tab=repositories"
                            target="_blank">My Projects</a></h2>
                </article>
                <article id="workPage" class="popItem popItem hidden relative top-12 mx-auto mt-20 w-4/5 py-4 text-left">
                    <h2 class="text-2xl font-semibold">Work Experience</h2>
                    <br>
                    <ul class="list leading-10 list-none">
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Parsonline / HiWeb Internet Service Provider (ISP)</h3>
                            <ul class="sublist list-none ml-10">
                                <li>NOC-Fixed Engineer · Full-time</li>
                                <li>October 2019 - July 2021 · 1 yr 10 mos</li>
                                <li>Tehran, Iran</li>
                                <li>
                                    <h4 class="text-lg font-medium">Tasks / Responsibilities</h4>
                                    <ul class="list-none ml-10">
                                        <li>Configuring, monitoring, maintaining and troubleshooting Pars Online Network
                                        </li>
                                        <li>Troubleshooting disconnections and disorders over COs in different cities</li>
                                        <li>Managing changes of the network</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">AfraRasa Internet Service Provider (ISP)</h3>
                            <ul class="sublist list-none ml-10">
                                <li>NOC Engineer · Full-time</li>
                                <li>March 2018 - June 2019 · 1 yr 4 mos</li>
                                <li>Tehran, Iran</li>
                                <li>
                                    <h4 class="text-lg font-medium">Tasks / Responsibilities</h4>
                                    <ul class="list-none ml-10">
                                        <li class="ml-10">Managing AAA server (IBSng)</li>
                                        <li class="ml-10">Managing CRM (PARTAC CRM)</li>
                                        <li class="ml-10">Monitoring and maintaining network availability</li>
                                        <li class="ml-10">The LAN Administration of HQ Office</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">AdminPortal</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Instructor · Contract</li>
                                <li>Feb 2018 - Apr 2018 · 3 mos</li>
                                <li>Tehran, Iran</li>
                                <li>
                                    <h4 class="text-lg font-medium">Tasks / Responsibilities</h4>
                                    <ul class="list-none ml-10">
                                        <li>Producing Video Training material (Wireshark Network Monitoring Software)</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Shabakeh Rasaneh Tehran Internet Service Provider (ISP)</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Technical Support · Full-time</li>
                                <li>October 2017 - January 2018 · 4 mos</li>
                                <li>Tehran, Iran</li>
                                <li>
                                    <h4 class="text-lg font-medium">Tasks / Responsibilities</h4>
                                    <ul class="list-none ml-10">
                                        <li>Member of Call Center team</li>
                                        <li>Answering subscribers’ calls and resolving their Internet connection issues on
                                            the phone</li>
                                        <li>Network monitoring</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Kavosh Group</h3>
                            <ul class="sublist list-none ml-10">
                                <li>ADSL Intallation Technician · Full-time</li>
                                <li>Jun 2015 - Jan 2016 · 8 mos</li>
                                <li>Tehran, Iran</li>
                                <li>
                                    <h4 class="text-lg font-medium">Tasks / Responsibilities</h4>
                                    <ul class="list-none ml-10">
                                        <li>Installation and delivery of ADSL Internet at subscribers’ locations</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </article>
                <article id="educationPage"
                    class="popItem popItem hidden relative top-12 mx-auto mt-20 w-4/5 py-4 text-left">
                    <h2 class="text-2xl font-semibold">Education & Certifications</h2>
                    <br>
                    <ul class="list leading-10 list-none">
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">HTML</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued March 2022 by Codecademy</li>
                                <li>
                                    <a href="https://www.codecademy.com/profiles/HiradFazeli/certificates/9eb0741e5ebef1f9f58a53bfac67d3a7"
                                        target="_blank">Show Credential</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">JavaScript</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued February 2022 by Codecademy</li>
                                <li><a href="https://www.codecademy.com/profiles/HiradFazeli/certificates/705dcb15de0da4dd9d9fc4f3274b430e"
                                        target="_blank">Show Credential</a></li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Executive Master of Business Administration (MBA)</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued November 2020 by Mahan Business School</li>
                                <li>Credential ID 1605840</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">C# Programming Language</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued September 2019 by Laitec</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Cisco Certified Network Professional (CCNP) Route 300-101</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued April 2017 by CanDo</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Microsoft Certified Solutions Expert (MCSE) 2012 R2</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued September 2016 by CanDo</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Kerio Control V9.0 Bootcamp</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued March 2016 by CanDo</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">Cisco Certified Network Associate (CCNA) Routing and Switching
                                640-802</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued May 2014 by CyberTech</li>
                            </ul>
                        </li>
                        <li class="mb-16">
                            <h3 class="text-xl font-medium">CompTIA Network+</h3>
                            <ul class="sublist list-none ml-10">
                                <li>Issued July 2013 by CyberTech</li>
                            </ul>
                        </li>
                    </ul>
                </article>
                @include('contact.index')
            </section>
        </section>
    </main>

    <footer class="w-full border-4 border-primary clear-both grow-1 justify-center items-center">
        <p class="copyright font-medium  py-6">&copy;2022 Hirad Fazeli. All rights not reserved!</p>
    </footer>
@endsection
