
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayonle | Full-Stack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a0a0a] text-white antialiased">


<header class="relative z-50 border-b border-white/10 bg-[#0a0a0a] px-5 sm:px-6">
    <div class="mx-auto flex min-h-[76px] max-w-7xl items-center justify-between gap-4">

        <!-- Logo -->
        <a href="#home" class="shrink-0 text-2xl font-bold tracking-tight text-white">
            Bayonle<span class="text-orange-500">.</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden items-center gap-6 text-sm text-gray-300 lg:flex">
            <a href="#home" class="transition hover:text-orange-500">Home</a>
            <a href="#about" class="transition hover:text-orange-500">About</a>
            <a href="#skills" class="transition hover:text-orange-500">Skills</a>
            <a href="#projects" class="transition hover:text-orange-500">Projects</a>
            <a href="#services" class="transition hover:text-orange-500">Services</a>


<a
    href="{{ asset('bayonle-cv.pdf') }}"
    download="Bayonle-CV.pdf"
    class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-orange-500 px-5 py-3 text-sm font-semibold text-orange-500 transition hover:bg-orange-500 hover:text-white sm:w-auto sm:px-6 sm:text-base"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5 shrink-0"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="1.8"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 3v12m0 0 4-4m-4 4-4-4M5 17v3h14v-3"
        />
    </svg>
    Download CV
</a>


        </nav>

        <!-- Header Actions -->
        <div class="flex shrink-0 items-center gap-3">

            <button
                id="theme-toggle"
                type="button"
                class="rounded-full border border-white/10 px-3 py-2 text-xs font-medium text-white transition hover:border-orange-500 hover:text-orange-500 sm:px-4 sm:text-sm"
                aria-label="Switch to light mode"
            >
                ☀ <span class="hidden sm:inline">Light mode</span>
                <span class="sm:hidden">Theme</span>
            </button>

            <a href="#contact"
               class="hidden rounded-lg bg-orange-500 px-4 py-3 text-sm font-semibold text-black transition hover:bg-orange-400 sm:inline-flex">
                Let's Talk
            </a>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-toggle"
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 text-white transition hover:border-orange-500 lg:hidden"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
            >
                <svg id="menu-open-icon" xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

                <svg id="menu-close-icon" xmlns="http://www.w3.org/2000/svg"
                     class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="m6 6 12 12M18 6 6 18"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="mx-auto hidden max-w-7xl pb-5 lg:hidden">
        <nav class="flex flex-col gap-1 rounded-xl border border-white/10 bg-[#111111] p-3">
            <a href="#home" class="rounded-lg px-4 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-orange-500">Home</a>
            <a href="#about" class="rounded-lg px-4 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-orange-500">About</a>
            <a href="#skills" class="rounded-lg px-4 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-orange-500">Skills</a>
            <a href="#projects" class="rounded-lg px-4 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-orange-500">Projects</a>
            <a href="#services" class="rounded-lg px-4 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-orange-500">Services</a>

<a
    href="{{ asset('Bayonle-CV.pdf') }}"
    download="Bayonle-CV.pdf"
    class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-orange-500 px-5 py-3 text-sm font-semibold text-orange-500 transition hover:bg-orange-500 hover:text-white sm:w-auto sm:px-6 sm:text-base"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5 shrink-0"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="1.8"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 3v12m0 0 4-4m-4 4-4-4M5 17v3h14v-3"
        />
    </svg>
    Download CV
</a>

            <a href="#contact" class="mt-2 rounded-lg bg-orange-500 px-4 py-3 text-center text-sm font-semibold text-black transition hover:bg-orange-400">Let's Talk</a>
        </nav>
    </div>
</header>


    <main>

