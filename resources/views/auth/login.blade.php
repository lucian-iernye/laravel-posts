@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded">
        @if (session('status'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            {{ session('status') }}
        </div>

        @endif
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                    value="{{old('email')}}">

                @error('email')
                <div class="text-red-500 text-xs italic">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="passoword" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                    value="">

                @error('password')
                <div class="text-red-500 text-xs italic">{{$message}}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection