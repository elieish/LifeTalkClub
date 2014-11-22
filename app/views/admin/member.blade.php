 @extends('layouts.admin')
 @section('content')

            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Members</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Life Talk Club Active Members
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Membership No</th>
                                            <th>Creation Date</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>ID Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($members as $member)
                                        <tr>
                                            <td> {{ $member->membershipno }} </td>
                                            <td> {{ $member->created_at }} </td>
                                            <td> {{ $member->firstname }} </td>
                                            <td> {{ $member->surname }} </td>
                                            <td> {{ $member->idnumber }} </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

@stop
