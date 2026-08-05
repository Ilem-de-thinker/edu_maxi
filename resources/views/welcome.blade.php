<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SynapseCBT - Clinical Board Exam & Tutor Platform</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased font-sans selection:bg-teal-500 selection:text-white"
    x-data="{
        role: 'student',
        activeTab: 'simulation',
        selectedOption: null,
        showAnswer: false,
        timer: '42:18'
    }">

    <!-- NAVIGATION -->
    <header
        class="sticky top-0 z-50 backdrop-blur-md bg-white/85 border-b border-slate-200/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

            <!-- Brand Logo -->
            <div class="flex items-center space-x-3 cursor-pointer group">
                <div
                    class="h-10 w-10 rounded-xl bg-linear-to-tr from-teal-600 to-cyan-500 flex items-center justify-center font-bold text-white shadow-md shadow-teal-500/20 group-hover:scale-105 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white animate-pulse" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <span class="text-xl font-black tracking-tight text-slate-900">Synapse<span
                        class="text-teal-600">CBT</span></span>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                <a href="#demo" class="hover:text-teal-600 transition-colors duration-200">Interactive Exam</a>
                <a href="#features" class="hover:text-teal-600 transition-colors duration-200">Features</a>
                <a href="#ecosystem" class="hover:text-teal-600 transition-colors duration-200">Ecosystem</a>
            </nav>

            <!-- Header Action Buttons -->
            <div class="flex items-center space-x-3">
                <a href="#"
                    class="text-sm font-semibold text-slate-700 hover:text-teal-600 px-3 py-2 transition-colors">Sign
                    In</a>
                <a href="#"
                    class="text-sm font-bold bg-teal-600 hover:bg-teal-700 text-white px-5 py-2.5 rounded-xl shadow-md shadow-teal-600/20 hover:shadow-lg hover:shadow-teal-600/30 hover:-translate-y-0.5 transition-all duration-200">
                    Get Started
                </a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section
        class="relative pt-16 pb-20 md:pt-24 md:pb-28 overflow-hidden bg-linear-to-b from-teal-50/60 via-slate-50 to-slate-50">

        <!-- Background Animated Glow Accents -->
        <div
            class="absolute -top-24 left-1/2 -translate-x-1/2 w-200 h-87.5 bg-linear-to-tr from-teal-300/30 to-cyan-300/20 blur-3xl rounded-full pointer-events-none -z-10">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">

            <!-- Animated Floating Badge -->
            <div
                class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full bg-white border border-teal-200/80 shadow-sm text-xs font-bold text-teal-700 mb-6 animate-float">
                <span class="flex h-2.5 w-2.5 rounded-full bg-teal-500 animate-ping"></span>
                <span>Built for USMLE, PLAB, MCCQE & Specialty Boards</span>
            </div>

            <!-- Hero Heading -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-slate-900 tracking-tight leading-tight mb-6">
                Master Board Exams with <br class="hidden sm:inline" />
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600">Surgical
                    Precision.</span>
            </h1>

            <p class="max-w-3xl mx-auto text-lg sm:text-xl text-slate-600 leading-relaxed mb-10">
                The adaptive computer-based test platform engineered specifically for medical students and tutors.
                Practice with high-yield clinical vignettes, run custom tutor courses, and pinpoint knowledge gaps.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="#demo"
                    class="w-full sm:w-auto px-8 py-4 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold text-base shadow-xl shadow-teal-600/25 hover:shadow-2xl hover:shadow-teal-600/35 hover:-translate-y-1 transition-all duration-300 text-center">
                    Try Live Demo
                </a>
                <a href="#"
                    class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white hover:bg-slate-100 text-slate-800 border border-slate-300 font-bold text-base shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 text-center">
                    Join as a Educator
                </a>
            </div>

            <!-- Interactive Role Switcher Toggle -->
            <div class="inline-flex p-1.5 rounded-2xl bg-white border border-slate-200 shadow-md">
                <button @click="role = 'student'"
                    :class="role === 'student' ? 'bg-teal-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                    class="px-6 py-2.5 text-xs font-bold rounded-xl transition-all duration-300 transform active:scale-95">
                    🎓 For Medical Students
                </button>
                <button @click="role = 'tutor'"
                    :class="role === 'tutor' ? 'bg-teal-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                    class="px-6 py-2.5 text-xs font-bold rounded-xl transition-all duration-300 transform active:scale-95">
                    👨‍⚕️ For Tutors & Educators
                </button>
            </div>

        </div>
    </section>

    <!-- INTERACTIVE LIVE CBT ENGINE DEMO -->
    <section id="demo" class="py-12 bg-slate-100/70 border-y border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-6">
                <span class="text-xs font-bold tracking-widest text-teal-600 uppercase">Live Preview</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Experience the Board Exam Interface</h2>
            </div>

            <!-- Mock Exam Card Container -->
            <div
                class="rounded-2xl bg-white border border-slate-200 shadow-2xl overflow-hidden hover:shadow-teal-500/10 transition-shadow duration-500">

                <!-- Exam Header Bar -->
                <div
                    class="bg-slate-900 px-6 py-3.5 flex items-center justify-between text-xs font-mono text-slate-300 border-b border-slate-800">
                    <div class="flex items-center space-x-4">
                        <span class="text-teal-400 font-bold tracking-wider">BLOCK 2: CARDIOVASCULAR PATHOLOGY</span>
                        <span class="bg-slate-800 px-2.5 py-1 rounded text-slate-300">Question 18 of 40</span>
                    </div>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center space-x-1 text-amber-400">
                            <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                            </svg>
                            <span>Timer: <strong x-text="timer"></strong></span>
                        </div>
                        <span class="hidden sm:inline text-slate-500">Item ID: #USMLE-7821</span>
                    </div>
                </div>

                <!-- Exam Content Body -->
                <div class="p-6 md:p-8 grid md:grid-cols-3 gap-8">

                    <!-- Vignette Column -->
                    <div class="md:col-span-2 space-y-4">
                        <div class="flex items-center space-x-2">
                            <span
                                class="px-3 py-1 bg-teal-50 text-teal-700 text-xs font-bold rounded-md border border-teal-200">Pathology
                                &gt; Ischemic Heart Disease</span>
                            <span
                                class="px-2.5 py-1 bg-amber-50 text-amber-700 text-xs font-semibold rounded border border-amber-200">High-Yield</span>
                        </div>

                        <p class="text-slate-700 text-sm leading-relaxed font-normal">
                            A 62-year-old female presents to the emergency department with severe substernal chest
                            pressure radiating to her left arm, accompanied by nausea and sweating for 90 minutes. ECG
                            shows ST-segment elevation in leads II, III, and aVF.
                        </p>

                        <p class="text-slate-900 text-sm font-bold pt-2">
                            Which coronary artery is most likely responsible for this infarction?
                        </p>

                        <!-- Options with Alpine Interactivity -->
                        <div class="space-y-2.5 pt-2">
                            <template
                                x-for="(opt, idx) in [
                { id: 'A', text: 'Left Anterior Descending Artery (LAD)', correct: false },
                { id: 'B', text: 'Right Coronary Artery (RCA)', correct: true },
                { id: 'C', text: 'Left Circumflex Artery (LCX)', correct: false },
                { id: 'D', text: 'Left Main Coronary Artery', correct: false }
              ]">
                                <button @click="selectedOption = opt.id; showAnswer = true"
                                    :class="{
                                        'border-teal-500 bg-teal-50/60 ring-2 ring-teal-500/20': selectedOption === opt
                                            .id,
                                        'border-emerald-500 bg-emerald-50': showAnswer && opt.correct,
                                        'border-rose-300 bg-rose-50': showAnswer && selectedOption === opt.id && !opt
                                            .correct,
                                        'border-slate-200 hover:border-slate-300 bg-white': selectedOption !== opt.id &&
                                            !showAnswer
                                    }"
                                    class="w-full text-left p-3.5 rounded-xl border transition-all duration-200 flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center space-x-3">
                                        <span
                                            :class="selectedOption === opt.id ? 'bg-teal-600 text-white' :
                                                'bg-slate-100 text-slate-700 group-hover:bg-slate-200'"
                                            class="h-7 w-7 rounded-lg flex items-center justify-center font-bold text-xs transition-colors"
                                            x-text="opt.id"></span>
                                        <span class="text-xs text-slate-800 font-medium" x-text="opt.text"></span>
                                    </div>
                                    <template x-if="showAnswer && opt.correct">
                                        <span class="text-xs font-bold text-emerald-600">✓ Correct</span>
                                    </template>
                                </button>
                            </template>
                        </div>

                        <!-- Instant Animated Feedback Box -->
                        <div x-show="showAnswer"
                            x-transition:enter="transition ease-out duration-300 transform opacity-0 translate-y-2"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="p-4 bg-teal-50 border border-teal-200 rounded-xl text-xs text-teal-900 space-y-2 mt-4">
                            <div class="font-bold text-teal-800 flex items-center space-x-1">
                                <span>💡 Clinical Explanation:</span>
                            </div>
                            <p class="leading-relaxed text-slate-700">
                                Inferior wall myocardial infarction (leads II, III, aVF) is caused by occlusion of the
                                <strong>Right Coronary Artery (RCA)</strong> in approximately 85-90% of individuals
                                (right-dominant circulation).
                            </p>
                        </div>
                    </div>

                    <!-- Exam Utilities Panel -->
                    <div class="bg-slate-50 p-5 rounded-xl border border-slate-200 space-y-4 text-xs">
                        <h4 class="font-extrabold text-slate-800 border-b border-slate-200 pb-2">Diagnostic Tools</h4>

                        <div class="space-y-2">
                            <button @click="showAnswer = !showAnswer"
                                class="w-full text-left px-3 py-2.5 bg-white border border-slate-200 hover:border-teal-500 rounded-lg text-slate-700 font-semibold flex items-center justify-between shadow-sm transition-all hover:scale-[1.01]">
                                <span>Toggle Explanation</span>
                                <span class="text-teal-600 font-bold" x-text="showAnswer ? 'Hide' : 'Show'"></span>
                            </button>

                            <button
                                class="w-full text-left px-3 py-2.5 bg-white border border-slate-200 hover:border-teal-500 rounded-lg text-slate-700 font-semibold flex items-center justify-between shadow-sm transition-all hover:scale-[1.01]">
                                <span>Lab Reference Values</span>
                                <span class="text-slate-400 font-mono">⌘L</span>
                            </button>

                            <button
                                class="w-full text-left px-3 py-2.5 bg-white border border-slate-200 hover:border-teal-500 rounded-lg text-slate-700 font-semibold flex items-center justify-between shadow-sm transition-all hover:scale-[1.01]">
                                <span>Option Cross-Out</span>
                                <span class="text-slate-400 font-mono">Ready</span>
                            </button>
                        </div>

                        <div class="p-3 bg-cyan-50 border border-cyan-200 rounded-lg text-cyan-900 leading-relaxed">
                            <p class="font-semibold mb-1">📊 Cohort Accuracy:</p>
                            <p class="text-[11px] text-slate-600">74% of students answered this correctly on their
                                first attempt.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FEATURES SECTION WITH DYNAMIC ROLE ANIMATIONS -->
    <section id="features" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Tailored to Medical Excellence</h2>
            <p class="text-slate-600">Switch perspectives to see how SynapseCBT empowers both learners and educators.
            </p>
        </div>

        <!-- Student Cards (Animated Transition) -->
        <div x-show="role === 'student'"
            x-transition:enter="transition ease-out duration-300 transform opacity-0 translate-y-4"
            x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid md:grid-cols-3 gap-8">

            <div
                class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div
                    class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center font-black text-lg mb-6">
                    01</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">True Board Engine</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Exact layout density, laboratory reference popups,
                    timed blocks, and vignette structures matching actual board exams.</p>
            </div>

            <div
                class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div
                    class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center font-black text-lg mb-6">
                    02</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Sub-Specialty Analytics</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Pinpoint exact knowledge gaps down to specific
                    sub-tags like <em>Endocarditis</em> rather than broad cardiology topics.</p>
            </div>

            <div
                class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div
                    class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center font-black text-lg mb-6">
                    03</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Flexible Practice Modes</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Switch seamlessly between untimed tutor mode with
                    deep diagnostic rationale and strict timed conditions.</p>
            </div>

        </div>

        <!-- Tutor Cards (Animated Transition) -->
        <div x-show="role === 'tutor'"
            x-transition:enter="transition ease-out duration-300 transform opacity-0 translate-y-4"
            x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid md:grid-cols-3 gap-8">

            <div
                class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div
                    class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-black text-lg mb-6">
                    01</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Custom Exam Builder</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Draft vignettes, attach diagnostic slides, configure
                    time limits, and publish custom test suites to your students.</p>
            </div>

            <div
                class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div
                    class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-black text-lg mb-6">
                    02</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">QBank Monetization</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Contribute high-yield questions to the global
                    repository. Earn recurring royalties based on student utilization.</p>
            </div>

            <div
                class="p-8 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div
                    class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-black text-lg mb-6">
                    03</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Class Performance Heatmaps</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Track your students' cohort progress in real time to
                    tailor your upcoming live lectures to their common mistakes.</p>
            </div>

        </div>
    </section>

    <!-- ECOSYSTEM TABLE -->
    <section id="ecosystem" class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 text-center mb-10">How the Ecosystem Integrates
            </h2>

            <div class="overflow-x-auto rounded-xl border border-slate-200 shadow-sm">
                <table class="w-full text-left text-sm text-slate-700">
                    <thead class="bg-slate-100 text-slate-900 font-bold text-xs uppercase border-b border-slate-200">
                        <tr>
                            <th class="p-4">Workflow</th>
                            <th class="p-4 text-teal-700">For Medical Students</th>
                            <th class="p-4 text-blue-700">For Tutors & Educators</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-bold text-slate-900">1. Target</td>
                            <td class="p-4 text-slate-600">Select target exam board, system, or sub-specialty.</td>
                            <td class="p-4 text-slate-600">Build custom course QBanks or contribute single items.</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-bold text-slate-900">2. Practice</td>
                            <td class="p-4 text-slate-600">Work through vignettes with step-by-step diagnostic
                                rationale.</td>
                            <td class="p-4 text-slate-600">Submit questions through peer review and statistical
                                validation.</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-bold text-slate-900">3. Master</td>
                            <td class="p-4 text-slate-600">Review weakness heatmaps and refine low-retention topics.
                            </td>
                            <td class="p-4 text-slate-600">Monitor cohort scores and monetize top-rated materials.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FOOTER CTA -->
    <footer class="py-16 bg-gradient-to-b from-slate-900 to-slate-950 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Elevate Your Medical Prep Today</h2>
            <p class="text-slate-400 mb-8 max-w-xl mx-auto">Join thousands of medical students and clinical tutors
                shaping the future of medical education.</p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="px-8 py-3.5 bg-teal-500 hover:bg-teal-400 text-slate-950 font-bold rounded-xl shadow-lg shadow-teal-500/20 hover:scale-105 transition-all">
                    Create Free Account
                </a>
                <a href="#"
                    class="px-8 py-3.5 bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-bold rounded-xl transition-all">
                    Apply as Tutor
                </a>
            </div>

            <p class="text-xs text-slate-500 mt-12">&copy; 2026 SynapseCBT. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
