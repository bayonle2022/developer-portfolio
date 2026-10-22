
@props([
    'number',
    'title',
    'description',
    'technologies' => [],
    'github' => null,
    'demo' => null,
    'category' => 'Web Application',
])

<article class="group overflow-hidden rounded-2xl border border-white/10 bg-[#111111] transition duration-300 hover:-translate-y-1 hover:border-orange-500/50">

    <div class="flex aspect-[16/9] items-center justify-center bg-gradient-to-br from-orange-500/15 via-[#171717] to-[#0a0a0a]">
        <div class="text-center">
            <span class="text-sm font-medium tracking-[0.3em] text-orange-500">
                PROJECT {{ $number }}
            </span>
            <h3 class="mt-4 text-3xl font-bold text-white">
                {{ $title }}
            </h3>
            <p class="mt-2 text-sm text-gray-500">{{ $category }}</p>
        </div>
    </div>

    <div class="p-6">
        <h3 class="text-xl font-bold text-white">{{ $title }}</h3>

        <p class="mt-3 text-sm leading-7 text-gray-400">
            {{ $description }}
        </p>

        <div class="mt-5 flex flex-wrap gap-2">
            @foreach ($technologies as $technology)
                <span class="rounded-md border border-white/10 px-3 py-1.5 text-xs text-gray-300">
                    {{ $technology }}
                </span>
            @endforeach
        </div>

        <div class="mt-6 flex items-center gap-5 border-t border-white/10 pt-5 text-sm">
            @if ($github)
                <a href="{{ $github }}" target="_blank" rel="noopener noreferrer"
                   class="font-medium text-white transition hover:text-orange-400">
                    GitHub ↗
                </a>
            @endif

            @if ($demo)
                <a href="{{ $demo }}" target="_blank" rel="noopener noreferrer"
                   class="font-medium text-orange-400 transition hover:text-orange-300">
                    Live Demo ↗
                </a>
            @endif
        </div>
    </div>

</article>
