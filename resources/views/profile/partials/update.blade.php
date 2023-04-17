<section>
    <form method="post" action="{{ route('profile.update',$preschool->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('PUT')
        <input type="text" name="first_name" value="{{$preschool->first_name}}"><br><br>
        {{-- <input type="text" name="movie_description" value="{{$movie->movie_description}}"><br><br>
        <input type="number" name="movie_gener" value="{{$movie->movie_gener}}"><br><br> --}}
    
        <button type="submit">update</button>
    </form>