@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Total Admission Candidate List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Village</th>
                            <th>Payment Mobile</th>
                            <th>TranxId</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div class="table-responsive">
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Triden sdfat</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Triden asft</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.5
                                </td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Tridasd aent</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Triden ast</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td> 
                                <td>
                                    <a href="#" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </div>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
