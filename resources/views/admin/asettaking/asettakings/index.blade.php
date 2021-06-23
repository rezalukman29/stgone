@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Asset Management

@stop

{{-- page level styles --}}
@section('header_styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/tables.css') }}"/>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Asset Management</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Laravel Examples</a>
            </li>
            <li class="active">Editable Datatables</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <!-- Second Data Table -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card table-edit">
                    <div class="card-header bg-danger text-white  ">
                                    <span>
                                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff"
                                       data-hc="white"></i>
                                    List Aset Taking</span>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div id="sample_editable_1_wrapper" class="">
                            <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer sample_editable"
                                   id="sample_editable_1" role="grid" width="100%">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1">ID
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1">Kode
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Last Name
                                            : activate to sort column ascending" style="width: 222px;">Remarks
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 tanggal
                                            : activate to sort column ascending" style="width: 124px;">Tanggal
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 nama
                                            : activate to sort column ascending" style="width: 152px;">Nama
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 nama
                                            : activate to sort column ascending" style="width: 152px;">Alias
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 nama
                                            : activate to sort column ascending" style="width: 152px;">Kategory
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 nama
                                            : activate to sort column ascending" style="width: 152px;">Dept
                                    </th>


                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 nama
                                            : activate to sort column ascending" style="width: 152px;">Tahun
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Delete
                                            : activate to sort column ascending" style="width: 125px;">Delete
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    <div class="modal fade delete_model" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data Aset Taking</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body">
                    <p>Are you sure to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id="delete_item" data-dismiss="modal">Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Confirm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.colReorder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.rowReorder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.colVis.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.scroller.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
    {{--<script type="text/javascript" src="{{ asset('js/pages/table-editable.js') }}" ></script>--}}
    <script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('js/pages/sweetalert.dev.js') }}" type="text/javascript"></script>--}}



    <script>
        $( document ).ready(function() {
            $(function () {
                var nEditing = null;
                var table = $('#sample_editable_1').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.asettaking.asettakings.data') !!}',
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'kode', name: 'kode'},
                        {data: 'remarks', name: 'remarks'},
                        {data: 'tanggal', name: 'tanggal'},
                        {data: 'nama', name: 'nama'},
                        {data: 'alias', name: 'alias'},
                        {data: 'kategory', name: 'kategory'},
                        {data: 'dept', name: 'dept'},
                        {data: 'tahun', name: 'tahun'},
                        // {data: 'edit', name: 'edit', orderable: false, searchable: false},
                        {data: 'delete', name: 'delete', orderable: false, searchable: false}
                    ],
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],

                    dom: 'Bfrtip',

                });
                table.on('draw', function () {
                    $('.livicon').each(function () {
                        $(this).updateLivicon();
                    });
                });

                function restoreRow(table, nRow) {
                    var aData = table.row(nRow).data();
                    var jqTds = $('>td', nRow);

                    for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                        table.cell().data(aData[i], nRow, i, false);
                    }
                    table.draw(false);
                }

                /*
                 Edit functionality
                 */

                // var row_id,kode, remarks, tanggal, nama;

                // function editRow(table, nRow) {
                //     var aData = table.row(nRow).data();
                //     var jqTds = $('>td', nRow);
                //     row_id = aData.id ? aData.id : '';
                //     kode = aData.kode ? aData.kode : '';
                //     remarks = aData.remarks ? aData.remarks : '';
                //     tanggal = aData.tanggal ? aData.tanggal : '';
                //     nama = aData.nama ? aData.nama : '';
                //     jqTds[0].innerHTML = row_id;
                //     jqTds[1].innerHTML = '<input type="text" name="kode" id="kode" class="form-control input-small" value="' + kode + '">';
                //     jqTds[2].innerHTML = '<input type="text" name="remarks" id="remarks" class="form-control input-small" value="' + remarks + '">';
                //     jqTds[3].innerHTML = '<input type="text" name="tanggal" id="tanggal" class="form-control input-small" value="' + tanggal + '">';
                //     jqTds[4].innerHTML = '<input type="text" name="nama" id="nama" class="form-control input-small" value="' + nama + '">';
                //     jqTds[5].innerHTML = '<a class="edit" href="">Save</a>';
                //     jqTds[6].innerHTML = '<a class="cancel" href="">Cancel</a>';
                // }

                // function saveRow(table, nRow) {
                //     var jqInputs = $('input', nRow);
                //     kode = jqInputs[0].value;
                //     remarks = jqInputs[1].value;
                //     tanggal = jqInputs[2].value;
                //     nama = jqInputs[3].value;

                //     var tableData = 'kode=' + encodeURIComponent(kode) + '&remarks=' + encodeURIComponent(remarks) +
                //         '&tanggal=' + encodeURIComponent(tanggal) + '&nama=' + encodeURIComponent(nama) + '&_token=' + $('meta[name=_token]').attr('content');
                //     const swalWithBootstrapButtons = Swal.mixin({
                //         confirmButtonClass: 'btn btn-success',
                //         cancelButtonClass: 'btn btn-danger',
                //         buttonsStyling: false,
                //     });
                //     $.ajax({
                //         type: "post",
                //         url: 'editable_datatables/' + row_id + '/update',
                //         data: tableData,
                //         success: function (result) {
                //             if(result!='success') {
                //                 console.log(result);

                //                 swalWithBootstrapButtons.fire({
                //                     type: 'error',
                //                     title: 'Oops...',
                //                     text: 'Something went wrong!'

                //                 })
                //                 editRow(table, nRow);
                //                 nEditing = nRow;
                //             }
                //             else {
                //                 table.draw(false);
                //             }
                //         },
                //         error: function (result) {
                //             if (result.status = 442)


                //             console.log( result.responseText.errors);

                //         }

                //     });

                // }

                /*
                 Cancel Edit functionality
                 */

                // function cancelEditRow(table, nRow) {
                //     var aData = table.row(nRow).data();
                //     var jqTds = $('>td', nRow);

                //     for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                //         table.cell().data(aData[i], nRow, i, false);
                //     }

                //     table.draw(false);
                // }

                /*
                 Delete Functionality
                 */
                var nRow, aData, id;
                table.on('click', '.delete', function (e) {
                    e.preventDefault();
                    nRow = $(this).parents('tr')[0];
                    aData = table.row(nRow).data();
                    if (nEditing !== null && nEditing != nRow) {
                        $(".delete_model").prop('id','');
                        /* Currently editing - but not this row - restore the old before continuing to edit mode */
                        $('#editConfirmModal').modal();
                        $('#deleteConfirmModal').modal().hide();
                    }
                    else {
                        id = aData.id;
                        $(".delete_model").prop('id','deleteConfirmModal');
                        $('#deleteConfirmModal').on('click', '#delete_item', function (e) {
                            $.ajax({
                                type: "get",
                                url: 'admin/asettaking/asettakings/' + id + '/delete',
                                success: function (result) {
                                    console.log('row ' + result + ' deleted');
                                    table.draw(false);
                                },
                                error: function (result) {
                                    console.log(result)
                                }
                            });
                        });
                    }
                });

                /*
                 When clicked on cancel button
                 */
                table.on('click', '.cancel', function (e) {
                    e.preventDefault();

                    restoreRow(table, nEditing);
                    nEditing = null;

                });

                /*
                 When clicked on edit button
                 */

                table.on('click', '.edit', function (e) {
                    e.preventDefault();

                    /* Get the row as a parent of the link that was clicked on */
                    var nRow = $(this).parents('tr')[0];
                    if (nEditing !== null && nEditing != nRow) {
                        /* Currently editing - but not this row - restore the old before continuing to edit mode */
                        $('#editConfirmModal').modal();

                    } else if (nEditing == nRow && this.innerHTML == "Save") {
                        /* Editing this row and want to save it */
                        saveRow(table, nEditing);
                        nEditing = null;

                    } else {
                        /* No edit in progress - let's start one */
                        editRow(table, nRow);
                        nEditing = nRow;
                    }
                });
            });
            setTimeout(function(){
                $('input[type=search], th, #sample_editable_1_length select').on('mousedown',function(){
                    $('.cancel').click();
                });
                $('#sample_editable_1').on( 'page.dt', function () {
                    $('.cancel').click();
                } );
                },10);
        });


    </script>


@stop
