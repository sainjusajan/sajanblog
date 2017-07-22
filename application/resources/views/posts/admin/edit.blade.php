@extends('layouts.post-admin')


@section('content')

    <h1>Edit Posts</h1>

    <div class="row">
        <div class="col-md-12">



            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=> true]) !!}

            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

            </div>


            <div class="form-group">
                {!! Form::label('content', 'Content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::submit('Update post', ['class'=>'btn btn-info']) !!}
            </div>



            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id], 'files'=> true]) !!}


                <div class="form-group">
                    {!! Form::submit('Delete post', ['class'=>'btn btn-danger ']) !!}
                </div>

            {!! Form::close() !!}



        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            @include('includes.form_error')

        </div>
    </div>




@stop

@section('scripts')
    <script>
        CKEDITOR.replace('content')
    </script>
    @endsection