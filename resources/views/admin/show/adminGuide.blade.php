

  @extends('layouts.adminbase')

@section('file')
        <div id="page-wrapper">

           <div class="container-fluid">

                           <!-- Page Heading -->
                           <div class="row">
                               <div class="col-lg-12">
                                   <h1 class="page-header">
                                       Guides
                                   </h1>
                                </div>
                           </div>
                           <!-- /.row -->

                           <!-- Main jumbotron for a primary marketing message or call to action -->
                           <div class="jumbotron">
                               <h3>
                               <ul>
                                    <li>
                                        <h3>Guide 1</h3>
                                        <a href="newguides.html">
                                        <button type="button">Edit</button></a>
                                        <button type="button">Delete</button>
                                    </li>
                                </ul>
                            </h3>
                           </div>

                           <div class="page-header">
                                <h1> Add more
                                <a href="newguides.html">
                               <button type="button" class="btn btn-lg btn-danger">NEW GUIDE +</button></a></h1>
                           </div>
                         
                    </div>
                       <!-- /.container-fluid -->

                   </div>
                   <!-- /#page-wrapper -->     
       

    </div>
 @endsection   <!-- /#wrapper -->

 