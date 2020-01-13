<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/calendar.css">
    <title>Calendario</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" id="cua">
            <div class="col-10">
                <div class="p-5">
                    <h2 class="mb-4">Calendario de eventos</h2>
                    <div class="card">
                      <div class="card-body p-0">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>

                  <!-- calendar modal -->
                  <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body">
                                      <h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
                                      <div class="event-body"></div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                   </div>

                  <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <form id="add-event">
                          <div class="modal-body">
                          <h4>Add Event Detail</h4>
                            <div class="form-group">
                              <label>Event name</label>
                              <input type="text" class="form-control" name="ename">
                            </div>
                            <div class="form-group">
                              <label>Event Date</label>
                              <input type='text' class="datetimepicker form-control" name="edate">
                            </div>
                            <div class="form-group">
                              <label>Event Description</label>
                              <textarea class="form-control" name="edesc"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Event Color</label>
                              <select class="form-control" name="ecolor">
                                <option value="fc-bg-default">fc-bg-default</option>
                                <option value="fc-bg-blue">fc-bg-blue</option>
                                <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                                <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Event Icon</label>
                              <select class="form-control" name="eicon">
                                <option value="circle">circle</option>
                                <option value="cog">cog</option>
                                <option value="group">group</option>
                                <option value="suitcase">suitcase</option>
                                <option value="calendar">calendar</option>
                              </select>
                            </div>
                        </div>
                          <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" >Save</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>

    </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js"></script>
      <script src="js/calendar.js"></script>
</body>
</html>

