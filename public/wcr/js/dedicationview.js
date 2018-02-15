$(document).ready(function(){
// DATA IN THE DATA TABLES
tableview =  $("#dataTable").DataTable( {
  dom: '<"toolbar">frtip',
  ajax: {
    url: '/chat',
    dataSrc: "",
    "dataType": "json"
      //"contentType": 'application/json; charset=utf-8',
      //'data': function (data) { return data = JSON.stringify(data); }
    },
    ordering: true,
    "aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
    "iDisplayLength" : 5,
    columns: [
    {
      "className":      'details-control',
      "orderable":      false,
      "data":           null,
      "defaultContent": '',
      "render": function () {
       return '<i class="fa fa-eye" aria-hidden="true"></i>';
     },
     width:"15px"
   },
   { data: "chat_id"},
   { data: "user_id", "orderable": false},
   { data: "name", "orderable": false},
   { data: "message", "orderable": false},
   { data: "college_name", "orderable": false},
   { data: "created_at",
   render: function(data, type, row){
            //You need to have moment.js to parse the date into a local date
            return moment(data).format('MMMM Do YYYY, h:mm A');
          },
          "type": "moment-js-date"
        },
        { data: "updated_at",
        render: function(data, type, row){
            //You need to have moment.js to parse the date into a local date
            return moment(data).format('MMMM Do YYYY, h:mm A');
          },
          "type": "moment-js-date"
        },
   {data: "song_name", "orderable":false},
        ],
        "columnDefs": [ {
          className: "hide_column",
          width: "10%",
          targets: [1,2,4]
        } ],
        select: 'single',
      });
$('#refreshtab').on( 'click', function () {
  tableview.ajax.reload();
});


    // View dedication click function
    $('#dataTable tbody').on('click', 'td.details-control', function () {
     var MES = $(this).closest('tr').find('td:eq(4)').text();
     $('#ddcatview').val(MES);
     $('#viewdecModal').modal('toggle');  
   });
  });
