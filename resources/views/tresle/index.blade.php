@extends('tresle.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Businesses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tresle.create') }}"> Create new business</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Business Name</th>
            <th>Business Price</th>
            <th>Business City</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($tresle as $tresleBusiness)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tresleBusiness->businessName }}</td>
            <td>{{ $tresleBusiness->businessPrice }}</td>
            <td>{{ $tresleBusiness->businessCity }}</td>
            <td>
                <form action="{{ route('tresle.destroy',$tresleBusiness->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tresle.show',$tresleBusiness->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('tresle.edit',$tresleBusiness->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $tresle->links() !!}
      
@endsection