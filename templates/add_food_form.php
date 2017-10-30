<form action="add_food.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="name" placeholder="food name" type="text" />
        </div>
        <div class="form-group">
        <textarea class="form-control" name="disc">
        write discription here
        </textarea>
        </div>
         <div class="form-group">
            <input  class="form-control" name="price" type="number" step=.01 min="1"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">ADD</button>
        </div>
    </fieldset>
</form>
