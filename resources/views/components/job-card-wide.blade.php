@props(['job'])

<x-panel class="flex gap-x-6">

    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-2xl mt-2 group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>

        <p class="text-sm text-gray-500 mt-auto">Full-time: From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag size="small" />
        @endforeach
    </div>

</x-panel>
