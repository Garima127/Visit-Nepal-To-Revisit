  @extends('layouts.base')

@section('content')

    <div class="container blog-content">

      <div class="row">

        <div class="col-sm-12 blog-main">

          <div class="row">
            
          @foreach($tasks as $task)
            <div class="col-sm-4">
              <div class="panel panel-default">
                  <img src="img/pashupati.jpeg" class="img-responsive" />
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light label-info">Myth</span>
                      
                    </div>
                    <div class="blog-post-content">
                      <a href="{{route("myth.show",$task->id)}}">
                        <h2 class="blog-post-title">{{$task->name}}</h2>
                      </a>
                      <p>{{$task->description}}</p>
                      <a class="btn btn-info" href="{{route("myth.show",$task->id)}}">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                        <i class="material-icons">&#xE80D;</i>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
          @endforeach
            
            
          </div>

          
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->

  @endsection