<section id="home" class="mx-auto grid min-h-[auto] max-w-7xl items-center gap-12 px-5 py-16 sm:px-6 sm:py-20 md:min-h-[75vh] md:grid-cols-2 md:gap-10 lg:gap-16">

    <!-- Hero Content -->
    <div class="min-w-0">

        <p class="mb-6 inline-flex max-w-full items-center gap-2 rounded-full border border-orange-500/30 px-3 py-2 text-xs text-orange-400 sm:px-4 sm:text-sm">
            <span class="h-2 w-2 shrink-0 rounded-full bg-orange-500"></span>
            Full-Stack Web Developer
        </p>

        <h1 class="max-w-2xl text-4xl font-bold leading-[1.12] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
            Building digital
            <span class="text-orange-500">experiences</span>
            that matter.
        </h1>

        <p class="mt-6 max-w-xl text-base leading-7 text-gray-400 sm:text-lg sm:leading-8">
            I build modern, responsive web applications and reliable
            backend systems that help businesses solve real problems.
        </p>

        <!-- Hero Buttons -->
        <div class="mt-8 flex flex-col gap-3 sm:mt-9 sm:flex-row sm:flex-wrap sm:gap-4">
            <a href="#projects"
               class="inline-flex min-h-12 items-center justify-center rounded-lg bg-orange-500 px-6 py-3 text-center font-semibold text-black transition hover:bg-orange-400">
                Explore My Work →
            </a>

            <a href="#contact"
               class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white/20 px-6 py-3 text-center font-semibold text-white transition hover:border-orange-500 hover:text-orange-500">
                Hire Me
            </a>
        </div>

        <!-- Technologies -->
        <div class="mt-8 flex flex-wrap gap-2 text-sm text-gray-400 sm:mt-10 sm:gap-3">
            <span class="rounded-md bg-white/5 px-3 py-2">Laravel</span>
            <span class="rounded-md bg-white/5 px-3 py-2">PHP</span>
            <span class="rounded-md bg-white/5 px-3 py-2">Vue.js</span>
            <span class="rounded-md bg-white/5 px-3 py-2">MySQL</span>
        </div>
    </div>

    <!-- Developer Code Card -->
    <div class="relative mx-auto w-full min-w-0 max-w-lg md:max-w-none">

        <div class="absolute inset-4 rounded-3xl bg-orange-500/10 blur-3xl sm:inset-0"></div>

        <div class="relative min-w-0 overflow-hidden rounded-2xl border border-white/10 bg-[#111111] p-5 shadow-2xl sm:p-8">

            <div class="mb-6 flex items-center gap-2 sm:mb-8">
                <span class="h-3 w-3 shrink-0 rounded-full bg-red-500"></span>
                <span class="h-3 w-3 shrink-0 rounded-full bg-yellow-500"></span>
                <span class="h-3 w-3 shrink-0 rounded-full bg-green-500"></span>
                <span class="ml-auto text-xs text-gray-500">developer.php</span>
            </div>

            <pre class="max-w-full overflow-x-auto text-xs leading-7 sm:text-sm sm:leading-8"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">Developer</span>
{
    <span class="text-purple-400">public string</span> $name = <span class="text-green-400">'Bayonle'</span>;

    <span class="text-purple-400">public array</span> $skills = [
        <span class="text-green-400">'Laravel'</span>,
        <span class="text-green-400">'Vue.js'</span>,
        <span class="text-green-400">'MySQL'</span>,
    ];

    <span class="text-purple-400">public function</span> build(): string
    {
        <span class="text-purple-400">return</span> <span class="text-green-400">'Ideas into reality.'</span>;
    }
}</code></pre>

            <div class="mt-6 border-t border-white/10 pt-5 sm:mt-8">
                <p class="text-sm text-gray-400">Current mission</p>
                <p class="mt-1 text-sm font-medium text-white sm:text-base">
                    Building useful things for the web.
                </p>
            </div>
        </div>
    </div>

</section>



