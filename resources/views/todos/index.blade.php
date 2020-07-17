@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="{{route('todo.create')}}" class="mx-5 py-2 text-blue-400 cursor-pointer text-white">
            <span class="fas fa-plus-circle" />
        </a>
    </div>
    <ul class="my-5">
        <x-alert />
        @forelse($todos as $todo)
            <li class="flex justify-between p-2">
                <div>
                    @include('todos.complete-button')
                </div>

                @if($todo->completed)
                    <p class="line-through">{{$todo->title}}</p>
                @else
                    <a class="cursor-pointer" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
                @endif

                <div>
                    <a href="{{route('todo.edit',$todo->id)}}" class="text-orange-400 cursor-pointer text-white">
                        <span class="fas fa-pen px-2" /></a>

                    <span class="fas fa-times text-red-500 px-2 cursor-pointer"
                          onclick="event.preventDefault();
                              if(confirm('Are you really want to delete?')){
                              document.getElementById('form-delete-{{$todo->id}}')
                              .submit()
                              }"/>
                    <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.destroy',$todo->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
        @empty
            <p>No task available, create one.</p>
        @endforelse
    </ul>
@endsection
