@extends('template')

@section('title')
Ram
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('ram/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Kapasitas</th>
                <th>Kecepatan</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ram as $rm)
            <tr>
                <td>{{ $rm['kd_ram_laptop'] }}</td>
                <td>{{ $rm['kapasitas'] }}</td>
                <td>{{ $rm['kecepatan'] }}</td>
                <td>{{ $rm['type'] }}</td>
                <td>
                <a href="{{ url('ram/edit',$rm['kd_ram_laptop']) }}" ><button class="btn btn-warning btn-flat"><i class="fa fa-pencil" ></i></button></a>
                <a href="{{ url('ram/delete'. $rm->kd_ram_laptop ) }}" ><button class="btn btn-danger btn-flat"><i class="fa fa-trash" ></i></button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- <script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
       fetchRecords();
       $('document').on("click",".delete",function(){
           var delete_id = $(this).data('id');
           var el = this;
           $.ajax({
               url:'ram/delete/'+delete_id,
               type: 'get',
               success :function(response){
                   $(el).closest("tr").remove();
                   alert(response);
               }
           });
       });

       function fetchRecords(){
           $.ajax({
               url:'getram',
               type: 'get',
               dataType:'json',
               success:function(response){
                   var len = 0;
                   $('#s tbody tr:not(:first)').empty();
                   if(response['data'] !=null){
                       len = response['data'].length;
                   }
                   if (len> 0){
                       for(var i=0;i<len; i++){
                           var id = response['data'] [i].kd_ram_laptop;
                           var kapasitas = response['data'][i].kapasitas;
                           var kecepatan = response['data'][i].kecepatan;
                           var type = response['data'] [i].type

                           var tr_str = "<tr>"+
                           "<td align='center'><input type='text' value='" + kapasitas + "' id='kapasitas_"+id+"' disabled></td>" +
                            "<td align='center'><input type='text' value='" + kecepatan + "' id='kecepatan_"+id+"'></td>" + 
                            "<td align='center'><input type='email' value='" + type + "' id='type_"+id+"'></td>" +
                            "<td align='center'><input type='button' value='Update' class='update' data-id='"+id+"' ><input type='button' value='Delete' class='delete' data-id='"+id+"' ></td>"+
                            "</tr>";

                            $("#s tbody").append(tr_str);
                       }
                   }else{
                       var tr_str = "<tr class='norecord'>"+"<td align='center' colspan='4'>No record found.</td>"+</td>;

                       $("s tbody").append(tr_str);
                   }
               }
           });
       }
    });
</script> -->
@stop