<section id="about" class="border-t border-white/10 px-5 py-20 sm:px-6 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-12 md:grid-cols-2 md:items-center lg:gap-16">

        <!-- About text -->
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-500">
                About Me
            </p>

            <h2 class="mt-4 text-3xl font-bold leading-tight sm:text-4xl md:text-5xl">
                I build digital solutions
                that turn ideas into
                <span class="text-orange-500">reality.</span>
            </h2>

            <p class="mt-6 leading-8 text-gray-400">
                I'm Bayonle, a Full-Stack Web Developer focused on building
                modern websites, responsive user interfaces, and reliable
                backend systems. I enjoy taking ideas and turning them into
                useful digital experiences that solve real problems.
            </p>

            <p class="mt-4 leading-8 text-gray-400">
                Working with technologies such as Laravel, PHP, JavaScript,
                Vue.js, and MySQL, I build across the frontend and backend —
                from user-facing features to application logic, APIs, and
                database operations. I'm continuously improving my skills
                through hands-on projects and practical problem-solving.
            </p>

            <p class="mt-4 leading-8 text-gray-400">
                My goal is to help businesses bring their ideas online with
                solutions that are useful, responsive, and easy to maintain.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                <a href="#contact"
                   class="inline-flex min-h-12 items-center justify-center rounded-lg bg-orange-500 px-6 py-3 font-semibold text-black transition hover:bg-orange-400">
                    Let's Work Together <span class="ml-2" aria-hidden="true">→</span>
                </a>

                <a href="#projects"
                   class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white/15 px-6 py-3 font-semibold text-white transition hover:border-orange-500 hover:text-orange-400">
                    View My Work
                </a>
            </div>
        </div>

        <!-- Core strengths -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

            <article class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:border-orange-500/40 sm:p-7">
                <p class="text-3xl font-bold text-orange-500">01</p>
                <h3 class="mt-4 font-semibold">Problem Solving</h3>
                <p class="mt-2 text-sm leading-6 text-gray-400">
                    Turning requirements and ideas into practical web solutions.
                </p>
            </article>

            <article class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:border-orange-500/40 sm:p-7">
                <p class="text-3xl font-bold text-orange-500">02</p>
                <h3 class="mt-4 font-semibold">Responsive Experiences</h3>
                <p class="mt-2 text-sm leading-6 text-gray-400">
                    Building interfaces that adapt to mobile, tablet, and desktop.
                </p>
            </article>

            <article class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:border-orange-500/40 sm:p-7">
                <p class="text-3xl font-bold text-orange-500">03</p>
                <h3 class="mt-4 font-semibold">Backend Development</h3>
                <p class="mt-2 text-sm leading-6 text-gray-400">
                    Working with application logic, APIs, and database-driven features.
                </p>
            </article>

            <article class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:border-orange-500/40 sm:p-7">
                <p class="text-3xl font-bold text-orange-500">04</p>
                <h3 class="mt-4 font-semibold">Continuous Improvement</h3>
                <p class="mt-2 text-sm leading-6 text-gray-400">
                    Growing through hands-on projects, feedback, and consistent practice.
                </p>
            </article>

        </div>
    </div>
</section>


