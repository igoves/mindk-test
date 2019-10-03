<div class="container">

    <div class="float-right">
        <a href="#modalForm" data-toggle="modal" data-href="{{url('students-ajax/create')}}"
           class="btn btn-primary"><i class=" fa fa-plus" aria-hidden="true"></i></a>
    </div>

    <h3>Students List</h3>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>№</th>
                <th>Name </th>
                <th>Surname</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Group</th>
                <th>Faculty</th>
                <th width="110px" class="align-middle"></th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach($students as $student)
                <tr>
                    <th class="align-middle">{{$i++}}</th>
                    <td class="align-middle">{{ $student->name }}</td>
                    <td class="align-middle">{{ $student->surname }}</td>
                    <td class="align-middle">{{ $student->sex }}</td>
                    <td class="align-middle">{{$student->age}}</td>
                    <td class="align-middle">{{$student->group}}</td>
                    <td class="align-middle">{{$student->faculty}}</td>
                    <td class="align-middle">
                        <a
                            class="btn btn-outline-primary btn-sm"
                            title="Edit" href="#modalForm"
                            data-toggle="modal"
                            data-href="{{url('students-ajax/update/'.$student->id)}}"
                        ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <input type="hidden" name="_method" value="delete"/>
                        <a
                            class="btn btn-outline-danger btn-sm float-right"
                            title="Delete"
                            data-toggle="modal"
                            href="#modalDelete"
                            data-id="{{$student->id}}"
                            data-token="{{csrf_token()}}"
                        ><i class=" fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <ul class="mt-3 pagination justify-content-center">
        {{$students->links('vendor.pagination.bootstrap-4')}}
    </ul>

</div>
