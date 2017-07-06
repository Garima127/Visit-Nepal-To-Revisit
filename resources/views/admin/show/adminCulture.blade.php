
  @extends('layouts.adminbase')

@section('file')
        <div id="page-wrapper">

           <div class="container-fluid">

                           <!-- Page Heading -->
                           <div class="row">
                               <div class="col-lg-12">
                                   <h1 class="page-header">
                                       Cultures
                                   </h1>
                                </div>
                           </div>
                           <!-- /.row -->

                           <!-- Main jumbotron for a primary marketing message or call to action -->
                           <div class="jumbotron">
                               
                               <ul>
                               @foreach($tasks as $task)
                                    <li>
                                       <h3>{{$task->name}}</h3>
                                       
                                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('culture.edit',$task->id)}}">
                                            Edit
                                        </a>
                                        <a>View</a>
                                        <form action="/admin/culture/{{$task->id}}" method="POST" style="display:inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                            </input>
                                         </form>
                                    </li>
                                @endforeach
                                </ul>
                            
                           </div>

                           <div class="page-hseader">
                               <h1> Add more</h1>
                                <a href="#">
                               <button type="button" class="btn btn-lg btn-danger">NEW CULTURE +</button></a>
                           </div>
                         
                    </div>
                       <!-- /.container-fluid -->

                   </div>

@endsection