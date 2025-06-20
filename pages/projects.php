<?php
// pages/projects.php - Redesigned with a gradient color palette
?>
<div class="max-w-6xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-white">Project Planner</h1>
        <p class="text-lg text-slate-400 mt-2">Add, manage, and track your ongoing projects.</p>
    </div>

    <!-- Redesigned Form to Add a New Project -->
    <div class="max-w-2xl mx-auto bg-slate-800 p-6 rounded-xl shadow-lg mb-12">
        <form id="project-form">
            <label for="project-name" class="block text-lg font-medium text-white mb-2">Add a New Project</label>
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="text" id="project-name" class="flex-grow p-3 border-2 border-slate-700 rounded-lg bg-slate-900 text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-colors" placeholder="e.g., Design a new mobile app...">
                <!-- Gradient Button -->
                <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:from-purple-700 hover:to-indigo-700 transition-all shadow-lg hover:shadow-purple-500/30 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                    <span>Add Project</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Container where project cards will be displayed -->
    <h2 class="text-3xl font-bold mb-6 text-white">Current Projects</h2>
    <div id="projects-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Projects will be loaded here by JavaScript -->
        <p class="text-slate-400 md:col-span-3">Loading projects...</p>
    </div>
</div>
