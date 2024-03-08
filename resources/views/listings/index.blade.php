<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        <!-- Unless Directive -->
        @unless (count($listings) === 0)

        <!-- For each Directive -->
        @foreach ($listings as $listing)

        <!-- Use the component -->
        <x-listing-card :listing="$listing" />

        <p>{{ $listing['description'] }}</p>
        @endforeach

        @else
        <p>No listings found!</p>
        @endunless
    </div>

    <!-- Pagination -->
    <div class="p-4 my-4">
        {{ $listings->links() }}
    </div>

    <!-- If Directive -->
    <!-- @if (count($listings) == 0)
<p>No listings found!</p>
@endif -->


</x-layout>