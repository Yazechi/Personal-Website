// Wait for the DOM to be fully loaded before running scripts
document.addEventListener('DOMContentLoaded', () => {
    // --- Mobile Menu Toggle ---
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- Page specific logic ---
    const memoForm = document.getElementById('memo-form');
    const projectForm = document.getElementById('project-form');

    if (memoForm) {
        loadMemos();
        memoForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const memoContent = document.getElementById('memo-content');
            if (memoContent.value.trim() === '') return;
            saveMemo(memoContent.value);
            memoContent.value = '';
        });
    }

    if (projectForm) {
        loadProjects();
        projectForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const projectName = document.getElementById('project-name');
            if (projectName.value.trim() === '') return;
            saveProject(projectName.value);
            projectName.value = '';
        });
    }
});

// --- API FUNCTIONS ---
async function apiRequest(url, options = {}) {
    try {
        const response = await fetch(url, options);
        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
        }
        return response.json();
    } catch (error) {
        console.error('API Request Failed:', error);
        alert('An error occurred: ' + error.message);
        return null;
    }
}

// --- MEMOS ---
async function loadMemos() {
    const memos = await apiRequest('api/memos_api.php?action=get');
    if (!memos) return;

    const container = document.getElementById('memos-container');
    container.innerHTML = '';
    if (memos.length === 0) {
        container.innerHTML = '<p class="text-slate-400 md:col-span-3 text-center">No memos yet. Add one above to get started!</p>';
    } else {
        memos.forEach(memo => {
            // Make date string universally compatible and more detailed
            let compatibleDate = 'Invalid date';
            if (memo.created_at) {
                compatibleDate = new Date(memo.created_at.replace(' ', 'T')).toLocaleString([], {
                    year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit'
                });
            }

            const memoCard = document.createElement('div');
            // Gradient border on hover for a vibrant look
            memoCard.className = "p-0.5 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-700 hover:from-sky-500 hover:to-cyan-500 rounded-xl transition-all duration-300 transform hover:-translate-y-1";

            memoCard.innerHTML = `
                <div class="bg-slate-800 rounded-lg p-6 h-full flex flex-col justify-between">
                    <p class="text-slate-200 leading-relaxed flex-grow">${memo.content}</p>
                    <div class="mt-4 pt-4 border-t border-slate-700 text-right">
                        <p class="text-xs text-slate-500">${compatibleDate}</p>
                    </div>
                </div>
            `;
            container.appendChild(memoCard);
        });
    }
}

async function saveMemo(content) {
    const result = await apiRequest('api/memos_api.php?action=add', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ content })
    });
    if (result && result.success) loadMemos();
}

// --- PROJECTS ---
async function loadProjects() {
    const projects = await apiRequest('api/projects_api.php?action=get');
    if (!projects) return;

    const container = document.getElementById('projects-container');
    container.innerHTML = '';
    if (projects.length === 0) {
        container.innerHTML = '<p class="text-slate-400 md:col-span-3 text-center">No projects yet. Add one above to get started!</p>';
    } else {
        projects.forEach(project => {
            const isCompleted = project.status === 'completed';
            const statusClass = isCompleted ? 'bg-gradient-to-r from-emerald-500 to-green-500 text-white' : 'bg-gradient-to-r from-amber-500 to-orange-500 text-white';
            const cardWrapperClass = isCompleted ? 'p-0.5 bg-gradient-to-br from-emerald-500 to-green-500 rounded-xl' : 'p-0.5 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-700 hover:from-purple-600 hover:to-indigo-600 rounded-xl';

            let compatibleDate = 'Invalid date';
            if (project.created_at) {
                compatibleDate = new Date(project.created_at.replace(' ', 'T')).toLocaleDateString();
            }

            const projectCardWrapper = document.createElement('div');
            projectCardWrapper.className = `${cardWrapperClass} transition-all duration-300 transform hover:-translate-y-1`;
            
            projectCardWrapper.innerHTML = `
                <div class="bg-slate-800 rounded-lg p-6 h-full flex flex-col justify-between">
                    <div class="flex-grow">
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-semibold px-3 py-1 rounded-full shadow-lg ${statusClass}">${project.status.charAt(0).toUpperCase() + project.status.slice(1)}</span>
                            <p class="text-xs text-slate-500">${compatibleDate}</p>
                        </div>
                        <h3 class="text-lg font-bold text-white mt-4 ${isCompleted ? 'line-through text-slate-500' : ''}">${project.name}</h3>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-700 flex gap-2">
                        <button onclick="updateProjectStatus(${project.id}, 'completed')" class="w-full text-center rounded-lg px-3 py-2 text-sm font-semibold transition-colors ${isCompleted ? 'bg-slate-700 text-slate-500 cursor-not-allowed' : 'bg-emerald-600 hover:bg-emerald-500 text-white'}" ${isCompleted ? 'disabled' : ''}>Mark as Complete</button>
                        <button onclick="deleteProject(${project.id})" class="flex-shrink-0 rounded-lg p-2 bg-red-600/50 hover:bg-red-600/80 text-white transition-colors" title="Delete Project"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg></button>
                    </div>
                </div>
            `;
            container.appendChild(projectCardWrapper);
        });
    }
}

async function saveProject(name) {
    const result = await apiRequest('api/projects_api.php?action=add', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name })
    });
    if (result && result.success) loadProjects();
}

async function updateProjectStatus(id, status) {
    const result = await apiRequest('api/projects_api.php?action=update', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id, status })
    });
    if (result && result.success) loadProjects();
}

async function deleteProject(id) {
    if (!confirm('Are you sure you want to delete this project?')) return;
    const result = await apiRequest('api/projects_api.php?action=delete', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id })
    });
    if (result && result.success) loadProjects();
}
