$(function () {
    // $('#example1').DataTable()
    // $('#example2').DataTable({
    //     'paging'      : true,
    //     'lengthChange': false,
    //     'searching'   : false,
    //     'ordering'    : true,
    //     'info'        : true,
    //     'autoWidth'   : false
    // })

      //foto click
      $("#avatar").click(function(){
        $("#file").click();
      })
  
       // Ketika file input change
      $("#file").change(function(){
        setImage(this,"#avatar");
      })
    
      $('#s').DataTable( {
        initComplete: function () {
           

            this.api().columns([1,3,4,5,6,7,8]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true,
        'responsive'  : true,
        "order": [[ 2, "desc" ]],
    } );
    
    $(document).ready(function () {
        
        var table = $('#s').DataTable( );
     
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel',
                    exportOptions:{
                        columns: [1,3,4,9,5,6,8,7,10,11,12,13,14,15]
                    }
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                pageSize: 'LEGAL',
                    text: 'PDF',
                    titleAttr: 'PDF',
                    exportOptions:{
                        columns: [1,3,4,9,5,6,7,8,10,11,12,13]
                    }
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print',
                    exportOptions:{
                        columns: [1,3,4,9,5,6,7,8,10,11,12,13,14,15]
                    }
                }
     
            ]
        });
     
        table.buttons( 0, null ).container().prependTo(
            table.table().container()
        );
     
    });

    //table proyektor
    $('#p').DataTable( {
        initComplete: function () {
           
            this.api().columns([1,3,4,5,6,7]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true,
        'responsive'  : true,
        "order": [[ 2, "desc" ]],
    } );
    
    $(document).ready(function () {
        
        var table = $('#p').DataTable( );
     
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel',
                    exportOptions:{
                        columns: [1,3,4,9,5,6,8,7,10,11]
                    }
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'PDF',
                    exportOptions:{
                        columns: [1,3,4,9,5,6,7,8,10,11,12]
                    }
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print',
                    exportOptions:{
                        columns: [1,3,4,9,5,6,7,8,10,11,12]
                    }
                }
     
            ]
        });
     
        table.buttons( 0, null ).container().prependTo(
            table.table().container()
        );
     
    });

   
   
})
 function Confirm_Delete(target) {
    const swalWithBootstrapButtons = Swal.mixin({
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
    })
    
    swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
    }).then((result) => {
    if (result.value) {
        swalWithBootstrapButtons.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
        window.location = $(target).attr("link");
        
    } else if (
        // Read more about handling dismissals
        result.dismiss === Swal.DismissReason.cancel
    ) {
        swalWithBootstrapButtons.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
        )
    }
    })
 }

 function Confirm_Save(target){
    Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
    })
    window.location = $(target).attr("link");
  }

  // Read Image
  function setImage(input,target) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      // Mengganti src dari object img#avatar
      reader.onload = function(e) {
        $(target).attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  