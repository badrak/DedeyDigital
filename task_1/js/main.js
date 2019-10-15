$('.number input').on('input change paste', function() {
  $(this).val(this.value.replace(/[^0-9\-]/, '')); 
});

$('.number .number_controls > div').on('click', function() {
  var input = $(this).closest('.number').find('input'); 
  var value = parseInt(input.val()) || 0; 
  if ($(this).hasClass('nc-minus')) {
    value = value - 1; 
  }
  if ($(this).hasClass('nc-plus')) {
    value = value + 1;
  }
  input.val(value).change();
});


var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

if (month == 1) month = "Января";
if (month == 2) month = "Февраля";
if (month == 3) month = "Марта";
if (month == 4) month = "Апреля";
if (month == 5) month = "Мая";
if (month == 6) month = "Июня";
if (month == 7) month = "Июля";
if (month == 8) month = "Августа";
if (month == 9) month = "Сентября";
if (month == 10) month = "Октября";
if (month == 11) month = "Ноября";
if (month == 12) month = "Декабря";


$( function() {
    $( ".datepicker" ).datepicker();
    var today = " " + day + " " + month + " " ;
    document.getElementById("date_1").value = today;
  } );