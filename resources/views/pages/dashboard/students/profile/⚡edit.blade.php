<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.student_layout')] class extends Component {
    //
};
?>

<div>
    <div class="px-3 sm:px-6 mt-4">
        <div class="bg-white shadow-sm rounded-lg border border-gray-200 p-4 sm:p-6">

            <div class="flex items-center justify-between pb-3 border-b border-gray-200 mb-4">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold">Edit Profile</h2>
                    <p class="text-xs text-gray-500">Update your account information</p>
                </div>
                {{-- <button @click="editMode = false" class="text-gray-400 hover:text-gray-600 text-lg"><i
                        class="fa-solid fa-xmark"></i></button> --}}
            </div>

            <form action="#" method="POST" class="space-y-4">

                <!-- Avatar Upload -->
                <div class="flex flex-col sm:flex-row items-center gap-3 text-center sm:text-left">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-full object-cover border">
                    <div class="w-full">
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Avatar Image (`avater`)</label>
                        <input type="file" name="avater"
                            class="block w-full text-xs text-gray-500 file:mr-2 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                </div>

                <!-- First & Last Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">First Name (`first_name`)</label>
                        <input type="text" name="first_name" value="Jane"
                            class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Last Name (`last_name`)</label>
                        <input type="text" name="last_name" value="Doe"
                            class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                <!-- Bio -->
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Bio (`bio`)</label>
                    <textarea name="bio" rows="3"
                        class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">Building scalable web applications and exploring modern UI design systems.</textarea>
                </div>

                <!-- Phone & Field of Study ID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Phone (`phone`)</label>
                        <input type="text" name="phone" value="+1 (555) 234-5678"
                            class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Field of Study ID
                            (`field_of_study_id`)</label>
                        <input type="number" name="field_of_study_id" value="4"
                            class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                <!-- Location Details -->
                <div class="space-y-3">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Address (`address`)</label>
                        <input type="text" name="address" value="123 Tech Lane"
                            class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">State (`state`)</label>
                            <input type="text" name="state" value="California"
                                class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1">Country (`country`)</label>
                            <input type="text" name="country" value="United States"
                                class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                    </div>
                </div>

                <!-- Socials Field -->
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Social Networks (`socials`
                        JSON)</label>
                    <input type="text" name="socials" value='{"github": "janedoe", "twitter": "janedoe_dev"}'
                        class="w-full bg-gray-50 border border-gray-300 rounded-md px-3 py-1.5 text-xs sm:text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Submit & Cancel -->
                <div class="flex items-center justify-end gap-2 pt-3 border-t border-gray-200">
                    <button type="button"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 text-xs sm:text-sm font-semibold px-3 py-1.5 rounded-md transition">Cancel</button>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold px-4 py-1.5 rounded-md transition shadow-sm">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
