<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('jacklaravel/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ asset('jacklaravel/assets/css/AdminLTE.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Color Picker -->
    <link rel="stylesheet" href="{{asset('jacklaravel/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
    <!-- mystyle -->
    <link href="{{ asset('jacklaravel/assets/css/mycss.css') }}" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="{{asset('jacklaravel/plugins/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('jacklaravel/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">

    <link href="{{ asset('jacklaravel/assets/css/skins/_all-skins.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="container spark-screen">
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h4 class="box-title">Draggable Events</h4>
                        </div>
                        <div class="box-body">
                            <!-- the events -->
                            <div id="external-events">
                                <div class="checkbox">
                                    <label for="drop-remove">
                                        <input type="checkbox" id="drop-remove">
                                        remove after drop
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Event</h3>
                        </div>
                        <div class="box-body">
                            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                <ul class="fc-color-picker" id="color-chooser">
                                    <li><a class="my-colorpicker1 colorpicker-element text-black" href="#"><i
                                                    class="fa fa-paint-brush"></i></a></li>
                                    <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                                    <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="input-group" style="margin-bottom: 6px">
                                <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                                <input type="hidden" id="color-deposit">
                                <div class="input-group-btn">
                                    <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add
                                    </button>
                                </div>

                                <!-- /btn-group -->
                            </div>
                            <!-- /input-group -->
                            <textarea id="new-description" class="form-control"
                                      placeholder="Event Description"></textarea>
                        </div>
                    </div>

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Remove Event</h3>
                        </div>
                        <div class="box-body">
                            <div class="btn-trash" id="trash-box">
                                <div class="trash"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-body no-padding">
                            <!-- THE CALENDAR -->
                            <div id="calendar" class="fc fc-ltr fc-unthemed">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</div>
<!-- jQuery 2.1.4 -->
<script src="{{ asset('jacklaravel/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('jacklaravel/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('jacklaravel/assets/js/app.min.js') }}" type="text/javascript"></script>

<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('jacklaravel/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- color picker -->
<script src="{{asset('jacklaravel/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script>
    $(function () {



        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {
//                console.log($(this).children().eq(1).html());
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $(this).children().eq(0).html(), // use the element's text as the event title
                    description: $(this).children().eq(1).html()
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0,  //  original position after the drag
                    start: function () {
                        $('#trash-box').addClass("btn-drag");
                    },
                    stop: function (event) {
                        $('#trash-box').removeClass("btn-drag");
                        var trashEl = jQuery('#trash-box');
                        var ofs = trashEl.offset();

                        var x1 = ofs.left;
                        var x2 = ofs.left + trashEl.outerWidth(true);
                        var y1 = ofs.top;
                        var y2 = ofs.top + trashEl.outerHeight(true);

                        if (event.pageX >= x1 && event.pageX <= x2 &&
                                event.pageY >= y1 && event.pageY <= y2) {
//                        alert('hello');
                            $(this).remove();
                        }
                    }
                });

            });
        }

        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                today: 'today',
                month: 'month',
                week: 'week',
                day: 'day'
            },
            //Random default events
            dragRevertDuration: 0,
            events: [
                    @if(isset($calendar))
                    @foreach($calendar as $cal)
                {
                    id: '{{$cal->id}}',
                    title: '{{$cal->title}}',
                    descritpion: '{{$cal->description}}',
                    start: '{{$cal->start_date}}',
                    end: '{{$cal->end_date}}',
                    backgroundColor: "{{$cal->bgcolor}}",
                    borderColor: "{{$cal->bdcolor}}"
                },
                @endforeach
                @endif
            ],
            eventDragStart: function (event, jsEvent, ui, view) {
                $('#trash-box').addClass('btn-drag');
            },
            eventDragStop: function (event, jsEvent) {
                $('#trash-box').removeClass('btn-drag');
                var trashEl = jQuery('#trash-box');
                var ofs = trashEl.offset();

                var x1 = ofs.left;
                var x2 = ofs.left + trashEl.outerWidth(true);
                var y1 = ofs.top;
                var y2 = ofs.top + trashEl.outerHeight(true);

                if (jsEvent.pageX >= x1 && jsEvent.pageX <= x2 &&
                        jsEvent.pageY >= y1 && jsEvent.pageY <= y2) {
                    $('#calendar').fullCalendar('removeEvents', event.id);
                    $.ajax({
                        url: 'calendar/remove',
                        method: 'post',
                        datatype: 'json',
                        data: {
                            id: event.id
                        },
                        success: function (data) {
                            if (data != 'success') {
                                alert("error can't change date!!");
                            }
                        },
                        error: function () {
                            alert("error can't change date!!");
                        }
                    });
                }
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            eventDrop: function (event, delta, revertFunc) {
//                alert(event.title + " was dropped on " + event.start.format());
                var end_date = '';
                var start_date = convertDate(event.start._d.toLocaleString());
                if (event.end != null) {
                    end_date = convertDate(event.end._d.toLocaleString());
                }

                $.ajax({
                    url: 'calendar/change',
                    method: 'post',
                    datatype: 'json',
                    data: {
                        id: event.id,
                        start_date: start_date,
                        end_date: end_date
                    },
                    success: function (data) {
                        if (data != 'success') {
                            alert("error can't change date!!");
                            revertFunc();
                        }
                    },
                    error: function () {
                        alert("error can't change date!!");
                        revertFunc();
                    }
                });


            },
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var self = $(this);
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                var local = $.fullCalendar.moment(date._d);
                console.log(local.format());
                var start_date = convertDate(local.format());
                var text = $(this).data('eventObject').description;
                var descript = text.replace(/\r?\n/g, '<br />');
                $.ajax({
                    url: 'calendar/add',
                    method: 'post',
                    datatype: 'json',
                    data: {
                        title: $(this).data('eventObject').title,
                        description: descript,
                        start_date: start_date,
                        end_date: '',
                        bgcolor: $(this).css("background-color"),
                        bdcolor: $(this).css("border-color")
                    },
                    success: function (data) {
//                            data = JSON.parse(data);
                        console.log(data);
                        copiedEventObject.id = data;
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = self.css("background-color");
                        copiedEventObject.borderColor = self.css("border-color");
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    },
                    error: function () {
                        alert("error can't add event!!");
                    }
                });

                // assign it the date that was reported
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)


                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
        });


        $("#trash-box").droppable({
            drop: function (event, ui) {
                $(this).removeClass("btn-drag");
            }
        });


        /* ADDING EVENTS */
        var currColor = "#3c8dbc"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
            e.preventDefault();
            //Save color
            currColor = $(this).css("color");
            //Add color effect to button
            $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
        $("#add-new-event").click(function (e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = $("#new-event").val();
            var descript = $("#new-description").val();
            if (descript.trim() == '') {
                return;
            }
            if (val.length == 0) {
                return;
            }

            //Create events
            var event = $("<div />");
            var span = $("<p />");
            event.css({
                "background-color": currColor,
                "border-color": currColor,
                "color": "#fff"
            }).addClass("external-event");
            event.html('<h4>' + val + '</h4>');
            span.html(descript);
            event.append(span);
            $('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            $("#new-event").val("");
            $("#new-description").val("");
        });

        $(".my-colorpicker1").colorpicker({}).on('changeColor', function (e) {
            currColor = e.color.toHex();
            $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
    });


    function convertDate(date) {
        var dy, day;
        dy = date.split('T');
        return dy[0]
    }
</script>
</body>
</html>
