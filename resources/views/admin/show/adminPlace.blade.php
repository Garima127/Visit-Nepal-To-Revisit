
  @extends('layouts.adminbase')

@section('file')

        <div id="page-wrapper">

           <div class="container-fluid">

                           <!-- Page Heading -->
                           <div class="row">
                               <div class="col-lg-12">
                                   <h1 class="page-header">
                                       Places to visit
                                   </h1>
                                </div>
                           </div>
                           <!-- /.row -->

                           <!-- Main jumbotron for a primary marketing message or call to action -->
                           <div class="jumbotron">
                               <h3>
                               <ul>
                                  @foreach($tasks as $task)
                                    <li>
                                        <h3>{{$task->name}}</h3>
                                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('place.edit',$task->id)}}">
                                            Edit
                                        </a>
                                        <a>View</a>
                                        <form action="/admin/place/{{$task->id}}" method="POST" style="display:inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                        </input>
                                         </form>
                                    </li>
                                    @endforeach
                                </ul>
                            </h3>
                           </div>

                           <div class="page-header">
                               <h1> Add more
                                <a href="newplace.html">
                               <button type="button" class="btn btn-lg btn-danger">NEW PLACE +</button></a></h1>
                           </div>
                         
                    </div>
                       <!-- /.container-fluid -->

                   </div>
                   <!-- /#page-wrapper -->     
       

    </div>
    @endsection
    <!-- /#wrapper -->

    <!-- jQuery -->
 