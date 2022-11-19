<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($student->name) ? $student->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($student->address) ? $student->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
    <label for="telephone" class="control-label">{{ 'Telephone' }}</label>
    <input class="form-control" name="telephone" type="text" id="telephone" value="{{ isset($student->telephone) ? $student->telephone : ''}}" >
    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    <label for="mobile" class="control-label">{{ 'Mobile' }}</label>
    <input class="form-control" name="mobile" type="text" id="mobile" value="{{ isset($student->mobile) ? $student->mobile : ''}}" >
    {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nic') ? 'has-error' : ''}}">
    <label for="nic" class="control-label">{{ 'Nic' }}</label>
    <input class="form-control" name="nic" type="text" id="nic" value="{{ isset($student->nic) ? $student->nic : ''}}" >
    {!! $errors->first('nic', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
