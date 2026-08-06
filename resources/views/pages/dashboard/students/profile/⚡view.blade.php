<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.student_layout')] class extends Component {
    //
};
?>

<div x-data="{ activeTab: 'posts'}">
    <div >

        <!-- Cover & Profile Header Header -->
        <div class="bg-white shadow-sm border-b border-gray-200">
            <!-- Cover Image -->
            <div class="h-32 sm:h-56 md:h-72 bg-linear-to-r from-blue-500 via-indigo-500 to-purple-600 w-full"></div>

            <div class="px-4 sm:px-6 lg:px-8">
                <!-- Profile Info & Avatar Overlay -->
                <div
                    class="relative -mt-16 sm:-mt-20 pb-4 flex flex-col items-center sm:items-end sm:flex-row justify-between gap-4 border-b border-gray-200">

                    <!-- Avatar & Name -->
                    <div
                        class="flex flex-col sm:flex-row items-center sm:items-end gap-3 sm:gap-5 text-center sm:text-left w-full sm:w-auto">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                            alt="Avatar"
                            class="w-28 h-28 sm:w-36 sm:h-36 rounded-full border-4 border-white object-cover shadow-md bg-white shrink-0">
                        <div class="mt-1 sm:mt-0">
                            <h1
                                class="text-xl sm:text-2xl font-bold flex items-center justify-center sm:justify-start gap-1.5">
                                Jane Doe
                                <i class="fa-solid fa-circle-check text-blue-500 text-base" title="Verified"></i>
                            </h1>
                            <p class="text-gray-500 font-medium text-xs sm:text-sm mt-0.5">
                                <span>1.2K</span> followers &bull; <span>430</span> following
                            </p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-2 w-full sm:w-auto justify-center">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 sm:px-4 rounded-md font-semibold text-xs sm:text-sm transition shadow-sm flex-1 sm:flex-none flex items-center justify-center gap-1">
                            <i class="fa-solid fa-plus"></i> Add Story
                        </button>
                        <a wire:navigate href="{{ route('student.profile.edit') }}"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-2 sm:px-4 rounded-md font-semibold text-xs sm:text-sm transition flex-1 sm:flex-none flex items-center justify-center gap-1">
                            <i class="fa-solid fa-pen"></i> Edit
                    </a>
                    </div>
                </div>

                <!-- Navigation Tabs (Scrollable on small screens) -->
                <div class="flex gap-2 overflow-x-auto no-scrollbar pt-1">
                    <button @click="activeTab = 'posts'"
                        :class="activeTab === 'posts' ? 'border-b-2 border-blue-600 text-blue-600 font-bold' :
                            'text-gray-600 hover:bg-gray-100 font-medium'"
                        class="px-3 py-2.5 text-xs sm:text-sm whitespace-nowrap transition rounded-t-md">
                        Posts
                    </button>
                    <button @click="activeTab = 'about'"
                        :class="activeTab === 'about' ? 'border-b-2 border-blue-600 text-blue-600 font-bold' :
                            'text-gray-600 hover:bg-gray-100 font-medium'"
                        class="px-3 py-2.5 text-xs sm:text-sm whitespace-nowrap transition rounded-t-md">
                        About
                    </button>
                    <button @click="activeTab = 'friends'"
                        :class="activeTab === 'friends' ? 'border-b-2 border-blue-600 text-blue-600 font-bold' :
                            'text-gray-600 hover:bg-gray-100 font-medium'"
                        class="px-3 py-2.5 text-xs sm:text-sm whitespace-nowrap transition rounded-t-md">
                        Friends
                    </button>
                    <button @click="activeTab = 'photos'"
                        :class="activeTab === 'photos' ? 'border-b-2 border-blue-600 text-blue-600 font-bold' :
                            'text-gray-600 hover:bg-gray-100 font-medium'"
                        class="px-3 py-2.5 text-xs sm:text-sm whitespace-nowrap transition rounded-t-md">
                        Photos
                    </button>
                </div>
            </div>
        </div>

        <!-- TAB CONTENT CONTAINER -->
        <div class="px-3 sm:px-6 lg:px-8 mt-4">

            <!-- TAB 1: POSTS -->
            <div x-show="activeTab === 'posts'" class="grid grid-cols-1 md:grid-cols-12 gap-4">
                <!-- Left Sidebar (Intro) -->
                <div class="md:col-span-5 space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <h2 class="text-base sm:text-lg font-bold mb-2">Intro</h2>
                        <p class="text-gray-700 text-xs sm:text-sm text-center mb-3">
                            "Building scalable web applications and exploring modern UI design systems."
                        </p>
                        <hr class="my-2 border-gray-100">
                        <div class="space-y-2.5 text-xs sm:text-sm text-gray-700">
                            <div class="flex items-center gap-2.5">
                                <i class="fa-solid fa-graduation-cap text-gray-400 w-4 text-center"></i>
                                <span>Studied Computer Science</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i class="fa-solid fa-house text-gray-400 w-4 text-center"></i>
                                <span>Lives in <strong>California, USA</strong></span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i class="fa-solid fa-location-dot text-gray-400 w-4 text-center"></i>
                                <span>From <strong>New York, USA</strong></span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i class="fa-solid fa-phone text-gray-400 w-4 text-center"></i>
                                <span>+1 (555) 234-5678</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Feed) -->
                <div class="md:col-span-7 space-y-4">
                    <!-- Create Post Box -->
                    <div class="bg-white p-3 sm:p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex gap-2.5 items-center">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                                class="w-8 h-8 sm:w-10 sm:h-10 rounded-full object-cover">
                            <input type="text" placeholder="What's on your mind?"
                                class="bg-gray-100 hover:bg-gray-200 transition rounded-full px-4 py-2 w-full text-xs sm:text-sm focus:outline-none">
                        </div>
                    </div>

                    <!-- Sample Feed Post -->
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-2.5">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                                    class="w-9 h-9 rounded-full object-cover">
                                <div>
                                    <h3 class="font-bold text-xs sm:text-sm">Jane Doe</h3>
                                    <span class="text-[10px] sm:text-xs text-gray-400">2 hours ago &bull; <i
                                            class="fa-solid fa-globe"></i></span>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600"><i
                                    class="fa-solid fa-ellipsis"></i></button>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-800 mb-3">Mobile-first design with Alpine JS and Tailwind
                            CSS v4 is super fast to set up!</p>
                        <div class="bg-gray-100 rounded-lg h-48 sm:h-64 overflow-hidden mb-3">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                                class="w-full h-full object-cover">
                        </div>
                        <div
                            class="flex justify-between text-gray-500 text-xs sm:text-sm pt-2 border-t border-gray-100">
                            <button
                                class="flex items-center gap-1.5 hover:bg-gray-50 flex-1 justify-center py-1 rounded"><i
                                    class="fa-regular fa-thumbs-up"></i> Like</button>
                            <button
                                class="flex items-center gap-1.5 hover:bg-gray-50 flex-1 justify-center py-1 rounded"><i
                                    class="fa-regular fa-comment"></i> Comment</button>
                            <button
                                class="flex items-center gap-1.5 hover:bg-gray-50 flex-1 justify-center py-1 rounded"><i
                                    class="fa-solid fa-share"></i> Share</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: ABOUT -->
            <div x-show="activeTab === 'about'" x-cloak
                class="bg-white p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-lg font-bold mb-4 border-b pb-2">About Details</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm text-gray-700">
                    <div>
                        <span class="text-gray-400 block font-medium">Full Name</span>
                        <span class="font-semibold text-gray-800">Jane Doe</span>
                    </div>
                    <div>
                        <span class="text-gray-400 block font-medium">Field of Study ID</span>
                        <span class="font-semibold text-gray-800">4 (Computer Science)</span>
                    </div>
                    <div>
                        <span class="text-gray-400 block font-medium">Phone</span>
                        <span class="font-semibold text-gray-800">+1 (555) 234-5678</span>
                    </div>
                    <div>
                        <span class="text-gray-400 block font-medium">Address</span>
                        <span class="font-semibold text-gray-800">123 Tech Lane, California, United States</span>
                    </div>
                    <div class="sm:col-span-2">
                        <span class="text-gray-400 block font-medium">Bio</span>
                        <span class="font-semibold text-gray-800">Building scalable web applications and exploring
                            modern UI design systems.</span>
                    </div>
                </div>
            </div>

            <!-- TAB 3: FRIENDS -->
            <div x-show="activeTab === 'friends'" x-cloak
                class="bg-white p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-lg font-bold mb-4 border-b pb-2">Friends (430)</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">
                    <template x-for="i in 6">
                        <div class="border rounded-lg p-2 text-center">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=200&q=80"
                                class="w-16 h-16 rounded-full mx-auto mb-2 object-cover">
                            <p class="text-xs font-bold truncate">Alex Johnson</p>
                            <span class="text-[10px] text-gray-400">12 mutual friends</span>
                        </div>
                    </template>
                </div>
            </div>

            <!-- TAB 4: PHOTOS -->
            <div x-show="activeTab === 'photos'" x-cloak
                class="bg-white p-4 sm:p-6 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-lg font-bold mb-4 border-b pb-2">Photos</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80"
                        class="w-full h-28 sm:h-36 object-cover rounded-md">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=400&q=80"
                        class="w-full h-28 sm:h-36 object-cover rounded-md">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=400&q=80"
                        class="w-full h-28 sm:h-36 object-cover rounded-md">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80"
                        class="w-full h-28 sm:h-36 object-cover rounded-md">
                </div>
            </div>

        </div>
    </div>

</div>
