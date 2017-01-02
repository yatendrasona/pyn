<!doctype html>
<html>
  <head>
    <title>Add Poke</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/jquery-ui.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src='/js/bootstrap.js'></script>
  </head>

  <body>
    <header>
      <h1>Add Poke</h1>
    </header>

    <div id="form" class="row">

      <div class="fish" id="fish"></div>
      <div class="fish" id="fish2"></div>

      <form id="waterform" method="post" class="input-append" action="/registration/">

        <div class="formgroup" id="name-form">
          <label for="question">Your Question*</label>
          <input type="text" id="question" name="question" placeholder="Ask your question" class="input" />
        </div>
        <div class="formgroup" id="upload-images">
          <label for="name">Upload Image</label>
          <input type="file" accept="image/*;capture=camera" value="Capture Image"  style="margin-left:0px;" class="input-2" /><!--<input type="button" value="Upload Image" class="input-2" style="margin-left:0px;" /><input type="button" value="Capture Image" class="input-2" data-toggle="modal" data-target="#capture-image" />--><input type="button" value="Submit Your Link" class="input-2" data-toggle="modal" data-target="#submit-link" />
          <!--Capture Image-->
          <div class="modal fade" id="capture-image" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="captureImage" style="color:#666;">Capture Image</h4>
                </div>
                <div class="modal-body">
                  <div class="formgroup">
                    <input type="file" accept="image/*;capture=camera">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>
          <!--Submit Link-->
          <div class="modal fade" id="submit-link" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="submitlink" style="color:#666;">Submit Your Link</h4>
                </div>
                <div class="modal-body">
                  <div class="formgroup">
                    <input type="text" id="link" name="link" placeholder="Submit Your Link" class="input" />
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="formgroup">
          <input type="hidden" name="count" value="1" />
          <div class="control-group " id="fields">
            <label class="control-label" for="field1">Input Options</label>
            <div class="controls" id="profs">
              <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><input id="b1" class="input-3 add-more" type="button" value="Add More"></div>
            </div>
          </div>
        </div>\

        <div class="formgroup-small">
          <label for="start-date">Start Date</label>
          <input type="text" id="start-date" name="start-date" class="input" />
        </div>
        <div class="formgroup-small">
          <label for="end-date">End Date</label>
          <input type="text" id="end-date" name="end-date" class="input" />
        </div>
        <div class="formgroup">
          <label for="theme">Select theme</label>

          <div class="funkyradio">

            <div class="funkyradio-primary">
              <input type="radio" name="radio" class="default" id="radio2" checked/>
              <label for="radio2">&nbsp;</label>
            </div>
            <div class="funkyradio-ocean-blue">
              <input type="radio" name="radio" class="ocean-blue" id="radio3" />
              <label for="radio3">&nbsp;</label>
            </div>
            <div class="funkyradio-light-pink">
              <input type="radio" name="radio" id="radio4" />
              <label for="radio4">&nbsp;</label>
            </div>
            <div class="funkyradio-light-green">
              <input type="radio" name="radio" id="radio5" />
              <label for="radio5">&nbsp;</label>
            </div>
            <div class="funkyradio-light-pink">
              <input type="radio" name="radio" id="radio6" />
              <label for="radio6">&nbsp;</label>
            </div>
          </div>

        </div>
        <div class="formgroup" id="message-form">
          <label for="message">Enter #Hashtag</label>
          <input type="text" id="hashtag" name="hashtag" class="input" placeholder="Enter #Hashtag">
        </div>
        <!--<div class="formgroup" id="email-form">
            <label for="email">Your e-mail*</label>
            <input type="email" id="email" name="email" class="input" />
        </div>-->
        <div class="formgroup" style="margin-top:20px;">
          <input type="button" class="btn btn-primary input-2" data-toggle="modal" data-target="#myModal" value="Preview Poke" style="color:#FFF !important" /> <input type="submit" value="Submit Poke" class="input-2" />
        </div>
      </form>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Poke Title</h4>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>$('document').ready(function () {
        $('input[type="text"], input[type="email"], textarea').focus(function () {
          var background = $(this).attr('id');
          $('#' + background + '-form').addClass('formgroup-active');
          $('#' + background + '-form').removeClass('formgroup-error');
        });
        $('input[type="text"], input[type="email"], textarea').blur(function () {
          var background = $(this).attr('id');
          $('#' + background + '-form').removeClass('formgroup-active');
        });
        function errorfield(field) {
          $(field).addClass('formgroup-error');
          console.log(field);
        }
        $('#waterform').submit(function () {
          var stopsubmit = false;
          if ($('#question').val() == '') {
            errorfield('#name-form');
            stopsubmit = true;
          }
          if ($('#email').val() == '') {
            errorfield('#email-form');
            stopsubmit = true;
          }
          if (stopsubmit)
            return false;
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        var next = 1;
        $(".add-more").click(function (e) {
          e.preventDefault();
          var addto = "#field" + next;
          var addRemove = "#field" + (next);
          next = next + 1;
          var newIn = '<input autocomplete="off" class="input form-control" id="option_' + next + '" name="field' + next + '" type="text">';
          var newInput = $(newIn);
          var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
          var removeButton = $(removeBtn);
          $(addto).after(newInput);
          $(addRemove).after(removeButton);
          $("#option_" + next).attr('data-source', $(addto).attr('data-source'));
          $("#count").val(next);

          $('.remove-me').click(function (e) {
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length - 1);
            var fieldID = "#option_" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
          });
        });



      });
    </script>
    <script>
      $(function () {
        $("#start-date").datepicker();
        $("#end-date").datepicker();
      });
    </script>

  </body>
</html>
