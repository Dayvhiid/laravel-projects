<div>
    {{-- The whole world belongs to you. --}}
    <style>
        .list{
            border: 1px solid black;
            height: 5%;
            width: 60%;
        }
    </style>
    @foreach( $todo as $item)
        @yield('content')
       <div class="list">
          {{ $item->activity  }}
          <button wire:click="remove">Delete</button>
       <div>
    @endforeach    
</div>
