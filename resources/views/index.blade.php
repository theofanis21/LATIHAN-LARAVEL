<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ToDo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5 md:p-10">

    <div class="max-w-2xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow-lg">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800">My ToDo's</h1>
                <p class="text-sm text-gray-500">Kelola tugas harian Anda dengan mudah.</p>
            </div>
            <a href="/create" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition-all shadow-md active:scale-95">
                + Baru
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-4">
            @forelse($todos as $t)
                <div class="group p-4 border rounded-xl transition-all duration-300 {{ $t->is_completed ? 'bg-green-50 border-green-200' : 'bg-white border-gray-200 hover:border-blue-300 hover:shadow-md' }}">
                    <div class="flex justify-between items-start">
                        <div class="flex items-start gap-4">
                            @if(!$t->is_completed)
                                <form action="/todos/{{ $t->id }}/complete" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="checkbox" onChange="this.form.submit()" 
                                        class="w-6 h-6 mt-1 cursor-pointer rounded border-gray-300 text-blue-600 focus:ring-blue-500 transition">
                                </form>
                            @else
                                <div class="w-6 h-6 mt-1 flex items-center justify-center bg-green-500 text-white rounded-full text-xs shadow-sm">
                                    ✓
                                </div>
                            @endif

                            <div>
                                <h3 class="text-lg font-bold {{ $t->is_completed ? 'line-through text-gray-400' : 'text-gray-800' }}">
                                    {{ $t->title }}
                                </h3>
                                <p class="text-sm {{ $t->is_completed ? 'text-gray-400' : 'text-gray-600' }} mt-1">
                                    {{ $t->description }}
                                </p>
                            </div>
                        </div>

                        @if($t->is_completed)
                            <div class="text-right flex flex-col items-end">
                                <span class="text-[10px] uppercase font-black tracking-widest text-green-600 bg-green-100 px-2 py-1 rounded">
                                    Selesai
                                </span>
                                <span class="text-[10px] text-gray-400 mt-2 italic">
                                    {{ date('d M Y, H:i', strtotime($t->completed_at)) }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center py-16 border-2 border-dashed border-gray-200 rounded-xl">
                    <p class="text-gray-400 text-lg">Tidak ada tugas yang perlu dikerjakan. 🎉</p>
                    <a href="/create" class="text-blue-500 hover:underline text-sm mt-2 inline-block">Mulai buat sekarang</a>
                </div>
            @endforelse
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 text-center text-[10px] text-gray-400 uppercase tracking-widest">
            Laravel ToDo App &bull; Task Management System
        </div>
    </div>

</body>
</html>