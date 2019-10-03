@if(isset($student))
    {!! Form::model($student,['method'=>'put','id'=>'frm']) !!}
@else
    {!! Form::open(['id'=>'frm']) !!}
@endif
<div class="modal-header">

    <h5 class="modal-title">{{isset($student)?'Edit':'New'}} Student</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

</div>
<div class="modal-body">

    <div class="form-group row required">
        {!! Form::label("name","Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')?" is-invalid":""),'placeholder'=>'Name','id'=>'focus']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>

    <div class="form-group row required">
        {!! Form::label("surname","Surname",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("surname",null,["class"=>"form-control".($errors->has('surname')?" is-invalid":""),'placeholder'=>'Surname','id'=>'focus']) !!}
            <span id="error-surname" class="invalid-feedback"></span>
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label("sex","Sex",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-4">
            {!! Form::select("sex",['Male'=>'Male','Female'=>'Female'],null,["class"=>"form-control"]) !!}
            <span id="error-sex" class="invalid-feedback"></span>
        </div>
    </div>

    <div class="form-group row required">
        {!! Form::label("age","Age",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-4">
            {!! Form::number("age",null,["class"=>"form-control".($errors->has('age')?" is-invalid":""),'placeholder'=>'Age','id'=>'focus']) !!}
            <span id="error-age" class="invalid-feedback"></span>
        </div>
    </div>

    <div class="form-group row required">
        {!! Form::label("group","Group",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("group",null,["class"=>"form-control".($errors->has('group')?" is-invalid":""),'placeholder'=>'Group','id'=>'focus']) !!}
            <span id="error-group" class="invalid-feedback"></span>
        </div>
    </div>

    <div class="form-group row required">
        {!! Form::label("faculty","Faculty",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("faculty",null,["class"=>"form-control".($errors->has('faculty')?" is-invalid":""),'placeholder'=>'Faculty','id'=>'focus']) !!}
            <span id="error-faculty" class="invalid-feedback"></span>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
    {!! Form::submit("Save",["class"=>"btn btn-primary"])!!}
</div>
{!! Form::close() !!}
