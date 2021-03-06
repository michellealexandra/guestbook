@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            @auth
                <div class="col-md-2 offset-md-8">
                <a href="{{ route('admin.event.create') }}" class="btn btn-primary btn-block" role="button"
                    aria-pressed="true">Tambah</a>
            </div>
            @endauth

        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Owned By</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td><a href="@auth{{ route('admin.event.edit', $event) }}@endauth">{{ $event->title }} </a></td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->status }}</td>
                                {{-- name bisa diganti email --}}
                                <td>{{ $event->creator->name }}</td>
                                <td>{{ $event->updated_at }}</td>
                                <td>{{ $event->created_at }}</td>
                                @auth
                                    <td>
                                    <form action="{{ route('admin.event.destroy', $event) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                @endauth
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
