<?php

use App\Models\Profile;
use App\User\Repository\ProfileRepository;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.student_layout')] class extends Component {
    public function getCompletedProfilePercentage()
    {
        $profile = Auth::user()->profile()->first();
        return ProfileRepository::getProfileCompletionPercentage($profile);
    }
};
?>

<div>
    <!-- Welcome Banner -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-linear-to-r from-blue-600 to-indigo-700 text-white p-8 rounded-3xl shadow-xl shadow-blue-500/10 relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none">
        </div>
        <div>
            <div
                class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                Production Cluster Active
            </div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">Welcome back,
                {{ auth()->user()->name }}👋</h1>
            {{--PROFILE COMPLETION PERCENTAGE COUNTER--}}
            <div x-data="{
                current: 0,
                target: {{ $this->getCompletedProfilePercentage() }},
                /* Set your target percentage here */
                speedMs: 25,
                /* Speed in milliseconds per count */
                timer: null,

                startCounter() {
                    this.timer = setInterval(() => {
                        if (this.current < this.target) {
                            this.current++;
                        } else {
                            clearInterval(this.timer);
                        }
                    }, this.speedMs);
                }
            }" x-init="startCounter()" class="w-full mt-5 p-6 rounded-2xl min-w-full">
                <a href="{{ route('student.profile') }}" wire:navigate>
                    <!-- Label & Counter -->
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold text-slate-300">
                            <b>Profile Completed</b>
                        </span>

                        <!-- Counter Number -->
                        <div class="flex items-baseline space-x-0.5 font-mono">
                            <span x-text="current" class="text-3xl font-extrabold text-teal-400"></span>
                            <span class="text-sm font-semibold text-teal-500">%</span>
                        </div>
                    </div>

                    <!-- Progress Bar Track -->
                    <div class="w-full bg-slate-700/60 rounded-full h-3.5 overflow-hidden p-0.5" role="progressbar"
                        :aria-valuenow="current" aria-valuemin="0" aria-valuemax="100">
                        <!-- Animated Fill -->
                        <div class="bg-linear-to-r from-teal-500 to-emerald-400 h-full rounded-full transition-all ease-out duration-75 shadow-lg shadow-teal-500/20"
                            :style="`width: ${current}%`"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex items-center gap-3">
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div
            class="p-6 bg-white dark:bg-gray-900 rounded-3xl border border-gray-200/80 dark:border-gray-800 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total Requests
                </p>
                <span class="p-2 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 rounded-xl">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </span>
            </div>
            <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-4">2.4M</h3>
            <p class="text-xs text-emerald-600 dark:text-emerald-400 font-bold mt-2 flex items-center gap-1">
                <span>+12.4%</span> <span class="text-gray-400 font-normal">vs last month</span>
            </p>
        </div>

        <div
            class="p-6 bg-white dark:bg-gray-900 rounded-3xl border border-gray-200/80 dark:border-gray-800 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Active Instances
                </p>
                <span class="p-2 bg-purple-50 dark:bg-purple-950/60 text-purple-600 dark:text-purple-400 rounded-xl">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                </span>
            </div>
            <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-4">48 / 50</h3>
            <p class="text-xs text-emerald-600 dark:text-emerald-400 font-bold mt-2 flex items-center gap-1">
                <span>96%</span> <span class="text-gray-400 font-normal">healthy pool</span>
            </p>
        </div>

        <div
            class="p-6 bg-white dark:bg-gray-900 rounded-3xl border border-gray-200/80 dark:border-gray-800 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Avg Latency</p>
                <span class="p-2 bg-amber-50 dark:bg-amber-950/60 text-amber-600 dark:text-amber-400 rounded-xl">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
            </div>
            <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-4">24ms</h3>
            <p class="text-xs text-emerald-600 dark:text-emerald-400 font-bold mt-2 flex items-center gap-1">
                <span>-4ms</span> <span class="text-gray-400 font-normal">optimized</span>
            </p>
        </div>

        <div
            class="p-6 bg-white dark:bg-gray-900 rounded-3xl border border-gray-200/80 dark:border-gray-800 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Error Rate</p>
                <span
                    class="p-2 bg-emerald-50 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 rounded-xl">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
            </div>
            <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-4">0.01%</h3>
            <p class="text-xs text-emerald-600 dark:text-emerald-400 font-bold mt-2 flex items-center gap-1">
                <span>Stable</span> <span class="text-gray-400 font-normal">no anomalies</span>
            </p>
        </div>
    </div>

    <!-- Recent Deployments Table -->
    <div
        class="bg-white dark:bg-gray-900 rounded-3xl border border-gray-200/80 dark:border-gray-800 overflow-hidden shadow-sm">
        <div class="p-6 border-b border-gray-100 dark:border-gray-800 flex items-center justify-between">
            <div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Recent Deployments</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Latest git pushes deployed to the edge
                    cluster.</p>
            </div>
            <button
                class="px-4 py-2 text-xs font-bold text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-950/50 rounded-xl hover:bg-blue-100 transition">View
                All</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr
                        class="bg-gray-50/75 dark:bg-gray-800/50 text-gray-400 text-xs font-bold uppercase tracking-wider border-b border-gray-100 dark:border-gray-800">
                        <th class="py-3 px-6">Repository</th>
                        <th class="py-3 px-6">Branch</th>
                        <th class="py-3 px-6">Commit Hash</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6">Time</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800 text-gray-700 dark:text-gray-300">
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition">
                        <td class="py-4 px-6 font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span> core-api-v4
                        </td>
                        <td class="py-4 px-6 font-mono text-xs">main</td>
                        <td class="py-4 px-6 font-mono text-xs text-gray-400">#8f9c21b</td>
                        <td class="py-4 px-6"><span
                                class="px-2.5 py-1 text-xs font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-950/60 dark:text-emerald-400 rounded-full">Successful</span>
                        </td>
                        <td class="py-4 px-6 text-xs text-gray-400">4 mins ago</td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition">
                        <td class="py-4 px-6 font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-purple-600"></span> gocreative-dashboard
                        </td>
                        <td class="py-4 px-6 font-mono text-xs">staging</td>
                        <td class="py-4 px-6 font-mono text-xs text-gray-400">#3a1e904</td>
                        <td class="py-4 px-6"><span
                                class="px-2.5 py-1 text-xs font-bold text-emerald-700 bg-emerald-100 dark:bg-emerald-950/60 dark:text-emerald-400 rounded-full">Successful</span>
                        </td>
                        <td class="py-4 px-6 text-xs text-gray-400">1 hour ago</td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition">
                        <td class="py-4 px-6 font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-amber-600"></span> ai-microservice
                        </td>
                        <td class="py-4 px-6 font-mono text-xs">feature/rust</td>
                        <td class="py-4 px-6 font-mono text-xs text-gray-400">#1c448fa</td>
                        <td class="py-4 px-6"><span
                                class="px-2.5 py-1 text-xs font-bold text-amber-700 bg-amber-100 dark:bg-amber-950/60 dark:text-amber-400 rounded-full">Building</span>
                        </td>
                        <td class="py-4 px-6 text-xs text-gray-400">Just now</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
