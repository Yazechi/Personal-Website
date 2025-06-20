<?php
?>
<style>
@keyframes text-pan {
  0% {
    background-position: 0% center;
  }
  100% {
    background-position: -200% center;
  }
}
.animated-text-gradient {
    background-image: linear-gradient(
        90deg,
        #a855f7, /* Purple */
        #3b82f6, /* Blue */
        #ef4444, /* Red */
        #a855f7  /* Purple */
    );
    background-size: 200%;
    animation: text-pan 5s linear infinite;
}
</style>

<div class="bg-slate-900/70 backdrop-blur-sm p-10 rounded-2xl shadow-2xl text-center border border-slate-700">
    <h1 class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text mb-6 animated-text-gradient">Welcome to Your Dashboard</h1>
    <p class="text-xl text-slate-400 mb-12 max-w-3xl mx-auto">This is your central hub to organize your professional life, jot down thoughts, and plan your next big thing.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Portfolio Card -->
        <a href="index.php?page=portfolio" class="group block p-8 bg-gradient-to-br from-purple-600/30 to-slate-900 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-purple-500/40 transition-all duration-300 transform hover:-translate-y-2 border-2 border-purple-500/30 hover:border-purple-500">
            <div class="flex justify-center mb-4">
                <svg class="w-12 h-12 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
            </div>
            <h2 class="text-3xl font-bold text-white mb-3">My Portfolio</h2>
            <p class="text-slate-400 group-hover:text-slate-300 transition-colors">Showcase your skills and experience.</p>
        </a>

        <!-- Memos Card -->
        <a href="index.php?page=memos" class="group block p-8 bg-gradient-to-br from-sky-600/30 to-slate-900 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-sky-500/40 transition-all duration-300 transform hover:-translate-y-2 border-2 border-sky-500/30 hover:border-sky-500">
            <div class="flex justify-center mb-4">
                 <svg class="w-12 h-12 text-sky-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg>
            </div>
            <h2 class="text-3xl font-bold text-white mb-3">Quick Memos</h2>
            <p class="text-slate-400 group-hover:text-slate-300 transition-colors">Save notes, ideas, and reminders.</p>
        </a>

        <!-- Projects Card -->
        <a href="index.php?page=projects" class="group block p-8 bg-gradient-to-br from-emerald-600/30 to-slate-900 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-emerald-500/40 transition-all duration-300 transform hover:-translate-y-2 border-2 border-emerald-500/30 hover:border-emerald-500">
            <div class="flex justify-center mb-4">
                <svg class="w-12 h-12 text-emerald-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" /></svg>
            </div>
            <h2 class="text-3xl font-bold text-white mb-3">Project Planner</h2>
            <p class="text-slate-400 group-hover:text-slate-300 transition-colors">Manage projects and track their status.</p>
        </a>
    </div>
</div>
