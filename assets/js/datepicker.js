$(document).ready(function(e) {

        var nowTemp = new Date();
        var now = (nowTemp.getMonth()+1)+'-'+ nowTemp.getDate()+'-'+ nowTemp.getFullYear();
    var picker, picker1;

        picker = $('#sandbox-container .input-append.date').datepicker({
            orientation: "auto",
            autoclose: true,
            todayHighlight: true,
            startDate:now
            }).on('changeDate', function(ev) {
                        window.picker1 = picker1;

                $('#sandbox-container1 span').trigger('click');
                var pickedDate = ev.date;
                console.log(picker1.data('datepicker'));
                picker1.data('datepicker').setDate(pickedDate);
                $('.input-append.date.span12').css({display:'block'}).show();
            }); 

        var nowTemp1 = new Date();
        var now1 = (nowTemp1.getMonth()+1)+'-'+ (nowTemp1.getDate()+1)+'-'+ nowTemp1.getFullYear();

        picker1 = $('#sandbox-container1 .input-append.date').datepicker({
            orientation: "auto",
            autoclose: true,
            startDate:now
        });
    });