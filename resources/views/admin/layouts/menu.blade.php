<li {!! (Request::is('admin/department/departments') || Request::is('admin/position/positions') || Request::is('admin/employee/employees') ? 'class="active"' : '' ) !!}>
    <a href="#">
    <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="users" data-size="18" data-loop="true"></i>
    <span class="title">Master Data</span>
            <span class="fa arrow"></span>
    </a>

    <ul class="sub-menu">
            <li {!! (Request::is('admin/employee/employees*') ? 'class="active"' : '' ) !!}>
                <a href="{!! route('admin.employee.employees.index') !!}">
                    <i class="fa fa-angle-double-right"></i>
                     Karyawan
                </a>
            </li>
            
        </ul>
        
    <ul class="sub-menu">
            <li {!! (Request::is('admin/department/departments*') ? 'class="active"' : '' ) !!}>
                <a href="{!! route('admin.department.departments.index') !!}">
                    <i class="fa fa-angle-double-right"></i>
                     Departemen
                </a>
            </li>
            
        </ul>
        
    <ul class="sub-menu">
            <li {!! (Request::is('admin/position/positions*') ? 'class="active"' : '' ) !!}>
                <a href="{!! route('admin.position.positions.index') !!}">
                    <i class="fa fa-angle-double-right"></i>
                    Jabatan
                </a>
            </li>
            
        </ul>

</li>



<li class="{{ Request::is('admin/suratcuti/suratcutis*') ? 'active' : '' }}">
    <a href="{!! route('admin.suratcuti.suratcutis.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="desktop" data-size="18"
               data-loop="true"></i>
               Master Cuti
    </a>
</li>

<li class="{{ Request::is('admin/absent/absents*') ? 'active' : '' }}">
    <a href="{!! route('admin.absent.absents.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="edit" data-size="18"
               data-loop="true"></i>
               Absents
    </a>
</li>

<li class="{{ Request::is('admin/absentdump/absentdumps*') ? 'active' : '' }}">
    <a href="{!! route('admin.absentdump.absentdumps.index') !!}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="servers" data-size="18"
               data-loop="true"></i>
               Absentdumps
    </a>
</li>

<li class="{{ Request::is('admin/period/periods*') ? 'active' : '' }}">
    <a href="{!! route('admin.period.periods.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="dashboard" data-size="18"
               data-loop="true"></i>
               Periods
    </a>
</li>
@if(Sentinel::getUser()->department === "Finance")
<li class="{{ Request::is('admin/aset/asets*') ? 'active' : '' }}">
    <a href="{!! route('admin.aset.asets.index') !!}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="desktop" data-size="18"
               data-loop="true"></i>
               Data Aset
          
    </a>
</li>

<li class="{{ Request::is('admin/asettaking/asettakings*') ? 'active' : '' }}">
    <a href="{!! route('admin.asettaking.asettakings.index') !!}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="desktop" data-size="18"
               data-loop="true"></i>
              Aset Taking
          
    </a>
</li>
@else
@endif