<section id="skills" class="border-t border-white/10 px-5 py-20 sm:px-6 sm:py-24">
    <div class="mx-auto max-w-7xl">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-500">
                My Toolkit
            </p>

            <h2 class="mt-4 text-3xl font-bold leading-tight sm:text-4xl md:text-5xl">
                The tools behind
                <span class="text-orange-500">my work.</span>
            </h2>

            <p class="mt-5 leading-8 text-gray-400">
                Technologies and tools I use to build responsive interfaces,
                develop backend functionality, work with databases, and
                connect applications to APIs.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

            <!-- Frontend -->
            <article class="group rounded-2xl border border-white/10 bg-[#111111] p-6 transition duration-300 hover:border-orange-500/50 sm:p-7">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-orange-500/20 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-6 w-6">
                            <rect x="3" y="4" width="18" height="16" rx="2"/>
                            <path d="M3 9h18M8 4v5"/>
                        </svg>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-orange-500">
                            01 / Interfaces
                        </p>
                        <h3 class="mt-1 text-lg font-bold text-white">Frontend</h3>
                    </div>
                </div>

                <p class="mt-5 text-sm leading-6 text-gray-400">
                    Building responsive, accessible and user-friendly web interfaces.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach (['HTML5', 'CSS3', 'JavaScript', 'Vue.js', 'Tailwind CSS'] as $skill)
                        <span class="rounded-lg border border-white/10 px-3 py-2 text-sm text-gray-300 transition hover:border-orange-500/40">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </article>

            <!-- Backend -->
            <article class="group rounded-2xl border border-white/10 bg-[#111111] p-6 transition duration-300 hover:border-orange-500/50 sm:p-7">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-orange-500/20 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-6 w-6">
                            <ellipse cx="12" cy="5" rx="8" ry="3"/>
                            <path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>
                        </svg>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-orange-500">
                            02 / Application Logic
                        </p>
                        <h3 class="mt-1 text-lg font-bold text-white">Backend</h3>
                    </div>
                </div>

                <p class="mt-5 text-sm leading-6 text-gray-400">
                    Developing server-side features, API endpoints and application logic.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach (['PHP', 'Laravel', 'REST APIs', 'Authentication'] as $skill)
                        <span class="rounded-lg border border-white/10 px-3 py-2 text-sm text-gray-300 transition hover:border-orange-500/40">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </article>

            <!-- Tools and data -->
            <article class="group rounded-2xl border border-white/10 bg-[#111111] p-6 transition duration-300 hover:border-orange-500/50 sm:p-7 md:col-span-2 lg:col-span-1">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-orange-500/20 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-6 w-6">
                            <path d="M12 3 3 8l9 5 9-5-9-5Z"/>
                            <path d="m3 12 9 5 9-5M3 16l9 5 9-5"/>
                        </svg>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-orange-500">
                            03 / Workflow
                        </p>
                        <h3 class="mt-1 text-lg font-bold text-white">Tools & Data</h3>
                    </div>
                </div>

                <p class="mt-5 text-sm leading-6 text-gray-400">
                    Managing data, testing requests, collaborating on code and planning interfaces.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">
                    @foreach (['MySQL', 'Git', 'GitHub', 'Postman', 'Figma'] as $skill)
                        <span class="rounded-lg border border-white/10 px-3 py-2 text-sm text-gray-300 transition hover:border-orange-500/40">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </article>

        </div>
    </div>
</section>




<section id="projects" class="border-t border-white/10 px-5 py-20 sm:px-6 sm:py-24">
    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-500">
                    Featured Work
                </p>

                <h2 class="mt-4 text-3xl font-bold md:text-5xl">
                    A project I'm proud of.
                </h2>

                <p class="mt-5 max-w-2xl leading-8 text-gray-400">
                    I build practical digital experiences that solve real
                    problems. Here's what I'm currently working on.
                </p>
            </div>

            <a href="https://github.com/bayonle2022"
               target="_blank"
               rel="noopener noreferrer"
               class="inline-flex w-fit items-center gap-2 text-sm font-semibold text-orange-400 transition hover:text-orange-300">
                Explore GitHub <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="mt-12">
            <article class="group overflow-hidden rounded-2xl border border-white/10 bg-[#111111] transition duration-300 hover:border-orange-500/50">

                <!-- Project screenshot -->
                <div class="relative overflow-hidden border-b border-white/10 bg-[#0a0a0a]">

<img
    src="{{ asset('images/projects/explore-ondo.png') }}"
    alt="Explore Ondo tourism website preview"
    class="block h-auto max-h-[420px] w-full object-contain object-top transition duration-500 group-hover:scale-[1.01]"
    loading="lazy"
