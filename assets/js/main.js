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

// Generic fetch handler for cleaner code
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
        alert('An error occurred: ' + error.message); // Simple error feedback
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
        container.innerHTML = '<p class="text-gray-500 dark:text-gray-400">No memos yet.</p>';
    } else {
        memos.forEach(memo => {
            const el = document.createElement('div');
            el.className = 'bg-white dark:bg-gray-800 p-4 rounded-lg shadow transition transform hover:-translate-y-1';
            el.innerHTML = `<p class="text-gray-800 dark:text-gray-200">${memo.content}</p><small class="text-gray-400 dark:text-gray-500">${new Date(memo.created_at).toLocaleString()}</small>`;
            container.appendChild(el);
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
        container.innerHTML = '<p class="text-gray-500 dark:text-gray-400">No projects yet.</p>';
    } else {
        projects.forEach(project => {
            const el = document.createElement('div');
            el.className = 'bg-white dark:bg-gray-800 p-4 rounded-lg shadow flex justify-between items-center';
            el.innerHTML = `
                <span class="${project.status === 'completed' ? 'line-through text-gray-500' : ''}">${project.name}</span>
                <div>
                    <button onclick="updateProjectStatus(${project.id}, 'completed')" class="text-green-500 hover:text-green-700 p-1" title="Complete">✓</button>
                    <button onclick="deleteProject(${project.id})" class="text-red-500 hover:text-red-700 p-1" title="Delete">✗</button>
                </div>`;
            container.appendChild(el);
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
