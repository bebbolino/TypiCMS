<div class="checkbox">
    <input type="hidden" value="0" name="permissions[dashboard]">
    <label>
        <input type="checkbox" value="1" @if(isset($permissions['dashboard']) and $permissions['dashboard'])checked="checked"@endif name="permissions[dashboard]"> Dashboard
    </label>
</div>
<div class="checkbox">
    <input type="hidden" value="0" name="permissions[admin.settings.index]">
    <label>
        <input type="checkbox" value="1" @if(isset($permissions['admin.settings.index']) and $permissions['admin.settings.index'])checked="checked"@endif name="permissions[admin.settings.index]"> Settings
    </label>
</div>
<div class="table-responsive">
    <table class="table table-condensed table-permissions table-checkboxes">
        <thead>
            <tr>
                <th></th>
                <th>@lang('global.Index')</th>
                <th>@lang('global.View')</th>
                <th>@lang('global.Create')</th>
                <th>@lang('global.Store')</th>
                <th>@lang('global.Update')</th>
                <th>@lang('global.Sort')</th>
                <th>@lang('global.Delete')</th>
            </tr>
        </thead>
        <tbody>
        @foreach (Config::get('app.modules') as $module => $infos)
            <tr>
                <td>{{ $module }}
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.index]">
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.view]">
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.create]">
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.store]">
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.edit]">
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.sort]">
                    <input type="hidden" value="0" name="permissions[admin.{{ strtolower($module) }}.destroy]">
                </td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.index']) and $permissions['admin.'.strtolower($module).'.index'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.index]"></td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.view']) and $permissions['admin.'.strtolower($module).'.view'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.view]"></td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.create']) and $permissions['admin.'.strtolower($module).'.create'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.create]"></td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.store']) and $permissions['admin.'.strtolower($module).'.store'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.store]"></td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.edit']) and $permissions['admin.'.strtolower($module).'.edit'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.edit]"></td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.sort']) and $permissions['admin.'.strtolower($module).'.sort'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.sort]"></td>
                <td><input type="checkbox" value="1" @if(isset($permissions['admin.'.strtolower($module).'.destroy']) and $permissions['admin.'.strtolower($module).'.destroy'])checked="checked"@endif name="permissions[admin.{{ strtolower($module) }}.destroy]"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
