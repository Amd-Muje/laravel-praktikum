<x-default-layout title="Major" section_title="Add new major">
    <div class="grid grid-cols-3">
        <form action="{{ route('majors.store') }}" method="POST"
              class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
            @csrf

            {{-- Major Name --}}
            <div class="flex flex-col gap-2">
                <label for="name">Major Name</label>
                <input type="text" id="name" name="name"
                       class="px-3 py-2 border {{ $errors->has('name') ? 'border-red-500' : 'border-zinc-300' }} bg-slate-50"
                       placeholder="e.g., S1 Teknik Informatika"
                       value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Major Code --}}
            <div class="flex flex-col gap-2">
                <label for="code">Major Code</label>
                <input type="text" id="code" name="code"
                       class="px-3 py-2 border {{ $errors->has('code') ? 'border-red-500' : 'border-zinc-300' }} bg-slate-50"
                       placeholder="e.g., IF"
                       value="{{ old('code') }}">
                @error('code')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Description --}}
            <div class="flex flex-col gap-2">
                <label for="description">Description (Optional)</label>
                <textarea id="description" name="description"
                          class="px-3 py-2 border {{ $errors->has('description') ? 'border-red-500' : 'border-zinc-300' }} bg-slate-50"
                          placeholder="Brief description of the major...">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="self-end flex gap-2">
                <a href="{{ route('majors.index') }}"
                   class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Cancel</span>
                </a>
                <button type="submit"
                        class="bg-blue-500 border border-blue-500 text-white px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-white"></i>
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>
