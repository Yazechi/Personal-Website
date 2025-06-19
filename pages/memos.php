<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-center">My Memos</h1>
    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm p-6 rounded-lg shadow-md mb-8">
        <form id="memo-form">
            <label for="memo-content" class="block text-lg font-medium mb-2">New Memo:</label>
            <textarea id="memo-content" rows="4" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 focus:ring-2 focus:ring-purple-500" placeholder="Jot down a quick thought..."></textarea>
            <button type="submit" class="mt-4 w-full bg-purple-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">Save Memo</button>
        </form>
    </div>
    <h2 class="text-2xl font-bold mb-4">Saved Memos</h2>
    <div id="memos-container" class="space-y-4">
        <!-- Memos loaded by JavaScript -->
    </div>
</div>