>


                    <div class="hidden aspect-[16/9] w-full items-center justify-center p-6 text-center">
                        <div>
                            <p class="text-lg font-bold text-white">Explore <span class="text-orange-500">Ondo</span></p>
                            <p class="mt-2 text-sm text-gray-400">
                                Add your screenshot to public/images/projects/explore-ondo.png
                            </p>
                        </div>
                    </div>

                    <span class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/80 px-3 py-1.5 text-xs font-medium text-orange-400 backdrop-blur">
                        Featured Project
                    </span>
                </div>

                <!-- Project details -->
                <div class="grid gap-8 p-6 sm:p-8 lg:grid-cols-[1fr_auto] lg:items-end">
                    <div>
                        <p class="text-sm font-medium text-orange-500">
                            01 / Tourism Platform
                        </p>

                        <h3 class="mt-3 text-2xl font-bold text-white sm:text-3xl">
                            Explore Ondo
                        </h3>

                        <p class="mt-4 max-w-2xl leading-7 text-gray-400">
                            A tourism platform designed to showcase places
                            and streets in Ondo, helping visitors discover
                            local attractions through an organised website
                            with an admin area for managing content.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach (['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'] as $technology)
                                <span class="rounded-md border border-white/10 px-3 py-1.5 text-xs font-medium text-gray-300">
                                    {{ $technology }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a
                            href="https://github.com/bayonle2022/explore-ondo"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex min-h-11 items-center justify-center gap-2 rounded-lg border border-white/15 px-5 py-3 text-sm font-semibold text-white transition hover:border-orange-500 hover:text-orange-400"
                        >
                            Source Code <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </div>
            </article>
        </div>

    </div>
</section>




<section id="services" class="border-t border-white/10 px-6 py-24">
    <div class="mx-auto max-w-7xl">

        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-500">
            What I Offer
        </p>

        <h2 class="mt-4 text-3xl font-bold md:text-5xl">
            How I can help your business.
        </h2>

        <p class="mt-5 max-w-2xl leading-8 text-gray-400">
            From launching a new website to building backend functionality,
            I help turn business ideas into practical digital solutions.
        </p>

        <div class="mt-12 grid items-stretch gap-6 md:grid-cols-2 lg:grid-cols-3">

            <!-- Website Development -->
            <article class="group flex flex-col rounded-2xl border border-white/10 bg-[#111111] p-8 transition duration-300 hover:-translate-y-1 hover:border-orange-500/50 sm:p-9">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center text-2xl text-orange-500">
                    &lt;/&gt;
                </div>

                <h3 class="mt-7 text-xl font-bold leading-snug text-white">
                    Website Development
                </h3>

                <p class="mt-4 flex-1 leading-7 text-gray-400">
                    Modern, responsive websites for businesses, personal
                    brands and organisations.
                </p>

                <a href="#contact" class="mt-7 inline-block border-t border-white/10 pt-5 text-sm font-semibold text-orange-400 transition hover:text-orange-300">
                    Discuss a project →
                </a>
            </article>

            <!-- Backend & API Development -->
            <article class="group flex flex-col rounded-2xl border border-white/10 bg-[#111111] p-8 transition duration-300 hover:-translate-y-1 hover:border-orange-500/50 sm:p-9">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center text-2xl text-orange-500">
                    { }
                </div>

                <h3 class="mt-7 text-xl font-bold leading-snug text-white">
                    Backend & API Development
                </h3>

                <p class="mt-4 flex-1 leading-7 text-gray-400">
                    Laravel backend functionality, REST API endpoints,
                    authentication and database integration.
                </p>

                <a href="#contact" class="mt-7 inline-block border-t border-white/10 pt-5 text-sm font-semibold text-orange-400 transition hover:text-orange-300">
                    Discuss a project →
                </a>
            </article>

            <!-- Website Improvements -->
            <article class="group flex flex-col rounded-2xl border border-white/10 bg-[#111111] p-8 transition duration-300 hover:-translate-y-1 hover:border-orange-500/50 sm:p-9">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center text-2xl text-orange-500">
                    ↗
                </div>

                <h3 class="mt-7 text-xl font-bold leading-snug text-white">
                    Website Improvements
                </h3>

                <p class="mt-4 flex-1 leading-7 text-gray-400">
                    Responsive redesigns, bug fixes, performance improvements
                    and ongoing website maintenance.
                </p>

                <a href="#contact" class="mt-7 inline-block border-t border-white/10 pt-5 text-sm font-semibold text-orange-400 transition hover:text-orange-300">
                    Discuss a project →
                </a>
            </article>

        </div>
    </div>
</section>



<section id="contact" class="border-t border-white/10 px-6 py-24">
    <div class="mx-auto max-w-7xl">

        <!-- Section Heading -->
        <div class="grid gap-10 md:grid-cols-2 md:items-end">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-500">
                    Get In Touch
                </p>

                <h2 class="mt-4 max-w-xl text-3xl font-bold leading-tight text-white md:text-5xl">
                    Have a project in mind?
                    <span class="text-orange-500">Let's talk.</span>
                </h2>
            </div>

            <p class="max-w-lg leading-8 text-gray-400 md:justify-self-end">
                Looking for a developer to bring your idea to life?
                Whether it's a new website, a backend system, or an improvement
                to an existing project, I'd love to hear from you.
            </p>
        </div>

        <!-- Contact Cards -->
        <div class="mt-14 grid gap-6 md:grid-cols-2">

            <!-- Email Card -->
            <div class="rounded-2xl border border-white/10 bg-[#111111] p-8 transition duration-300 hover:border-orange-500/40 sm:p-10">

                <div class="flex h-12 w-12 items-center justify-center text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.6">
                        <rect x="3" y="5" width="18" height="14" rx="2"/>
                        <path d="m3 7 9 6 9-6"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Email Me
                </h3>

                <p class="mt-3 leading-7 text-gray-400">
                    Have a project brief or business enquiry?
                    Send me an email and let's discuss it.
                </p>

                <a href="mailto:lijadubayonle10@gmail.com"
                   class="mt-6 inline-flex max-w-full items-center gap-2 break-all text-sm font-semibold text-orange-400 transition hover:text-orange-300">
                    lijadubayonle10@gmail.com
                    <span class="shrink-0">↗</span>
                </a>
            </div>

            <!-- WhatsApp Card -->
            <div class="rounded-2xl border border-white/10 bg-[#111111] p-8 transition duration-300 hover:border-orange-500/40 sm:p-10">

                <div class="flex h-12 w-12 items-center justify-center text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.6">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 20l1.2-5.3A8.4 8.4 0 1 1 21 11.5Z"/>
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M8.5 8.5c.3-.6.6-.6.9-.6h.4c.2 0 .4.1.5.4l.7 1.6c.1.2.1.4-.1.6l-.5.6c-.2.2-.2.4 0 .6.6 1 1.4 1.8 2.4 2.3.2.1.4.1.6-.1l.7-.8c.2-.2.4-.2.6-.1l1.5.7c.3.1.4.3.4.5 0 .5-.2 1.1-.6 1.4-.4.4-1 .6-1.6.5-1-.1-2.3-.7-3.6-1.8-1.1-.9-2-2.2-2.4-3.3-.4-1-.1-2 .2-2.5Z"/>
                    </svg>
                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Chat on WhatsApp
                </h3>

                <p class="mt-3 leading-7 text-gray-400">
                    Prefer a quick conversation?
                    Message me directly to discuss your project.
                </p>

                <a href="https://wa.me/2349160117395"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-orange-400 transition hover:text-orange-300">
                    Message me on WhatsApp
                    <span>↗</span>
                </a>
            </div>

        </div>

        <!-- Bottom Note -->
        <div class="mt-16 border-t border-white/10 pt-8 text-center">
            <p class="text-sm leading-7 text-gray-500">
                Have an idea? Let's work together and build something meaningful.
            </p>
        </div>

    </div>
</section>

    </main>


</body>

<footer class="border-t border-white/10 bg-[#0a0a0a] px-6 py-8">
    <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 sm:flex-row">

        <!-- Brand -->
        <a href="#home" class="text-2xl font-bold tracking-tight text-white">
            Bayonle<span class="text-orange-500">.</span>
        </a>

        <!-- Copyright -->
        <p class="text-center text-sm text-gray-500">
            © {{ date('Y') }} Bayonle. Built with passion and Laravel.
        </p>

        <!-- Back to Top -->
        <a href="#home"
           class="inline-flex items-center gap-2 text-sm font-medium text-gray-400 transition hover:text-orange-500">
            Back to top
            <span class="text-orange-500">↑</span>
        </a>

    </div>
</footer>

</html>
