<input type="number"
       class="form-control"
       name="@if(isset($row->name)){{ old($row->field, $row->name) }}@else{{$row->field}}@endif"
       type="number"
       @if($row->required == 1) required @endif
       @if(isset($options->disabled)) disabled @endif
       step="any"
       placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
       value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{old($row->field)}}@endif">
