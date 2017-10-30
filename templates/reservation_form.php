<body onload="mo()">
<form action="reservation.php" method="post">
<fieldset>
<div class="form-group">
            <input autofocus class="form-control" name="name" placeholder="your name" type="text"  id="f6" required/>
      </div>
        <div class="form-group" id="f1" >
           Persons: <input  class="form-control" name="persons" type="number" min="1" max="10" required/>
      </div>
        <div class="form-group" id="f2">
            Date: <input  class="form-control" name="date" type="date"  required/>
        </div>
        <div class="form-group"  id="f3">
            Start time:<input  class="form-control" name="s_time" type="time" min="1"  required/>
        </div>
        <div class="form-group" id="f4">
           End time: <input  class="form-control" name="e_time" type="time"  required/>
         </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" id="f5">search table</button>
 </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/reserve.js"></script>
