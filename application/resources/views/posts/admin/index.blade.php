@extends('layouts.post-admin')


@section('content')

<h1>Posts</h1>

    <table class="table table-bordered table-responsive">
        <thead>
          <tr>

            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
              <tr>
                {{--<td>{{ $post->id }}</td>--}}
                <td>{{ $post->title }}</td>
                <td>{{ str_limit($post->content, 30) }}</td>
                <td>{{ $post->created_at->diffForHumans() }}</td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
                  <td colspan="3">
                      <a href="{{ route('admin-posts.edit', $post->id) }}" class="btn btn-info">Edit</a>



                  </td>

              </tr>
            @endforeach
        @endif

       </tbody>
     </table>

@stop