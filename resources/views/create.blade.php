<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat ToDo Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Tambah Tugas</h2>
            <p class="text-sm text-gray-500">Silakan isi detail tugas baru Anda di bawah ini.</p>
        </div>

        <form action="/store" method="POST" class="space-y-5">
            @csrf <div>
                <label for="title" class="block text-sm font-semibold text-gray-700 mb-1">Judul ToDo</label>
                <input type="text" name="title" id="title" 
                    class="w-full border border-gray-300 p-2.5 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm" 
                    placeholder="Contoh: Belajar Laravel" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-1">Keterangan</label>
                <textarea name="description" id="description" rows="3" 
                    class="w-full border border-gray-300 p-2.5 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm" 
                    placeholder="Detail tugas..."></textarea>
            </div>

            <div class="flex items-center p-3 bg-gray-50 rounded-md border border-gray-200">
                <input type="checkbox" name="is_completed" id="is_completed" value="1" 
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="is_completed" class="ml-3 text-sm font-medium text-gray-700 cursor-pointer">
                    Tandai Langsung Selesai
                </label>
            </div>

            <div class="flex items-center justify-end gap-3 pt-4">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-gray-800 transition">Batal</a>
                <button type="submit" 
                    class="bg-blue-600 text-white px-6 py-2.5 rounded-md font-semibold hover:bg-blue-700 shadow-md transition-all active:scale-95">
                    Simpan Tugas
                </button>
            </div>
        </form>
    </div>
</body>
</html>