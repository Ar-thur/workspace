<fieldset>
    <div class="form-group">
        <label for="model">Gadget Model</label>
          <input type="text" name="model" value="<?php echo htmlspecialchars($edit ? $gadgets['model'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Gadget Model" class="form-control" required="required" id = "model" >
    </div> 

    <div class="form-group">
        <label for="make">Gadget Make</label>
        <input type="text" name="make" value="<?php echo htmlspecialchars($edit ? $gadgets['make'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Gadget Make" class="form-control" required="required" id="make">
    </div> 

    <div class="form-group">
        <label>Charger</label>
        <label class="radio-inline">
            <input type="radio" name="charger" value="full" <?php echo ($edit &&$gadgets['charger'] =='full') ? "checked": "" ; ?> required="required"/> Full
        </label>
        <label class="radio-inline">
            <input type="radio" name="charger" value="half" <?php echo ($edit && $gadgets['charger'] =='half')? "checked": "" ; ?> required="required" id="half"/> Half
        </label>
    </div>

    <div class="form-group">
        <label for="comments">Comments</label>
          <textarea name="comments" placeholder="Comments" class="form-control" id="comments"><?php echo htmlspecialchars(($edit) ? $gadgets['comments'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div> 

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="color">Color</label>
                <input name="color" value="<?php echo htmlspecialchars($edit ? $gadgets['color'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Color" class="form-control"  type="text" id="color" required>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input name="serial_number" value="<?php echo htmlspecialchars($edit ? $gadgets['serial_number'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Serial Number" class="form-control"  type="text" id="serial_number">
            </div> 
        </div>
    </div>
    
    <div class="form-group">
        <label>Task Status</label>
        <label class="radio-inline">
            <input type="radio" name="status" value="complete" <?php echo ($edit &&$gadgets['status'] =='complete') ? "checked": "" ; ?> required="required"/> Complete
        </label>
        <label class="radio-inline">
            <input type="radio" name="status" value="incomplete" <?php echo ($edit && $gadgets['status'] =='incomplete')? "checked": "" ; ?> required="required" id="incomplete"/> Incomplete
        </label>
    </div>

    <div class="form-group">
        <label>Company Name</label>
        <input name="company" value="<?php echo htmlspecialchars($edit ? $gadgets['company'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Company Name" class="form-control"  type="text">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
