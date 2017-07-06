
  @extends('layouts.base')

@section('content')


   <div class="container blog-content">

     <div class="row">

       <div class="col-sm-8 blog-main">

         <section class="blog-post">
           <div class="panel panel-default">
             <div class="panel-body">
               <div class="blog-post-content">
                 <h2 class="blog-post-title">{{$place->name}}</h2>
                 
                 {{$place->description}}

                 <div class="row">
                   <div class="col-md-4">
                     <ul>
                       <li><h3>Location:</h3><p>{{$place->location}}</p></li>
                       <li><h3>Open till:</h3><p>{{$place->open_hours}}</p></li>
                       <li><h3>Things to do:</h3><p>{{$place->things_to_do}}</p></li>
                       <li><h3>Climate:</h3><p>{{$place->climate}}</p></li>
                       <li><h3>Best Season:</h3><p>{{$place->best_season}}</p></li>
                     </ul>
                   </div>
                   

                 <img src="{{asset('img/kumari.jpg')}}" class="img-responsive" />
                 
                 {{$place->bio}}

               </div>
             </div>
           </div>
         </section><!-- /.blog-post -->

       </div><!-- /.blog-main -->

       <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

        <!-- <div class="sidebar-module">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Search">
           </div>
         </div>-->
         <!-- /.sidebar-module -->

         <div class="sidebar-module">
           <div class="panel panel-default">
             <div class="panel-body">
               <h4>Things to do</h4>
               <p>Donec ut libero sed arcu vehicula ultricies a non tortor. <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</em> Aenean ut gravida lorem.</p>
             </div>
           </div>
         </div><!-- /.sidebar-module -->

         <div class="sidebar-module">
           <div class="panel panel-default">
             <div class="panel-body">
               <h4>Hotels</h4>
               <ol class="categories list-unstyled">
                 <li>
                   <a class="label label-light label-primary" href="filter-category.html">News</a>
                   <span class="label label-light label-default pull-right">8</span>
                 </li>
                 <li>
                   <a class="label label-light label-warning" href="filter-category.html">Apps</a>
                   <span class="label label-light label-default pull-right">5</span>
                 </li>
                 <li>
                   <a class="label label-light label-info" href="filter-category.html">Branding</a>
                   <span class="label label-light label-default pull-right">9</span>
                 </li>
               </ol>
             </div>
           </div>
         </div><!-- /.sidebar-module -->

         <div class="sidebar-module">
           <div class="panel panel-default">
             <div class="panel-body">
               <h4>Transportation</h4>
               <ol class="list-unstyled">
                 <li><a href="filter-date.html">February 2016</a></li>
                 <li><a href="filter-date.html">January 2016</a></li>
                 <li><a href="filter-date.html">December 2015</a></li>
                 <li><a href="filter-date.html">November 2015</a></li>
                 <li><a href="filter-date.html">October 2015</a></li>
                 <li><a href="filter-date.html">September 2015</a></li>
                 <li><a href="filter-date.html">August 2015</a></li>
                 <li><a href="filter-date.html">July 2015</a></li>
                 <li><a href="filter-date.html">June 2015</a></li>
                 <li><a href="filter-date.html">May 2015</a></li>
                 <li><a href="filter-date.html">April 2015</a></li>
                 <li><a href="filter-date.html">March 2015</a></li>
               </ol>
             </div>
           </div>
         </div><!-- /.sidebar-module -->

        <!-- <div class="sidebar-module">
           <div class="panel panel-default">
             <div class="panel-body">
               <h4>Newsletter</h4>
               <div class="form-group label-floating">
                 <label class="control-label" for="name">Name</label>
                 <input type="text" id="name" class="form-control input-sm">
               </div>
               <div class="form-group label-floating">
                 <label class="control-label" for="email">E-mail</label>
                 <input type="text" id="email" class="form-control input-sm">
               </div>
               <a href="#" class="btn btn-default btn-raised btn-sm btn-block">Subscribe</a>
             </div>
           </div>
         </div>-->
         <!-- /.sidebar-module -->

         <div class="sidebar-module">
           <div class="panel panel-default">
             <div class="panel-body">
               <h4>Find a guide</h4>
               <ol class="list-unstyled">
                 <li><a href="#">Facebook</a></li>
                 <li><a href="#">Google+</a></li>
                 <li><a href="#">Twitter</a></li>
               </ol>
             </div>
           </div>
         </div><!-- /.sidebar-module -->

        <!-- <a class="btn btn-warning btn-raised btn-block btn-lg" href="https://wrapbootstrap.com/theme/material-blog-responsive-template-WB016FMP4" target="_blank">Purchase now <i class="fa fa-shopping-cart"></i></a>-->

       </div><!-- /.blog-sidebar -->

     </div><!-- /.row -->

   </div><!-- /.container -->
  

   @endsection 
    