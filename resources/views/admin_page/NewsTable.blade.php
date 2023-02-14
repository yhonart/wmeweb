<div class="row">
    <div class="col-md-12">
        <div class="card">            
            <div class="card-body">
                @php
                    $newsno = '1';
                @endphp
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>NO</th> 
                            <th>Project Name</th> 
                            <th>Project Date</th> 
                            <th>Language</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tbwmeproject as $tbwp)
                            <tr>
                                <td>{{$newsno++}}</td>
                                <td>{{$tbwp->project_name}}</td>
                                <td>{{$tbwp->project_date}}</td>
                                <td>{{$tbwp->lang}}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('Admin_Page')}}/News/Edit/{{$tbwp->project_id}}"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-warning btn-sm" href=""><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-danger btn-sm" href="{{route('Admin_Page')}}/News/Edit/{{$tbwp->project_id}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>