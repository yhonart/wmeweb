<div class="row">
    <div class="col-md-12">
        <div class="card">            
            <div class="card-body">
                @php
                    $servno = '1';
                @endphp
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>NO</th> 
                            <th>Title</th> 
                            <th class="text-right">Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tableproduk as $tbserv)
                            <tr>
                                <td>{{$servno++}}</td>
                                <td>{{$tbserv->product_title}}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('Admin_Page')}}/Services/Edit/{{$tbserv->product_id}}"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-warning btn-sm" href="#"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-danger btn-sm" href="{{route('Admin_Page')}}/Services/Delete/{{$tbserv->product_id}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>