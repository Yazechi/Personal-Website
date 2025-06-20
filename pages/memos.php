<?php
// pages/memos.php - Redesigned for a vibrant, professional look
?>
<div class="max-w-6xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-white">Memo Pad</h1>
        <p class="text-lg text-slate-400 mt-2">A place for your thoughts, ideas, and reminders.</p>
    </div>

    <!-- Redesigned Form to Add a New Memo -->
    <div class="max-w-2xl mx-auto bg-slate-800 p-6 rounded-xl shadow-lg mb-12">
        <form id="memo-form">
            <label for="memo-content" class="block text-lg font-medium text-white mb-2">New Memo</label>
            <textarea id="memo-content" rows="4" class="w-full p-3 border-2 border-slate-700 rounded-lg bg-slate-900 text-white focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors" placeholder="Jot down a quick thought..."></textarea>
            <button type="submit" class="w-full mt-4 bg-gradient-to-r from-sky-600 to-cyan-600 text-white font-bold py-3 px-6 rounded-lg hover:from-sky-700 hover:to-cyan-700 transition-all shadow-lg hover:shadow-cyan-500/30 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" /><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" /></svg>
                <span>Save Memo</span>
            </button>
        </form>
    </div>

    <!-- Container where memo cards will be displayed -->
    <h2 class="text-3xl font-bold mb-6 text-white">Saved Memos</h2>
    <div id="memos-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Memos will be loaded here by JavaScript -->
        <p class="text-slate-400 md:col-span-3">Loading memos...</p>
    </div>
</div>
