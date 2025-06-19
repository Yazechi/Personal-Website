<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-center">Project Planner</h1>
    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm p-6 rounded-lg shadow-md mb-8">
        <form id="project-form" class="flex gap-4">
            <input type="text" id="project-name" class="flex-grow p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 focus:ring-2 focus:ring-purple-500" placeholder="Enter new project name...">
            <button type="submit" class="bg-purple-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">Add Project</button>
        </form>
    </div>
    <h2 class="text-2xl font-bold mb-4">Current Projects</h2>
    <div id="projects-container" class="space-y-3">
        <!-- Projects loaded by JavaScript -->
    </div>
</div>
