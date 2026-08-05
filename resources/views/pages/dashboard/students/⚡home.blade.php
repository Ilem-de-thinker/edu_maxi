<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.student_layout')] class extends Component {};
?>

<div>
    <div class="mb-6 flex flex-col gap-1">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Student Dashboard</h2>
        <p class="text-sm text-gray-500 dark:text-gray-400">Welcome back, {{ auth()->user()->name }}!</p>
    </div>
</div>
